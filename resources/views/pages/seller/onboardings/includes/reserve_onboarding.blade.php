@extends('layouts.modals.modal-base.index')
@section('title','Reserve On-boarding slot')
@section('content')
    <!--begin:Form-->
    <form id="kt_modal_new_target_form" class="form" action="{{route('seller.onboardings.update', [$id])}}">
        @csrf
        <div class="modal-body">
            <div class="row">
                <div class="col-12">
                    <div class="fv-row mb-9 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold  required ">Title of reservation</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text"  class="text-left form-control form-control-solid align-items-end" name="title"/>
                        <!--end::Input-->
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                        <div class="fv-plugins-message-container invalid-feedback"></div>
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
            <button type="submit" id="" class="btn btn-primary">
                <span class="indicator-label">Book</span>
                <span class="indicator-progress">Please wait...
    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>
        <!--end::Actions-->
    </form>
    <!--end:Form-->
@endsection


