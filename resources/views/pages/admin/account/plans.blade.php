@extends('layouts.app')

@push('css')
@endpush

@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!--begin::Navbar-->
                    <div class="card mb-5 mb-xl-10">
                        <div class="card-body pt-9 pb-0">
                            <!--begin::Details-->
                            @include('pages.admin.account.includes.index')
                            <!--end::Details-->
                        </div>
                    </div>
                    <!--end::Navbar-->
                    <!--begin::details View-->
                    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                        <!--begin::Card header-->
                        <div class="card-header cursor-pointer">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Subscription Plan Setting</h3>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Action-->
                            {{-- <a href="#" class="btn btn-primary er fs-6 px-8 py-4 my-5" id="plan_model">Add plan</a> --}}
                            <!--end::Action-->
                        </div>
                        <!--begin::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body p-9">
                            <div class="card mb-5 mb-xl-8 m-8">
                                <!--begin::Search-->
                                {{-- <div class="d-flex align-items-center position-relative my-1">
                                    <span class="svg-icon svg-icon-2"></span>
                                    <input type="text" data-kt-docs-table-filter="search"
                                        class="form-control form-control-solid w-250px ps-15" placeholder="Search Plans" />
                                </div> --}}
                                <!--end::Search-->

                                <!--begin::Filter-->
                                {{-- <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
                                    <!--begin::Filter-->
                                    <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click"
                                        data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->Filter
                                    </button>
                                    <!--begin::Menu 1-->
                                    <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true"
                                        id="kt-toolbar-filter">
                                        <!--begin::Header-->
                                        <div class="px-7 py-5">
                                            <div class="fs-4 text-dark fw-bold">Filter Options</div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Separator-->
                                        <div class="separator border-gray-200"></div>
                                        <!--end::Separator-->
                                        <!--begin::Content-->
                                        <div class="px-7 py-5">
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fs-5 fw-semibold mb-3">Plan Type:</label>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <div class="d-flex flex-column flex-wrap fw-semibold"
                                                    data-kt-docs-table-filter="plan_name">
                                                    <!--begin::Option-->
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                                        <input class="form-check-input" type="radio" name="plan_name"
                                                            value="all" checked="checked">
                                                        <span class="form-check-label text-gray-600">All</span>
                                                    </label>
                                                    <!--end::Option-->
                                                    <!--begin::Option-->
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                                        <input class="form-check-input" type="radio" name="plan_name"
                                                            value="starter">
                                                        <span class="form-check-label text-gray-600">Starter</span>
                                                    </label>
                                                    <!--end::Option-->
                                                    <!--begin::Option-->
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid mb-3">
                                                        <input class="form-check-input" type="radio" name="plan_name"
                                                            value="advanced">
                                                        <span class="form-check-label text-gray-600">Advanced</span>
                                                    </label>
                                                    <!--end::Option-->
                                                    <!--begin::Option-->
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" name="plan_name"
                                                            value="business">
                                                        <span class="form-check-label text-gray-600">Business</span>
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="d-flex justify-content-end">
                                                <button type="reset" class="btn btn-light btn-active-light-primary me-2"
                                                    data-kt-menu-dismiss="true"
                                                    data-kt-docs-table-filter="reset">Reset</button>
                                                <button type="submit" class="btn btn-primary" data-kt-menu-dismiss="true"
                                                    data-kt-docs-table-filter="filter">Apply</button>
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Menu 1-->
                                    <!--end::Filter-->
                                </div> --}}
                                <!--end::Filter-->


                                <!--begin::Body-->
                                <div class="card-body py-3">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table id="kt_datatable_column_rendering"
                                            data-url="{{ route('admin.plan.list') }}"
                                            class="table table-striped text-uppercase table-row-bordered gy-5 gs-7">
                                            <thead>
                                                <tr class="fw-semibold fs-6 text-gray-400">
                                                    <th>#</th>
                                                    <th>Plan Name</th>
                                                    <th>Price Month</th>
                                                    <th>Price Year</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--end::Table container-->
                                <!--begin::Body-->
                            </div>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::details View-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
    </div>
@endsection
@push('script')
    <script>
        loadBreadCrumbWithHeader("Account", "Plans", "Dashboard", "#")
    </script>
    <script>
        $(document).on("click", "#plan_model", async function() {
            // $('.custom-modal-size').addClass('mw-1000px').removeClass('mw-650px');
            await loadFormModal(
                "",
                "post",
                "Add Subcription plan",
                "",
                "submit",
                "add_plan_submit",
                ` @csrf
 <!--begin::Input group-->
 <div class="d-flex flex-column mb-8 fv-row">
    <!--begin::Label-->
    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
        <span class="required">Plan Name</span>
    </label>
    <!--end::Label-->
    <input type="text" class="form-control form-control-solid" placeholder="Plan Name" name="name" />
</div>
<!--end::Input group-->
<!--begin::Input group-->
<div class="d-flex flex-column mb-8 fv-row">
        <label class="required fs-6 fw-semibold mb-2">Monthly Price</label>
        <div class="input-group">
            <span class="input-group-text">GBP</span>
            <input type="number" step="0.01" class="form-control" name="price_month">
        </div>
    </div>
</div>
<div class="d-flex flex-column mb-8 fv-row">
    <label class="required fs-6 fw-semibold mb-2">Yearly Price</label>
    <!--begin::Input-->
    <div class="input-group">
        <span class="input-group-text">GBP</span>
        <input type="number" step="0.01" class="form-control" name="price_year">
    </div>
</div>
<!--end::Input group-->
       `
            );
        });
    </script>
    <script>
        $(document).on("click", ".add_plan_submit", async function(e) {
            e.preventDefault();
            let form = $(this).closest('form');
            try {
                const url = "{{ route('plan.store') }}";
                let ajaxRequest = new HttpRequest(url, 'POST');
                ajaxRequest.set_data_by_form_object(form);
                let response = await ajaxRequest.call();
                console.log(response.message);
                $("#kt_modal_new_target").modal("hide");
                window.location = "{{ route('admin.plan') }}";

            } catch (err) {
                console.log(err);
                console.log("error");
            }
        });
    </script>
    <script>
        $(document).on("click", ".edit_plan", async function() {
            // $('.custom-modal-size').addClass('mw-1000px').removeClass('mw-650px');
            let plan_id = $(this).data('id');
            let url = "{{ url('/plan/') }}" + "/" + plan_id;
            await loadEditFormModal(
                "",
                "post",
                "Edit Subcription plan",
                "",
                "Update",
                "edit_plan_submit",
                url
            );
            // $('.edit_plan_submit').attr('data-id',plan_id);
        });
    </script>
    <script>
        $(document).on("click", ".edit_plan_submit", async function(e) {
            e.preventDefault();
            let form = $(this).closest('form');
            try {
                const url = "{{ route('plan.update') }}";
                let ajaxRequest = new HttpRequest(url, 'POST');
                ajaxRequest.set_data_by_form_object(form);
                let response = await ajaxRequest.call();
                // console.log(response.message);
                $("#kt_modal_new_target").modal("hide");
                // if(response.message == "Successfully Updated"){
                //     $("#kt_datatable_column_rendering").load();
                // }

            } catch (err) {
                console.log(err);
                console.log("error");
            }
        });
    </script>
    <script>
        let columns = [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
                searchable: false,
                sortable: false
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'price_month',
                name: 'price_month',
            },
            {
                data: 'price_year',
                name: 'price_year'
            },
            {

                render: function(data, type, row) {
                    return `<button class="btn btn-sm btn-success edit_plan"
                 data-id="${row.id}">Edit</button>
                    `;
                },
                searchable: true,
                sortable: false
            },

        ];
        $(document).ready(async function(e) {
            await initDataTable($('table'), columns, 'filter');
            // dt = $("#kt_datatable_column_rendering").DataTable();

            // // Select filter options
            // filterName = document.querySelectorAll(
            //     '[data-kt-docs-table-filter="plan_name"] [name="plan_name"]');
            // const filterButton = document.querySelector('[data-kt-docs-table-filter="filter"]');

            // // Filter datatable on submit
            // filterButton.addEventListener('click', function() {
            //     // Get filter values
            //     let paymentValue = '';

            //     // Get payment value
            //     filterName.forEach(r => {
            //         if (r.checked) {
            //             paymentValue = r.value;
            //         }

            //         // Reset payment value if "All" is selected
            //         if (paymentValue === 'all') {
            //             paymentValue = '';
            //         }
            //     });

            //     // Filter datatable --- official docs reference: https://datatables.net/reference/api/search()
            //     dt.search(paymentValue).draw();
            // });

        });
    </script>
@endpush
