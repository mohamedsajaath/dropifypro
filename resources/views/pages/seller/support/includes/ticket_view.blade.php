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
                                    <h2 class="fw-semibold me-3 my-1">{{ $ticket->title }}</h2>
                                </div>
                            </div>
                            <!--end::Title-->
                            <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                <label class="fs-6 fw-semibold mb-2">Reply :</label>
                                <textarea class="form-control form-control-solid" id="reply" rows="3" name="reply" placeholder="Reply"
                                    value="reply" required></textarea>
                            </div>
                            <div class="container d-flex justify-content-center mb-12">
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
                            <!--begin::Message accordion-->
                            @foreach ($contents as $content)
                                <div data-kt-inbox-message="message_wrapper">
                                    <!--begin::Message header-->
                                    <div class="d-flex flex-wrap gap-2 flex-stack cursor-pointer"
                                        data-kt-inbox-message="header">
                                        <!--begin::Author-->
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center flex-wrap gap-1">
                                                <a href="#"
                                                    class="fw-bold text-dark text-hover-primary">{{ $content->user_id == $auth_id ? 'You' : $content->user_name }}</a>
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
                                        </div>
                                        <!--end::Author-->
                                        <!--begin::Actions-->
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <span class="fw-semibold text-muted text-end me-3">22 Sep 2022, 6:43 am</span>
                                            <div class="d-flex">
                                            </div>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Message header-->
                                    <!--begin::Message content-->
                                    <div class="collapse fade show mt-4" data-kt-inbox-message="message">
                                        <div class="py-5">
                                            <p>{{ $content->description }}</p>
                                        </div>
                                    </div>
                                    <!--end::Message content-->
                                </div>
                            @endforeach
                            <!--end::Message accordion-->
                            
                        </div>
                    </div>
                    <!--end::Message accordion-->
                </div>
            </div>
        </div>
    </div>
@endsection
