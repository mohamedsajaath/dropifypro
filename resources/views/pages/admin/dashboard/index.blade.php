@extends('layouts.app')

@push('css')
{{--    <link href="{{ asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.css') }}" rel="stylesheet"--}}
{{--          type="text/css"/>--}}
@endpush
@section('content')
{{--    <div id="kt_app_content" class="app-content flex-column-fluid">--}}

{{--        @include('pages.admin.dashboard.includes.cards')--}}

{{--        <div class="row g-5 g-xl-10  mb-xl-10 w-100" style="padding-left: 2%;">--}}

{{--            <div class="row mb-5 mt-5 w-100" style="margin-left: 1px;">--}}
{{--                @include('pages.admin.dashboard.includes.best-sellers-chart')--}}
{{--                @include('pages.admin.dashboard.includes.sales-chart')--}}
{{--            </div>--}}

{{--            <div class="row m-1">--}}
{{--                @include('pages.admin.dashboard.includes.top-sellings')--}}
{{--                @include('pages.admin.dashboard.includes.top-10-sellers')--}}
{{--            </div>--}}

{{--        </div>--}}

{{--    </div>--}}

@endsection
@push('script')
{{--    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>--}}
{{--    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>--}}
{{--    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>--}}
{{--    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>--}}
{{--    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>--}}
{{--    <script>--}}
{{--        loadBreadCrumbWithHeader("Dashboard", "", "", "")--}}
{{--    </script>--}}

@endpush
