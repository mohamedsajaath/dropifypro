@extends('layouts.app')

@section('content')

    <div id="kt_app_content" class="app-content flex-column-fluid">
        {{--LIST VIEW--}}
        @include('pages.admin.onboardings.includes.list-view')
        {{--LIST VIEW--}}
    </div>

@endsection
@push('script')

    <script>
        loadBreadCrumbWithHeader("Onboarding", "Home", "Dashboard", "#");
    </script>
    @include('pages.admin.onboardings.includes.add-onboarding-modal')

@endpush

