<div class="col-xl-8 mb-5 mb-xl-10">
    <!--begin::Chart widget 20-->
    <div class="card card-flush ">
        <!--begin::Header-->
        <div class="card-header py-5">
            <div class="row w-100">
                <div class="col-2">
                    <h2 class="card-title fw-bold text-gray-800 fs-1 ">Sales</h2>
                </div>
                <div class="col-8"></div>
                <div class="col-2">
                    <select class="form-control form-select float-right" data-control="select2">
                        <option value="1">Day</option>
                        <option value="2" selected>Month</option>
                        <option value="3">6 Months</option>
                        <option value="3">Year</option>
                    </select>
                </div>
            </div>
            <!--begin::Title-->

            <!--end::Title-->
            <!--begin::Toolbar-->



            <!--end::Toolbar-->
        </div>
        <!--end::Header-->
        <!--begin::Card body-->
        <div class="card-body d-flex justify-content-between flex-column pb-0 px-0 pt-1">
            <!--begin::Items-->
            <div class="d-flex flex-wrap d-grid gap-5 px-9 mb-5">
                <!--begin::Item-->
                <div class="me-md-2">
                    <!--begin::Statistics-->
                    <div class="d-flex mb-2">
                        <span class="fs-4 fw-semibold text-gray-400 me-1">$</span>
                        <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">12,706</span>
                    </div>
                    <!--end::Statistics-->
                    <!--begin::Description-->
                    <span class="fs-6 fw-semibold text-gray-400">Revenue for April</span>
                    <!--end::Description-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div
                    class="border-start-dashed  border-1 border-gray-300 px-5 ps-md-10 pe-md-7 me-md-5">
                    <!--begin::Statistics-->
                    <div class="d-flex mb-2">
                        <span class="fs-4 fw-semibold text-gray-400 me-1">$</span>
                        <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">8,035</span>
                    </div>
                    <!--end::Statistics-->
                    <!--begin::Description-->
                    <span class="fs-6 fw-semibold text-gray-400">Profit for April</span>
                    <!--end::Description-->
                </div>
                <!--end::Item-->

            </div>
            <!--end::Items-->
            <!--begin::Chart-->
            <div id="kt_charts_widget_20" class="min-h-auto ps-4 pe-6" data-kt-chart-info="Revenue"
                 style="height: 300px"></div>
            <!--end::Chart-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Chart widget 20-->
</div>

@push('script')
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
@endpush
