@extends('layouts.modals.modal-base.index')
@section('title','Define On-boarding slots')
@section('content')
    <!--begin:Form-->
    <form id="kt_modal_new_target_form" class="form" action="{{url('seller/onboardings')}}" method="POST">
        @csrf
        <div class="modal-body">
            <div class="row">
                <div class="col-4">
                    <div class="fv-row mb-9 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold mb-2 required">Event Start Date</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="date" class="form-control form-control-solid" name="date"/>
                        <!--end::Input-->
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                </div>
                <div class="col-4" data-kt-calendar="datepicker">
                    <div class="fv-row mb-9">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold mb-2">Event Start Time</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="time" class="form-control form-control-solid" name="start_time" />
                        <!--end::Input-->
                    </div>
                </div>
                <div class="col-4" data-kt-calendar="datepicker">
                    <div class="fv-row mb-9">
                        <label class="fs-6 fw-semibold mb-2">Event End Time</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="time" class="form-control form-control-solid" name="end_time" />
                    </div>
                </div>
            </div>
            <!--end::Input group-->
        </div>
        <!--begin::Actions-->
        <div class="text-center">
            <button type="button" data-bs-dismiss="modal" class="btn btn-light me-3">
                Cancel
            </button>
            <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary add-event">
                <span class="indicator-label">Add</span>
                <span class="indicator-progress">Please wait...
    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>
        <!--end::Actions-->
    </form>
    <!--end:Form-->
@endsection


