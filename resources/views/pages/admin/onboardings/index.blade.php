@extends('layouts.app')
@section('content')
    @include('includes.bread_crumb_with_header',[
        'header'=>'Onboardings',
        'bread_crumbs'=>['Dashboard'=>route('dashboard')]
    ])
    <div id="kt_app_content" class="app-content flex-column-fluid">
        {{-- LIST VIEW --}}
        @include('pages.admin.onboardings.includes.list_view')
        {{-- LIST VIEW --}}
    </div>
@endsection
@push('script')
    <script>
        $(document).on('click', '.add-onboarding', function () {
            let loadUrl = baseUrl + '/admin/onboardings/create';
            $("#modal").load(loadUrl, function () {
                $('#modal').modal('show');
            });
        });


        $(document).on('click', '.add-event', async function (e) {
            e.preventDefault();
            let form = $(this).closest('form');
            try {
                const url = "{{ route('admin.onboardings.store') }}";
                let ajaxRequest = new HttpRequest(url, 'POST');
                ajaxRequest.set_data_by_form_object(form);
                let response = await ajaxRequest.call();
                console.log(response.message);
                $("#kt_modal_new_target").modal("hide");
            } catch (err) {
                console.log(err);
                console.log("error");
            }
        });

        $(document).on('click', '.edit_event', function () {
            let onboardingId = $(this).data('id');
            let loadUrl = baseUrl + '/admin/onboardings/' + onboardingId + '/edit';
            $("#modal").load(loadUrl, function () {
                $('#modal').modal('show');
            });
        });

        /*$(document).on("click", ".edit_event", async function () {
            // $('.custom-modal-size').addClass('mw-1000px').removeClass('mw-650px');
            // let onboarding_id = $(this).data('id');
            let onboarding_id = $(this).data('id');
            let url = "{{ url('/onboardings/') }}" + "/" + onboarding_id;
            await loadEditFormModal(
                "",
                "post",
                "Edit onboarding",
                "",
                "Update",
                "edit_onboarding_submit",
                url
            );
            // $('.edit_plan_submit').attr('data-id',plan_id);
        });*/

        $(document).on("click", ".edit_onboarding_submit", function (e) {
            e.preventDefault();
            // console.log( $(this).closest('form'))
            // $(this).closest('form');
            let form = $(this).closest('form');
            try {
                const url = "{{ route('admin.onboardings.update', ['onboarding' => '2']) }}";
                let ajaxRequest = new HttpRequest(url, 'POST');
                ajaxRequest.set_data_by_form_object(form);
                let response = ajaxRequest.call();
                console.log(response.message);
                $("#kt_modal_new_target").modal("hide");
            } catch (err) {
                console.log(err);
                console.log("error");
            }

        })
    </script>
@endpush
