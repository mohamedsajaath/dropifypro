@extends('layouts.app')
@section('content')
    @include('includes.bread_crumb_with_header', [
        'header' => 'Tickets',
        'bread_crumbs' => ['Dashboard' => route('dashboard'), 'Support' => ''],
    ])
    @include('pages.seller.support.includes.list_view')
@endsection
@push('script')
    {{-- create tieckts --}}
    <script>
        const modalId = 'modal';
        $(document).on('click', '.create-ticket', async function() {
            const btn = $(this);
            const btnTitle = btn.html();
            try {
                loadButton(btn, 'Loading ...');
                let loadURL = `${baseUrl}/seller/support/ticket/create`;
                console.log(baseUrl);
                await loadModal(modalId, loadURL);
            } catch (err) {
                toast.error("Could not load add event popup. (error_ref: create_ticket)");
                console.log("craete_ticket", err);
            } finally {
                resetButton(btn, btnTitle);
            }
        });
    </script>

    {{-- Store Ticket --}}
    <script>
        $(document).on('click', '.add-ticket-btn', async function(e) {
            e.preventDefault();
            let form = $(this).closest('form');
            const btn = $(this);
            const btnTitle = btn.html();
            try {
                loadButton(btn);
                const url = "{{ route('seller.support.tickets.store') }}";
                let ajaxRequest = new HttpRequest(url, 'POST');
                ajaxRequest.set_data_by_form_object(form);
                let response = await ajaxRequest.call();
                $("#" + modalId).modal("hide");
            } catch (err) {
                toast.error(err);
            } finally {
                resetButton(btn, btnTitle);
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

    {{-- Close --}}
    {{-- <script>
        $(document).on('click', '.close', function() {
            $('.custom-modal-size').addClass('mw-450px').removeClass('mw-650px');
            loadFormModal("", "", "Close Ticket", "Are you sure want to close?", "Yes,Close it!",
                "ticket-close-btn", `
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
    </script> --}}

    <script>
        const modalId = 'modal';
        $(document).on('click', '.close', async function() {
            const btn = $(this);
            const btnTitle = btn.html();
            try {
                loadButton(btn, 'Loading ...');
                let loadURL = `${baseUrl}/seller/support/ticket/create`;
                console.log(baseUrl);
                await loadModal(modalId, loadURL);
            } catch (err) {
                toast.error("Could not load add event popup. (error_ref: ticket-close-btn)");
                console.log("ticket-close-btn", err);
            } finally {
                resetButton(btn, btnTitle);
            }
        });

        // $(document).on('submit', '.ticket-close-form', async function(e) {
        //     e.preventDefault();
        //     let form = $(this).closest('form');
        //     try {

        //         let ajaxRequest = new HttpRequest(url, 'POST');
        //         ajaxRequest.set_data_by_form_object(form);
        //         let response = await ajaxRequest.call();
        //         console.log(response.message);
        //         $("#kt_modal_new_target").modal("hide");
        //         location.reload();
        //     } catch (err) {
        //         console.log(err);
        //         console.log("error");
        //     }
        // });
    </script>
@endpush
