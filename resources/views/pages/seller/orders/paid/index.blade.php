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
            <select class="form-select form-select-solid " data-kt-select2="true" data-hide-search="true">
                <option value="2">AWAITING DISPATCH</option>
                <option value="2">DISPATCHED</option>
            </select>
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
<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script>
    loadBreadCrumbWithHeader("Orders", "Paid", "Dashboard", "#")
</script>

<script>

    $(document).on('click', '.items', function() {
        $('.custom-modal-size').addClass('mw-750px').removeClass('mw-650px');
        loadDetailModal("Prodect Details", "", `


            <div class="class="row mb-7">
            <!--begin::Table container-->
            <div class="table-responsive  p-5 border-20">
                <!--begin::Table-->
                <table id="kt_datatable_column_rendering" class="table table-striped table-bordered gy-5 gs-7">
                    <thead>
                        <tr class="fw-semibold fs-6 text-gray-400">
                            {{-- <th class="w-25px">
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" data-kt-check="true"
                                    data-kt-check-target=".widget-13-check" />
                            </div>
                        </th> --}}
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Size</th>
                            <th>Color</th>
                            <th>Quantity</th>
                            <th>Custemer Details</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            {{-- <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input widget-13-check" type="checkbox" value="1" />
                            </div>
                        </td> --}}
                        <td>111111111</td>

                            <td>Shirt</td>
                            <td>M</td>

                            <td>Red</td>
                            <td>4</td>
                            <td>Tiger Nixon</td>


                        </tr>
                        <tr>
                            {{-- <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input widget-13-check" type="checkbox" value="1" />
                            </div>
                        </td> --}}
                        <td>111111112</td>
                            <td>Phone</td>
                            <td>L</td>
                            <td>Black</td>
                            <td>8</td>
                            <td>Jones Johnson</td>

                        </tr>
                        <tr>
                            {{-- <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input widget-13-check" type="checkbox" value="1" />
                            </div>
                        </td> --}}
                        <td>11111113</td>
                            <td>Laptop</td>
                            <td>S</td>
                            <td>White</td>
                            <td>2</td>
                            <td>Williams</td>
                         </tr>
                    </tbody>
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>


            `);
    });
</script>

@endpush
