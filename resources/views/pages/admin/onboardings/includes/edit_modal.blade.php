<!--begin::Modal dialog-->
<div class="modal-dialog modal-dialog-centered mw-650px custom-modal-size modal-dialog-scrollable">
    <!--begin::Modal content-->
    <div class="modal-content rounded">
        <!--begin::Modal header-->
        <div class="modal-header pb-0 border-0 justify-content-end">
            <!--begin::Close-->
            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                <span class="svg-icon svg-icon-1">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)"
                      fill="currentColor"/>
                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                      fill="currentColor"/>
                </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
            <!--end::Close-->
        </div>
        <!--begin::Modal header-->
        <!--begin::Modal body-->
        <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15 " id="modal-content-body">
            <!--begin:Form-->
            <form class="form" data-id="{{ $onboarding->id }}">
                <!--begin::Heading-->
                <div class="mb-13 text-center">
                    <!--begin::Title-->
                    <h1 class="mb-3">Edit On-boarding slots</h1>
                    <!--end::Title-->
                </div>
                @csrf
                <div class="modal-body py-10 px-lg-17">
                    <div class="row">
                        <div class="col-4">
                            <div class="fv-row mb-9 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                <!--begin::Label-->
                                <label class="fs-6 fw-semibold mb-2 required">Event Start Date</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="date" class="form-control form-control-solid" name="date" value="{{ $onboarding->date }}"/>
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
                                <input type="time" class="form-control form-control-solid" name="start_time" value="{{ $onboarding->start_time }}"/>
                                <!--end::Input-->
                            </div>
                        </div>
                        <div class="col-4" data-kt-calendar="datepicker">
                            <div class="fv-row mb-9">
                                <label class="fs-6 fw-semibold mb-2">Event End Time</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="time" class="form-control form-control-solid" name="end_time" value="{{  $onboarding->end_time }}"/>
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
                    <button type="submit" id="edit-onboarding-event" class="btn btn-primary">
                        <span class="indicator-label">Add</span>
                        <span class="indicator-progress">Please wait...
            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end:Form-->
        </div>
        <!--end::Modal body-->
    </div>
    <!--end::Modal content-->
</div>
<!--end::Modal dialog-->
