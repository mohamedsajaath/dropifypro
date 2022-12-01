@extends('layouts.app')


@push('css')
    <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')  }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css')  }}" rel="stylesheet"
          type="text/css"/>
    <style>
        .max-width-100vw {
            max-width: 100vw;
        }

        .info-cards {
            padding-left: 2%;
        }
    </style>

@endpush
@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">

        {{--LIST VIEW--}}
        @include('pages.admin.onboardings.includes.list-view')
        {{--LIST VIEW--}}

        {{--CALENDER--}}
        @include('pages.admin.onboardings.includes.calender')
        {{--CALENDER--}}


    </div>
@endsection
@push('script')
    <script>
        loadBreadCrumbWithHeader("Onboarding", "Home", "Dashboard", "#")
    </script>
@endpush

