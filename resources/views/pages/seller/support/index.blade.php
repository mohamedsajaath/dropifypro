@extends('layouts.app')
@section('content')
    @include('includes.bread_crumb_with_header', [
        'header' => 'Tickets',
        'bread_crumbs' => ['Dashboard' => route('dashboard'), 'Support' => ''],
    ])
    @include('pages.seller.support.includes.list_view')
@endsection
@push('script')
<script>
    loadBreadCrumbWithHeader("Support", "", "", "")
</script>

{{-- create tickets --}}
{{-- <script>
    const modalId = 'modal';
    $(document).on('click', '.create-ticket', async function() {
        const btn = $(this);
        const btnTitle = btn.html();
        try {
            loadButton(btn, 'Loading ...');
            let loadURL = `${baseUrl}/admin/support/ticket/create`;
            await loadModal(modalId, loadURL);
        } catch (err) {
            toast.error("Could not load add event popup. (error_ref: add_account_manager)");
            console.log("add_account_manager", err);
        } finally {
            resetButton(btn, btnTitle);
        }
    });
</script> --}}
{{-- <script>
    $(document).on('click', '.create-ticket', function() {
        $('.custom-modal-size').addClass('mw-450px').removeClass('mw-650px');
        loadFormModal("", "", "CREATE TICKET", "", "Create", "ticket-create-btn",
            `
            @csrf
            <div class="card-body p-9 card mb-5">
                <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">Subject :</label>
                    <input type="text" class="form-control form-control-solid" placeholder="Subject" name="title" value="">
                </div>
                <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                    <label class="fs-6 fw-semibold mb-2">Body :</label> 
                    <textarea class="form-control form-control-solid" rows="3" name="description" placeholder="Body"></textarea>
                </div>
            </div>
             `);
        $('.ticket-create-btn').closest('form').addClass('ticket-add-form');
    });
</script> --}}

<script>
    const modalId = 'modal';
    $(document).on('click', '.create-ticket', async function() {
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

{{-- Store --}}
<script>
    $(document).on('submit', '.ticket-add-form', async function(e) {
        e.preventDefault();
        let form = $(this).closest('form');
        try {
            const url = "";
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

{{-- Account Manager details --}}
{{-- <script>
    $(document).on('click', '.account-manager', function() {
        $('.custom-modal-size').addClass('mw-550px').removeClass('mw-650px');
        loadDetailModal("My Account Manager", "",
            ` `);
    });
</script>

<script>
    $(document).on("click", ".view-tickets", async function() {
        //let manager_id = $(this).data('id');
        let url = baseUrl + `/admin/support/account-managers/edit/${manager_id}`;
        await loadEditFormModal(
            "",
            "post",
            "Ticket",
            "",
            "",
            "ticket-details-btn",
            url
        );
    });
</script> --}}

{{-- Close --}}
<script>
    $(document).on('click', '.close', function() {
        $('.custom-modal-size').addClass('mw-450px').removeClass('mw-650px');
        loadFormModal("", "", "Close Ticket", "Are you sure want to close?", "Yes,Close it!",
            "ticket-close-btn",`
             @csrf
                <div class="card-body">
                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                        <label class="fs-6 fw-semibold mb-2">Reason :</label>
                        <textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Reason"></textarea>
                    </div>
                </div>
                `);
        $('.ticket-close-btn').closest('form').addClass('ticket-close-form');
    });
</script>

<script>
    $(document).on('submit', '.ticket-close-form', async function(e) {
        e.preventDefault();
        let form = $(this).closest('form');
        try {

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
@endpush
