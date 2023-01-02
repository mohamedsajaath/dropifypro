@extends('layouts.app')


@push('css')

@endpush
@section('content')


    <div class="card mb-5 mb-xl-6 mx-8 ">
        <div class="card shadow-sm">
            <div class="card-header collapsible cursor-pointer rotate" data-bs-toggle="collapse" data-bs-target="#kt_docs_card_collapsible">
                <h3 class="card-title">Bank Transfers</h3>
                <div class="card-toolbar rotate-180">
            <span class="svg-icon svg-icon-1">

            </span>
                </div>
            </div>
            <div id="kt_docs_card_collapsible" class="collapse show">
                <div class="card-body">
                    <!--begin::Table-->
                    <table id="wallet_datatable" class="table table-striped table-row-bordered gy-5 gs-7">
                        <thead>
                        <tr class="fw-semibold fs-6 text-gray-800">
                            <th>Seller Id</th>
                            <th>Seller Name</th>
                            <th>Last Recharge Date</th>
                            <th>Ref No</th>
                            <th>Amount</th>
                            <th>Approve Credit</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>DXN-1100</td>
                            <td>Tiger Nixon</td>
                            <td>2022/04/25</td>
                            <td>
                                <span class="text-muted fw-semibold text-muted d-block fs-7 ref-number text-hover-primary">
                                        43542343252353253252532
                                </span>
                                <a class="btn text-muted click-to-copy">
                                    <i class="bi bi-back"></i> copy
                                </a>
                            </td>
                            <td>320 <small class="text-muted">USD</small></td>
                            <td>
                                <a href="#"
                                   class="btn btn-primary btn-sm me-1 seller-wallet-approve-model">
                                    Approve
                                    <!--end::Svg Icon-->
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <!--end::Table-->
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>

    <div class="card mb-5 mb-xl-6 mx-8 ">
        <div class="card shadow-sm">
            <div class="card-header cursor-pointer rotate">
                <h3 class="card-title">Wallets</h3>
                <div class="card-toolbar rotate-180">
            <span class="svg-icon svg-icon-1">

            </span>
                </div>
            </div>
            <div class="collapse show">
                <div class="card-body">
                    <!--begin::Table-->
                    <table id="wallet_datatable" class="table table-striped table-row-bordered gy-5 gs-7">
                        <thead>
                        <tr class="fw-semibold fs-6 text-gray-400 text-uppercase ">
                            <th>Wallet Id</th>
                            <th>Seller Name</th>
                            <th>Last Recharge Date</th>
                            <th>Total Credit</th>
                            <th class="text-end">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="seller-id text-hover-info" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Click to Full details">DXN-1100
                            </td>
                            <td class="seller-slider">Tiger Nixon</td>
                            <td>2022/04/25</td>
                            <td>320</td>
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
                                    <div class="menu-item px-3 dispatch">
                                        <a class="menu-link px-3 product-edit d-flex gap-5">

                                            <i class="bi bi-gift"></i>

                                            Gift Credits</a>
                                    </div>

                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        </tbody>
                    </table>
                    <!--end::Table-->
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>

@endsection
@push('script')
    <script>
        loadBreadCrumbWithHeader("Wallets", "Sellers", "Dashboard", "{{ route('admin.dashboard') }}")
    </script>

    <script>
   $(document).on('click','.ref-number',function(){
       navigator.clipboard.writeText($(this).text());
       $('.click-to-copy').html(`<i class="bi bi-clipboard-check"></i> copied`);
   });

    </script>
    <script>
        $(document).on('click', '.seller-wallet-gift-model', function () {

            $('.custom-modal-size').addClass('mw-400px').removeClass('mw-650px');
            loadFormModal("#", "method", "Gift Credit", "", "Gift Credit", "submitButtonClass",
                `  <!--begin::Input group-->
                    <div class="row g-9 mb-8 ">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">ID</label>
                            <input type="text" class="form-control form-control-solid" placeholder="DXN-0000" name="id" disabled="disabled" />
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Name</label>
                            <input type="text" class="form-control form-control-solid" placeholder="XXXXXXXXX" name="name" disabled="disabled" />
                        </div>
                        <!--end::Col-->
                    </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Credit</label>
                            <input type="text" class="form-control form-control-solid" placeholder="100" name="credit"  />
                        </div>
                        <!--end::Col-->
                    </div>
                <!--end::Input group-->
                  `);
        });
    </script>
    <script>
        $(document).on('click', '.seller-wallet-approve-model', function () {

            Swal.fire({
                html: `<form action="" method="">
        <!--begin::Input group-->
                    <div class="row g-9 mb-8 ">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">ID</label>
                            <input type="text" class="form-control form-control-solid" placeholder="DXN-0000" name="id" disabled="disabled" />
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Name</label>
                            <input type="text" class="form-control form-control-solid" placeholder="XXXXXXXXX" name="name" disabled="disabled" />
                        </div>
                        <!--end::Col-->
                    </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="input-group mb-5">
                      <span class="input-group-text">USD</span>
                        <input type="number" class="form-control" name="price">
                      <span class="input-group-text">.00</span>
                      </div>
                        <!--end::Col-->
                    </div>
                <!--end::Input group-->
                </form>`,
                buttonsStyling: false,
                showCancelButton: true,
                cancelButtonText: 'cancel',
                confirmButtonText: "Approve",
                customClass: {
                    confirmButton: "btn btn-success",
                    cancelButton: 'btn btn-danger'
                }
            });


        });
    </script>
    <script>
        $(document).on('click', '#pending_approval', function () {
            $('.custom-modal-size').addClass('mw-1000px').removeClass('mw-650px');
            loadDetailModal("Bank Transfers", "",
                `
        <!--begin::Body-->
        <div class="card-body py-3 ">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table id="wallet_datatable" class="table table-striped table-row-bordered gy-5 gs-7">
                    <thead>
                        <tr class="fw-semibold fs-6 text-gray-800">
                            <th>Seller Id</th>
                            <th>Seller Name</th>
                            <th>Last Recharge Date</th>
                            <th>Ref No</th>
                            <th>Amount</th>
                            <th>Approve Credit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>DXN-1100</td>
                            <td>Tiger Nixon</td>
                            <td>2022/04/25</td>
                            <td>
                                <span class="text-muted fw-semibold text-muted d-block fs-7 ref-number text-hover-primary">
                                        43542343252353253252532
                                </span>
                                <a class="btn text-muted click-to-copy">
                                  <i class="bi bi-back"></i> copy
                                </a>
                            </td>
                            <td>320 <small class="text-muted">USD</small></td>
                            <td>
                                <a href="#"
                                    class="btn btn-success btn-sm me-1 seller-wallet-approve-model">
                                    Approve
                                    <!--end::Svg Icon-->
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
      `);
        });
    </script>
    <script>
        $(document).on('click', '.seller-id', function () {
            $('.custom-modal-size').addClass('mw-1000px').removeClass('mw-650px');
            loadDetailModal("Wallet Details", "",
                `  <div class="row g-9 mb-8 ">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">ID</label>
                            <input type="text" class="form-control form-control-solid" value="DXN-0000" name="id" disabled="disabled" />
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Name</label>
                            <input type="text" class="form-control form-control-solid" value="XXXXXXXXX" name="name" disabled="disabled" />
                        </div>
                        <!--end::Col-->
                    </div>
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
                        placeholder="Search " />
                </div>
                <!--end::Search-->


            </div>
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                <select class="form-control form-control-solid form-select float-right select-wallet">
                        <option value="1" selected>Transaction</option>
                        <option value="2">Top-Up</option>
                </select>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3 ">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
               <!-- <table id="wallet_datatable" class="table table-striped table-row-bordered gy-5 gs-7">
                    <thead>
                        <tr class="fw-semibold fs-6 text-gray-800">
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Order Id</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2022/04/25</td>
                            <td>320</td>
                            <td>OID6578</td>
                            <td><span class="badge badge-light-success">Confirmed</span></td>
                        </tr>
                        <tr>
                            <td>2022/04/26</td>
                            <td>800</td>
                            <td>OID6576</td>
                            <td><span class="badge badge-light-success">Confirmed</span></td>
                        </tr>
                    </tbody>
                </table> -->
                <table id="wallet_datatable" class="table table-striped table-row-bordered gy-5 gs-7">
                    <thead>
                        <tr class="fw-semibold fs-6 text-gray-800">
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Type</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2022/04/25</td>
                            <td>320</td>
                            <td>Paypal</td>
                            <td><span class="badge badge-light-success">Confirmed</span></td>
                        </tr>
                        <tr>
                            <td>2022/04/26</td>
                            <td>800</td>
                            <td>Bank Transfer</td>
                            <td><span class="badge badge-light-warning">Pending</span></td>
                        </tr>
                    </tbody>
                </table>
                <!--end::Table-->
            </div>
            <!--end::Col-->
        </div>
    <!--end::Input group-->
      `);
            $('select.select-wallet').select2({
                dropdownParent: $('#kt_modal_new_target'),
                minimumResultsForSearch: Infinity
            });
        });
    </script>

@endpush
