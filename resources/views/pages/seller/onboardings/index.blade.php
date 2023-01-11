@extends('layouts.app')


@push('css')
@endpush

@section('content')
    @include('includes.bread_crumb_with_header', [
        'header' => 'Onboardings',
        'bread_crumbs' => ['Dashboard' => route('dashboard')],
    ])

    <div id="kt_app_content" class="app-content flex-column-fluid" style="max-width: 100vw;">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Card-->
            <div class="card">

                <!--begin::Card body-->
                <div class="card-body py-4">
                    <!--begin::Table-->
                    <div id="kt_table_users_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="table-responsive">


                            <table
                                class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer table-striped-columns"
                                id="kt_table_users">
                                {{-- data-content-id="{{ $onboarding_result['id'] }}"> --}}
                                <!--begin::Table head-->
                                <thead>
                                    <!--begin::Table row-->
                                    <tr class="text-start text-gray-800 fw-bold fs-7 text-uppercase gs-0">
                                        @foreach ($onboardings as $date => $onboarding)
                                            <th class=" min-w-100px" rowspan="1" colspan="1"
                                                style="width: 120px; padding-left:20px;">{{ $date }}
                                            </th>
                                        @endforeach
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="text-gray-600 fw-semibold">
                                    <!--begin::Table row-->
                                    <!--end::Table row-->
                                    <!--begin::User=-->
                                    @foreach ($rows as $row)
                                        <tr>
                                            @foreach ($row as $r)
                                                <td> <button type="button" class="btn btn-primary show-booking-btn"
                                                        data-id="{{ $r->id }}">{{ $r->start_time }}
                                                        {{ $r->end_time }}</button></td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                    <!--end::User=-->

                                    <!--end::Action=-->
                                </tbody>
                                <!--end::Table body-->
                            </table>
                        </div>

                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content container-->
    </div>
@endsection
@push('script')
    {{-- <script>
    
    $(document).on('click', '.booked-btn', async function() {
            try {
                const id = $(this).attr('data-id');
                const loadUrl = `${baseUrl}seller/onboardings/store`;
                await loadModal(modalId, loadUrl);
            }catch(err){
                console.log(err);
            }
        });

           
         </script> --}}


    <script>
        $(document).on('click', '.show-booking-btn', async function() {
            try {
                const id = $(this).attr('data-id');
                const loadUrl = `${baseUrl}/seller/onboardings/${id}/edit`;
                await loadModal(modalId, loadUrl);
            } catch (err) {
                console.log(err);
            }
            // const ajaxRequest = new HttpRequest(url, 'POST');
            // ajaxRequest.set_data_as_object({'_token': csrfToken});
            // let response = await ajaxRequest.call();
            //     $('#onboarding-content').html("");
            //     for (let i = 0; i < response.length; i++) {
            //         let onboardingHtmlContent = getOnboardingShowHtml(response[i]);
            //         $('#onboarding-content').append(onboardingHtmlContent);
            //     }
            // } catch (err) {
            //     toast.error("Could not load existing events of the date. (error_ref: load_onboarding_events)");
            //     console.log("load_onboarding_events", err);
            // }
        });

        $(document).on("click", "#book-btn", async function(e) {
            e.preventDefault();
            const btn = $(this);
            const btnTitle = btn.html();
            let form = btn.closest('form');

            try {
                loadButton(btn);
                const url = form.attr('action');
                let ajaxRequest = new HttpRequest(url, 'PUT');
                ajaxRequest.set_data_by_form_object(form);
                let response = await ajaxRequest.call();
                toast.success(response.message);
                $("#" + modalId).modal("hide");
            } catch (err) {
                toast.error(err);
            } finally {
                resetButton(btn, btnTitle);
            }

        })

        function getOnboardingShowHtml(event) {
            return `
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
                                    <label for="fname">Title:</label>
                                     <input type="text" name="title"><br><br>

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
