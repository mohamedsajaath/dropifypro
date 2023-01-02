@extends('layouts.app')



@push('css')

@endpush

@section('content')

    <div class="card mb-5 mb-xl-8 m-10">

        <!--begin::Header-->

        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <span class="svg-icon svg-icon-1 position-absolute ms-4"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                  width="16" height="16"
                                                                                  fill="currentColor"
                                                                                  class="bi bi-search"
                                                                                  viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg></span>
                    <input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14"
                           placeholder="Search"/>
                </div>
                <div class="p-5" style="width: 400px">

                </div>
                <!--end::Search-->

            </div>
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5" style="width: 200px">
                <select class="form-select form-select-solid" data-kt-select2="true" data-hide-search="true">
                    <option value="2">Linked</option>
                    <option value="2">Unlinked</option>
                </select>
            </div>
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
                    <tr class="fw-semibold fs-6 text-gray-400 text-uppercase ">
                        <th>Seller Id</th>
                        <th>E-bay User Name</th>
                        <th class="text-start">Linked Date</th>
                        <th class="text-center">Status</th>
                        <th class="text-end"> Actions</th>
                    </tr>

                    </thead>

                    <tbody>

                    <tr>

                        <td>1001</td>

                        <td>Nafris Nafris</td>

                        <td class="text-start">2022/10/10</td>

                        <td class="text-center">

                            <span class="badge badge-success fs-7">Linked</span>

                        </td>

                        <!--begin::Action=-->
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                <span class="svg-icon svg-icon-5 m-0">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                <!--end::Svg Icon-->
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
                                <div class="menu-item px-3 dispatch">
                                    <a class="menu-link px-3 product-edit d-flex gap-5">

                                        <i class="bi bi-exclamation-circle text-danger"></i>

                                        Alert Seller</a>
                                </div>

                            </div>
                            <!--end::Menu-->
                        </td>
                        <!--end::Action=-->

                    </tr>
                    <tr>

                        <td>1001</td>

                        <td>Nafris Nafris</td>

                        <td class="text-start">2022/10/10</td>

                        <td class="text-center">

                            <span class="badge badge-danger fs-7">Unlinked</span>

                        </td>

                        <!--begin::Action=-->
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                <span class="svg-icon svg-icon-5 m-0">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                <!--end::Svg Icon-->
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
                                <div class="menu-item px-3 dispatch">
                                    <a class="menu-link px-3 product-edit d-flex gap-5">

                                        <i class="bi bi-exclamation-circle text-danger"></i>

                                        Alert Seller</a>
                                </div>

                            </div>
                            <!--end::Menu-->
                        </td>
                        <!--end::Action=-->

                    </tr>
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

@endsection

@push('script')


    <script>

        loadBreadCrumbWithHeader("Ebay-Accounts", "Details", "Dashboard", "{{ route('admin.dashboard') }}")

    </script>



    {{-- <script>

        "use strict";



        // Class definition

        var KTDatatablesExample = function() {

            // Shared variables

            var table

            var datatable;



            // Private functions

            var initDatatable = function() {

                // Set date data order

                const tableRows = table.querySelectorAll('tbody tr');



                tableRows.forEach(row => {

                    const dateRow = row.querySelectorAll('td');

                    const realDate = moment(dateRow[3].innerHTML, "DD MMM YYYY, LT")

                        .format(); // select date from 4th column in table

                    dateRow[3].setAttribute('data-order', realDate);

                });



                // Init datatable --- more info on datatables: https://datatables.net/manual/

                datatable = $(table).DataTable({

                    "info": true,

                    'order': [],

                    'pageLength': 10,



                });

            }



            // Hook export buttons

            var exportButtons = () => {

                const documentTitle = 'Customer Orders Report';

                var buttons = new $.fn.dataTable.Buttons(table, {

                    buttons: [{

                            extend: 'copyHtml5',

                            title: documentTitle

                        },

                        {

                            extend: 'excelHtml5',

                            title: documentTitle

                        },

                        {

                            extend: 'csvHtml5',

                            title: documentTitle

                        },

                        {

                            extend: 'pdfHtml5',

                            title: documentTitle

                        }

                    ]

                }).container().appendTo($('#kt_datatable_example_buttons'));



                // Hook dropdown menu click event to datatable export buttons

                const exportButtons = document.querySelectorAll(

                    '#kt_datatable_example_export_menu [data-kt-export]');

                exportButtons.forEach(exportButton => {

                    exportButton.addEventListener('click', e => {

                        e.preventDefault();



                        // Get clicked export value

                        const exportValue = e.target.getAttribute('data-kt-export');

                        const target = document.querySelector('.dt-buttons .buttons-' +

                            exportValue);



                        // Trigger click event on hidden datatable export buttons

                        target.click();

                    });

                });

            }



            // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()

            var handleSearchDatatable = () => {

                const filterSearch = document.querySelector('[data-kt-filter="search"]');

                filterSearch.addEventListener('keyup', function(e) {

                    datatable.search(e.target.value).draw();

                });

            }



            // Public methods

            return {

                init: function() {

                    table = document.querySelector('#kt_datatable_column_rendering');



                    if (!table) {

                        return;

                    }



                    initDatatable();

                    exportButtons();

                    handleSearchDatatable();

                }

            };

        }();



        // On document ready

        KTUtil.onDOMContentLoaded(function() {

            KTDatatablesExample.init();

        });

    </script> --}}

@endpush
