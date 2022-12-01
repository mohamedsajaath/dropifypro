@extends('layouts.app')


@push('css')

@endpush
@section('content')
<div class="container">
    <div class="row  mb-5 mb-xl-10 pl-2 pr-2" style="padding: 0 2rem;" >
        <div class="card mb-xl-6 ">

            <!--begin::Card body-->
            <div class="card-header p-20 border-20 justify-content-center" style="border: black;">

                <form id="kt_modal_new_card_form" class="form fv-plugins-bootstrap5 fv-plugins-framework w-50" action="# style="padding:1rem;">
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                            <span >Product ID </span>
                            <i  data-bs-toggle="tooltip" aria-label="Specify a card holder's name" data-kt-initialized="1"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="Product ID" name="card_name" value="Max Doe">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                            <span class="required">Quantity</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" aria-label="Specify a card holder's name" data-kt-initialized="1"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->
                   
                     <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                            <span class="required">Date</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" aria-label="Specify a card holder's name" data-kt-initialized="1"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light btn-sm me-3">Reset</button>
                        <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary btn-sm me-3">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>

            </div>
            <!--end::Card body-->
        </div>

    </div>
</div>


@endsection
@push('script')
<script>
    loadBreadCrumbWithHeader("Wholesale", "Request", "Dashboard", "#")
</script>

@endpush