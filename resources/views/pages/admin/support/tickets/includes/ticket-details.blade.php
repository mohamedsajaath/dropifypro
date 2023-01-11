@extends('layouts.app')
@section('content')
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--begin::Inbox App - Messages -->
        <div class="d-flex flex-column flex-lg-row mt-10">
            <!--begin::Content-->
            <div class="flex-lg-row-fluid ms-lg-7 ms-xl-3">
                <!--begin::Card-->
                <div class="card">
                    <div class="align-items-center gap-2 gap-md-5 mt-0 p-20">
                        <div class="card-body">
                            <!--begin::Title-->
                            <div class="d-flex flex-wrap gap-2 justify-content-between mb-8">
                                <div class="d-flex align-items-center flex-wrap gap-2">
                                    <!--begin::Heading-->
                                    <h2 class="fw-semibold me-3 my-1">Trip Reminder. Thank you for flying with us!</h2>
                                    <!--begin::Heading-->
                                </div>
                            </div>
                            <!--end::Title-->
                            <!--begin::Message accordion-->
                            <div data-kt-inbox-message="message_wrapper">
                                <!--begin::Message header-->
                                <div class="d-flex flex-wrap gap-2 flex-stack cursor-pointer"
                                    data-kt-inbox-message="header">
                                    <!--begin::Author-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Author details-->
                                        <div class="d-flex align-items-center flex-wrap gap-1">
                                            <a href="#" class="fw-bold text-dark text-hover-primary">Emma Smith</a>
                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
                                            <span class="svg-icon svg-icon-7 svg-icon-success mx-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <circle fill="currentColor" cx="12" cy="12"
                                                        r="8"></circle>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <span class="text-muted fw-bold">1 day ago</span>
                                        </div>
                                        <!--end::Author details-->
                                    </div>
                                    <!--end::Author-->
                                    <!--begin::Actions-->
                                    <div class="d-flex align-items-center flex-wrap gap-2">
                                        <!--begin::Date-->
                                        <span class="fw-semibold text-muted text-end me-3">22 Sep 2022, 6:43 am</span>
                                        <!--end::Date-->
                                        <div class="d-flex">
                                            <!--begin::Reply-->
                                            <a href="#reply"
                                                class="btn btn-sm btn-icon btn-clear btn-active-light-primary me-3"
                                                data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Reply"
                                                data-kt-initialized="1">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen055.svg-->
                                                <span class="svg-icon svg-icon-2 m-0">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z"
                                                            fill="currentColor"></path>
                                                        <path
                                                            d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z"
                                                            fill="currentColor"></path>
                                                        <path
                                                            d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <!--end::Reply-->
                                        </div>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Message header-->
                                <!--begin::Message content-->
                                <div class="collapse fade show mt-4" data-kt-inbox-message="message">
                                    <div class="py-5">
                                        <p>With resrpect, i must disagree with Mr.Zinsser. We all know the most part of
                                            important part of any article is the title.Without a compelleing title, your
                                            reader won't even get to the first sentence.After the title, however, the first
                                            few sentences of your article are certainly the most important part.</p>
                                    </div>
                                </div>
                                <!--end::Message content-->
                            </div>
                            <!--end::Message accordion-->
                            <div class="separator my-6"></div>
                            <!--begin::Message accordion-->
                            <div data-kt-inbox-message="message_wrapper">
                                <!--begin::Message header-->
                                <div class="d-flex flex-wrap gap-2 flex-stack cursor-pointer"
                                    data-kt-inbox-message="header">
                                    <!--begin::Author-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Author details-->
                                        <div class="d-flex align-items-center flex-wrap gap-1">
                                            <a href="#" class="fw-bold text-dark text-hover-primary">You</a>
                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
                                            <span class="svg-icon svg-icon-7 svg-icon-success mx-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <circle fill="currentColor" cx="12" cy="12"
                                                        r="8"></circle>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <span class="text-muted fw-bold">2 day ago</span>
                                        </div>
                                        <!--end::Author details-->
                                    </div>
                                    <!--end::Author-->
                                    <!--begin::Actions-->
                                    <div class="d-flex align-items-center flex-wrap gap-2">
                                        <!--begin::Date-->
                                        <span class="fw-semibold text-muted text-end me-3">22 Sep 2022, 6:43 am</span>
                                        <!--end::Date-->
                                        <div class="d-flex">
                                            <!--begin::Reply-->
                                            <a href="#"
                                                class="btn btn-sm btn-icon btn-clear btn-active-light-primary me-3"
                                                data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Reply"
                                                data-kt-initialized="1">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen055.svg-->
                                                <span class="svg-icon svg-icon-2 m-0">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z"
                                                            fill="currentColor"></path>
                                                        <path
                                                            d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z"
                                                            fill="currentColor"></path>
                                                        <path
                                                            d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <!--end::Reply-->
                                        </div>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Message header-->
                                <!--begin::Message content-->
                                <div class="collapse fade show mt-4" data-kt-inbox-message="message">
                                    <div class="py-5">
                                        <p>With resrpect, i must disagree with Mr.Zinsser. We all know the most part of
                                            important part of any article is the title.Without a compelleing title, your
                                            reader won't even get to the first sentence.After the title, however, the first
                                            few sentences of your article are certainly the most important part.</p>
                                    </div>
                                </div>
                                <!--end::Message content-->
                            </div>
                            <!--end::Message accordion-->
                            <div class="separator my-6"></div>
                            <div class="card-body p-9 card mb-5">
                                <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                    <label class="fs-6 fw-semibold mb-2">Reply :</label>
                                    <textarea class="form-control form-control-solid" id="reply" rows="3" name="reply" placeholder="Reply"
                                        value="reply" required></textarea>
                                </div>
                                <div class="container d-flex justify-content-center">
                                    <div class="row btn-group">
                                        <div class="col">
                                            <button class="btn btn-danger form-control  btn-block">Back</button>
                                        </div>
                                        <div class="col">
                                            <button id="btnSubmit" class="btn btn-primary form-control btn-block"
                                                type="submit">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
