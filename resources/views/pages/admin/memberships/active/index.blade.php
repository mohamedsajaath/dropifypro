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
                    <!--begin::Card header-->
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5" data-select2-id="select2-data-124-27rj">
                        <!--begin::Card title-->
                        <div class="card-title">

                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5" data-select2-id="select2-data-123-nfuo">
                            <div class="w-100 mw-150px" data-select2-id="select2-data-122-yrzc">
                                <!--begin::Select2-->
                                <select class="form-control form-select float-right" data-control="select2" data-hide-search="true">
                                    <option value="1">All</option>
                                    <option value="2" selected>Starter</option>
                                    <option value="3">Advance</option>
                                    <option value="3">Business</option>
                                </select>
                                <!--end::Select2-->
                            </div>

                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <div id="kt_ecommerce_products_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="table-responsive">
                                <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer table-striped" id="kt_ecommerce_products_table">
                                    <!--begin::Table head-->
                                    <thead>
                                    <tr class="text-start fw-semibold  text-gray-400 fs-7 text-uppercase gs-0 ">
                                        <th class="min-w-70px sorting text-start" tabindex="0" aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1" aria-label="Qty: activate to sort column ascending" style="width: 125.031px;">seller id
                                        </th>

                                        <th class="min-w-100px sorting text-start" tabindex="0" aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1" aria-label="Rating: activate to sort column ascending" style="width: 140.875px;">seller name
                                        </th>
                                        <th class="min-w-100px sorting text-center" tabindex="0" aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 140.875px;">Plan
                                        </th>
                                        <th class="min-w-100px sorting text-center" tabindex="0" aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 140.875px;">
                                            Subscribed Date
                                        </th>
                                        <th class="min-w-150px sorting_disabled text-center" rowspan="1" colspan="1" aria-label="Actions" style="width:200px;">Subscription Expires
                                        </th>


                                    </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                    <!--begin::Table row-->


                                    <!--end::Table row-->
                                    <tr>
                                        <!--begin::Category=-->
                                        <td class=" pe-0" style="padding-left: 10px;">
                                            <a class="text-gray-600 text-hover-primary fs-5 fw-bold seller-slider">SLR8745</a>
                                        </td>
                                        <!--end::Category=-->
                                        <!--begin::SKU=-->
                                        <td class=" pe-0">
                                            <span>Winters</span>
                                        </td>
                                        <!--end::SKU=-->
                                        <!--begin::Status=-->
                                        <td class="text-center pe-0">
                                            <!--begin::Badges-->
                                            <div class="badge badge-primary">Business</div>
                                            <!--end::Badges-->
                                        </td>
                                        <!--end::Status=-->
                                        <!--begin::Price=-->
                                        <td class="text-center pe-0">12/2/2022</td>
                                        <!--end::Price=-->
                                        <!--begin::Rating-->
                                        <td class="text-center pe-0">12/2/2022</td>
                                        <!--end::Rating-->
                                    </tr>



                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                                    <div class="dataTables_length" id="kt_ecommerce_products_table_length"><label><select name="kt_ecommerce_products_table_length" aria-controls="kt_ecommerce_products_table" class="form-select form-select-sm form-select-solid">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select></label></div>
                                </div>
                                <div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                    <div class="dataTables_paginate paging_simple_numbers" id="kt_ecommerce_products_table_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled" id="kt_ecommerce_products_table_previous"><a href="#" aria-controls="kt_ecommerce_products_table" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li>
                                            <li class="paginate_button page-item active"><a href="#" aria-controls="kt_ecommerce_products_table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="kt_ecommerce_products_table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="kt_ecommerce_products_table" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="kt_ecommerce_products_table" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="kt_ecommerce_products_table" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                            <li class="paginate_button page-item next" id="kt_ecommerce_products_table_next"><a href="#" aria-controls="kt_ecommerce_products_table" data-dt-idx="6" tabindex="0" class="page-link"><i class="next"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
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
        loadBreadCrumbWithHeader("Memberships","Active","Dashboard","#")
    </script>
@endpush
