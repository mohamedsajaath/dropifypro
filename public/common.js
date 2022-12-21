
function loadFormModal(
    action,
    method,
    title,
    description,
    submitButtonText,
    submitButtonClass,
    body,
    fileExist = false
) {
    return new Promise(function (resolve, reject) {
        $("#modal-content-body").html(`
          <form id="kt_modal_new_target_form" class="form" action="${action}" method="${method}">
                <!--begin::Heading-->
                <div class="mb-13 text-center">
                    <!--begin::Title-->
                    <h1 class="mb-3">${title}</h1>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="text-muted fw-semibold fs-5">${description}</div>
                    <!--end::Description-->
                    </div>

                   ${body}

                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" data-bs-dismiss="modal" class="btn btn-light me-3">
                            Cancel
                        </button>
                        <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary ${submitButtonClass}">
                            <span class="indicator-label">${submitButtonText}</span>
                            <span class="indicator-progress">Please wait...
            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
    `);
        $("#kt_modal_new_target").modal("show");
        if (fileExist) {
            let type = "multipart/form-data";
            $("#kt_modal_new_target_form").attr("enctype", type);
        }
        resolve(true);
    });
}

function loadEditFormModal(
    action,
    method,
    title,
    description,
    submitButtonText,
    submitButtonClass,
    loadUrl,
    fileExist = false
) {
    return new Promise(function (resolve, reject) {
        $("#modal-content-body").html(`
          <form id="kt_modal_new_target_form" class="form" action="${action}" method="${method}">
                <!--begin::Heading-->
                <div class="mb-13 text-center">
                    <!--begin::Title-->
                    <h1 class="mb-3">${title}</h1>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="text-muted fw-semibold fs-5">${description}</div>
                    <!--end::Description-->
                    </div>

                    <div id="modal-body">


                    </div>

                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" data-bs-dismiss="modal" class="btn btn-light me-3">
                            Cancel
                        </button>
                        <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary ${submitButtonClass}">
                            <span class="indicator-label">${submitButtonText}</span>
                            <span class="indicator-progress">Please wait...
            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
    `);
        $("#modal-body").load(loadUrl, function () {
            $("#kt_modal_new_target").modal("show");
        });
        if (fileExist) {
            let type = "multipart/form-data";
            $("#kt_modal_new_target_form").attr("enctype", type);
        }
        resolve(true);
    });
}

function loadDetailModal(title, description, body) {
    $("#modal-content-body").html(`
     <!--begin::Heading-->
                <div class="mb-13 text-center">
                    <!--begin::Title-->
                    <h1 class="mb-3">${title}</h1>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="text-muted fw-semibold fs-5">${description}</div>
                    <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                ${body}
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" data-bs-dismiss="modal" class="btn btn-light me-3">
                            Close
                        </button>

                    </div>
    `);
    $("#kt_modal_new_target").modal("show");
}

function loadBreadCrumbWithHeader(
    header,
    currentPage,
    previousPage,
    previousPageRoute
) {
    $(document).ready(function () {
        $("#kt_app_content").prepend(`
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack m-0">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                ${header}</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1 removeBreadCrumb">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="${previousPageRoute}" class="text-muted text-hover-primary">${previousPage}</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">${currentPage}</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center gap-2 gap-lg-3">


        </div>
        <!--end::Actions-->
    </div>
    <!--end::Toolbar container-->
</div>


    `);

        if (
            currentPage === "" &&
            previousPage === "" &&
            previousPageRoute === ""
        ) {
            $(".removeBreadCrumb").css("display", "none");
        }
    });
}

$(document).on("click", ".delete-sweet", function () {
    Swal.fire({
        html: `Are You Sure You Want To Delete`,
        icon: "error",
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: "Yes, Delete it!",
        cancelButtonText: "Cancel",
        customClass: {
            confirmButton: "btn btn-primary",
            cancelButton: "btn btn-danger",
        },
    });
});

$(document).on("click", ".product-slider", function (e) {
    e.preventDefault();
    $(".slide-btn-product").click();
    $(".product-drawer").html(`
        <div class="card w-100 rounded-0 border-0" id="kt_drawer_product_messenger">
        <!--begin::Card header-->
        <div class="card-header pe-5" id="kt_drawer_product_messenger_header">
            <!--begin::Title-->
            <div class="card-title">
                <!--begin::User-->
                <div class="d-flex justify-content-center flex-column me-3">
                        <span
                            class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Apple Watch Series</span>
                    <!--begin::Info-->
                    <div class="mb-0 lh-1">
                        <span class="fs-7 fw-semibold text-muted">$52.23</span>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::User-->
            </div>
            <!--end::Title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Menu-->
                <!--end::Menu-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_product_close">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-2">
<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                          transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
<rect x="7.41422" y="6" width="16" height="2" rx="1"
                                          transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
</svg>
</span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body" id="kt_drawer_product_messenger_body">
            <div id="kt_carousel_1_carousel" class="carousel carousel-custom slide" data-bs-ride="carousel"
                 data-bs-interval="8000">
                <!--begin::Heading-->
                <div class="d-flex align-items-center justify-content-between flex-wrap">
                    <!--begin::Label-->
                    <span class="fs-4 fw-bold pe-2"></span>
                    <!--end::Label-->

                    <!--begin::Carousel Indicators-->
                    <ol class="p-0 m-0 carousel-indicators carousel-indicators-dots">
                        <li data-bs-target="#kt_carousel_1_carousel" data-bs-slide-to="0" class="ms-1 active"></li>
                        <li data-bs-target="#kt_carousel_1_carousel" data-bs-slide-to="1" class="ms-1"></li>
                        <li data-bs-target="#kt_carousel_1_carousel" data-bs-slide-to="2" class="ms-1"></li>
                    </ol>
                    <!--end::Carousel Indicators-->
                </div>
                <!--end::Heading-->

                <!--begin::Carousel-->
                <div class="carousel-inner pt-8">
                    <!--begin::Item-->
                    <div class="carousel-item active">
                        <img src="${hostUrl}/media/products/1.png" class="image rounded-circle"
                             style="display:block; margin:0 auto; max-height: 100px;"/>
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="carousel-item">
                        <img src="${hostUrl}/media/products/a.jpg" class="image h-25 rounded-circle"
                             style="display:block; margin:0 auto; max-height: 100px;"/>
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="carousel-item">
                        <img src="${hostUrl}/media/products/b.png" class="image h-25 rounded-circle"
                             style="display:block; margin:0 auto; max-height: 100px;"/>
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Carousel-->
                <div class="card-body p-9">
                    <!--begin::Row-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Condition:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                                <span class="fw-bold fs-6 text-gray-800">Very Good - Refurbished <br/> <small
                                        class="text-muted">"FULLY FUNCTIONAL and is backed by a one year warranty, VERY GOOD Condition - May Have some Small "</small></span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Size:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <span class="fw-semibold text-gray-800 fs-6">40mm,<br/>44mm</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Connectivity:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 d-flex align-items-center">
                            <span class="fw-bold fs-6 text-gray-800 me-2">Wifi Only (GPS),<br/>Wifi + Cellular (LTE)</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Color:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary">
                                Silver With White Band,<br/>
                                Space Gray With Black Band
                            </a>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Quantity:
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-gray-800">28</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Recommended selling price (RSP):</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-gray-800">$62.23</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Notice-->
                    <div
                        class="notice d-flex flex-md-wrap bg-light rounded flex-wrap border-warning border border-dashed p-6 fs-9">
                        <div class="card-body p-1 col-12 ">
                            <!--begin::Row-->
                            <div class="row mb-9 ">
                                <!--begin::Col-->
                                <div class="col-lg-6">
                                    <span class="fw-bold  text-gray-800">Item specifics</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <div class="card-body p-1 col-12 d-flex flex-wrap gap-5">
                            <!--begin::Row-->
                            <div class="row mb-7 col-6">
                                <!--begin::Label-->
                                <label class="col-lg-5 fw-semibold text-muted">UPC:</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-7">
                                    <span class="fw-bold  text-gray-800">0190198857941</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row mb-7 col-6">
                                <!--begin::Label-->
                                <label class="col-lg-5 fw-semibold text-muted">Brand:</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-7">
                                    <span class="fw-bold  text-gray-800">Apple</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row mb-7 col-6">
                                <!--begin::Label-->
                                <label class="col-lg-5 fw-semibold text-muted">Band Color:</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-7">
                                    <span class="fw-bold  text-gray-800">Pink</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row mb-7 col-6">
                                <!--begin::Label-->
                                <label class="col-lg-5 fw-semibold text-muted">Network:</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-7">
                                    <span class="fw-bold  text-gray-800">Very Good - Refurbished </span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row mb-7 col-6">
                                <!--begin::Label-->
                                <label class="col-lg-5 fw-semibold text-muted">Operating System:</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-7">
                                    <span class="fw-bold  text-gray-800">Apple Watch OS</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row mb-7 col-6">
                                <!--begin::Label-->
                                <label class="col-lg-5 fw-semibold text-muted">Features:</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-7">
                                        <span class="fw-bold  text-gray-800"><small>
Barometric Altimeter, Water-Resistant, Accelerometer, Glonass, Ambient Light Sensor, Gyroscope, GPS, Electrical Heart Sensor, Galileo, Optical Heart Sensor, Qzss</small></span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row mb-7 col-6">
                                <!--begin::Label-->
                                <label class="col-lg-5 fw-semibold text-muted">Case Material:</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-7">
                                    <span class="fw-bold  text-gray-800"><small>Aluminium</small></span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row mb-7 col-6">
                                <!--begin::Label-->
                                <label class="col-lg-5 fw-semibold text-muted">MPN:</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-7">
                                    <span class="fw-bold  text-gray-800"><small>MTUJ2LL/A, A1975</small></span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row mb-7 col-6">
                                <!--begin::Label-->
                                <label class="col-lg-5 fw-semibold text-muted">Series:</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-7">
                                    <span class="fw-bold  text-gray-800"><small>Apple Watch Series 4</small></span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row mb-7 col-6">
                                <!--begin::Label-->
                                <label class="col-lg-5 fw-semibold text-muted">Band Material:</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-7">
                                    <span class="fw-bold  text-gray-800"><small>Aluminum</small></span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row mb-7 col-6">
                                <!--begin::Label-->
                                <label class="col-lg-5 fw-semibold text-muted">Model:</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-7">
                                    <span class="fw-bold  text-gray-800"><small>Apple Watch Series 4</small></span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row mb-7 col-6">
                                <!--begin::Label-->
                                <label class="col-lg-5 fw-semibold text-muted">Case Size:</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-7">
                                    <span class="fw-bold  text-gray-800"><small>40mm</small></span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row mb-7 col-6">
                                <!--begin::Label-->
                                <label class="col-lg-5 fw-semibold text-muted">Case Size:</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-7">
                                    <span class="fw-bold  text-gray-800"><small>16GB</small></span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row mb-7 col-6">
                                <!--begin::Label-->
                                <label class="col-lg-5 fw-semibold text-muted">Compatible Operating System:</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-7">
                                    <span class="fw-bold  text-gray-800"><small>iOS - Apple</small></span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>

                    </div>
                    <!--end::Notice-->
                </div>
            </div>
        </div>
        <!--end::Card body-->
        <!--begin::Card footer-->
        <div class="card-footer pt-4" id="kt_drawer_product_messenger_footer">
            <!--begin::Input-->

            <!--end::Toolbar-->
        </div>
        <!--end::Card footer-->
    </div>
    `);
});

$(document).on("click", ".seller-slider", function (e) {
    e.preventDefault();
    $(".slide-btn-seller").click();
    $(".seller-drawer").html(`
               <div class="card w-100 rounded-0 border-0" id="kt_drawer_chat_messenger">
        <!--begin::Card header-->
        <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
            <!--begin::Title-->
            <div class="card-title">
                <!--begin::User-->

                <!--end::User-->
            </div>
            <!--end::Title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Menu-->

                <!--end::Menu-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-2">
<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                          transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
<rect x="7.41422" y="6" width="16" height="2" rx="1"
                                          transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
</svg>
</span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body" id="kt_drawer_chat_messenger_body">
            <div class="card mb-xl-10">
                <div class="card-body pt-9 pb-0">
                    <!--begin::Details-->
                    <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                        <!--begin: Pic-->
                        <div class="me-7 mb-4">
                            <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                <img src="${hostUrl}/media/avatars/300-1.jpg" alt="image">
                                <div
                                    class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                            </div>
                        </div>
                        <!--end::Pic-->
                        <!--begin::Info-->
                        <div class="flex-grow-1">
                            <!--begin::Title-->
                            <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                <!--begin::User-->
                                <div class="d-flex flex-column">
                                    <!--begin::Name-->
                                    <div class="d-flex align-items-center mb-2">
                                        <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Max
                                            Smith</a>
                                        <a href="#">
                                        </a>
                                    </div>
                                    <!--end::Name-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-wrap fw-semibold fs-6 pe-2">
                                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                            <span class="svg-icon svg-icon-4 me-1">
                                                <span class="badge badge-light-success">Advanced</span>
                                                <!--end::Svg Icon--></a>
                                        <a href="#"
                                           class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                            <span class="svg-icon svg-icon-4 me-1">
<svg width="24" height="24" viewBox="0 0 24 24"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.3"
                                                                              d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                                              fill="currentColor"></path>
<path
                                                                            d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                                            fill="currentColor"></path>
</svg>
</span>
                                            <!--end::Svg Icon-->SF, Bay Area</a>
                                        <a href="#"
                                           class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                            <span class="svg-icon svg-icon-4 me-1">
                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.3"
                                                                              d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z"
                                                                              fill="currentColor"></path>
<path
                                                                            d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z"
                                                                            fill="currentColor"></path>
</svg>
</span>
                                            <!--end::Svg Icon-->max@kt.com</a>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                                <!--begin::Actions-->
                                <div class="d-flex ">
                                    <a href="#" class="btn btn-sm bc-blue me-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor"></path>
                                            <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor"></path>
                                        </svg></a>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Title-->
                            <!--begin::Stats-->

                            <!--end::Stats-->
                        </div>

                        <!--end::Info-->
                    </div>
                    <!--end::Details-->
                    <div class="card mb-0 mb-xl-5" id="kt_profile_details_view">
                        <!--begin::Card body-->
                        <div class="card-body p-5 fs-8">

                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Contact Phone
                                </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 d-flex align-items-center">
                                    <span class="fw-bold fs-6 text-gray-800 me-2">044 3276 454 935</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Country
                                </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">Germany</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Ebay Store</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <a href="https://www.ebay.com/str/costechus?_trksid=p2047675.m145687.l149086"
                                       class="fw-semibold fs-6 text-gray-800 text-hover-primary">Costech.com</a>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <div class="row">
                        <div class="d-flex flex-wrap flex-stack">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column flex-grow-1 pe-8">
                                <!--begin::Stats-->
                                <div class="d-flex flex-wrap" style="justify-content: space-between;">
                                    <!--begin::Stat-->
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-success me-2">
<svg width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 xmlns="http://www.w3.org/2000/svg">
<rect opacity="0.5" x="13" y="6"
                                                                                      width="13" height="2" rx="1"
                                                                                      transform="rotate(90 13 6)"
                                                                                      fill="currentColor"></rect>
<path
                                                                                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                                                    fill="currentColor"></path>
</svg>
</span>
                                            <!--end::Svg Icon-->
                                            <div class="fs-2 fw-bold counted" data-kt-countup="true"
                                                 data-kt-countup-value="4500" data-kt-countup-prefix="$"
                                                 data-kt-initialized="1">$4,500
                                            </div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-semibold fs-6 text-gray-400">Earnings</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-danger me-2">
<svg width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 xmlns="http://www.w3.org/2000/svg">
<rect opacity="0.5" x="11" y="18"
                                                                                      width="13" height="2" rx="1"
                                                                                      transform="rotate(-90 11 18)"
                                                                                      fill="currentColor"></rect>
<path
                                                                                    d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z"
                                                                                    fill="currentColor"></path>
</svg></span>
                                            <!--end::Svg Icon-->
                                            <div class="fs-2 fw-bold counted" data-kt-countup="true"
                                                 data-kt-countup-value="75" data-kt-initialized="1">75
                                            </div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-semibold fs-6 text-gray-400">Imports</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-success me-2">
<svg width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 xmlns="http://www.w3.org/2000/svg">
<rect opacity="0.5" x="13" y="6"
                                                                                      width="13" height="2" rx="1"
                                                                                      transform="rotate(90 13 6)"
                                                                                      fill="currentColor"></rect>
<path
                                                                                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                                                    fill="currentColor"></path>
</svg>
</span>
                                            <!--end::Svg Icon-->
                                            <div class="fs-2 fw-bold counted" data-kt-countup="true"
                                                 data-kt-countup-value="60" data-kt-countup-prefix="%"
                                                 data-kt-initialized="1">%60
                                            </div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-semibold fs-6 text-gray-400">Success Rate</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-success me-2">
<svg width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 xmlns="http://www.w3.org/2000/svg">
<rect opacity="0.5" x="13" y="6"
                                                                                      width="13" height="2" rx="1"
                                                                                      transform="rotate(90 13 6)"
                                                                                      fill="currentColor"></rect>
<path
                                                                                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                                                    fill="currentColor"></path>
</svg>
</span>
                                            <!--end::Svg Icon-->
                                            <div class="fs-2 fw-bold counted" data-kt-countup="true"
                                                 data-kt-countup-value="60" data-kt-countup-prefix="%"
                                                 data-kt-initialized="1">%60
                                            </div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-semibold fs-6 text-gray-400">Success Rate</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Progress-->
                            <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                                <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                    <span class="fw-semibold fs-6 text-gray-400">Profile Compleation</span>
                                    <span class="fw-bold fs-6">50%</span>
                                </div>
                                <div class="h-5px mx-3 w-100 bg-light mb-3">
                                    <div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;"
                                         aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end::Progress-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Card body-->
        <!--begin::Card footer-->
        <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">

        </div>
        <!--end::Card footer-->
    </div>
    `);
});
