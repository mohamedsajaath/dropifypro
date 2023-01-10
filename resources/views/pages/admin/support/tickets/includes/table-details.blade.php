<div id="kt_app_content_container" class="app-container container-xxl">
    <!--begin::Inbox App - Messages -->
    <div class="d-flex flex-column flex-lg-row">
        <!--begin::Content-->
        <div class="flex-lg-row-fluid ms-lg-7 ms-xl-3">
            <!--begin::Card-->
            <div class="card">
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                </div>
                <div class="card-body p-0">
                    <!--begin::Table-->
                    <div id="kt_inbox_listing_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="table-responsive">
                            <table
                                class="table table-striped table-hover table-row-bordered fs-6 gy-5 my-0 dataTable no-footer">
                                <!--begin::Table body-->

                                {{-- @foreach ($tickets as $ticket) --}}
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
                                        <td>
                                            <div class="text-dark mb-1">
                                                <a href="{{ route('admin.support.tickets.ticket-details') }}"
                                                    class="text-dark">
                                                    <span class="fw-bold">imara software solution</span>
                                                </a>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-light-warning">new</span></td>
                                        <td></td>
                                        <td></td>
                                        <td class="w-100px fs-7 pe-9">
                                            <span class="fw-semibold">8:30 PM</span>
                                        </td>
                                    </tr>
                                </tbody>
                                <!--end::Table body-->
                                {{-- @endforeach --}}

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
