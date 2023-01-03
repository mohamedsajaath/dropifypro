<div id="kt_app_content_container" class="app-container container-xxl">
    <!--begin::Inbox App - Messages -->
    <div class="d-flex flex-column flex-lg-row">
        <!--begin::Content-->
        <div class="flex-lg-row-fluid ms-lg-7 ms-xl-2">
            <!--begin::Card-->
            <div class="card">
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <!--begin::Actions-->
                    <div class="d-flex flex-wrap gap-2"></div>
                    <!--end::Actions-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center flex-wrap gap-2">
                        <!--begin::Search-->
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                            <button class="btn btn-success position-relative me-5 account-manager">
                                My Account manager <span
                                    class="position-absolute top-0 start-0 translate-middle  fa-solid fa-crown text-warning fs-1"></span>
                            </button>
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
                                class="table table-striped table-hover table-row-bordered fs-6 gy-5 my-0 dataTable no-footer"
                                id="kt_inbox_listing">
                                <!--begin::Table body-->
                             
                                @foreach($tickets as $ticket)

                                <tbody>
                                    <tr class="">
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
                                                <a href="{{ route('seller.support.ticket-details') }}"
                                                    class="text-dark view-tickets">
                                                    <span class="fw-bold">{{$ticket->title}}</span>
                                                </a>
                                            </div>
                                        </td>
                                        <!--end::Title-->
                                        <td>
                                            <span class="badge badge-light-success my-1">Created</span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-light btn-sm close">Close</button>
                                        </td>
                                        <td class="w-100px text-end fs-7 pe-9">
                                            <span class="fw-semibold">8:30 PM</span>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach

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