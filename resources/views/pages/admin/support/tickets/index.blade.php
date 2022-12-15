@extends('layouts.app')
@section('content')
    @include('pages.admin.support.tickets.includes.ticket-details')
@endsection
@push('script')
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script>
        loadBreadCrumbWithHeader("Tickets", "Details", "Dashboard", "{{ route('admin.dashboard') }}")
    </script>


    {{-- create tickets --}}
    <script>
        $(document).on('click', '.create-ticket', function() {
            $('.custom-modal-size').addClass('mw-500px').removeClass('mw-650px');
            loadFormModal("", "", "Create Ticket", "Create new ticket here", "Create", "submit-btn", 
            "" );
        });
    </script>


    {{-- Account Manager details --}}
    <script>
        $(document).on('click', '.account-manager', function() {
            $('.custom-modal-size').addClass('mw-550px').removeClass('mw-650px');
            loadDetailModal("My Account Manager", "",
                ` `);
        });
    </script>


    {{-- View tickets details --}}
    <script>
        $(document).on('click', '.view-tickets', function() {
            $('.custom-modal-size').addClass('mw-700px').removeClass('mw-650px');
            loadDetailModal("Ticket", "View Tickets Details",
                ` `);
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
