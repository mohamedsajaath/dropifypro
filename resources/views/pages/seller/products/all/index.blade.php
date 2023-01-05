@extends('layouts.app')


@push('css')

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
                           class="form-control form-control-solid w-200px ps-14" placeholder="Search Product">
                </div>
                <!--end::Search-->
                <select class="form-control form-select float-right w-200px" data-control="select2">
                    <option value="1">Day</option>
                    <option value="2" selected>filter</option>
                    <option value="3">6 Months</option>
                    <option value="3">Year</option>
                </select>
                <select class="form-control form-select float-right w-200px" data-control="select2">
                    <option value="1">Day</option>
                    <option value="2" selected>filter</option>
                    <option value="3">6 Months</option>
                    <option value="3">Year</option>
                </select>
            </div>
            <!--end::Card title-->

            <div class="row w-100">

                @foreach($products as $productIndex => $product)


                        <?php
                        $maxPrice = 0;
                        $minPrice = 0;

                        $maxRsp = 0;
                        $minRsp = 0;

                        $quantity = 0;
                        ?>




                    <div class="col-sm-6 col-xxl-4 col-md-4 mb-5">
                        <!--begin::Card widget 14-->
                        <div class="card card-flush h-xl-500" style="border: solid 1px #e8e7e7;">
                            <!--begin::Body-->
                            <div class="card-body text-center pb-1">
                                <!--begin::Overlay-->


                                <!--end::Overlay-->
                                <!--begin::Info-->
                                <div class="d-flex align-items-end flex-stack">
                                    <!--begin::Title-->
                                    <div class="text-start">
                                        <span
                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block">{{  $variants[$productIndex]['title'] }}</span>
                                    </div>
                                </div>

                                <span style="">
                            <div class="d-flex align-items-end flex-stack">

                                <!--begin::Title-->
                                <div class="text-start">
                                    <span class="text-gray-400 mt-1 fw-bold fs-6">Price</span>
                                </div>
                                <!--end::Title-->
                                @foreach($variants[$productIndex]['getVariants'] as $variant)
                                        <?php
                                        if ($variant['price'] > $maxPrice) {
                                            $maxPrice = $variant['price'];
                                        } else {
                                            $minPrice = $variant['price'];
                                        }


                                        if ($variant['rsp'] > $maxRsp) {
                                            $maxRsp = $variant['rsp'];
                                        } else {
                                            $minRsp = $variant['rsp'];
                                        }
                                        $quantity += $variant['quantity'] ;
                                        ?>
                                @endforeach

                                <!--begin::Total-->

                                <span class="text-gray-600 text-end fw-bold fs-7">
                                    @if($minPrice == 0)
                                        <small>£</small> {{ $maxPrice }}
                                    @elseif($maxPrice == 0)
                                        <small>£</small> {{ $minPrice }}
                                    @else
                                        <small>£</small> {{ $minPrice }} - <small>£</small> {{ $maxPrice }}
                                    @endif
                                </span>
                                <!--end::Total-->

                            </div>
                            <div class="d-flex align-items-end flex-stack mb-1">
                                <!--begin::Title-->
                                <div class="text-start">
                                    <span class="text-gray-400 mt-1 fw-bold fs-6">Rsp</span>
                                </div>
                                <!--end::Title-->
                                <!--begin::Total-->
                                <span class="text-gray-600 text-end fw-bold fs-7">
                                    @if($minRsp == 0)
                                        <small>£</small> {{ $maxRsp }}
                                    @elseif($maxRsp == 0)
                                        <small>£</small> {{ $minRsp }}
                                    @else
                                        <small>£</small> {{ $minRsp }} - <small>£</small> {{ $maxRsp }}
                                    @endif
                                </span>
                                <!--end::Total-->

                            </div>
                            <div class="d-flex align-items-end flex-stack mb-3">
                                <!--begin::Title-->
                                <div class="text-start">
                                    <span class="text-gray-600 mt-1 fw-bold fs-7">Profit after
                                 <span style="color:#E53238;">e</span><span style="color:#0064D2;">b</span><span style="color:#F5AF02;">a</span><span style="color:#86B817;">y</span> fees</span>
                                </div>
                                <!--end::Title-->
                                <!--begin::Total-->
                                <span class="text-gray-600 text-end fw-bold fs-8">

                                    @if($minPrice == 0 && $minRsp == 0)
                                        <small>£</small> {{ $maxRsp-$maxPrice }}
                                    @elseif($maxPrice == 0 && $maxRsp == 0)
                                        <small>£</small> {{ $minRsp-$minPrice }}
                                    @endif
                                </span>
                                <!--end::Total-->
                            </div>
                            <div class="d-flex align-items-end flex-stack mb-1 mt-2 text-gray-600"
                                 style="flex-wrap: wrap;">
                                        <span class="w-100 text-start h-20px d-flex"
                                              style="justify-content: space-between;">
                                            <p>dispatch time :</p><p>5hrs</p>
                                        </span>
                                <span class="w-100 text-start h-20px d-flex" style="justify-content: space-between;">
                                            <p>delivery time :</p><p>10hrs</p>
                                        </span>
                                <span class="w-100 text-start h-20px d-flex" style="justify-content: space-between;">
                                    <p>quantity :</p><p>{{ $quantity }}</p>
                                        </span>
                            </div>
                                    <!--begin::Image-->
                            <div class="owl-carousel">
                                     @foreach($product_image as $image)
                                                                        @if($image['reference_id'] == $product['id'])
                                    <div>
                                    <div
                                        class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7 ml-3 mr-3"
                                        style="height: 50px; width:50px; background-image:url('{{ asset('storage/')."/".$image['storage_name'] }}')"></div>
                                </div>
                                                                        @endif
                                @endforeach
                            </div>
                            </span>
                            </div>

                            <!--end::Body-->
                            <!--begin::Footer-->
                            <div class="card-footer d-flex flex-stack pt-2">
                                <!--begin::Link-->
                                <a class="btn btn-sm btn-primary flex-shrink-0 me-2 import-product" data-bs-target="#kt_modal_bidding"
                                   data-bs-toggle="modal" data-id="{{ $product['id'] }}">Import</a>
                                <!--end::Link-->
                                <!--begin::Link-->
                                <a class="btn btn-sm btn-light flex-shrink-0"
                                   href="{{ url('/product/view') }}/{{ $product['id'] }}">View Item</a>
                                <!--end::Link-->
                            </div>
                            <!--end::Footer-->
                        </div>
                        <!--end::Card widget 14-->
                    </div>
                @endforeach

            </div>

            {{ $products->links() }}
        </div>
        <!--end::Card header-->

    </div>

@endsection
@push('script')
    {{-- ADD PRODUCT MODAL --}}
    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel();
        });


        $(document).on("click", ".import-product", async function (e) {
            e.preventDefault()

            let productId = $(this).data('id');

// console.log(productId);

            $('.custom-modal-size').addClass('mw-300').removeClass('mw-650px');
            await loadFormModal("", "", `Import To <span style="color:#E53238;">e</span><span style="color:#0064D2;">b</span><span style="color:#F5AF02;">a</span><span style="color:#86B817;">y</span>`, "", "import", "import", `
                @csrf
                <input type="hidden" name="product_id" value="${productId}">
                <div class="card-body p-9 card mb-5">
                    <div class="d-flex mb-7 fv-row fv-plugins-icon-container" style="gap:5px;">
                        <input type="number" class="form-control form-control-solid" placeholder="Margin Percentage" name="margin" value="10%" required>  <input type="text" class="form-control form-control-solid w-25 text-center" value="%" disabled>
                    </div>

                </div>


            `);

        });
    </script>
    {{-- ADD PRODUCT MODAL --}}

<script>

    $(document).on('submit', '#kt_modal_new_target_form', async function (e) {
        let btn = $('.import');
        e.preventDefault()
        try {
            loadButton(btn)
            const url = "{{ route('products.import') }}";
            let ajaxRequest = new HttpRequest(url, 'POST');
            ajaxRequest.set_data_by_form_object($(this));
            let response = await ajaxRequest.call();
            $("#kt_modal_new_target").modal("hide");
            toastr.success(response.message);
        } catch (err) {
            toastr.error(err);
        }finally {
            resetButton(btn,'Proceed')
        }

    });


</script>
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>

@endpush
