@extends('layouts.app')

@push('css')
@endpush

@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!--begin::Navbar-->
                    <div class="card mb-5 mb-xl-10">
                        <div class="card-body pt-9 pb-0">
                            <!--begin::Details-->
                            @include('pages.admin.account.includes.index')
                            <!--end::Details-->
                        </div>
                    </div>
                    <!--end::Navbar-->
                    <!--begin::details View-->
                    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                        <!--begin::Card header-->
                        <div class="card-header cursor-pointer">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Subscription Plan Setting</h3>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Action-->
                            {{-- <a href="#" class="btn btn-primary er fs-6 px-8 py-4 my-5" id="plan_model">Add plan</a> --}}
                            <!--end::Action-->
                        </div>
                        <!--begin::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body p-9">
                            <div class="card mb-5 mb-xl-8 m-8">
                                <!--begin::Body-->
                                <div class="card-body py-3">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table id="kt_datatable_column_rendering"
                                            class="table table-striped text-uppercase table-row-bordered gy-5 gs-7">
                                            <thead>
                                                <tr class="fw-semibold fs-6 text-gray-400">
                                                    <th>Plan Name</th>
                                                    <th>Price Month</th>
                                                    <th>Price Year</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($plan_details as $plan_detail)
                                                    <tr>
                                                        <td>{{ $plan_detail->name }}</td>
                                                        <td>£
                                                            {{ number_format((float) $plan_detail->price_month, 2, '.', '') }}
                                                        </td>
                                                        <td>£
                                                            {{ number_format((float) $plan_detail->price_year, 2, '.', '') }}
                                                        </td>
                                                        <td><button class="btn btn-sm btn-success edit_plan"
                                                                data-id="{{ $plan_detail->id }}">Edit</button></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--end::Table container-->
                                <!--begin::Body-->
                            </div>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::details View-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
    </div>
@endsection
@push('script')
    <script>
        loadBreadCrumbWithHeader("Account", "Plans", "Dashboard", "#")
    </script>
    <script>
        $(document).on("click", "#plan_model", async function() {
            // $('.custom-modal-size').addClass('mw-1000px').removeClass('mw-650px');
            await loadFormModal(
                "",
                "post",
                "Add Subcription plan",
                "",
                "submit",
                "add_plan_submit",
                ` @csrf
 <!--begin::Input group-->
 <div class="d-flex flex-column mb-8 fv-row">
    <!--begin::Label-->
    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
        <span class="required">Plan Name</span>
    </label>
    <!--end::Label-->
    <input type="text" class="form-control form-control-solid" placeholder="Plan Name" name="name" />
</div>
<!--end::Input group-->
<!--begin::Input group-->
<div class="d-flex flex-column mb-8 fv-row">
        <label class="required fs-6 fw-semibold mb-2">Monthly Price</label>
        <div class="input-group">
            <span class="input-group-text">GBP</span>
            <input type="number" step="0.01" class="form-control" name="price_month">
        </div>
    </div>
</div>
<div class="d-flex flex-column mb-8 fv-row">
    <label class="required fs-6 fw-semibold mb-2">Yearly Price</label>
    <!--begin::Input-->
    <div class="input-group">
        <span class="input-group-text">GBP</span>
        <input type="number" step="0.01" class="form-control" name="price_year">
    </div>
</div>
<!--end::Input group-->
       `
            );
        });
    </script>
    <script>
        $(document).on("click", ".add_plan_submit", async function(e) {
            e.preventDefault();
            let form = $(this).closest('form');
            try {
                const url = "{{ route('plan.store') }}";
                let ajaxRequest = new HttpRequest(url, 'POST');
                ajaxRequest.set_data_by_form_object(form);
                let response = await ajaxRequest.call();
                console.log(response.message);
                $("#kt_modal_new_target").modal("hide");
                window.location = "{{ route('admin.plan') }}";

            } catch (err) {
                console.log(err);
                console.log("error");
            }
        });
    </script>
    <script>
        $(document).on("click", ".edit_plan", async function() {
            // $('.custom-modal-size').addClass('mw-1000px').removeClass('mw-650px');
            let plan_id = $(this).data('id');
            let url = "{{ url('/plan/') }}" + "/" + plan_id;
            await loadEditFormModal(
                "",
                "post",
                "Edit Subcription plan",
                "",
                "Update",
                "edit_plan_submit",
                url
            );
            // $('.edit_plan_submit').attr('data-id',plan_id);
        });
    </script>
    <script>
        $(document).on("click", ".edit_plan_submit", async function(e) {
            e.preventDefault();
            let form = $(this).closest('form');
            try {
                const url = "{{ route('plan.update') }}";
                let ajaxRequest = new HttpRequest(url, 'POST');
                ajaxRequest.set_data_by_form_object(form);
                let response = await ajaxRequest.call();
                // console.log(response.message);
                $("#kt_modal_new_target").modal("hide");
                // if(response.message == "Successfully Updated"){
                //     $("#kt_datatable_column_rendering").load();
                // }

            } catch (err) {
                console.log(err);
                console.log("error");
            }
        });
    </script>
@endpush
