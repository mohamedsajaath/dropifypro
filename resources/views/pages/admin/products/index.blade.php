@extends('layouts.app')


@push('css')
@endpush
@section('content')
    @include('pages.admin.products.includes.product-table')
@endsection
@push('script')
    {{-- ADD PRODUCT MODAL --}}

    @include('pages.admin.products.includes.add-product-modal-script')

    {{-- ADD PRODUCT MODAL --}}

    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script>
        loadBreadCrumbWithHeader("Products", "All", "Dashboard", "{{ route('admin.dashboard') }}")
    </script>
    <script>
        let columns = [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
                searchable: false,
                sortable: false
            },
            {
                data: 'image_url',
                render: function(data, type, row) {
                    const imagePath = row.image_base_path + '/' + data
                    return `<img class="w-50px ms-n1" src="${imagePath}" alt="product" />`;

                },
                searchable: false,
                sortable: false
            },
            {
                data: 'name',
                name: 'name',
            },
            {
                data: 'price',
                name: 'product_variants.price',
            },
            {
                data: 'sku',
                name: 'product_variants.sku',
            },
            {
                data: 'quantity',
                name: 'product_variants.quantity'
            },
            {
                data: 'price',
                name: 'product_variants.price'
            },
            {

                render: function(data, type, row) {
                    return `<span class="fw-bold ms-3">226 <span class="badge badge-light-success fs-base">
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
                    `;
                },
                searchable: false,
                sortable: false
            },
            {

                render: function(data, type, row) {
                    return `<span class="fw-bold ms-3" data-bs-toggle="tooltip" data-bs-placement="Bottom" title="Reccommended"><span
                    class="badge badge-circle badge-success h-15px w-15px"></span></span>
                    `;
                },
                searchable: false,
                sortable: false
            },
            {
                render: function(data, type, row) {
                    return `
            <div class="dropdown show">
                 <a class="btn btn-sm btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Actions
                 </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <button data-id="${row.id}" class="dropdown-item"><i class="bi bi-pencil"></i>  Edit</button>
                    <button data-id="${row.id}" class="dropdown-item"><i class="bi bi-trash"></i>  Delete</button>
                    <button data-id="${row.id}" class="dropdown-item"><i class="bi bi-person-dash-fill"></i>  Un Recommend</button>
                </div>
            </div>
                       `;
                },
                searchable: false,
                sortable: false
            },

        ];
        $(document).ready(async function(e) {
            await initDataTable($('table'), columns, 'filter');
            // dt = $("#kt_datatable_column_rendering").DataTable();

            // // Select filter options
            // filterName = document.querySelectorAll(
            //     '[data-kt-docs-table-filter="plan_name"] [name="plan_name"]');
            // const filterButton = document.querySelector('[data-kt-docs-table-filter="filter"]');

            // // Filter datatable on submit
            // filterButton.addEventListener('click', function() {
            //     // Get filter values
            //     let paymentValue = '';

            //     // Get payment value
            //     filterName.forEach(r => {
            //         if (r.checked) {
            //             paymentValue = r.value;
            //         }

            //         // Reset payment value if "All" is selected
            //         if (paymentValue === 'all') {
            //             paymentValue = '';
            //         }
            //     });

            //     // Filter datatable --- official docs reference: https://datatables.net/reference/api/search()
            //     dt.search(paymentValue).draw();
            // });
        });
    </script>
@endpush
