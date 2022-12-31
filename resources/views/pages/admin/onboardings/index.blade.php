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
        const modalId = 'modal';
        $(document).on('click', '.add-onboarding', async function () {
            try {
                let loadURL = `${baseURL}/admin/onboardings/create`;
                await loadModal(modalId, loadURL);
            }catch(err){
                console.log(err);
            }
        });


        $(document).on('click', '.add-event', async function (e) {
            e.preventDefault();
            let form = $(this).closest('form');
            try {
                const url = "{{ route('admin.onboardings.store') }}";
                let ajaxRequest = new HttpRequest(url, 'POST');
                ajaxRequest.set_data_by_form_object(form);
                let response = await ajaxRequest.call();
                $("#" + modalId).modal("hide");
                console.log(response.message)
            } catch (err) {
                console.log(err);
                console.log("error");
            }
        });

        $(document).on('click', '.edit_event', async function () {
            try {
                let onboardingId = $(this).data('id');
                let loadUrl = baseURL + '/admin/onboardings/' + onboardingId + '/edit';
                await loadModal(modalId, loadUrl);
            }catch(err){
                console.log(err);
            }
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
                $("#" + modalId).modal("hide");
            } catch (err) {
                console.log(err);
                console.log("error");
            }

        })
    </script>
@endpush
