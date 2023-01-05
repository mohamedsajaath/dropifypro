@extends('layouts.app')
@section('content')
    @include('includes.bread_crumb_with_header', [
        'header' => 'Tickets',
        'bread_crumbs' => ['Dashboard' => route('dashboard'), 'Support' => ''],
    ])
    @include('pages.admin.support.tickets.includes.table-details')
@endsection
@push('script')
    {{-- create tieckts --}}
    {{-- <script>
        const modalId = 'modal';
        $(document).on('click', '.add-manager', async function() {
            const btn = $(this);
            const btnTitle = btn.html();
            try {
                loadButton(btn, 'Loading ...');
                let loadURL = `${baseUrl}/admin/support/ticket/create`;
                await loadModal(modalId, loadURL);
            } catch (err) {
                toast.error("Could not load add event popup. (error_ref: ticket)");
                console.log("ticket", err);
            } finally {
                resetButton(btn, btnTitle);
            }
        });
    </script> --}}


    {{-- Account Manager details --}}
    <script>
        $(document).on('click', '.account-manager', function() {
            $('.custom-modal-size').addClass('mw-550px').removeClass('mw-650px');
            loadDetailModal("My Account Manager", "",
                ` `);
        });
    </script>

    {{-- Store --}}
    <script>
        $(document).on('click', '.add-managers-btn', async function(e) {
            e.preventDefault();
            let form = $(this).closest('form');
            const btn = $(this);
            const btnTitle = btn.html();
            try {
                loadButton(btn);
                const url = "{{ url('/admin/support/tickets') }}";
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


    {{-- Close --}}
    <script>
        $(document).on('click', '.close', function() {
            $('.custom-modal-size').addClass('mw-650px').removeClass('mw-650px');
            loadFormModal("", "", "Close Ticket", "Are you sure want to close?", "Yes,Close it!", "submit-btn",
                ` `);
        });
    </script>
@endpush
