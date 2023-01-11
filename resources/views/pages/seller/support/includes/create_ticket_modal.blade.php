@extends('layouts.modals.modal-base.index')
@section('title', 'Create Ticket')
@section('content')
    <form id="kt_ecommerce_settings_general_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action=""
        method="POST">
        @csrf
        <div class="card-body p-5">
            <div class="d-flex flex-column mt-2 fv-row fv-plugins-icon-container">
                <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">Subject :</label>
                <input type="text" class="form-control form-control-solid" placeholder="Subject" name="title"
                    value="">
            </div>
            <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                <label class="fs-6 fw-semibold mb-2">Body :</label>
                <textarea class="form-control form-control-solid" rows="3" name="description" placeholder="Body"></textarea>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button type="reset" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
            <button type="button" data-kt-contacts-type="submit" class="btn btn-primary add-ticket-btn">
                <span class="indicator-label">Save</span>
                <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2">
                    </span>
                </span>
            </button>
        </div>
    </form>
@endsection
