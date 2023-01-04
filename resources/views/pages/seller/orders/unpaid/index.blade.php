@extends('layouts.app')


@push('css')
  
@endpush
@section('content')

    <div class="card mb-5 mb-xl-8 m-8">

        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                <span class="svg-icon svg-icon-1 position-absolute ms-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg></span>
                    <input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search" />
                </div>
                <div class="p-5" style="width: 400px">

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
                <table id="kt_datatable_column_rendering" class="table table-striped text-uppercase table-row-bordered gy-5 gs-7">
                    <thead>
                    <tr class="fw-semibold fs-6 text-gray-400">
                        {{-- <th class="w-25px">
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" data-kt-check="true"
                            data-kt-check-target=".widget-13-check" />
                    </div>
                </th> --}}
                        <th>Order ID</th>
                        <th>Order Date</th>
                        <th>Total Price</th>
                        <th>Total Quantity</th>
                        <th class="text-end">table header</th>



                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {{-- <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input widget-13-check" type="checkbox" value="1" />
                    </div>
                </td> --}}
                        <td><a href="#" class="items text-dark">124521</a></td>
                        <td>2022-04-12</td>

                        <td>$621</td>
                        <td>5</td>
                        <td style="text-align: center" class="text-end">
                            <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" id="payment" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"></path>
                                            <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"></path>
                                        </svg>
                                    </span>
                            </a>
                        </td>

                    </tr>
                    <tr>
                        {{-- <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input widget-13-check" type="checkbox" value="1" />
                    </div>
                </td> --}}
                        <td><a href="#" class="items text-dark">122321</a></td>
                        <td>2022-02-12</td>

                        <td>$61</td>
                        <td>25</td>
                        <td style="text-align: center" class="text-end">
                            <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" id="payment" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"></path>
                                            <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"></path>
                                        </svg>
                                    </span>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!--end::Table-->
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
        <!--end::Table container-->




        <!--begin::Body-->
    </div>

@endsection
@push('script')
    <script>
        loadBreadCrumbWithHeader("Orders","UnPaid","Dashboard","#")
    </script>
    <script src="{{ asset('assets/js/payment-model.js') }}"></script>
@endpush
