
<div class="row px-10 py-4 w-100 mb-5 ">
    <div class="col-lg-12 col-xl-12 col-xxl-12 mb-5 mb-xl-0">
        <!--begin::Timeline widget 3-->
        <div class="card h-md-100">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-dark">What’s up Today</span>
                    <span class="text-muted mt-1 fw-semibold fs-7">Total 42 On-boardings</span>
                </h3>
                <span class="card-title align-items-end flex-column">
                    <button class="btn btn-flex btn-primary add-onboarding">
                        Add Event
                    </button>
                </span>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-7 px-0">
                <!--begin::Nav-->
                <ul class="nav nav-stretch nav-pills nav-pills-custom nav-pills-active-custom d-flex justify-content-between mb-8 px-5"
                    role="tablist">

                    <!--end::Nav item-->
                    @foreach ($dates as $key=>$date)
                        <li class="nav-item p-0 ms-0" role="presentation">
                            <!--begin::Date-->
                            @if ($key == '0')
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill date-changer-btn min-w-45px py-4 px-3 btn-active-danger active"
                                   data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_1"
                                   aria-selected="false" tabindex="-1" role="tab" data-date="{{ $date }}">
                                    <span class="fs-6 fw-bold">{{ $date }}</span>
                                </a>
                            @else
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill date-changer-btn min-w-45px py-4 px-3 btn-active-danger"
                                   data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_1"
                                   aria-selected="false" tabindex="-1" role="tab" data-date="{{ $date }}">
                                    <span class="fs-6 fw-bold">{{ $date }}</span>
                                </a>
                            @endif
                            <!--end::Date-->
                        </li>
                    @endforeach
                </ul>
                <!--end::Nav-->
                <!--begin::Tab Content -->
                <div class="tab-content  mb-2 px-9" id="onboarding-content">
                    <!--begin::Tap pane-->
@foreach($onboarding as $onboarding_result)

<div class="tab-pane fade show active content-wrapper" role="tabpanel" data-content-id="{{$onboarding_result['id']}}">
    <!--begin::Wrapper-->
    <div class="d-flex align-items-center mb-6">
        <!--begin::Bullet-->
        <span data-kt-element="bullet"
              class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
        <!--end::Bullet-->
        <!--begin::Info-->
        <div class="flex-grow-1 me-5">
            <!--begin::Time-->
            <div class="text-gray-800 fw-semibold fs-2">

                <span class="text-gray-400 fw-semibold fs-7">{{ $onboarding_result['start_time']}}-{{ $onboarding_result['end_time']}}</span>
            </div>
            <!--end::Time-->
            <!--begin::Description-->
            <div class="text-gray-700 fw-semibold fs-6">

                @if($onboarding_result['title'] == "")
                Booking Pending...
                @else
                {{$onboarding_result['title']}}
                @endif
            </div>
            <!--end::Description-->
            <!--begin::Link-->
            @if($onboarding_result['user_id'] != "")
            <div class="text-gray-400 fw-semibold fs-7">Seller Id
                <!--begin::Name-->
                <a href="#" class="text-primary opacity-75-hover fw-semibold">{{ $onboarding_result['user_id']}}</a>
                <!--end::Name-->
            </div>
            @endif
            <!--end::Link-->
        </div>
        <!--end::Info-->
        <div class="dropdown">
            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Actions
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item edit_event" href="#" data-id="{{$onboarding_result['id']}}">Edit</a>
                <a class="dropdown-item delete-onboarding" href="#" data-id="{{$onboarding_result['id']}}">Delete</a>
            </div>
        </div>
    </div>
    <!--end::Wrapper-->

</div>

@endforeach

                    <!--end::Tap pane-->
                    <!--end::Tap pane-->
                </div>
                <!--end::Tab Content-->
                <!--begin::Action-->
                <div class="float-end d-none">
                    <a href="#" class="btn btn-sm btn-light me-2" data-bs-toggle="modal"
                       data-bs-target="#kt_modal_create_project">Add Lesson</a>
                    <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                       data-bs-target="#kt_modal_create_app">Call Sick for Today</a>
                </div>
                <!--end::Action-->
            </div>
            <!--end: Card Body-->
        </div>
        <!--end::Timeline widget 3-->
    </div>
</div>
