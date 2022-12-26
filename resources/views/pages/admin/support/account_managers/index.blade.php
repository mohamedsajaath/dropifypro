@extends('layouts.app')
@section('content')
    @include('pages.admin.support.account_managers.includes.details-table')
@endsection
@push('script')
    <script>
        loadBreadCrumbWithHeader("Account Managers", "", "", "")
    </script>
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>

    <script>
        $(document).on('click', '.add-manager', function() {
            $('.custom-modal-size').addClass('mw-550px').removeClass('mw-650px');
            loadFormModal("", "", "ADD MANAGER", "", "Submit", "add-managers-btn",
                `@csrf
<div class="container">
    <div class="row g-9 mb-8 justify-content-center">
        <div class="col-md-8 fv-row">
            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Name :</label>
            <input type="text" class="form-control form-control" placeholder="" name="name" maxlength="255" required/>

            <label class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-5">E-Mail :</label>
            <input type="email" class="form-control form-control" placeholder="" name="email" maxlength="150" required/>

            <label class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-5">WhatsApp No :</label>
            <input type="text" class="form-control form-control" placeholder="" name="contact_no" maxlength="20" required/>

            <label class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-5">Response Time :</label>
            <div class="input-group input-group-append">
            <input type="number" class="form-control form-control" placeholder="" name="response_time" maxlength="5" required/>
            <span class="input-group-text">min</span>
            </div>
        </div>
    </div>
</div>
     `);
        });
    </script>

    {{-- <script>
        $(document).on('click', '.add-managers-btn', async function(e) {
            e.preventDefault();
            let form = $(this).closest('form');

            function ValidateEmail(inputText) {
                var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                if (inputText.form.value.match(mailformat)) {
                    alert("Valid email address!");
                    document.email.focus();
                    return true;
                } else {
                    alert("You have entered an invalid email address!");
                    document.form.email.focus();
                    return false;
                }
            }
        });
    </script> --}}

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
                location.reload();

            } catch (err) {
                console.log(err);
                console.log("error");
                //alert("error");
            }
        });
    </script>

    {{-- edit manager --}}
    <script>
        $(document).on("click", ".edit-manager", async function() {
            let manager_id = $(this).data('id');
            let url = baseUrl + `/admin/support/account-managers/edit/${manager_id}`;
            await loadEditFormModal(
                "",
                "post",
                "EDIT MANAGER",
                "",
                "Update",
                "edit_managers_btn",
                url
            );
        });
    </script>

    {{-- update manager --}}
    <script>
        $(document).on("click", ".edit_managers_btn", async function(e) {
            e.preventDefault();
            let form = $(this).closest('form');
            try {
                const url = "{{ route('admin.account-managers.update') }}";
                let ajaxRequest = new HttpRequest(url, 'POST');
                ajaxRequest.set_data_by_form_object(form);
                let response = await ajaxRequest.call();
                console.log(response.message);
                $("#kt_modal_new_target").modal("hide");
                location.reload();

            } catch (err) {
                console.log(err);
                console.log("error");
            }
        });
    </script>

    {{-- Delete Sellers --}}
    <script>
        $(document).on("click", ".acc-delete", async function(e) {
            e.preventDefault();
            let manager_id = $(this).data('id');
            let url = baseUrl + `/admin/support/account-managers/delete/${manager_id}`;
            if (await isConfirmToProcess("success", "", title = 'Are you sure! You want to delete',
                    'warning')) {
                try {
                    let ajaxRequest = new HttpRequest(url, 'get');
                    let response = await ajaxRequest.call();
                    console.log(response.message);
                    $("#kt_modal_new_target").modal("hide");
                    location.reload();

                } catch (err) {
                    console.log(err);
                    console.log("error");
                }
            }
        });
    </script>

    {{-- Assign Sellers --}}
    <script>
        $(document).on('click', '.assign-sellers', function() {
            $('.custom-modal-size').addClass('mw-600px').removeClass('mw-650px');
            loadDetailModal("ASSIGN SELLERS", "",
                `
<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
    <select class="form-select form-select-solid assign-sellers" data-kt-select2="true" data-hide-search="true">
        <option value="2">Nafris Nafris</option>
        <option value="2">Nasir Nasir</option>
        <option value="2">Sajath Sajath</option>
        <option value="2">Athas Athas</option>
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
                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-2">
                        <span class="svg-icon svg-icon-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-minus" viewBox="0 0 16 16">
                                <path d="M5.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"/>
                                <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-minus" viewBox="0 0 16 16">
                                <path d="M5.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"/>
                                <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
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
                dropdownParent: $('#kt_modal_new_target'),
            });
        });
    </script>
@endpush
