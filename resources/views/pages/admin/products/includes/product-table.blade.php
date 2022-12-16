<div class="card card-flush m-10" data-select2-id="select2-data-125-ss3g">
    <!--begin::Card header-->
    @include('pages.admin.products.includes.card-header')
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0">
        <!--begin::Table-->
        <div id="kt_ecommerce_products_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="table-responsive">
                <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                       id="kt_ecommerce_products_table">
                    <!--begin::Table head-->
                    @include('pages.admin.products.includes.table-header')
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="fw-semibold text-gray-600">

                    @include('pages.admin.products.includes.product-table-rows')

                    </tbody>
                    <!--end::Table body-->
                </table>
            </div>
            <div class="row">
                <div
                    class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                    <div class="dataTables_length" id="kt_ecommerce_products_table_length"><label><select
                                name="kt_ecommerce_products_table_length"
                                aria-controls="kt_ecommerce_products_table"
                                class="form-select form-select-sm form-select-solid">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select></label></div>
                </div>
                <div
                    class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                    <div class="dataTables_paginate paging_simple_numbers"
                         id="kt_ecommerce_products_table_paginate">
                        <ul class="pagination">
                            <li class="paginate_button page-item previous disabled"
                                id="kt_ecommerce_products_table_previous"><a href="#"
                                                                             aria-controls="kt_ecommerce_products_table"
                                                                             data-dt-idx="0" tabindex="0"
                                                                             class="page-link"><i
                                        class="previous"></i></a></li>
                            <li class="paginate_button page-item active"><a href="#"
                                                                            aria-controls="kt_ecommerce_products_table"
                                                                            data-dt-idx="1" tabindex="0"
                                                                            class="page-link">1</a></li>
                            <li class="paginate_button page-item "><a href="#"
                                                                      aria-controls="kt_ecommerce_products_table"
                                                                      data-dt-idx="2" tabindex="0"
                                                                      class="page-link">2</a></li>
                            <li class="paginate_button page-item "><a href="#"
                                                                      aria-controls="kt_ecommerce_products_table"
                                                                      data-dt-idx="3" tabindex="0"
                                                                      class="page-link">3</a></li>
                            <li class="paginate_button page-item "><a href="#"
                                                                      aria-controls="kt_ecommerce_products_table"
                                                                      data-dt-idx="4" tabindex="0"
                                                                      class="page-link">4</a></li>
                            <li class="paginate_button page-item "><a href="#"
                                                                      aria-controls="kt_ecommerce_products_table"
                                                                      data-dt-idx="5" tabindex="0"
                                                                      class="page-link">5</a></li>
                            <li class="paginate_button page-item next" id="kt_ecommerce_products_table_next"><a
                                    href="#" aria-controls="kt_ecommerce_products_table" data-dt-idx="6"
                                    tabindex="0" class="page-link"><i class="next"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Table-->
    </div>
    <!--end::Card body-->
</div>
