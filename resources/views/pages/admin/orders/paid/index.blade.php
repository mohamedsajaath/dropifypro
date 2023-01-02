@extends('layouts.app')

@push('css')
    <style>
        .row {
            justify-content: center;
        }
    </style>
@endpush
@section('content')

    <div class="card mb-5 mb-xl-8 m-8">

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
                <table id="kt_datatable_column_rendering" class="table table-striped table-row-bordered gy-5 gs-7">
                    <thead>
                    <tr class="fw-semibold fs-6 text-gray-400">
                        <th>Order Id</th>
                        <th>Order Date</th>
                        <th>Total Price</th>
                        <th>Total Quantity</th>

                        <th class="min-w-100px text-end">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>ORD522</td>
                        <td>2022/5/6</td>
                        <td>$500</td>
                        <td>61</td>


                        <td class="text-end ">
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
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 dispatch">
                                    <a class="menu-link px-3 product-edit d-flex gap-5">

                                                  <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                                            <path
                                                d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                        </svg>
                                    </span>

                                        Dispatch</a>
                                </div>
                                <!--end::Menu item-->

                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    </tbody>
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>

@endsection
@push('script')
    
    <script>
        loadBreadCrumbWithHeader("Orders", "Paid", "Dashboard", "{{ route('admin.dashboard') }}")
    </script>
    <script>
        $(document).on('click', '.dispatch', async function () {

            await loadFormModal("action", "method", "Select Courier Service", "", "Select", "submitButtonClass", `
            <!--begin::Row-->
                        <div class="row p-3">
                            <!--begin::Col-->
                            <div class="col-4">
                                <label class="form-check-clip text-center">
                                    <input class="btn-check" type="radio" value="1" checked name="option"/>
                                    <div class="form-check-wrapper">
                                        <div class="form-check-indicator"></div>
                                        <img class="form-check-content" src="{{asset('assets/media/stock/600x400/img-84.png')}}"/>
                                    </div>
                                </label>
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-4">
                                <label class="form-check-clip text-center">
                                    <input class="btn-check" type="radio" value="2" name="option"/>
                                    <div class="form-check-wrapper">
                                        <div class="form-check-indicator"></div>
                                        <img class="form-check-content" src="{{asset('assets/media/stock/600x400/img-85.png')}}"/>
                                    </div>
                                </label>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->`);
        })
    </script>

 

@endpush
