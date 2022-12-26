@extends('layouts.app')


@push('css')
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
          type="text/css"/>
@endpush
@section('content')

    @include('pages.admin.products.includes.product-table')

@endsection
@push('script')
    <script>
        $(document).on("click", ".add-products-btn", async function (e) {
            e.preventDefault()
            $('#kt_modal_new_target').modal({
                backdrop: 'static',
                keyboard: false
            })
            $('.custom-modal-size').addClass('mw-75').removeClass('mw-650px');
            await loadFormModal("", "", "Add New Product", "", "Proceed", "add-product-btn", `
         @include('pages.admin.products.includes.create-modal')
            `);
            $(".variant-type-values").select2({
                tags: true,
                tokenSeparators: [',', ' ']
            });

            $('select.category').select2({
                dropdownParent: $('#kt_modal_new_target'),
            });
            $('select.weight-unit').select2({
                dropdownParent: $('#kt_modal_new_target'),
                minimumResultsForSearch: Infinity
            });
            $('.input-images1').imageUploader();
        });
    </script>
    @include('pages.admin.products.includes.add-product-modal-script')

    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>

    <script>
        loadBreadCrumbWithHeader("Products", "All", "Dashboard", "{{ route('admin.dashboard') }}")
    </script>
@endpush

