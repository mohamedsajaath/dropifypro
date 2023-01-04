{{-- DASHBOARD --}}


{{-- <div class="menu-item here show menu-accordion">
    <a class="menu-link" href="{{ route('admin.dashboard') }}">
        <span class="menu-icon">
           <span class="svg-icon svg-icon-2">
               <i class="bi bi-grid-1x2 fs-2"></i>
												</span>
        </span>
        <span class="menu-title">Dashboard</span>
    </a>
</div>  --}}


{{-- DASHBOARD --}}


{{-- PRODUCTS --}}


<div class="menu-item here show menu-accordion">
    <!--begin:Menu link-->
    <a class="menu-link" href="{{ route('admin.products') }}">
        <span class="menu-icon">
            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
            <span class="svg-icon svg-icon-2">
                <i class="bi bi-box-seam fs-2"></i>
            </span>
            <!--end::Svg Icon-->
        </span>
        <span class="menu-title">Products</span>
    </a>
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
            <a class="menu-link" href="{{ route('admin.orders.paid') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Paid <span
                        class="badge badge-outline bc-orange-b m-2 badge-sm">21</span></span>

            </a>
            <!--end:Menu link-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link" href="{{ route('admin.orders.unpaid') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Unpaid <span
                        class="badge badge-outline bc-orange-b m-2 badge-sm">36</span></span>

            </a>
            <!--end:Menu link-->
        </div>
        <!--end:Menu item-->

    </div>
    <!--end:Menu sub-->
</div>


{{-- ORDERS --}}

{{-- SELLERS --}}


<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
    <!--begin:Menu link-->
    <span class="menu-link">
        <span class="menu-icon">
            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
            <span class="svg-icon svg-icon-2">
                <i class="bi bi-people fs-2"></i>
            </span>
            <!--end::Svg Icon-->
        </span>
        <span class="menu-title">Sellers</span>
        <span class="menu-arrow"></span>
    </span>
    <!--end:Menu link-->
    <!--begin:Menu sub-->
    <div class="menu-sub menu-sub-accordion">
        <!--begin:Menu item-->
        <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link" href="{{ route('admin.sellers.wallet') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Wallets</span>
            </a>
            <!--end:Menu link-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link" href="{{ route('admin.sellers.ebay-accounts') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Ebay Accounts</span>
            </a>
            <!--end:Menu link-->
        </div>
        <!--end:Menu item-->

    </div>
    <!--end:Menu sub-->
</div>


{{-- SELLERS --}}

{{-- MEMBERSHIP --}}


<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
    <!--begin:Menu link-->
    <span class="menu-link">
        <span class="menu-icon">
            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
            <span class="svg-icon svg-icon-2">
                <i class="bi bi-person-bounding-box fs-2"></i>
            </span>
            <!--end::Svg Icon-->
        </span>
        <span class="menu-title">Memberships</span>
        <span class="menu-arrow"></span>
    </span>
    <!--end:Menu link-->
    <!--begin:Menu sub-->
    <div class="menu-sub menu-sub-accordion">
        <!--begin:Menu item-->
        <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link" href="{{ route('admin.sellers.memberships.active') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Active</span>
            </a>
            <!--end:Menu link-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link" href="{{ route('admin.sellers.memberships.cancelled') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Cancelled</span>
            </a>
            <!--end:Menu link-->
        </div>
        <!--end:Menu item-->

    </div>
    <!--end:Menu sub-->
</div>


{{-- MEMBERSHIP --}}

{{-- SUPPORT  --}}


<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
    <!--begin:Menu link-->
    <span class="menu-link">
        <span class="menu-icon">
            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
            <span class="svg-icon svg-icon-2">
                <i class="bi bi-headset fs-2"></i>
            </span>
            <!--end::Svg Icon-->
        </span>
        <span class="menu-title">Support</span>
        <span class="menu-arrow"></span>
    </span>
    <!--end:Menu link-->
    <!--begin:Menu sub-->
    <div class="menu-sub menu-sub-accordion">
        <!--begin:Menu item-->
        <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link" href="{{ route('admin.support.tickets.index') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Tickets</span>
            </a>
            <!--end:Menu link-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link" href="{{ route('admin.support.account-managers.index') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Account Managers</span>
            </a>
            <!--end:Menu link-->
        </div>
        <!--end:Menu item-->
    </div>
    <!--end:Menu sub-->
</div>
{{-- SUPPORT  --}}

{{-- Onboarding --}}
<div class="menu-item here show menu-accordion">
    <!--begin:Menu link-->

    <a class="menu-link" href="{{ route('admin.on-boardings.index') }}">
        <span class="menu-icon">
            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
            <span class="svg-icon svg-icon-2">
                <i class="fa-regular fa-handshake fs-2"></i>
            </span>
        </span>
        <span class="menu-title">Onboarding</span>
    </a>
</div>
{{-- Onboarding --}}
{{-- WHOLESALE REQUESTS --}}
<div class="menu-item here show menu-accordion">
    <!--begin:Menu link-->
    <a class="menu-link" href="{{ route('admin.wholesale-requests') }}">
        <span class="menu-icon">
            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
            <span class="svg-icon svg-icon-2">
                <i class="bi bi-truck fs-2"></i>
            </span>
        </span>
        <span class="menu-title">Wholesale Requests</span>
    </a>
</div>
{{-- WHOLESALE REQUESTS --}}
{{-- MANAGE EMAILS --}}
<div class="menu-item here show menu-accordion">
    <!--begin:Menu link-->

    <a class="menu-link" href="{{ route('admin.manage-emails') }}">
        <span class="menu-icon">
            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
            <span class="svg-icon svg-icon-2">
                <i class="bi bi-envelope fs-2"></i>
            </span>
        </span>
        <span class="menu-title">Manage Emails</span>
    </a>
</div>
{{-- MANAGE EMAILS --}}
