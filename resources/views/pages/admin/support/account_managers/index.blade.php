@extends('layouts.app')
@section('content')
    @include('includes.bread_crumb_with_header', [
        'header' => 'Account Managers',
        'bread_crumbs' => ['Dashboard' => route('dashboard'), 'Support' => ''],
    ])
    @include('pages.admin.support.account_managers.includes.list_view')
@endsection
@push('script')
    <script>
        const modalId = 'modal';
        $(document).on('click', '.add-manager', async function() {
            const btn = $(this);
            const btnTitle = btn.html();
            try {
                loadButton(btn, 'Loading ...');
                let loadURL = `${baseUrl}/admin/support/account-managers/create`;
                await loadModal(modalId, loadURL);
            } catch (err) {
                toast.error("Could not load add event popup. (error_ref: add_account_manager)");
                console.log("add_account_manager", err);
            } finally {
                resetButton(btn, btnTitle);
            }
        });
    </script>

    {{-- Store manager --}}
    <script>
        $(document).on('click', '.add-managers-btn', async function(e) {
            e.preventDefault();
            let form = $(this).closest('form');
            const btn = $(this);
            const btnTitle = btn.html();
            try {
                loadButton(btn);
                const url = "{{ route('admin.account-managers.store') }}";
                let ajaxRequest = new HttpRequest(url, 'POST');
                ajaxRequest.set_data_by_form_object(form);
                let response = await ajaxRequest.call();
                $("#" + modalId).modal("hide");
                const storedEvent = response['event'];
                const activeDateOnNav = $('.btn-active-danger.active').attr('data-date');
                const requestedDate = storedEvent.date;
                if (activeDateOnNav === requestedDate) {
                    const eventHtmlContent = getOnboardingContentHtml(storedEvent);
                    $('#accountManager-content').prepend(eventHtmlContent);
                }
                toast.success(response.message);
            } catch (err) {
                toast.error(err);
            } finally {
                resetButton(btn, btnTitle);
            }
        });
    </script>

    {{-- Edit manager --}}
    <script>
        $(document).on('click', '.edit-manager', async function() {
            try {
                debugger
                let managerId = $(this).attr('data-id');
                let loadUrl = baseUrl + '/admin/support/account-managers/' + managerId + '/edit';
                await loadModal(modalId, loadUrl);
            } catch (err) {
                console.log(err);
            }
        });

        $(document).on("click", "#edit-account-manager", async function(e) {
            e.preventDefault();
            const btn = $(this);
            const btnTitle = btn.html();
            let form = btn.closest('form');
            const eventId = form.attr('data-id');
            const eventHtmlContentWrapperSelector = `.content-wrapper[data-content-id='${eventId}']`
            const eventHtmlContentWrapper = $(eventHtmlContentWrapperSelector);
            try {
                loadButton(btn);
                const url = `${baseUrl}/admin/support/account-managers/${eventId}`;
                let ajaxRequest = new HttpRequest(url, 'PUT');
                ajaxRequest.set_data_by_form_object(form);
                let response = await ajaxRequest.call();
                const storedEvent = response['event'];
                eventHtmlContentWrapper.remove();

                const eventHtmlContent = getOnboardingContentHtml(storedEvent);
                $('#accountManager-content').prepend(eventHtmlContent);

                toast.success(response.message);
                $("#" + modalId).modal("hide");
            } catch (err) {
                toast.error(err);
            } finally {
                resetButton(btn, btnTitle);
            }

        })
    </script>

    {{-- Update manager --}}


    {{-- Delete Sellers --}}
    <script>
        $(document).on("click", ".delete-manager", async function() {
            if (await isConfirmToProcess("Warning", "",  'Are you sure! You want to delete',
                    'warning')) {
                try {
                    let eventId = $(this).data('id');
                    const eventHtmlContentWrapperSelector = `.content-wrapper[data-content-id='${eventId}']`
                    const eventHtmlContentWrapper = $(eventHtmlContentWrapperSelector);
                    let url = `${baseUrl}/admin/support/account-managers/${eventId}`;
                    let ajaxRequest = new HttpRequest(url, 'DELETE');
                    ajaxRequest.set_data_as_object({'_token':csrfToken});
                    let response = await ajaxRequest.call();
                    eventHtmlContentWrapper.remove();
                    toast.success(response.message);
                } catch (err) {
                    toast.error(err);
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
