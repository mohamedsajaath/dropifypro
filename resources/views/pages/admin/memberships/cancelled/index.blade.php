@extends('layouts.app')


@push('css')


@endpush
@section('content')

    <div class="d-flex flex-column flex-column-fluid" data-select2-id="select2-data-126-dzc7">
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid" data-select2-id="select2-data-kt_app_content">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container" data-select2-id="select2-data-kt_app_content_container">
                <!--begin::Products-->
                <div class="card card-flush" data-select2-id="select2-data-125-skqc">
                    <!--begin::Header-->
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                    <span class="svg-icon svg-icon-1 position-absolute ms-4"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                  width="16" height="16"
                                                                                  fill="currentColor"
                                                                                  class="bi bi-search"
                                                                                  viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg></span>
                                <input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14"
                                       placeholder="Search"/>
                            </div>
                            <div class="p-5" style="width: 600px">

                            </div>
                            <!--end::Search-->

                        </div>
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table id="kt_datatable_column_rendering" class="table table-striped table-row-bordered gy-5 gs-7">

                                <!--begin::Table head-->
                                <thead>
                                <tr class="text-start fw-semibold  text-gray-400 fs-7 text-uppercase gs-0 ">
                                    <th class="min-w-70px sorting text-start" tabindex="0" aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1" aria-label="Qty: activate to sort column ascending" style="width: 125.031px;">seller id
                                    </th>

                                    <th class="min-w-100px sorting text-start" tabindex="0" aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1" aria-label="Rating: activate to sort column ascending" style="width: 140.875px;">seller name
                                    </th>
                                    <th class="min-w-100px sorting text-center" tabindex="0" aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 140.875px;">Last Plan
                                    </th>
                                    <th class="min-w-100px sorting text-center" tabindex="0" aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 140.875px;">
                                        Membership Period
                                    </th>
                                    <th class="min-w-150px sorting_disabled text-center" rowspan="1" colspan="1" aria-label="Actions" style="width:200px;">Cancelled Date
                                    </th>


                                </tr>
                                </thead>
                                <!--end::Table head-->

                                <tbody>

                                <tr>
                                    <td class="seller-slider">SLR5465</td>
                                    <td>Andrew</td>
                                    <td class="text-center"><span class="badge badge-success fs-7">Business</span></td>
                                    <td class="text-center">3yrs</td>
                                    <td class="text-center">2022/5/3</td>
                                </tr>
                                </tbody>
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--begin::Body-->
                </div>
                <!--end::Products-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>

@endsection
@push('script')
    <script>
        loadBreadCrumbWithHeader("Memberships","Cacelled","Dashboard","#")
    </script>
@endpush
