<div class="card card-flush m-10" data-select2-id="select2-data-125-ss3g">
    <!--begin::Card header-->
    @include('pages.admin.products.includes.card-header')
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0">
        <!--begin::Table-->
        <div id="kt_ecommerce_products_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="table-responsive">
                <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                       id="kt_datatable_column_rendering" data-url="{{ route('admin.products.list') }}">
                    <!--begin::Table head-->
                    @include('pages.admin.products.includes.table-header')
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="fw-semibold text-gray-600">

                    {{-- @include('pages.admin.products.includes.product-table-rows') --}}

                    </tbody>
                    <!--end::Table body-->
                </table>
            </div>
        </div>
        <!--end::Table-->
    </div>
    <!--end::Card body-->
</div>
