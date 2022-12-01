@extends('layouts.app')


@push('css')
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endpush
@section('content')
    <div class="card mb-5 mb-xl-8 mx-8">
        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10 mx-20 pb-5 my-5"
            style="border: 1px solid #009ef7">
            <!--begin::Header-->
            <div class="card-header pt-5">
                <!--begin::Title-->
                <div class="card-title d-flex flex-column">
                    <!--begin::Amount-->
                    <span class="fs-2hx fw-bold text-black me-2 lh-1 ls-n2">$599.03 </span>
                    <!--end::Amount-->
                </div>
                <!--end::Title-->
                <!--begin::Button-->
                <div class="card-title d-flex flex-column">
                    <a id="payment" type="button" href="#" class="btn btn-primary hover-scale">Top-up</a>
                    <!--end::Subtitle-->
                </div>
                <!--end::Button-->
            </div>
        </div>
        <!--end::Header-->
        <div class="card mb-5 mb-xl-3 mx-8">
            <!--begin::Header-->
            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <span class="svg-icon svg-icon-1 position-absolute ms-4"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg></span>
                        <input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14"
                            placeholder="Search Report" />
                    </div>
                    <div class="p-5" style="width: 500px">

                    </div>
                    <!--end::Search-->

                </div>
                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                    <select class="form-select form-select-solid " data-control="select2" data-hide-search="true">
                        <option value="2">Transaction</option>
                        <option value="2">Top-Up</option>
                    </select>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3 ">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table id="wallet_datatable" class="table table-striped table-row-bordered gy-5 gs-7">
                        <thead>
                            <tr class="fw-semibold fs-6 text-gray-800">
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Order Id</th>
                                <th>Type</th>
                                <th>Reference</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2022/04/25</td>
                                <td>320</td>
                                <td>OID6578</td>
                                <td>Paypal</td>
                                <td>546845646546546132348</td>
                                <td><span class="badge badge-light-success">Confirmed</span></td>
                            </tr>
                            <tr>
                                <td>2022/04/26</td>
                                <td>800</td>
                                <td>OID6576</td>
                                <td>Bank Transfer</td>
                                <td>546845646546546132348</td>
                                <td><span class="badge badge-light-warning">Pending</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--end::Input group-->
            <!--begin::Body-->
        </div>
    @endsection
    @push('script')
        <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
        <script>
            $("#wallet_datatable").DataTable({

            });     
        </script>
        <script src="{{ asset('assets/js/payment-model.js') }}"></script>
        <script>
            loadBreadCrumbWithHeader("wallet", "Details", "Dashboard", "{{ route('admin.dashboard') }}")
        </script>
    @endpush
