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
    
    <script>
    $(document).on('click', '.add-onboarding', function () {
        loadFormModal("", "", "edit On-boarding", "", "Add", "btn-class", `

    @include('pages.admin.onboardings.includes.add-onboarding-modal')

    `);
    });
</script>




@endpush

