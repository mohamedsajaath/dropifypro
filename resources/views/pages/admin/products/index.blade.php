@extends('layouts.app')


@push('css')
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
          type="text/css"/>
@endpush
@section('content')

    @include('pages.admin.products.includes.product-table')

@endsection
@push('script')
    {{--ADD PRODUCT MODAL--}}

    @include('pages.admin.products.includes.add-product-modal-script')

    {{--ADD PRODUCT MODAL--}}


    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>


    <script>
        loadBreadCrumbWithHeader("Products", "All", "Dashboard", "{{ route('admin.dashboard') }}")
    </script>

@endpush

