@extends('layouts.app')

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        {{-- LIST VIEW --}}
        @include('pages.admin.onboardings.includes.list_view')
        {{-- LIST VIEW --}}
    </div>
@endsection
@push('script')
    <script>
        loadBreadCrumbWithHeader("Onboarding", "", "", "");
    </script>

    <script>
        $(document).on('click', '.add-onboarding', function() {
            loadFormModal("", "", "Add On-boarding", "", "Add", "add-event", `
    @include('pages.admin.onboardings.includes.add-modal')
            `);
        });
        $(document).on('click', '.add-event', async function(e) {
            e.preventDefault();
            let form = $(this).closest('form');;
            try {
                const url = "{{ route('admin.on-boarding.store') }}";
                let ajaxRequest = new HttpRequest(url, 'POST');
                ajaxRequest.set_data_by_form_object(form);
                let response = await ajaxRequest.call();
                console.log(response.message);
                $("#kt_modal_new_target").modal("hide");
                location.reload();
            } catch (err) {
                console.log(err);
                console.log("error");
            }
        });
    </script>
    <script>
        $(document).on("click", ".edit_event", async function() {
            // $('.custom-modal-size').addClass('mw-1000px').removeClass('mw-650px');
            // let onboarding_id = $(this).data('id');
            let onboarding_id = $(this).data('id');
            let url = "{{ url('/admin/on-boardings/') }}" + "/" + onboarding_id;
            await loadEditFormModal(
                "",
                "post",
                "Edit onboarding",
                "",
                "Update",
                "edit_onboarding_submit",
                url
            );
            $('.edit_onboarding_submit').attr('data-id', onboarding_id);
            let now = new Date();
            let day = ("0" + now.getDate()).slice(-2);
            let month = ("0" + (now.getMonth() + 1)).slice(-2);
            let today = now.getFullYear() + "-" + (month) + "-" + (day);
            console.log(today);
            console.log($('#editDatePicker'));
            $('#editDatePicker').attr("min", today);
        });

        $(document).on("click", ".edit_onboarding_submit", function(e) {
            e.preventDefault();
            // console.log( $(this).closest('form'))
            // $(this).closest('form');
            let id = $(this).data('id');
            console.log(id);
            let form = $(this).closest('form');
            try {
                const url = "{{ url('/admin/on-boardings/update') }}" + "/" + id;
                let ajaxRequest = new HttpRequest(url, 'POST');
                ajaxRequest.set_data_by_form_object(form);
                let response = ajaxRequest.call();
                console.log(response.message);
                $("#kt_modal_new_target").modal("hide");
                location.reload();

            } catch (err) {
                console.log(err);
                console.log("error");
            }

        })

        $(document).on("click", ".delete-onboarding", async function() {
            let id = $(this).data('id');
            let url = baseUrl + `/admin/on-boardings/delete/${id}`;
            if (await isConfirmToProcess("Warning", "", title = 'Are you sure! You want to delete',
                    'warning')) {
                try {
                    let ajaxRequest = new HttpRequest(url, 'get');
                    let response = await ajaxRequest.call();
                    console.log(response.message);

                } catch (err) {
                    console.log(err);
                    console.log("error");
                }
                location.reload();
            }
        });


        $(document).on('click', '.date-changer-btn', async function() {
            let date = $(this).data('date');
            try {
                const url = "{{ url('/admin/on-boardings/singleDate/') }}" + "/" + date;
                let ajaxRequest = new HttpRequest(url, 'get');
                let response = await ajaxRequest.call();
                console.log(response['onboarding']);
                $('#remove-content').html("");
                for (let i = 0; i < response['onboarding'].length; i++) {
                    $('#remove-content').append(`
                    <div class="tab-pane fade show active" id="kt_timeline_widget_3_tab_content_4" role="tabpanel">
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
                
                <span class="text-gray-400 fw-semibold fs-7">${response['onboarding'][0]['start_time']}-${response['onboarding'][0]['end_time']}</span>
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
        <!--begin::Action-->
        <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
           data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
            <span class="svg-icon svg-icon-5 m-0">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                            fill="currentColor"></path>
                    </svg>
                </span>
            <!--end::Svg Icon-->
        </a>
        <!--begin::Menu-->
        <div
            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4"
            data-kt-menu="true">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a class="menu-link px-3 product-edit d-flex gap-5 edit_event"
                   data-id="${response['onboarding'][0]['id']}"><i
                        class="bi bi-pencil"></i> Edit</a>

                {{-- <td><button class="btn btn-sm btn-success edit_plan"
                    data-id="${response['onboarding'][0]['id']}">Edit</button></td> --}}
                </tr>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-3">

                <a class="menu-link px-3 delete-onboarding d-flex gap-5"
                data-id="${response['onboarding'][0]['id']}"><i class="bi bi-trash"></i>
                    Delete</a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Action-->
    </div>
    <!--end::Wrapper-->

</div>
                    `);



                }

            } catch (err) {
                console.log(err);
                console.log("error");
            }
        });
    </script>
    <script>
        $(document).on('click', '.add-onboarding', function() {
            var now = new Date();
            var day = ("0" + now.getDate()).slice(-2);
            var month = ("0" + (now.getMonth() + 1)).slice(-2);
            var today = now.getFullYear() + "-" + (month) + "-" + (day);
            $('.datePicker').attr("min", today);

        });
    </script>
    {{-- <script>
        $(document).on('click','.edit_event', function() {
          
            var now = new Date();
          var day = ("0" + now.getDate()).slice(-2);
          var month = ("0" + (now.getMonth() + 1)).slice(-2);
          var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
         $('.edit-datePicker').attr("min",today);
        
      });
          </script> --}}
@endpush
