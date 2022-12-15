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
        $(document).on('click', '.add-managers-btn', async function(e) {
            e.preventDefault();
            let form = $(this).closest('form');
            try {
                const url = "{{ route('admin.support.account-managers.store') }}";
                let ajaxRequest = new HttpRequest(url, 'POST');
                ajaxRequest.set_data_by_form_object(form);
                let response = await ajaxRequest.call();
                console.log(response.message);
                alert(response.message);

            } catch (err) {
                console.log(err);
                alert("error");
            }
        });

        $(document).on('click', '.add-manager', function() {
            $('.custom-modal-size').addClass('mw-750px').removeClass('mw-650px');
            loadFormModal("", "", "ADD MANAGER", "New manager can add here", "Submit", "add-managers-btn",
                '{{ route('admin.support.account-managers.create') }}');
        });
    </script>



    {{-- Edit Manager --}}
    <script>

        
        $(document).on('click', '.edit-manager', function() {
            $('.custom-modal-size').addClass('mw-750px').removeClass('mw-650px');
            loadFormModal("", "", "EDIT MANAGER", "Manager details can edit here", "Save", "edit-managers-btn",
                '{{ route('admin.support.account-managers.edit') }}');
        });
    </script>


    {{-- Assign Sellers --}}
    <script>
        $(document).on('click', '.assign-sellers', function() {
            $('.custom-modal-size').addClass('mw-750px').removeClass('mw-650px');
            loadDetailModal("ASSIGN SELLERS", "Manager can Assign Sellers here",
                '{{ route('admin.support.account-managers.edit') }}');

        });
    </script>



    {{-- Remove Sellers --}}
    <script>
        $(document).on('click', '.seller-list', function() {
            $('.custom-modal-size').addClass('mw-750px').removeClass('mw-650px');
            loadDetailModal("REMOVE SELLERS", "Manager can Assign Sellers here",
                '{{ route('admin.support.account-managers.edit') }}');

        });
    </script>
@endpush
