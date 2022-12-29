<div class="card-header align-items-center py-5 gap-2 gap-md-5" data-select2-id="select2-data-124-5bsj">
    <!--begin::Card title-->
    <div class="card-title d-flex gap-3">
        <!--begin::Search-->
        <div class="d-flex align-items-center position-relative my-1">
            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
            <span class="svg-icon svg-icon-1 position-absolute ms-4">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                        transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                    <path
                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                        fill="currentColor"></path>
                </svg>
            </span>
            <!--end::Svg Icon-->
            <input type="text" data-kt-docs-table-filter="search"
                class="form-control form-control-solid w-250px ps-14" placeholder="Search Product">
        </div>
        <!--end::Search-->
        {{-- <select class="form-control form-select float-right" data-control="select2">
            <option value="1">Day</option>
            <option value="2" selected>filter</option>
            <option value="3">6 Months</option>
            <option value="3">Year</option>
        </select>
        <select class="form-control form-select float-right" data-control="select2">
            <option value="1">Day</option>
            <option value="2" selected>filter</option>
            <option value="3">6 Months</option>
            <option value="3">Year</option>
        </select> --}}

        <!--begin::Filter-->
        <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
            <!--begin::Filter-->
            <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click"
                data-kt-menu-placement="bottom-end">
                <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                <span class="svg-icon svg-icon-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                            fill="currentColor"></path>
                    </svg>
                </span>
                <!--end::Svg Icon-->Filter
            </button>
            <!--begin::Menu 1-->
            <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true" id="kt-toolbar-filter">
                <!--begin::Header-->
                <div class="px-7 py-5">
                    <div class="fs-4 text-dark fw-bold">Filter Options</div>
                </div>
                <!--end::Header-->
                <!--begin::Separator-->
                <div class="separator border-gray-200"></div>
                <!--end::Separator-->
                <!--begin::Content-->
                <div class="px-7 py-5">
                    <!--begin::Input group-->
                    <div class="mb-10">
                        <!--begin::Label-->
                        <label class="form-label fs-5 fw-semibold mb-3">Plan Type:</label>
                        <!--end::Label-->
                        <!--begin::Options-->
                        <div class="d-flex flex-column flex-wrap fw-semibold" data-kt-docs-table-filter="plan_name">
                            <!--begin::Option-->
                            <label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                <input class="form-check-input" type="radio" name="plan_name" value="all"
                                    checked="checked">
                                <span class="form-check-label text-gray-600">All</span>
                            </label>
                            <!--end::Option-->
                            <!--begin::Option-->
                            <label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                <input class="form-check-input" type="radio" name="plan_name" value="starter">
                                <span class="form-check-label text-gray-600">Starter</span>
                            </label>
                            <!--end::Option-->
                            <!--begin::Option-->
                            <label class="form-check form-check-sm form-check-custom form-check-solid mb-3">
                                <input class="form-check-input" type="radio" name="plan_name" value="advanced">
                                <span class="form-check-label text-gray-600">Advanced</span>
                            </label>
                            <!--end::Option-->
                            <!--begin::Option-->
                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="radio" name="plan_name" value="business">
                                <span class="form-check-label text-gray-600">Business</span>
                            </label>
                            <!--end::Option-->
                        </div>
                        <!--end::Options-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="d-flex justify-content-end">
                        <button type="reset" class="btn btn-light btn-active-light-primary me-2"
                            data-kt-menu-dismiss="true" data-kt-docs-table-filter="reset">Reset</button>
                        <button type="submit" class="btn btn-primary" data-kt-menu-dismiss="true"
                            data-kt-docs-table-filter="filter">Apply</button>
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Menu 1-->
            <!--end::Filter-->
        </div>
        <!--end::Filter-->

    </div>

    <!--end::Card title-->
    <!--begin::Card toolbar-->
    <div class="card-toolbar flex-row-fluid justify-content-end gap-5" data-select2-id="select2-data-123-681x">

        <!--begin::Add product-->
        <a href="../../demo1/dist/apps/ecommerce/catalog/add-product.html" class="btn btn-primary add-products-btn"
            data-backdrop="static" data-keyboard="false">
            Add Product</a>
        <!--end::Add product-->
    </div>
    <!--end::Card toolbar-->
</div>
