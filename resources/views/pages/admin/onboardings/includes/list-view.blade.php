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
                    @foreach ($date_ranges as $key => $value)
                        <li class="nav-item p-0 ms-0" role="presentation">
                            <!--begin::Date-->
                            @if ($key == '0')
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger active"
                                    data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_1"
                                    aria-selected="false" tabindex="-1" role="tab">
                                    <span class="fs-6 fw-bold">{{ $value }}</span>
                                </a>
                            @else
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                    data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_1"
                                    aria-selected="false" tabindex="-1" role="tab">
                                    <span class="fs-6 fw-bold">{{ $value }}</span>
                                </a>
                            @endif
                            <!--end::Date-->
                        </li>
                    @endforeach
                </ul>
                <!--end::Nav-->
                <!--begin::Tab Content -->
                @foreach ($onboarding_events as $onboarding_event)
                    <div class="tab-content mb-2 px-9">
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade show active" id="kt_timeline_widget_3_tab_content_4" role="tabpanel">
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                                <!--begin::Bullet-->
                                <span data-kt-element="bullet"
                                    class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                <!--end::Bullet-->
                                <!--begin::Info-->
                                <div class="flex-grow-1 me-5">
                                    <!--begin::Time-->
                                    <div class="text-gray-800 fw-semibold fs-2">{{ $onboarding_event->time}}
                                        <span class="text-gray-400 fw-semibold fs-7">AM</span>
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Description-->
                                    <div class="text-gray-700 fw-semibold fs-6">Want New Updates On Ebay Listing</div>
                                    <!--end::Description-->
                                    <!--begin::Link-->
                                    <div class="text-gray-400 fw-semibold fs-7">Seller Name
                                        <!--begin::Name-->
                                        <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter
                                            Marcus</a>
                                        <!--end::Name-->
                                    </div>
                                    <!--end::Link-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
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
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a class="menu-link px-3 product-edit d-flex gap-5 edit_event" data-id="{{ $onboarding_event->id}}"><i
                                                class="bi bi-pencil"></i> Edit</a>

                                                {{-- <td><button class="btn btn-sm btn-success edit_plan"
                                                    data-id="{{ $onboarding_event->id }}">Edit</button></td> --}}
                                        </tr>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
        
                                        <a class="menu-link px-3 delete-sweet d-flex gap-5"  href="/onboardings/{{$onboarding_event->id}}"><i class="bi bi-trash"></i>
                                            Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
            
            </div>
            <!--end::Tap pane-->
            <!--end::Tap pane-->
        </div>
        @endforeach
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
