<div class="card mb-5 mb-xl-8 m-10">
    <!--begin::Header-->
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                <span class="svg-icon svg-icon-1 position-absolute ms-4"><svg xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </span>
                <input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14"
                    placeholder="Search" />
            </div>
            <!--end::Search-->
        </div>
        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
            <button type="button" class="btn btn-primary add-manager">Add Manager</button>
        </div>
        {{-- <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
            <a class="btn btn-primary load-modal" href="javascript:void(0)" data-url="{{ route('admin.support.account-managers.create') }}">
                <i class="anticon anticon-plus"></i> Add Manager </a>
        </div> --}}
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table id="kt_datatable_column_rendering"
                class="table table-hover table-rounded table-row-bordered gy-5 gs-7 table-striped">
                <thead>
                    <tr class="fw-semibold fs-6 text-gray-400 text-uppercase">
                        <th class="fw-bold fs-6">MANAGER NAME</th>
                        <th class="fw-bold fs-6">E-MAIL</th>
                        <th class="fw-bold fs-6">WHATSAPP NO</th>
                        <th class="fw-bold fs-6 text-center">RESPONSE TIME</th>
                        <th class="fw-bold fs-6 text-center">ASSIGNED SELLERS</th>
                        <th class="fw-bold fs-6 text-end">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($account_manager_details as $account_manager_detail)
                    <tr class="fw-bold fs-6 text-gray-500">
                        <td class="seller-slider text-hover-info">{{$account_manager_detail->name }}</td>
                        <td>{{ $account_manager_detail->email }}</td>
                        <td>{{ $account_manager_detail->contact_no}}</td>
                        <td class="text-center">
                            {{ number_format((float) $account_manager_detail->response_time, 0, '', '') }}
                        </td>
                        <td class="text-center text-hover-info seller-list">2</td>
                        <td class="text-end ">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
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
                                <div class="menu-item px-3 dispatch">
                                    <a class="menu-link px-3 product-edit d-flex gap-5 edit-manager" data-id="{{ $account_manager_detail->id }}">
                                        <i class="bi bi-pencil"></i>Edit
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <div class="menu-item px-3">
                                    <a class="menu-link px-3 delete-sweet d-flex gap-5">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <i class="bi bi-trash"></i>Delete</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a class="menu-link px-3 assign-sellers d-flex gap-5"><i
                                            class="bi bi-person-plus"></i></i>Assign Sellers</a>
                                </div>
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex flex-stack flex-wrap pt-10">
                <div
                    class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                    <div class="dataTables_length" id="kt_ecommerce_products_table_length">
                        <label>
                            <select name="kt_ecommerce_products_table_length"
                                aria-controls="kt_ecommerce_products_table"
                                class="form-select form-select-sm form-select-solid">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </label>
                    </div>
                </div>
                <!--begin::Pages-->
                <ul class="pagination">
                    <li class="page-item previous">
                        <a href="#" class="page-link">
                            <i class="previous"></i>
                        </a>
                    </li>
                    <li class="page-item active">
                        <a href="#" class="page-link">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">3</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">4</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">5</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">6</a>
                    </li>
                    <li class="page-item next">
                        <a href="#" class="page-link">
                            <i class="next"></i>
                        </a>
                    </li>
                </ul>
                <!--end::Pages-->
            </div>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
</div>
