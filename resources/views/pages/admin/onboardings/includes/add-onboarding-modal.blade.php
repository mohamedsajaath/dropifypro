<script>
    $(document).on('click', '.add-onboarding', function () {
        loadFormModal("", "", "Add New On-boarding", "", "Add", "btn-class", `
            <div class="modal-body py-10 px-lg-17">
                        <div class="row row-cols-lg-2 g-10">
                                <div class="col">
                                    <div class="fv-row mb-9 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2 required">Event Start Date</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control form-control-solid flatpickr-input" name="calendar_event_start_date" placeholder="Pick a start date" id="kt_calendar_datepicker_start_date" type="text" readonly="readonly">
                                        <!--end::Input-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                </div>
                                <div class="col" data-kt-calendar="datepicker">
                                    <div class="fv-row mb-9">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">Event Start Time</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control form-control-solid flatpickr-input" name="calendar_event_start_time" placeholder="Pick a start time" id="kt_calendar_datepicker_start_time" type="text" readonly="readonly">
                                        <!--end::Input-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row row-cols-lg-2 g-10">
                                <div class="col">
                                    <div class="fv-row mb-9 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2 required">Event End Date</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control form-control-solid flatpickr-input" name="calendar_event_end_date" placeholder="Pick a end date" id="kt_calendar_datepicker_end_date" type="text" readonly="readonly">
                                        <!--end::Input-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                </div>
                                <div class="col" data-kt-calendar="datepicker">
                                    <div class="fv-row mb-9">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">Event End Time</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control form-control-solid flatpickr-input" name="calendar_event_end_time" placeholder="Pick a end time" id="kt_calendar_datepicker_end_time" type="text" readonly="readonly">
                                        <!--end::Input-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                        </div>
            `);
    });
</script>
