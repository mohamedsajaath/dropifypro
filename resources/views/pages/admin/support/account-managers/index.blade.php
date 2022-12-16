@extends('layouts.app')
@section('content')
    @include('pages.admin.support.account-managers.includes.details-table')
@endsection
@push('script')
    <script>
        loadBreadCrumbWithHeader("Account Managers", "Details", "Dashboard", "{{ route('admin.dashboard') }}")
    </script>
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>

    <script>
        $(document).on('click', '.add-manager', function() {
            $('.custom-modal-size').addClass('mw-750px').removeClass('mw-650px');
            loadFormModal("", "", "ADD MANAGER", "New manager can add here", "Submit", "add-managers-btn",
                `@csrf
<div class="container">
    <div class="row g-9 mb-8 justify-content-center">
        <div class="col-md-8 fv-row">
            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                <span class="required">Name :</span>
                <i class="fas fa-exclamation-circle ms-2 fs-7"></i>
            </label>
            <input type="text" class="form-control form-control" placeholder="" name="name" />
            <label class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-5">
                <span class="required">E-Mail :</span>
                <i class="fas fa-exclamation-circle ms-2 fs-7"></i>
            </label>
            <input type="text" class="form-control form-control" placeholder="" name="email" />
            <label class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-5">
                <span class="required">WhatsApp No :</span>
                <i class="fas fa-exclamation-circle ms-2 fs-7"></i>
            </label>
            <input type="text" class="form-control form-control" placeholder="" name="contact_no" />
            <label class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-5">
                <span class="required">Response Time :</span>
                <i class="fas fa-exclamation-circle ms-2 fs-7"></i>
            </label>
            <input type="text" class="form-control form-control" placeholder="" name="response_time" />
        </div>
    </div>
</div>
`);
        });
    </script>

    <script>
        $(document).on('click', '.add-managers-btn', async function(e) {
            e.preventDefault();
            let form = $(this).closest('form');
            try {
                const url = "{{ route('admin.account-managers.store') }}";
                let ajaxRequest = new HttpRequest(url, 'POST');
                ajaxRequest.set_data_by_form_object(form);
                let response = await ajaxRequest.call();
                console.log(response.message);
                $("#kt_modal_new_target").modal("hide");
                //alert(response.message);

            } catch (err) {
                console.log(err);
                console.log("error");
                //alert("error");
            }
        });
    </script>


    {{-- Edit Manager --}}
    <script>
        $(document).on("click", ".edit-manager", async function() {
            let manager_id = $(this).data('id');
            let url = baseUrl + `/admin/account-managers/edit/${manager_id}`;
            console.log(url);
            await loadEditFormModal(
                "", "post", "EDIT MANAGER", "Manager details can edit here", "Update", "edit_managers_btn",
                url);
        });
    </script>

    <script>
        $(document).on("click", ".edit_managers_btn", async function(e) {
            e.preventDefault();
            let form = $(this).closest('form');
            try {
                const url = "{{ route('admin.account-managers.edit', 2) }}";
                let ajaxRequest = new HttpRequest(url, 'POST');
                ajaxRequest.set_data_by_form_object(form);
                let response = await ajaxRequest.call();
                console.log(response.message);
                //$("#kt_modal_new_target").modal("hide");

            } catch (err) {
                console.log(err);
                console.log("error");
            }
        });
    </script>


    {{-- Assign Sellers --}}
    <script>
        $(document).on('click', '.assign-sellers', function() {
            $('.custom-modal-size').addClass('mw-750px').removeClass('mw-650px');
            loadDetailModal("ASSIGN SELLERS", "Manager can Assign Sellers here",
                `
<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
    <select class="form-select form-select-solid assign-sellers" data-kt-select2="true" data-hide-search="true">
        <option value="2">AWAITING DISPATCH</option>
        <option value="2">DISPATCHED</option>
    </select>
</div>
    <!--end::Header-->
<!--begin::Body-->
<div class="card-body py-3">
<!--begin::Table container-->
<div class="table-responsive ca">
    <!--begin::Table-->
    <table id="kt_datatable_column_rendering" class="table table-hover table-rounded table-row-bordered gy-5 gs-7">
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-plus-square" viewBox="0 0 16 16">
                                <path
                                    d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-plus-square" viewBox="0 0 16 16">
                                <path
                                    d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-plus-square" viewBox="0 0 16 16">
                                <path
                                    d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
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

$('select.assign-sellers').select2({
            dropdownParent: $('#kt_modal_new_target'), });
        });
    </script>


    {{-- Remove Sellers --}}
    <script>
        $(document).on('click', '.seller-list', function() {
            $('.custom-modal-size').addClass('mw-750px').removeClass('mw-650px');
            loadDetailModal("REMOVE SELLERS", "Manager can Assign Sellers here",
                `<!--begin::Table container-->
<div class="table-responsive">
    <!--begin::Table-->
    <table id="kt_datatable_column_rendering" class="table table-hover table-rounded table-row-bordered gy-5 gs-7">
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-trash3" viewBox="0 0 16 16">
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-trash3" viewBox="0 0 16 16">
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-trash3" viewBox="0 0 16 16">
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-trash3" viewBox="0 0 16 16">
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
