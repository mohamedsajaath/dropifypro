@csrf
<div class="modal-body py-8 px-lg-17">
    <div class="row row-cols-lg-2 g-10">
        <div class="col">
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
        <div class="col" data-kt-calendar="datepicker">
            <div class="fv-row mb-9">
                <!--begin::Label-->
                <label class="fs-6 fw-semibold mb-2">Event Start Time</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="time" class="form-control form-control-solid" name="start_time"/>
                <!--end::Input-->
            </div>
            <div class="fv-row mb-9">
                <!--begin::Label-->
                <label class="fs-6 fw-semibold mb-2">Event End Time</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="time"  class="form-control form-control-solid" name="end_time"/>
                <!--end::Input-->
            </div>
        </div>
    </div>
    <!--end::Input group-->

</div>
