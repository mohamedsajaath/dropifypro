@extends('layouts.modals.modal-base.index')
@section('title','Edit Manager')
@section('content')

<form id="kt_ecommerce_settings_general_form" data-id="{{ $account_managers->id }}" class="form fv-plugins-bootstrap5 fv-plugins-framework"
    action="{{route('admin.support.account-managers.store')}}" method="POST">
  <!--begin::Input group-->
  @csrf
  <div class="fv-row mb-3 fv-plugins-icon-container">
      <label class="fs-6 fw-semibold form-label mt-3">
          <span class="required">Name</span>
      </label>
      <input type="text" class="form-control" name="name" value="{{ $account_managers->name }}">
  </div>
  <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
      <div class="col">
          <div class="fv-row mb-3">
              <!--begin::Label-->
              <label class="fs-6 fw-semibold form-label mt-3">
                  <span class="required">Email</span>
              </label>
              <input type="email" class="form-control" name="email" value="{{ $account_managers->email }}">
              <div class="fv-plugins-message-container invalid-feedback"></div>
          </div>
      </div>
      <div class="col">
          <div class="fv-row mb-3">
              <label class="fs-6 fw-semibold form-label mt-3">
                  <span class="required">Whatsapp Number</span>
              </label>
              <input type="text" class="form-control" name="contact_no" value="{{ $account_managers->contact_no }}">
          </div>
      </div>
  </div>
  <div class="row row-cols-1">
      <div class="col-6 mb-3">
          <label class="fs-6 fw-semibold form-label mt-3">
              <span class="required">Response Time</span>
          </label>
          <div class="input-group input-group-append">
              <input type="number" class="form-control form-control" placeholder="" name="response_time"
                     maxlength="5" value="{{ $account_managers->response_time }}" required/>
              <span class="input-group-text">Minutes</span>
          </div>
      </div>
  </div>
  <!--begin::Separator-->
  <div class="separator mb-6"></div>
  <!--end::Separator-->
  <!--begin::Action buttons-->
  <div class="d-flex justify-content-end">
      <!--begin::Button-->
      <button type="reset" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
      <!--end::Button-->
      <!--begin::Button-->
      <button type="button" data-kt-contacts-type="submit" id="edit-account-manager" class="btn btn-primary add-managers-btn">
          <span class="indicator-label">Save</span>
          <span class="indicator-progress">Please wait...
              <span class="spinner-border spinner-border-sm align-middle ms-2">
              </span>
          </span>
      </button>
      <!--end::Button-->
  </div>
  <!--end::Action buttons-->
</form>
@endsection

