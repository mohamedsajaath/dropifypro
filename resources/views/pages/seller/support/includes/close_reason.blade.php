@extends('layouts.modals.modal-base.index')
@section('title', 'Close Ticket')
@section('content')
    <form id="kt_modal_new_card_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
        @csrf
        <div class="card-body p-9 card mb-5">
            <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                <label class="fs-6 fw-semibold mb-2">
                    <span class="required">Reason :</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                        aria-label="Specify a card holder's name" data-kt-initialized="1"></i>
                </label>
                <textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Reason"></textarea>
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
