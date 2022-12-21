@extends('layouts.app')


@push('css')
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endpush
@section('content')
    <div class="card card-flush m-10" data-select2-id="select2-data-125-ss3g">
        <!--begin::Card header-->
        <div class="card-header align-items-center py-5 gap-2 gap-md-5" data-select2-id="select2-data-124-5bsj">
            <!--begin::Card title-->
            <div class="card-title d-flex gap-3">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span class="svg-icon svg-icon-1 position-absolute ms-4">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                            <path
                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                fill="currentColor"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <input type="text" data-kt-ecommerce-product-filter="search"
                        class="form-control form-control-solid w-250px ps-14" placeholder="Search Product">
                </div>
                <!--end::Search-->
                <select class="form-control form-select float-right" data-control="select2">
                    <option value="1">Day</option>
                    <option value="2" selected>filter</option>
                    <option value="3">6 Months</option>
                    <option value="3">Year</option>
                </select>
                <select class="form-control form-select float-right" data-control="select2">
                    <option value="1">Day</option>
                    <option value="2" selected>filter</option>
                    <option value="3">6 Months</option>
                    <option value="3">Year</option>
                </select>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <div id="kt_ecommerce_products_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                        id="kt_ecommerce_products_table">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                <th class="min-w-200px sorting" tabindex="0" aria-controls="kt_ecommerce_products_table"
                                    rowspan="1" colspan="1" aria-label="Product: activate to sort column ascending"
                                    style="width: 278.125px;">Product
                                </th>
                                <th class="text-end min-w-70px sorting" tabindex="0"
                                    aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1"
                                    aria-label="Qty: activate to sort column ascending" style="width: 125.031px;">Quantity
                                </th>
                               
                                <th class="text-end min-w-100px sorting" tabindex="0"
                                    aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1"
                                    aria-label="Rating: activate to sort column ascending" style="width: 140.875px;">RSP
                                </th>
                                <th class="text-end min-w-100px sorting" tabindex="0"
                                    aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1"
                                    aria-label="Rating: activate to sort column ascending" style="width: 140.875px;">Profit
                                </th>
                                <th class="text-end min-w-100px sorting" tabindex="0"
                                    aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1"
                                    aria-label="Rating: activate to sort column ascending" style="width: 140.875px;">Dispach Time
                                </th>
                              
                                <th class="text-end min-w-70px sorting_disabled" rowspan="1" colspan="1"
                                    aria-label="Actions" style="width: 130.203px;">Actions
                                </th>
                                <th class="text-end min-w-70px sorting_disabled" rowspan="1" colspan="1"
                                    aria-label="Actions" style="width: 130.203px;">Status
                                </th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-semibold text-gray-600">

                            @include('pages.seller.products.all.includes.product-table-rows')


                        </tbody>
                        <!--end::Table body-->
                    </table>
                </div>
                <div class="row">
                    <div
                        class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                        <div class="dataTables_length" id="kt_ecommerce_products_table_length"><label><select
                                    name="kt_ecommerce_products_table_length" aria-controls="kt_ecommerce_products_table"
                                    class="form-select form-select-sm form-select-solid">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select></label></div>
                    </div>
                    <div
                        class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                        <div class="dataTables_paginate paging_simple_numbers" id="kt_ecommerce_products_table_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled"
                                    id="kt_ecommerce_products_table_previous"><a href="#"
                                        aria-controls="kt_ecommerce_products_table" data-dt-idx="0" tabindex="0"
                                        class="page-link"><i class="previous"></i></a></li>
                                <li class="paginate_button page-item active"><a href="#"
                                        aria-controls="kt_ecommerce_products_table" data-dt-idx="1" tabindex="0"
                                        class="page-link">1</a></li>
                                <li class="paginate_button page-item "><a href="#"
                                        aria-controls="kt_ecommerce_products_table" data-dt-idx="2" tabindex="0"
                                        class="page-link">2</a></li>
                                <li class="paginate_button page-item "><a href="#"
                                        aria-controls="kt_ecommerce_products_table" data-dt-idx="3" tabindex="0"
                                        class="page-link">3</a></li>
                                <li class="paginate_button page-item "><a href="#"
                                        aria-controls="kt_ecommerce_products_table" data-dt-idx="4" tabindex="0"
                                        class="page-link">4</a></li>
                                <li class="paginate_button page-item "><a href="#"
                                        aria-controls="kt_ecommerce_products_table" data-dt-idx="5" tabindex="0"
                                        class="page-link">5</a></li>
                                <li class="paginate_button page-item next" id="kt_ecommerce_products_table_next"><a
                                        href="#" aria-controls="kt_ecommerce_products_table" data-dt-idx="6"
                                        tabindex="0" class="page-link"><i class="next"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
@endsection
@push('script')
    {{-- ADD PRODUCT MODAL --}}
    <script>
        $(document).on("click", ".add-products-btn", async function(e) {
            e.preventDefault()

            $('.custom-modal-size').addClass('mw-1000px').removeClass('mw-650px');
            await loadFormModal("", "", "Add New Product", "", "Proceed", "btn-class", `

												<div class="card-body border-top p-9 scroll-y">
													<!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label required fw-semibold fs-6">Categories:</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 fv-row">

                                                                      <select class="form-control form-select float-right category form-control-solid">
                                                                            <option value="1" selected>category</option>
                                                                            <option value="2" >Antiques/Antiquities/The Americas/Byzantine</option>
                                                                            <option value="3">Antiques/Antiquities/Celti</option>
                                                                            <option value="4">Antiques/Antiquities/Greek</option>
                                                                            <option value="5">Antiques/Antiquities/Far Eastern</option>
                                                                            <option value="6">Antiques/Antiquities/Egyptian</option>
                                                                            <option value="7">Antiques/Architectural & Garden/Ceiling Tins</option>
                                                                        </select>
                                                    </div>
                                                            <!--end::Col-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label fw-semibold fs-6">
															<span class="required">Sku:</span>
														</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 fv-row">
															<input type="text" name="sku" class="form-control form-control-lg form-control-solid" placeholder="SKU" />
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label fw-semibold fs-6">
															<span class="required">Title:</span>
														</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 fv-row">
															<input type="text" name="title" class="form-control form-control-lg form-control-solid" placeholder="Title" />
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 fw-semibold fs-6">
															<span>Sub-title:</span>
														</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 fv-row">
															<textarea name="sub-title" class="form-control form-control-lg form-control-solid" placeholder="Sub-Title"></textarea>
														</div>
														<!--end::Col-->
													</div>

												<!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 fw-semibold fs-6">
															<span >Description:</span>
														</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 fv-row">
															<textarea name="descriptione" class="form-control form-control-lg form-control-solid" placeholder="Description"></textarea>
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
												<!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 fw-semibold fs-6">
															<span>Images:</span>
														</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 fv-row">

		                                                <div class="form-group">
                                                                <div class="image-field">
                                                                    <input type="file" name="image" id="image" class="image_input_tag opacity upload-image-input"
                                                                           oninput="uploaded_image.src=window.URL.createObjectURL(this.files[0])"/>
                                                                </div>
                                                            </div>

                                                            <div class="form-group hidden">
                                                                <div class="image-field">
                                                                    <img src="{{ asset('assets/media/images/add_image.png') }}" id="uploaded_image" style="height:50px; width:50px;"/>
                                                                </div>
                                                            </div>
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
													<!--end::Input group-->
                                                    <div class="row mb-6 radio-btns">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label required fw-semibold fs-6">Condition:</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 fv-row">
															<!--begin::Options-->
                                                                <div class="d-flex align-items-center mt-3 justify-content-xl-around w-50">
                                                                <div class="form-check">
                                                                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="new" checked>
                                                                      <label class="form-check-label" for="exampleRadios1">
                                                                        New
                                                                      </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="used">
                                                                      <label class="form-check-label" for="exampleRadios2">
                                                                        Used
                                                                      </label>
                                                                    </div>
                                                                </div>
															<!--end::Options-->
														</div>
														<!--end::Col-->
													</div>


													<!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label fw-semibold fs-6">
															<span class="required">Price:</span>
														</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-4 fv-row">
                                                            <div class="input-group mb-5">
                                                                    <span class="input-group-text">USD</span>
                                                                    <input type="number" class="form-control" name="price">
                                                                    <span class="input-group-text">.00</span>
                                                                </div>
                                                            </div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
		                                            <!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label fw-semibold fs-6">
															<span class="required">RSP:</span>
														</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-4 fv-row">
                                                            <div class="input-group mb-5">
                                                                    <span class="input-group-text">USD</span>
                                                                    <input type="number" class="form-control" name="rsp">
                                                                    <span class="input-group-text">.00</span>
                                                                </div>
                                                            </div>
														<!--end::Col-->
													</div>

												</div>
												<!--end::Card body-->

												<div class="card-body border-top p-9 scroll-y">
                                                <!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
													                <div class="form-check">
                                                                      <input class="form-check-input" type="radio" name="variation" id="variation" value="true" checked>
                                                                      <label class="form-check-label" for="exampleRadios1">
                                                                      Variation Product
                                                                      </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                      <input class="form-check-input" type="radio" name="variation" id="variation2" value="false">
                                                                      <label class="form-check-label" for="exampleRadios2">
                                                                        Non Variation Product
                                                                      </label>
                                                                    </div>
                                                                </div>
															<!--end::Opti
														<!--end::Label-->

													</div>
													<!--end::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label fw-semibold fs-6">
                                                        <input type="text" class="form-control form-control-lg form-control-solid varient-title" placeholder="Variant Title"/>
                                                        </label>
														<label class="col-lg-4 col-form-label fw-semibold fs-6">
                                                        <input type="text" class="form-control form-control-lg form-control-solid varient-value" placeholder="value" />
                                                        </label>
                                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                                        <button type="button" class="btn btn-sm btn-light-primary add-variation-btn h-100">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor"></rect>
																					<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor"></rect>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->Add variation</button>
														</label>
														<!--end::Label-->
													</div>
													<!--end::Input group-->
			                                    	<div class="row mb-6 variants-container">


                                                     </div>





												</div>
												<!--end::Card body-->
            `);


            $('select.category').select2({
                dropdownParent: $('#kt_modal_new_target'),
            });
        });
    </script>
    {{-- ADD PRODUCT MODAL --}}







    {{-- ADD VARIATION BTN --}}
    <script>
        $(document).on('click', '.add-variation-btn', function() {
            let title = $('.varient-title').val();
            let value = $('.varient-value').val();

            $('.variants-container').append(`

   <label class="col-lg-4 col-form-label fw-semibold fs-6">
                <input type="text" class="form-control form-control-lg form-control-solid varient-${title}" name="varient-${title}" value="${title}" />
            </label>
  <label class="col-lg-4 col-form-label fw-semibold fs-6">
                <input type="text" class="form-control form-control-lg form-control-solid varient-${value}" name="varient-${value}" value="${value}" />
            </label>
 <label class="col-lg-2 col-form-label fw-semibold fs-6">
             <button type="button" data-repeater-delete="" class="btn btn-sm btn-icon btn-light-danger">
																						<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
																						<span class="svg-icon svg-icon-1">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor"></rect>
																								<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor"></rect>
																							</svg>
																						</span>
																						<!--end::Svg Icon-->
																					</button>

            </label>

`);

        });


        $(document).on('change', '[name=exampleRadios]', function() {
            if ($('#exampleRadios2').is(':checked')) {
                $(this).closest('.radio-btns').append(`
                <div class="col-lg-12 fv-row comp-desc mt-2">
											<textarea name="comprehensive-description" class="form-control form-control-lg form-control-solid " placeholder="comprehensive description"></textarea>
				</div>
                `);
            } else {
                $('.comp-desc').remove();
            }
        });



        $(document).on('change', '[name=variation]', function() {
            alert()
        });
    </script>
    {{-- ADD VARIATION BTN --}}

    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>

    <script>
        loadBreadCrumbWithHeader("Products", "All", "Dashboard", "#")
    </script>
@endpush
