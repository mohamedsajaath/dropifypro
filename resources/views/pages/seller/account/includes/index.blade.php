  <!--begin::Navs-->
  <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
      <!--begin::Nav item-->
      <li class="nav-item">
          <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Request::is('seller/account/overview') ? 'active' : '' }}"
              href="">Overview</a>
      </li>
      <!--end::Nav item-->
      <!--begin::Nav item-->
      <li class="nav-item">
          <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Request::is('seller/account/profile') ? 'active' : '' }}"
              href="">Profile</a>
      </li>
      <!--end::Nav item-->
      <!--begin::Nav item-->
      <li class="nav-item">
          <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Request::is('seller/account/ebay') ? 'active' : '' }}"
          href="">E-Bay </a>
      </li>
      <!--end::Nav item-->
      <!--begin::Nav item-->
      <li class="nav-item">
          <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Request::is('seller/account/plans') ? 'active' : '' }}"
          href="">Plans</a>
      </li>
      <!--end::Nav item-->
  </ul>
  <!--begin::Navs-->
