@extends('layouts.app')

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        {{-- LIST VIEW --}}
        @include('pages.admin.onboardings.includes.list_view')
        {{-- LIST VIEW --}}
    </div>
@endsection
@push('script')
    <script>
        loadBreadCrumbWithHeader("Onboarding", "Home", "Dashboard", "#");
    </script>

    <script>
        $(document).on('click', '.add-onboarding', function () {
            loadFormModal("", "", "add On-boarding", "", "Add", "add-event", `
    @include('pages.admin.onboardings.includes.add-modal')
            `);
        });


        $(document).on('click', '.add-event', async function (e) {
            e.preventDefault();
            let form = $(this).closest('form');
            ;
            try {
                const url = "{{ route('admin.on-boarding.store') }}";
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
    </script>


    <script>
        $(document).on("click", ".edit_event", async function () {
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
        });

        $(document).on("click", ".edit_onboarding_submit", function (e) {
            e.preventDefault();
            // console.log( $(this).closest('form'))
            // $(this).closest('form');
            let form = $(this).closest('form');
            try {
                const url = "{{ route('admin.on-boarding.update', ['id' => '2']) }}";
                let ajaxRequest = new HttpRequest(url, 'POST');
                ajaxRequest.set_data_by_form_object(form);
                let response = ajaxRequest.call();
                console.log(response.message);
                $("#kt_modal_new_target").modal("hide");
                // window.location = "{{ route('admin.onboardings', ['id' => '2']) }}";
            } catch (err) {
                console.log(err);
                console.log("error");
            }

        })
    </script>
@endpush
