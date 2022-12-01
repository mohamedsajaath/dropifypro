@extends('layouts.app')

@push('css')
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .rem {
            margin: 50px 15rem !important;
        }
    </style>
@endpush
@section('content')
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--begin::Inbox App - Messages -->
        <div class="d-flex flex-column flex-lg-row">
            <!--begin::Content-->
            <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
                <!--begin::Card-->
                <div class="card">
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <!--begin::Actions-->
                        <div class="d-flex flex-wrap gap-2">
                            <!--begin::Checkbox-->
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-4 me-lg-7">
                                <input class="form-check-input" type="checkbox" data-kt-check="true"
                                    data-kt-check-target="#kt_inbox_listing .form-check-input" value="1">
                            </div>
                            <!--end::Checkbox-->
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
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-inbox-listing-filter="show_unstarred">Unstarred</a>
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
                                <button class="btn btn-success position-relative me-5 account-manager" >
                                    My Account manager <span class="position-absolute top-0 start-0 translate-middle  fa-solid fa-crown text-warning fs-1"></span>
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
                                <table class="table table-hover table-row-dashed fs-6 gy-5 my-0 dataTable no-footer"
                                    id="kt_inbox_listing">
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr class="odd">
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
                                            <td>
                                                <button type="button" class="btn btn-light btn-sm close">Close</button>
                                            </td>
                                            <!--begin::Date-->
                                            <td class="w-100px text-end fs-7 pe-9">
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
                                            <td>
                                                <button type="button" class="btn btn-light btn-sm close">Close</button>
                                            </td>
                                            <!--begin::Date-->
                                            <td class="w-100px text-end fs-7 pe-9">
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
                                            <td>
                                                <button type="button" class="btn btn-light btn-sm close">Close</button>
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
@endsection
@push('script')
    <script>
        loadBreadCrumbWithHeader("Support", "Details", "Dashboard", "#")
    </script>
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>


    {{-- create tickets --}}

    <script>
        $(document).on('click', '.create-ticket', function() {
            $('.custom-modal-size').addClass('mw-500px').removeClass('mw-650px');
            loadFormModal("", "", "Create Ticket", "Create new ticket here", "Create", "submit-btn",
                `
    <!--begin::Card body-->
    <div class="card-body p-9 card mb-5">
        <form id="kt_modal_new_card_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
            <!--begin::Input group-->
            <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                    <span class="required">Title :</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                        aria-label="Specify a card holder's name" data-kt-initialized="1"></i>
                </label>
                <!--end::Label-->
                <input type="text" class="form-control form-control-solid" placeholder="Title" name="card_name" value="">
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                <label class="fs-6 fw-semibold mb-2">
                    <span class="required">Description :</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                        aria-label="Specify a card holder's name" data-kt-initialized="1"></i>
                </label>
                <textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Description"></textarea>
            </div>
            <!--end::Input group-->
        </form>
    </div>
    <!--end::Card body--> `); });

    </script>


    {{-- Account Manager details --}}

    <script>
        $(document).on('click', '.account-manager', function() {
            $('.custom-modal-size').addClass('mw-550px').removeClass('mw-650px');
            loadDetailModal("My Account Manager", "",
                `      
            <!--begin::details View-->
            <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">               
                <!--begin::Card body-->
                <div class="card-body p-9">
                    <!--begin::Row-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">MANAGER NAME</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-gray-800">Patric Watson</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">E-MAIL</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <span class="fw-bold fs-6 text-gray-800">watson123@gmail.com</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">WHATSAPP NO</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 d-flex align-items-center">
                            <span class="fw-bold fs-6 text-gray-800">044 3276 454 935</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">RESPONSE TIME</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary">1-2 hours</a>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::details View-->
       `);
        });
    </script>


    {{-- View tickets details --}}

    <script>
        $(document).on('click', '.view-tickets', function() {
            $('.custom-modal-size').addClass('mw-700px').removeClass('mw-650px');
            loadDetailModal("Ticket", "View Tickets Details", `

    <div class="scroll-y h-lg-auto" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_app_toolbar, #kt_toolbar, #kt_footer, #kt_app_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer" data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_messenger_body" data-kt-scroll-offset="5px" style="max-height: 350px;">
    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Details-->
                <div class="ms-3">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                    <span class="text-muted fs-7 mb-1">2 mins</span>
                </div>
                <!--end::Details-->
            </div>
            <!--end::User-->
            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">How likely are you to recommend our company to your friends and family ?</div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->
    
    <!--begin::Message(out)-->
    <div class="d-flex justify-content-end mb-10">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-end">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Details-->
                <div class="me-3">
                    <span class="text-muted fs-7 mb-1">5 mins</span>
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                </div>
                <!--end::Details-->
            </div>
            <!--end::User-->
            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(out)-->
    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Details-->
                <div class="ms-3">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                    <span class="text-muted fs-7 mb-1">1 Hour</span>
                </div>
                <!--end::Details-->
            </div>
            <!--end::User-->
            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Ok, Understood!</div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->
    <!--begin::Message(out)-->
    <div class="d-flex justify-content-end mb-10">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-end">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Details-->
                <div class="me-3">
                    <span class="text-muted fs-7 mb-1">2 Hours</span>
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                </div>
                <!--end::Details-->
            </div>
            <!--end::User-->
            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">You’ll receive notifications for all issues, pull requests!</div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(out)-->
    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Details-->
                <div class="ms-3">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                    <span class="text-muted fs-7 mb-1">3 Hours</span>
                </div>
                <!--end::Details-->
            </div>
            <!--end::User-->
            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">You can unwatch this repository immediately by clicking here:
            <a href="https://keenthemes.com">Keenthemes.com</a></div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->
    <!--begin::Message(out)-->
    <div class="d-flex justify-content-end mb-10">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-end">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Details-->
                <div class="me-3">
                    <span class="text-muted fs-7 mb-1">4 Hours</span>
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                </div>
                <!--end::Details-->
            </div>
            <!--end::User-->
            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Most purchased Business courses during this sale!</div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(out)-->
    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Details-->
                <div class="ms-3">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                    <span class="text-muted fs-7 mb-1">5 Hours</span>
                </div>
                <!--end::Details-->
            </div>
            <!--end::User-->
            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->
    <!--begin::Message(template for out)-->
    <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-end">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Details-->
                <div class="me-3">
                    <span class="text-muted fs-7 mb-1">Just now</span>
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                </div>
                <!--end::Details-->
            </div>
            <!--end::User-->
            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text"></div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(template for out)-->
    <!--begin::Message(template for in)-->
    <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-25.jpg">
                </div>
                <!--end::Avatar-->
                <!--begin::Details-->
                <div class="ms-3">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                    <span class="text-muted fs-7 mb-1">Just now</span>
                </div>
                <!--end::Details-->
            </div>
            <!--end::User-->
            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Right before vacation season we have the next Big Deal for you.</div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(template for in)-->
</div> `);
        });
    </script>



    {{-- Close --}}

    <script>
        $(document).on('click', '.close', function() {
            $('.custom-modal-size').addClass('mw-650px').removeClass('mw-650px');
            loadFormModal("", "", "Close Ticket", "Are you sure want to close?", "Yes,Close it!", "submit-btn",
                `
    <!--begin::Card body-->
    <div class="card-body p-9 card mb-5">
        <form id="kt_modal_new_card_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
            <!--begin::Input group-->
            <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                <label class="fs-6 fw-semibold mb-2">
                    <span class="required">Reason :</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                        aria-label="Specify a card holder's name" data-kt-initialized="1"></i>
                </label>
                <textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Reason"></textarea>
            </div>
            <!--end::Input group-->
        </form>
    </div>
    <!--end::Card body--> `);
        });
    </script>
@endpush
