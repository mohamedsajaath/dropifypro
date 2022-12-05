@extends('layouts.app')



@push('css')

@endpush

@section('content')

    <div class="card mb-5 mb-xl-8 m-10">

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

                        </svg>

                    </span>

                    <input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14"

                           placeholder="Search"/>

                </div>

                <!--end::Search-->

            </div>

            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">

                <button type="button" class="btn btn-primary add-manager">Add Manager</button>

            </div>

        </div>

        <!--end::Header-->


        <!--begin::Body-->

        <div class="card-body py-3">

            <!--begin::Table container-->

            <div class="table-responsive">

                <!--begin::Table-->

                <table id="kt_datatable_column_rendering"

                       class="table table-hover table-rounded table-row-bordered gy-5 gs-7 table-striped">

                    <thead>

                    <tr class="fw-semibold fs-6 text-gray-400 text-uppercase">

                        <th class="fw-bold fs-6">MANAGER NAME</th>

                        <th class="fw-bold fs-6">E-MAIL</th>

                        <th class="fw-bold fs-6">WHATSAPP NO</th>

                        <th class="fw-bold fs-6 text-center">RESPONSE TIME</th>

                        <th class="fw-bold fs-6 text-center">ASSIGNED SELLERS</th>

                        <th class="fw-bold fs-6 text-end">ACTIONS</th>

                    </tr>

                    </thead>

                    <tbody>

                    <tr class="fw-bold fs-6 text-gray-500">

                        <td class="seller-slider text-hover-info">Anderson crue</td>

                        <td>anderson@gmail.com</td>

                        <td>+94 777654321</td>

                        <td class="text-center">1 hour</td>

                        <td class="text-center text-hover-info seller-list">2</td>


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
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 dispatch">
                                    <a class="menu-link px-3 product-edit d-flex gap-5 edit-manager">

                                        <i class="bi bi-pencil"></i>

                                        Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <div class="menu-item px-3">
                                    <a class="menu-link px-3 delete-sweet d-flex gap-5"><i class="bi bi-trash"></i>
                                        Delete</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a class="menu-link px-3 assign-sellers d-flex gap-5"><i
                                            class="bi bi-person-plus"></i></i> Assign Sellers</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a class="menu-link px-3 seller-list d-flex gap-5"><i class="bi bi-person-dash"></i>
                                        Unassign Sellers</a>
                                </div>

                            </div>
                            <!--end::Menu-->

                        </td>

                    </tr>


                    </tbody>

                </table>


                <div class="d-flex flex-stack flex-wrap pt-10">

                    <div

                        class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">

                        <div class="dataTables_length" id="kt_ecommerce_products_table_length">

                            <label>

                                <select name="kt_ecommerce_products_table_length"

                                        aria-controls="kt_ecommerce_products_table"

                                        class="form-select form-select-sm form-select-solid">

                                    <option value="10">10</option>

                                    <option value="25">25</option>

                                    <option value="50">50</option>

                                    <option value="100">100</option>

                                </select>

                            </label>

                        </div>

                    </div>

                    <!--begin::Pages-->

                    <ul class="pagination">

                        <li class="page-item previous">

                            <a href="#" class="page-link">

                                <i class="previous"></i>

                            </a>

                        </li>

                        <li class="page-item active">

                            <a href="#" class="page-link">1</a>

                        </li>

                        <li class="page-item">

                            <a href="#" class="page-link">2</a>

                        </li>

                        <li class="page-item">

                            <a href="#" class="page-link">3</a>

                        </li>

                        <li class="page-item">

                            <a href="#" class="page-link">4</a>

                        </li>

                        <li class="page-item">

                            <a href="#" class="page-link">5</a>

                        </li>

                        <li class="page-item">

                            <a href="#" class="page-link">6</a>

                        </li>

                        <li class="page-item next">

                            <a href="#" class="page-link">

                                <i class="next"></i>

                            </a>

                        </li>

                    </ul>

                    <!--end::Pages-->

                </div>

                <!--end::Table-->

            </div>

            <!--end::Table container-->

        </div>

        <!--begin::Body-->

    </div>

@endsection

@push('script')

    <script>

        loadBreadCrumbWithHeader("Account Managers", "Details", "Dashboard", "{{ route('admin.dashboard') }}")

    </script>

    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>



    {{-- Add Manager --}}

    <script>

        $(document).on('click', '.add-manager', function () {

            $('.custom-modal-size').addClass('mw-750px').removeClass('mw-650px');

            loadFormModal("", "", "ADD MANAGER", "New manager can add here", "Submit", "submit-btn",

                `

    <div class="container">

    <form action="#">

        <div class="row g-9 mb-8 justify-content-center">

            <div class="col-md-8 fv-row">

                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">

                    <span class="required">Name :</span>

                    <i class="fas fa-exclamation-circle ms-2 fs-7"></i>

                </label>

                <input type="text" class="form-control form-control" placeholder="----Enter Name----" name="name" />



                <label class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-7">

                    <span class="required">E-Mail :</span>

                    <i class="fas fa-exclamation-circle ms-2 fs-7"></i>

                </label>

                <input type="text" class="form-control form-control" placeholder="---- Enter E-mail----" name="email" />



                <label class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-7">

                    <span class="required">WhatsApp No :</span>

                    <i class="fas fa-exclamation-circle ms-2 fs-7"></i>

                </label>

                <input type="text" class="form-control form-control" placeholder="----Enter WhatsApp No----" name="whatsapp" />

                <label class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-7">

                    <span class="required">Response Time :</span>

                    <i class="fas fa-exclamation-circle ms-2 fs-7"></i>

                </label>

                <input type="text" class="form-control form-control" placeholder="----Enter Response Time----" name="response-time" />

                </div>

        </div>

    </form>

    </div>

                `);

        });

    </script>



    {{-- Edit Manager --}}

    <script>

        $(document).on('click', '.edit-manager', function () {

            $('.custom-modal-size').addClass('mw-750px').removeClass('mw-650px');


            loadFormModal("", "", "EDIT MANAGER", "Manager details can edit here", "Save", "submit-btn2",

                `

                <div class="container">

    <form action="#">

        <div class="row g-9 mb-8 justify-content-center">

            <div class="col-md-8 fv-row">

                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">

                    <span class="required">Name :</span>

                    <i class="fas fa-exclamation-circle ms-2 fs-7"></i>

                </label>

                <input type="text" class="form-control form-control" placeholder="----Enter Name----" name="name" />



                <label class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-7">

                    <span class="required">E-Mail :</span>

                    <i class="fas fa-exclamation-circle ms-2 fs-7"></i>

                </label>

                <input type="text" class="form-control form-control" placeholder="---- Enter E-mail----" name="email" />



                <label class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-7">

                    <span class="required">WhatsApp No :</span>

                    <i class="fas fa-exclamation-circle ms-2 fs-7"></i>

                </label>

                <input type="text" class="form-control form-control" placeholder="----Enter WhatsApp No----" name="whatsapp" />

                <label class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-7">

                    <span class="required">Response Time :</span>

                    <i class="fas fa-exclamation-circle ms-2 fs-7"></i>

                </label>

                <input type="text" class="form-control form-control" placeholder="----Enter Response Time----" name="response-time" />

            </div>

        </div>

    </form>

    </div> `);

        });

    </script>



    {{-- Assign Sellers --}}



    <script>

        $(document).on('click', '.assign-sellers', function () {

            $('.custom-modal-size').addClass('mw-750px').removeClass('mw-650px');

            loadDetailModal("ASSIGN SELLERS", "Manager can Assign Sellers here", `

            <!--begin::Table container-->

            <div class="table-responsive">

                <!--begin::Table-->

                <table id="kt_datatable_column_rendering"

                    class="table table-hover table-rounded table-row-bordered gy-5 gs-7">

                    <thead>

                        <tr class="fw-semibold fs-5 text-gray-800">

                            <th class="fw-bold fs-5 text-gray-800">Seller ID</th>

                            <th class="fw-bold fs-5 text-gray-800">Name</th>

                            <th class="fw-bold fs-5 text-gray-800">Actions</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr class="fw-bold fs-6 text-gray-500">

                            <td>1001</td>

                            <td>Nafris Nafris</td>

                            <td>

                                <a class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-2 edit-manager">

                                    <span class="svg-icon svg-icon-3">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">

                                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>

                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>

                                        </svg>

                                    </span>

                                </a>

                            </td>

                        </tr>

                        <tr class="fw-bold fs-6 text-gray-500">

                            <td>1001</td>

                            <td>Nafris Nafris</td>

                            <td>

                                <a class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-2 edit-manager">

                                    <span class="svg-icon svg-icon-3">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">

                                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>

                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>

                                        </svg>

                                    </span>

                                </a>

                            </td>

                        </tr>

                        <tr class="fw-bold fs-6 text-gray-500">

                            <td>1001</td>

                            <td>Nafris Nafris</td>

                            <td>

                                <a class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-2 edit-manager">

                                    <span class="svg-icon svg-icon-3">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">

                                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>

                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>

                                        </svg>

                                    </span>

                                </a>

                            </td>

                        </tr>

                        <tr class="fw-bold fs-6 text-gray-500">

                            <td>1001</td>

                            <td>Nafris Nafris</td>

                            <td>

                                <a class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-2 edit-manager">

                                    <span class="svg-icon svg-icon-3">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">

                                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>

                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>

                                        </svg>

                                    </span>

                                </a>

                            </td>

                        </tr>

                    </tbody>

                </table>

            <!--end::Table-->

        </div>

        <!--end::Table container--> `);

        });

    </script>



    {{-- Remove Sellers --}}
    <script>

        $(document).on('click', '.seller-list', function () {

            $('.custom-modal-size').addClass('mw-750px').removeClass('mw-650px');


            loadDetailModal("REMOVE SELLERS", "Manager can Assign Sellers here", `

            <!--begin::Table container-->

            <div class="table-responsive">

                <!--begin::Table-->

                <table id="kt_datatable_column_rendering"

                    class="table table-hover table-rounded table-row-bordered gy-5 gs-7">

                    <thead>

                        <tr class="fw-semibold fs-5 text-gray-800">

                            <th class="fw-bold fs-5 text-gray-800">Seller ID</th>

                            <th class="fw-bold fs-5 text-gray-800">Name</th>

                            <th class="fw-bold fs-5 text-gray-800">Actions</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr class="fw-bold fs-6 text-gray-500">

                            <td>1001</td>

                            <td>Nafris Nafris</td>

                            <td>

                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-2">

                                    <span class="svg-icon svg-icon-3">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"

                                            fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">

                                            <path

                                                d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />

                                        </svg>

                                    </span>

                                </a>

                            </td>

                        </tr>

                        <tr class="fw-bold fs-6 text-gray-500">

                            <td>1001</td>

                            <td>Nafris Nafris</td>

                            <td>

                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-2">

                                    <span class="svg-icon svg-icon-3">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"

                                            fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">

                                            <path

                                                d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />

                                        </svg>

                                    </span>

                                </a>

                            </td>

                        </tr>

                        <tr class="fw-bold fs-6 text-gray-500">

                            <td>1001</td>

                            <td>Nafris Nafris</td>

                            <td>

                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-2">

                                    <span class="svg-icon svg-icon-3">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"

                                            fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">

                                            <path

                                                d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />

                                        </svg>

                                    </span>

                                </a>

                            </td>

                        </tr>

                        <tr class="fw-bold fs-6 text-gray-500">

                            <td>1001</td>

                            <td>Nafris Nafris</td>

                            <td>

                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-2">

                                    <span class="svg-icon svg-icon-3">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"

                                            fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">

                                            <path

                                                d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />

                                        </svg>

                                    </span>

                                </a>

                            </td>

                        </tr>

                    </tbody>

                </table>

            <!--end::Table-->

        </div>

        <!--end::Table container--> `);

        });

    </script>

@endpush
