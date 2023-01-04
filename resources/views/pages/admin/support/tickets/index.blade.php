@extends('layouts.app')
@section('content')
    @include('pages.admin.support.tickets.includes.table-details')
@endsection
@push('script')
    <script>
        loadBreadCrumbWithHeader("Tickets", "", "","")
    </script>

    {{-- create tickets --}}
    <script>
        $(document).on('click', '.create-ticket', function() {
            $('.custom-modal-size').addClass('mw-500px').removeClass('mw-650px');
            loadFormModal("", "", "CREATE TICKET", "", "Create", "ticket-btn",
                `
    @csrf
    <div class="card-body p-9 card mb-5">
            <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container"> 
                <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">Title :</label>
                <input type="text" class="form-control form-control-solid" placeholder="Title" name="title" value="" required>
            </div>
            <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                <label class="fs-6 fw-semibold mb-2">Description :</label>
                <textarea class="form-control form-control-solid" rows="3" name="description" placeholder="Description" value="description" required></textarea>
            </div>
    </div>`);
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