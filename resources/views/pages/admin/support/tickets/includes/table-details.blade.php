<div id="kt_app_content_container" class="app-container container-xxl">
    <!--begin::Inbox App - Messages -->
    <div class="d-flex flex-column flex-lg-row">
        <!--begin::Content-->
        <div class="flex-lg-row-fluid ms-lg-7 ms-xl-3">
            <!--begin::Card-->
            <div class="card">
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <!--begin::Actions-->
                    <div class="d-flex flex-wrap gap-2">
                        <!--begin::Delete-->
                        <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary"
                            data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-placement="top" aria-label="Delete"
                            data-kt-initialized="1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                        fill="currentColor"></path>
                                    <path opacity="0.5"
                                        d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                        fill="currentColor"></path>
                                    <path opacity="0.5"
                                        d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                        <!--end::Delete-->
                        <!--begin::Filter-->
                        <div>
                            <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3"
                                        data-kt-inbox-listing-filter="show_all">All</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3"
                                        data-kt-inbox-listing-filter="show_read">Read</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3"
                                        data-kt-inbox-listing-filter="show_unread">Unread</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3"
                                        data-kt-inbox-listing-filter="show_starred">Starred</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Filter-->
                    </div>
                    <!--end::Actions-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center flex-wrap gap-2">
                        <!--begin::Search-->
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                            <button type="button" class="btn btn-primary create-ticket">Create Ticket</button>
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Actions-->
                </div>

                <div class="card-body p-0">
                    <!--begin::Table-->
                    <div id="kt_inbox_listing_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="table-responsive">
                            <table
                                class="table table-striped table-hover table-row-dashed fs-6 gy-5 my-0 dataTable no-footer">

                                <!--begin::Table body-->
                                <tbody class="mw-100">
                                    <tr class="odd mw-100">
                                        <td class="ps-9">
                                            <!--begin::Checkbox-->
                                            <div
                                                class="form-check form-check-sm form-check-custom form-check-solid mt-3">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                            <!--end::Checkbox-->
                                        </td>
                                        <!--begin::Title-->
                                        <td>
                                            <div class="text-dark mb-1">
                                                <!--begin::Heading-->
                                                <a href="#" class="text-dark view-tickets">
                                                    <span class="fw-bold">Digital PPV Customer Confirmation</span>
                                                    <span class="fw-bold d-none d-md-inine">-</span>
                                                </a>
                                                <!--end::Heading-->
                                            </div>
                                            <!--begin::Badges-->
                                            <div class="badge badge-light-danger">new</div>
                                            <!--end::Badges-->
                                        </td>
                                        <!--end::Title-->
                                        <td><span class="badge badge-light-success">Accepted</span></td>
                                        <td></td>

                                        <td></td>
                                        <!--begin::Date-->
                                        <td class="w-100px fs-7 pe-9">
                                            <span class="fw-semibold">8:30 PM</span>
                                        </td>
                                        <!--end::Date-->
                                    </tr>
                                    <tr class="even">
                                        <td class="ps-9">
                                            <!--begin::Checkbox-->
                                            <div
                                                class="form-check form-check-sm form-check-custom form-check-solid mt-3">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                            <!--end::Checkbox-->
                                        </td>
                                        <!--begin::Title-->
                                        <td>
                                            <div class="text-dark mb-1">
                                                <!--begin::Heading-->
                                                <a href="#" class="text-dark view-tickets">
                                                    <span class="fw-bold">Your iBuy.com grocery shopping
                                                        confirmation</span>
                                                </a>
                                                <!--end::Heading-->
                                            </div>
                                            <!--begin::Badges-->
                                            <div class="badge badge-light-danger">new</div>
                                            <!--end::Badges-->
                                        </td>
                                        <!--end::Title-->
                                        <td><span class="badge badge-light-danger">Rejected</span></td>
                                        <td></td>

                                        <td></td>
                                        <!--begin::Date-->
                                        <td class="w-100px fs-7 pe-9">
                                            <span class="fw-semibold">day ago</span>
                                        </td>
                                        <!--end::Date-->
                                    </tr>
                                    <tr class="even">
                                        <td class="ps-9">
                                            <!--begin::Checkbox-->
                                            <div
                                                class="form-check form-check-sm form-check-custom form-check-solid mt-3">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                            <!--end::Checkbox-->
                                        </td>
                                        <!--begin::Title-->
                                        <td>
                                            <div class="text-dark mb-1">
                                                <!--begin::Heading-->
                                                <a href="#" class="text-dark view-tickets">
                                                    <span class="fw-bold">Congratulations on your iRun Coach
                                                        subscription</span>
                                                </a>
                                                <!--end::Heading-->
                                            </div>
                                            <!--begin::Badges-->
                                            <div class="badge badge-light-danger">awaiting seller</div>
                                            <!--end::Badges-->
                                        </td>
                                        <!--end::Title-->
                                        <td><span class="badge badge-light-warning">Pending</span></td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group"
                                                aria-label="Basic example">
                                                <button type="button" class="btn btn-success">Accept</button>
                                                <button type="button" class="btn btn-danger">Reject</button>
                                            </div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-light btn-sm">Close</button>
                                        </td>
                                        <!--begin::Date-->
                                        <td class="w-100px text-end fs-7 pe-9">
                                            <span class="fw-semibold text-muted">nov 20</span>
                                        </td>
                                        <!--end::Date-->
                                    </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                        </div>
                        <div class="row px-9 pt-3 pb-5">
                            <div
                                class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                                <div class="dataTables_length" id="kt_inbox_listing_length">
                                    <label>
                                        <select name="kt_inbox_listing_length" aria-controls="kt_inbox_listing"
                                            class="form-select form-select-sm form-select-solid">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <div
                                class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                <div class="dataTables_paginate paging_simple_numbers" id="kt_inbox_listing_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled"
                                            id="kt_inbox_listing_previous"><a href="#"
                                                aria-controls="kt_inbox_listing" data-dt-idx="0" tabindex="0"
                                                class="page-link"><i class="previous"></i></a></li>
                                        <li class="paginate_button page-item active"><a href="#"
                                                aria-controls="kt_inbox_listing" data-dt-idx="1" tabindex="0"
                                                class="page-link">1</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                aria-controls="kt_inbox_listing" data-dt-idx="2" tabindex="0"
                                                class="page-link">2</a></li>
                                        <li class="paginate_button page-item next" id="kt_inbox_listing_next"><a
                                                href="#" aria-controls="kt_inbox_listing" data-dt-idx="3"
                                                tabindex="0" class="page-link"><i class="next"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Table-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Inbox App - Messages -->
</div>
<div class="card mb-5 mb-xl-6 mx-8 mt-20 ms-xl-12">
    <div class="card shadow-sm">
        <div class="card-header collapsible cursor-pointer rotate" data-bs-toggle="collapse"
            data-bs-target="#kt_docs_card_collapsible">
            <h3 class="card-title">Close Ticket</h3>
            <div class="card-toolbar rotate-180">
                <span class="svg-icon svg-icon-1">
                </span>
            </div>
        </div>
        <div id="kt_docs_card_collapsible" class="collapse show">
            <div class="card-body">
                <!--begin::Table-->
                <table class="table table-striped table-hover table-row-bordered gy-5 gs-7">
                    <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                            <th>SELLER ID</th>
                            <th>REASON</th>
                            <th></th>
                        </tr>
                        <!--end::Table row-->
                    </thead>
                    <tbody class="fw-bold text-dark">
                        <tr>
                            <td>ID-1100</td>
                            <td>I don't want to use ticket</td>
                            <td>
                                <button type="button" class="btn btn-light btn-sm close">Close</button>
                            </td>
                        </tr>
                        <tr>
                            <td>ID-1100</td>
                            <td>I don't want to use ticket</td>
                            <td>
                                <button type="button" class="btn btn-light btn-sm close">Close</button>
                            </td>
                        </tr>
                        <tr>
                            <td>ID-1100</td>
                            <td>I don't want to use ticket</td>
                            <td>
                                <button type="button" class="btn btn-light btn-sm close">Close</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!--end::Table-->
            </div>
            <div class="card-footer">
            </div>
        </div>
    </div>
</div>
