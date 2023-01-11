
@extends('layouts.app')

@section('content')
    @include('includes.bread_crumb_with_header',[
        'header'=>'Onboardings',
        'bread_crumbs'=>['Dashboard'=>route('dashboard')],
    ])
    <div id="kt_app_content" class="app-content flex-column-fluid">
        {{-- LIST VIEW --}}
        @include('pages.admin.onboardings.includes.list_view')
        {{-- LIST VIEW --}}
    </div>
@endsection
@push('script')
    <script>
        $(document).on('click', '#add-onboarding',  async function () {
            const btn = $(this);
            const btnTitle = btn.html();
            try {
                loadButton(btn, 'Loading ...');
                let loadURL = `${baseUrl}/admin/onboardings/create`;
                await loadModal(modalId, loadURL);
            } catch (err) {
                toast.error("Could not load add event popup. (error_ref: add_onboarding_event)");
                console.log("add_onboarding_event", err);
            } finally {
                resetButton(btn, btnTitle);
            }
        });


        $(document).on('click', '.add-event', async function (e) {
            e.preventDefault();
            let form = $(this).closest('form');
            const btn = $(this);
            const btnTitle = btn.html();
            try {
                loadButton(btn);
                const url = "{{ route('admin.onboardings.store') }}";
                let ajaxRequest = new HttpRequest(url, 'POST');
                ajaxRequest.set_data_by_form_object(form);
                let response = await ajaxRequest.call();
                $("#"+ modalId).modal("hide");
                const storedEvent = response['event'];
                const activeDateOnNav = $('.btn-active-danger.active').attr('data-date');
                const requestedDate = storedEvent.date;
                if(activeDateOnNav === requestedDate){
                    const eventHtmlContent = getOnboardingContentHtml(storedEvent);
                    $('#onboarding-content').prepend(eventHtmlContent);
                }
                toast.success(response.message);
            } catch (err) {
                toast.error(err);
            }finally {
                resetButton(btn, btnTitle);
            }
        });

        $(document).on('click', '.edit_event', async function () {
            try {
                let onboardingId = $(this).attr('data-id');
                let loadUrl = baseUrl + '/admin/onboardings/' + onboardingId + '/edit';
                await loadModal(modalId, loadUrl);
            }catch(err){
                console.log(err);
            }
        });

        $(document).on("click", "#edit-onboarding-event", async function (e) {
            e.preventDefault();
            const btn = $(this);
            const btnTitle = btn.html();
            let form = btn.closest('form');
            const eventId = form.attr('data-id');
            const eventHtmlContentWrapperSelector = `.content-wrapper[data-content-id='${eventId}']`
            const eventHtmlContentWrapper = $(eventHtmlContentWrapperSelector);
            try {
                loadButton(btn);
                const url = `${baseUrl}/admin/onboardings/${eventId}`;
                let ajaxRequest = new HttpRequest(url, 'PUT');
                ajaxRequest.set_data_by_form_object(form);
                let response = await ajaxRequest.call();
                const storedEvent = response['event'];
                eventHtmlContentWrapper.remove();

                const eventHtmlContent = getOnboardingContentHtml(storedEvent);
                $('#onboarding-content').prepend(eventHtmlContent);

                toast.success(response.message);
                $("#" + modalId).modal("hide");
            } catch (err) {
                toast.error(err);
            }finally {
                resetButton(btn, btnTitle);
            }

        })

        $(document).on("click", ".delete-onboarding", async function() {
            if (await isConfirmToProcess("Warning", "",  'Are you sure! You want to delete',
                    'warning')) {
                try {
                    let eventId = $(this).data('id');
                    const eventHtmlContentWrapperSelector = `.content-wrapper[data-content-id='${eventId}']`
                    const eventHtmlContentWrapper = $(eventHtmlContentWrapperSelector);
                    let url = `${baseUrl}/admin/onboardings/${eventId}`;
                    let ajaxRequest = new HttpRequest(url, 'DELETE');
                    ajaxRequest.set_data_as_object({'_token':csrfToken});
                    let response = await ajaxRequest.call();
                    eventHtmlContentWrapper.remove();
                    toast.success(response.message);
                } catch (err) {
                    toast.error(err);
                }
            }
        });


        $(document).on('click', '.date-changer-btn', async function() {
            let date = $(this).data('date');
            try {
                const url = `${baseUrl}/admin/onboarding/${date}`;
                const ajaxRequest = new HttpRequest(url, 'POST');
                ajaxRequest.set_data_as_object({'_token': csrfToken});
                let response = await ajaxRequest.call();
                $('#onboarding-content').html("");
                for (let i = 0; i < response.length; i++) {
                    let onboardingHtmlContent = getOnboardingContentHtml(response[i]);
                    $('#onboarding-content').append(onboardingHtmlContent);
                }
            } catch (err) {
                toast.error("Could not load existing events of the date. (error_ref: load_onboarding_events)");
                console.log("load_onboarding_events", err);
            }
        });

        function getOnboardingContentHtml(event)
        { return `
              <div class="tab-pane fade show active content-wrapper" role="tabpanel" data-content-id="${event['id']}">
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                                <!--begin::Bullet-->
                                <span data-kt-element="bullet"
                                      class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                <!--end::Bullet-->
                                <!--begin::Info-->
                                <div class="flex-grow-1 me-5">
                                    <!--begin::Time-->
                                    <div class="text-gray-800 fw-semibold fs-2">
                                        

                                        <span class="text-gray-400 fw-semibold fs-7">${event['start_time']}-${event['end_time']}</span>
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Description-->
                                    <div class="text-gray-700 fw-semibold fs-6 onboarding-title">

                                        Booking Pending...
                                     </div>
                                    <!--end::Description-->
                                    <!--begin::Link-->

                                    <div class="text-gray-400 fw-semibold fs-7 seller-id">
                                    </div>

                                    <!--end::Link-->
                                </div>
                                <!--end::Info-->
                               <div class="dropdown">
                                      <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Actions
                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item edit_event" href="#" data-id="${event['id']}">Edit</a>
                                        <a class="dropdown-item delete-onboarding" href="#" data-id="${event['id']}">Delete</a>
                                      </div>
                                </div>
                            </div>
                            <!--end::Wrapper-->

                        </div>


            `;
        }

    </script>
@endpush
