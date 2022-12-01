@extends('layouts.app')


@push('css')
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <style>
        *,
        *:before,
        *:after {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
        }

        :focus {
            outline: 0px;
        }

        .quiz_title {
            font-size: 30px;
            font-weight: 700;
            color: #292d3f;
            text-align: center;
            margin-bottom: 50px;
        }

        .quiz_card_area {
            position: relative;
            margin-bottom: 30px;
        }

        .single_quiz_card {
            border: 1px solid #efefef;
            -webkit-transition: all 0.3s linear;
            -moz-transition: all 0.3s linear;
            -o-transition: all 0.3s linear;
            -ms-transition: all 0.3s linear;
            -khtml-transition: all 0.3s linear;
            transition: all 0.3s linear;
        }

        .quiz_card_title {
            padding: 10px;
            text-align: center;
            background-color: #d6d6d6;
        }

        .quiz_card_title h3 {
            font-size: 16px;
            font-weight: 400;
            color: #292d3f;
            margin-bottom: 0;
            -webkit-transition: all 0.3s linear;
            -moz-transition: all 0.3s linear;
            -o-transition: all 0.3s linear;
            -ms-transition: all 0.3s linear;
            -khtml-transition: all 0.3s linear;
            transition: all 0.3s linear;
        }

        .quiz_card_title h3 i {
            opacity: 0;
        }

        .quiz_card_icon {
            max-width: 100%;
            min-height: 135px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .quiz_icon {
            width: 70px;
            height: 75px;
            position: relative;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: auto;
            -webkit-transition: all 0.3s linear;
            -moz-transition: all 0.3s linear;
            -o-transition: all 0.3s linear;
            -ms-transition: all 0.3s linear;
            -khtml-transition: all 0.3s linear;
            transition: all 0.3s linear;
        }

        .quiz_icon1 {
            background-image: url('https://img.icons8.com/ios-filled/32/000000/maxcdn.png');
        }

        .quiz_icon2 {
            background-image: url('https://img.icons8.com/ios-filled/48/000000/download-2.png');
        }


        .quiz_checkbox {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            width: 100%;
            height: 100%;
            z-index: 999;
            cursor: pointer;
        }

        .quiz_checkbox:checked~.single_quiz_card {
            border: 1px solid #2575fc;
        }

        .quiz_checkbox:checked:hover~.single_quiz_card {
            border: 1px solid #2575fc;
        }

        .quiz_checkbox:checked~.single_quiz_card .quiz_card_content .quiz_card_title {
            background-color: #2575fc;
            color: #ffffff;
        }

        .quiz_checkbox:checked~.single_quiz_card .quiz_card_content .quiz_card_title h3 {
            color: #ffffff;
        }

        .quiz_checkbox:checked~.single_quiz_card .quiz_card_content .quiz_card_title h3 i {
            opacity: 1;
        }

        .quiz_checkbox:checked:hover~.quiz_card_title {
            border: 1px solid #2575fc;
        }

        /*Icon Selector*/

        .quiz_checkbox:checked~.single_quiz_card .quiz_card_content .quiz_card_icon {
            color: #2575fc;
        }

        .quiz_checkbox:checked~.single_quiz_card .quiz_card_content .quiz_card_icon .quiz_icon1 {
            background-image: url('https://img.icons8.com/nolan/32/000000/maxcdn.png');
        }

        .quiz_checkbox:checked~.single_quiz_card .quiz_card_content .quiz_card_icon .quiz_icon2 {
            background-image: url('https://img.icons8.com/color/48/000000/download-2.png');
        }

        .quiz_checkbox:checked~.single_quiz_card .quiz_card_content .quiz_card_icon .quiz_icon3 {
            background-image: url('https://img.icons8.com/color/48/000000/cloudflare.png');
        }

        .quiz_checkbox:checked~.single_quiz_card .quiz_card_content .quiz_card_icon .quiz_icon4 {
            background-image: url('https://img.icons8.com/material-outlined/80/000000/download-2.png');
        }

        .quiz_card_icon {
            font-size: 50px;
            color: #000000;
        }

        .quiz_backBtn_progressBar {
            position: relative;
            margin-bottom: 60px;
        }

        .quiz_backBtn {
            background-color: transparent;
            border: 1px solid #d2d2d3;
            color: #8e8e8e;
            border-radius: 50%;
            position: absolute;
            top: -17px;
            left: 0px;
            width: 40px;
            height: 40px;
            text-align: center;
            vertical-align: middle;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none !important;
        }

        .quiz_backBtn:hover {
            color: #a9559b;
            border: 1px solid #2575fc;
        }

        .quiz_backBtn_progressBar .progress {
            margin-left: 50px;
            margin-top: 50px;
            height: 6px;
        }

        .quiz_backBtn_progressBar .progress-bar {
            background-color: #2575fc;
        }

        .quiz_next {
            text-align: center;
            margin-top: 50px;
        }

        .quiz_continueBtn {
            max-width: 315px;
            background-color: #2575fc;
            color: #ffffff;
            font-size: 18px;
            border-radius: 20px;
            padding: 10px 125px;
            border: 0;
        }

        .row {
            justify-content: center;
        }
    </style>
@endpush
@section('content')
    <div class="card mb-5 mb-xl-8 m-8">

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
                <div class="p-5" style="width: 600px">

                </div>
                <!--end::Search-->

            </div>
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table id="kt_datatable_column_rendering" class="table table-striped table-row-bordered gy-5 gs-7">
                    <thead>
                        <tr class="fw-semibold fs-6 text-gray-400">
                            <th>Order Id</th>
                            <th>Order Date</th>
                            <th>Total Price</th>
                            <th>Total Quantity</th>

                            <th class="min-w-100px text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ORD522</td>
                            <td>2022/5/6</td>
                            <td>$500</td>
                            <td>61</td>
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
                                <div
                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 dispatch">
                                        <a class="menu-link px-3 product-edit d-flex gap-5">

                                            <i class="bi bi-exclamation-circle text-danger"></i>

                                            Alert Seller</a>
                                    </div>
                                    <!--end::Menu item-->

                                </div>
                                <!--end::Menu-->
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
@endsection
@push('script')
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script>
        loadBreadCrumbWithHeader("Orders", "Unpaid", "Dashboard", "#")
    </script>
    <script>
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
    </script>
@endpush
