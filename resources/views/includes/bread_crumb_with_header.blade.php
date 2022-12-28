<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack m-0">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">{{$header}}</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            @isset($bread_crumbs)
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1 removeBreadCrumb">

                    @forelse($bread_crumbs as $page=>$link)
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{$link}}" class="text-muted text-hover-primary">{{$page}}</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                    @empty
                    @endforelse
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">{{$header}}</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            @endisset
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center gap-2 gap-lg-3"></div>
        <!--end::Actions-->
    </div>
    <!--end::Toolbar container-->
</div>
