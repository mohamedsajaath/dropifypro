
{{-- DASHBOARD --}}


<div class="menu-item here show menu-accordion">
    <!--begin:Menu link-->

    <a class="menu-link" href="{{ route('dashboard') }}">
        <span class="menu-icon">
            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
           <span class="svg-icon svg-icon-2">
               <i class="bi bi-grid-1x2 fs-2"></i>
												</span>
        </span>
        <span class="menu-title">Dashboard</span>
    </a>
</div>


{{-- DASHBOARD --}}
{{-- PRODUCTS --}}



<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
    <!--begin:Menu link-->
    <span class="menu-link">
        <span class="menu-icon">
            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
            <span class="svg-icon svg-icon-2">
                 <i class="bi bi-box-seam fs-2"></i>
            </span>
            <!--end::Svg Icon-->
        </span>
        <span class="menu-title">Products</span>
        <span class="menu-arrow"></span>
    </span>
    <!--end:Menu link-->
    <!--begin:Menu sub-->
    <div class="menu-sub menu-sub-accordion">
        <!--begin:Menu item-->
        <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link" href="{{ route('products-all') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">All</span>
            </a>
            <!--end:Menu link-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link" href="{{ route('products-imported') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Imported</span>
            </a>
            <!--end:Menu link-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link" href="{{ route('products-recommended') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Recommended</span>
                <i class="fa-solid fa-crown text-warning fs-5 "data-bs-toggle="tooltip" data-bs-delay-show="500" data-bs-placement="right" title="Upgrade"></i>
            </a>
            <!--end:Menu link-->
        </div>
        <!--end:Menu item-->
    </div>
    <!--end:Menu sub-->
</div>


{{-- PRODUCTS --}}


{{-- ORDERS --}}


<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
    <!--begin:Menu link-->
    <span class="menu-link">
        <span class="menu-icon">
            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
            <span class="svg-icon svg-icon-2">
                <i class="bi bi-train-front fs-2"></i>
            </span>
            <!--end::Svg Icon-->
        </span>
        <span class="menu-title">Orders</span>
        <span class="menu-arrow"></span>
    </span>
    <!--end:Menu link-->
    <!--begin:Menu sub-->
    <div class="menu-sub menu-sub-accordion">
        <!--begin:Menu item-->
        <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link" href="{{ route('paid-orders') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Paid</span>
            </a>
            <!--end:Menu link-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link" href="{{ route('unpaid-orders') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title ">Unpaid  <span class="badge badge-outline bc-orange-b m-2 badge-sm" >21</span></span>

            </a>
            <!--end:Menu link-->
        </div>
        <!--end:Menu item-->

    </div>
    <!--end:Menu sub-->
</div>


{{-- ORDERS --}}


{{-- Wallet --}}


<div class="menu-item here show menu-accordion">
    <!--begin:Menu link-->
    <a class="menu-link" href="{{ route('wallet') }}">
        <span class="menu-icon">
        <i class="bi bi-wallet2 fs-2"></i>
        </span>
        <span class="menu-title">Wallet</span>
    </a>
</div>


{{-- Wallet --}}

{{-- Sales report --}}

<div class="menu-item here show menu-accordion">
    <!--begin:Menu link-->
    <a class="menu-link" href="{{ route('sales-report') }}">
        <span class="menu-icon">
            <i class="bi bi-card-checklist fs-2"></i>
        </span>
        <span class="menu-title">Sales report</span>
    </a>
</div>

{{-- Sales report --}}

{{-- SUPPORT  --}}

<div class="menu-item here show menu-accordion">
    <!--begin:Menu link-->
    <a class="menu-link" href="{{ route('support') }}">
        <span class="menu-icon">
            <i class="bi bi-headset fs-2"></i>
        </span>
        <span class="menu-title">Support</span>
    </a>
</div>

{{-- SUPPORT  --}}

{{-- Wholesale Requests --}}


<div class="menu-item here show menu-accordion">
    <!--begin:Menu link-->
    <a class="menu-link" href="{{route('wholesale-request')}}">
        <span class="menu-icon">
            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
            <span class="svg-icon svg-icon-2">
              <i class="bi bi-truck fs-2"></i>
            </span>
        </span>
        <span class="menu-title">Wholesale Request</span>
        <i class="fa-solid fa-crown text-warning fs-5 "data-bs-toggle="tooltip" data-bs-delay-show="500" data-bs-placement="right" title="Upgrade"></i>
    </a>
</div>


{{-- Wholesale Request --}}


{{-- Book onboarding call --}}

<div class="menu-item here show menu-accordion">
    <!--begin:Menu link-->
    <a class="menu-link" href="{{route('onboarding')}}">
        <span class="menu-icon">
            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
            <span class="svg-icon svg-icon-2">
                <i class="bi bi-calendar-date fs-2"></i>
            </span>
        </span>
        <span class="menu-title">Book Onboarding</span>
        <i class="fa-solid fa-crown text-warning fs-5 "data-bs-toggle="tooltip" data-bs-delay-show="500" data-bs-placement="right" title="Upgrade"></i>
    </a>
</div>



{{-- Book onboarding call --}}


