@extends('layouts.app')

@push('css')
  
    <link href="{{ asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.css') }}" rel="stylesheet"
          type="text/css"/>
@endpush
@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">

        @include('pages.seller.dashboard.includes.cards')

        <div class="row g-5 g-xl-10  mb-xl-10 w-100" style="padding-left: 2%;">
            <!--begin::Col-->
            @include('pages.seller.dashboard.includes.sales-chart')
            <!--end::Col-->
            <!--begin::Col-->
            @include('pages.seller.dashboard.includes.recent-sales')
            <!--end::Col-->

        </div>

    </div>


@endsection
@push('script')

    <script>
        loadBreadCrumbWithHeader("Dashboard", "", "", "")
    </script>

@endpush
