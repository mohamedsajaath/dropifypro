<!--begin::Navs-->
<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Request::is('admin/account/overview') ? 'active' : '' }}"
            href="{{ route('admin.account', ['page' => 'overview']) }}">Overview</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Request::is('admin/account/profile') ? 'active' : '' }}"
            href="{{ route('admin.account', ['page' => 'profile']) }}">Profile</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Request::is('admin/account/ebay') ? 'active' : '' }}"
            href="{{ route('admin.account', ['page' => 'ebay']) }}">E-Bay </a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Request::is('admin/account-plan') ? 'active' : '' }}"
        href="{{ route('admin.plan') }}">Plans</a>
    </li>
    <!--end::Nav item-->
</ul>
<!--begin::Navs-->
