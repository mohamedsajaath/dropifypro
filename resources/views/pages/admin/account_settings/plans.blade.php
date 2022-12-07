@extends('layouts.app')

@push('css')
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
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
                            @include('pages.admin.account_settings.includes.index')
                            <!--end::Details-->
                            <!--begin::Navs-->
                            <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                                        href="{{ route('admin.overview') }}">Overview</a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5"
                                        href="{{ route('admin.profile') }}">Profile</a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5"
                                        href="{{ route('admin.ebay') }}">E-Bay </a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 active"
                                        href="{{ route('admin.plan') }}">Plans</a>
                                </li>
                                <!--end::Nav item-->
                            </ul>
                            <!--begin::Navs-->
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
                            <a href="#" class="btn btn-primary er fs-6 px-8 py-4 my-5" id="plan_model">Add plan</a>
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
                                                <tr>
                                                    <td><a href="#" class="items text-dark">124521</a></td>
                                                    <td>2022-04-12</td>
                                                    <td>$621</td>
                                                    <td>5</td>
                                                </tr>
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
        $(document).on("click", "#plan_model", async function() {
    // $('.custom-modal-size').addClass('mw-1000px').removeClass('mw-650px');
    await loadFormModal(
        "action",
        "post",
        "Add Subcription plan",
        "",
        "submit",
        "submitButtonClass",
        `        <!--begin::Input group-->
    <div class="d-flex flex-column mb-8 fv-row">
        <!--begin::Label-->
        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
            <span class="required">Plan Name</span>
        </label>
        <!--end::Label-->
        <input type="text" class="form-control form-control-solid" placeholder="Plan Name" name="target_title" />
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="d-flex flex-column mb-8 fv-row">
            <label class="required fs-6 fw-semibold mb-2">Monthly Price</label>
            <div class="input-group">
                <span class="input-group-text">USD</span>
                <input type="number" class="form-control" name="price">
                <span class="input-group-text">.00</span>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column mb-8 fv-row">
        <label class="required fs-6 fw-semibold mb-2">Yearly Price</label>
        <!--begin::Input-->
        <div class="input-group">
            <span class="input-group-text">USD</span>
            <input type="number" class="form-control" name="price">
            <span class="input-group-text">.00</span>
        </div>
    </div>
    <!--end::Input group-->
           `
    );
});
    </script>
@endpush
