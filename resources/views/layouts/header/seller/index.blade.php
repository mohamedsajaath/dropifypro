<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
    data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
    data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end"
    data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
    data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
    data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
    <!--begin::Menu-->
    <div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
        id="kt_app_header_menu" data-kt-menu="true">
        <!--begin:Menu item-->
        <div class="menu-item here menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
            <!--begin:Menu link-->
            <a href="{{ route('dashboard') }}">
                <span class="menu-link">
                    <span class="menu-title">Dashboards</span>
                    <span class="menu-arrow d-lg-none"></span>
                </span>
            </a>
            <!--end:Menu link-->

        </div>
        <!--end:Menu item-->

    </div>
    <!--end::Menu-->
</div>
<!--end::Menu wrapper-->
<!--begin::Navbar-->
<div class="app-navbar flex-shrink-0">

    <!--begin::Wallet-->
    <div class="app-navbar-item ms-1 ms-lg-3">
        <!--begin::Menu toggle-->
        <a href="{{ route('wallet') }}"
            class="btn btn-custom btn-icon-muted btn-active-light btn-active-color-primary  p-5 text-color-blue fs-6">
            <i class="bi bi-wallet2 fs-5"></i><br />
            $599.03

        </a>
        <!--begin::Menu toggle-->
        <!--begin::Menu-->
        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-muted menu-active-bg menu-state-color fw-semibold py-4 fs-base w-175px"
            data-kt-menu="true" data-kt-element="theme-mode-menu">
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Wallet-->
    <!--begin::Wallet-->
    <div class="app-navbar-item ms-1 ms-lg-3">
        <!--begin::Menu toggle-->
        <a href="#"
            class="btn btn-custom btn-icon-muted btn-active-light btn-active-color-primary  p-5 fs-6">
            <span style="color:#E53238;">e</span><span style="color:#0064D2;">b</span><span
                style="color:#F5AF02;">a</span><span style="color:#86B817;">y</span><br />

            <small class="text-color-orange">Unlinked</small>

        </a> 
        <!--begin::Menu toggle-->
        <!--begin::Menu-->
        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-muted menu-active-bg menu-state-color fw-semibold py-4 fs-base w-175px"
            data-kt-menu="true" data-kt-element="theme-mode-menu">


        </div>
        <!--end::Menu-->
    </div>
    <!--end::Wallet-->
    <!--begin::User menu-->
    <div class="app-navbar-item ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
        <!--begin::Menu wrapper-->
        <div class="cursor-pointer symbol symbol-35px symbol-md-40px"
            data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
            data-kt-menu-placement="bottom-end">
            @if (Auth::user()->image_url != null)
            <img src="{{ asset('storage/' . Auth::user()->image_url) }}" alt="user" />
            @else
            <img src="{{ asset('assets/media/avatars/blank.png')}}" alt="user" />
            @endif
           
           
        </div>
        <!--begin::User account menu-->
        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
            data-kt-menu="true">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <div class="menu-content d-flex align-items-center px-3">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-50px me-5">
                        @if (Auth::user()->image_url != null)
                        <img src="{{ asset('storage/' . Auth::user()->image_url) }}" alt="user" />
                        @else
                        <img src="{{ asset('assets/media/avatars/blank.png')}}" alt="user" />
                        @endif
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Username-->
                    <div class="d-flex flex-column">
                        <div class="fw-bold d-flex align-items-center fs-5">{{ Auth::user()->name }}
                            <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Seller</span>
                        </div>
                        <a href="#"
                            class="fw-semibold text-muted text-hover-primary fs-7">{{ Auth::user()->email }}</a>
                    </div>
                    <!--end::Username-->
                </div>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu separator-->
            <div class="separator my-2"></div>
            <!--end::Menu separator-->
            <!--begin::Menu item-->
            <div class="menu-item px-5">
                {{-- <a href="{{ route('seller.account',['page'=>"overview"]) }}" class="menu-link px-5">My Profile</a> --}}
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                <a href="#" class="menu-link px-5">
                    <span class="menu-title">My Subscription</span>
                    <span class="menu-arrow"></span>
                </a>
                <!--begin::Menu sub-->
                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <span class="menu-link px-5 ">Starter</span>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        {{-- <a href="{{ route('seller.account', ['page' => 'plans']) }}" class="menu-link px-5">Upgrade</a> --}}
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu sub-->
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-5 my-1">
                {{-- <a href="{{ route('seller.account',['page'=>"overview"]) }}" class="menu-link px-5">Account Settings</a> --}}
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-5">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger px-5 w-100">Sign Out</button>
                </form>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::User account menu-->
        <!--end::Menu wrapper-->
    </div>
    <!--end::User menu-->
    <!--begin::Header menu toggle-->
    <div class="app-navbar-item d-lg-none ms-2 me-n3" title="Show header menu">
        <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_header_menu_toggle">
            <!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
            <span class="svg-icon svg-icon-1">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z"
                        fill="currentColor" />
                    <path opacity="0.3"
                        d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z"
                        fill="currentColor" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
    </div>
    <!--end::Header menu toggle-->
</div>
