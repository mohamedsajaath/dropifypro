@foreach ($products as $product)
    <tr>
        <td>
            <div class="d-flex align-items-center">
                <!--begin::Thumbnail-->
                <img class="w-50px ms-n1" src="{{ asset('storage/' . $product->image_url) }}" alt="product" />
                <!--end::Thumbnail-->
                <div class="ms-5">
                    <!--begin::Title-->
                    <a class="text-gray-800 text-hover-primary fs-5 fw-bold product-slider"
                        data-kt-ecommerce-product-filter="product_name">
                        {{ $product->name }}</a>
                    <span class="text-gray-400 fw-semibold d-block fs-7">£{{ $product->price }}</span>
                    <!--end::Title-->
                </div>
            </div>
        </td>
        <!--end::Category=-->
        <!--begin::SKU=-->
        <td class="text-end pe-0">
            <span class="fw-bold">{{ $product->sku }}</span>
        </td>
        <!--end::SKU=-->
        <!--begin::Qty=-->
        <td class="text-end pe-0">
            <span class="fw-bold ms-3">{{ $product->quantity }}</span>
        </td>
        <!--end::Qty=-->

        <!--begin::Rating-->
        <td class="text-end pe-0">
            <span class="fw-bold ms-3">£{{ $product->price }}</span>
        </td>
        <!--end::Rating-->
        <!--begin::Status=-->
        <td class="text-end pe-0" data-order="Scheduled">
            <!--begin::Badges-->
            <span class="fw-bold ms-3">226 <span class="badge badge-light-success fs-base">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                    <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="13" y="6" width="13" height="2"
                                rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                            <path
                                d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                fill="currentColor"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </span></span>
            <!--end::Badges-->
        </td>
        <!--end::Status=-->
        <!--begin::Status=-->
        <td class="text-end pe-0 text-center" data-order="Scheduled">
            <!--begin::Badges-->
            <span class="fw-bold ms-3" data-bs-toggle="tooltip" data-bs-placement="Bottom" title="Reccommended"><span
                    class="badge badge-circle badge-success h-15px w-15px"></span></span>
            <!--end::Badges-->
        </td>
        <!--end::Status=-->
        <!--begin::Action=-->
        <td class="text-end ">
            <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                data-kt-menu-placement="bottom-end">Actions
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
                    <a class="menu-link px-3 product-edit d-flex gap-5"><i class="bi bi-pencil"></i> Edit</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a class="menu-link px-3 delete-sweet d-flex gap-5"><i class="bi bi-trash"></i> Delete</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a class="menu-link px-3 d-flex gap-5"><i class="bi bi-person-dash-fill"></i>Un Recommend</a>
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::Menu-->
        </td>
        <!--end::Action=-->
    </tr>
@endforeach
