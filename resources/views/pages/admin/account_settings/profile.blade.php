@extends('layouts.app')

@push('css')
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!--begin::Navbar-->
                    <div class="card mb-5 mb-xl-10">
                        <div class="card-body pt-9 pb-0">
                            <!--begin::Details-->
                            @include('pages.admin.account_settings.includes.index')
                            <!--end::Details-->
                            <!--begin::Navs-->
                            <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                                        href="{{ route('admin.overview') }}">Overview</a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 active"
                                        href="{{ route('admin.profile') }}">Profile</a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5"
                                        href="{{ route('admin.ebay') }}">E-Bay </a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5"
                                        href="{{ route('admin.plan') }}">Plans</a>
                                </li>
                                <!--end::Nav item-->
                            </ul>
                            <!--begin::Navs-->
                        </div>
                    </div>
                    <!--end::Navbar-->
                    <!--begin::details View-->

                    <!--begin::Basic info-->
                    <div class="card mb-5 mb-xl-10">
                        <!--begin::Card header-->
                        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                            data-bs-target="#kt_account_profile_details" aria-expanded="true"
                            aria-controls="kt_account_profile_details">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Profile Details</h3>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--begin::Card header-->
                        <!--begin::Content-->
                        <div id="kt_account_settings_profile_details" class="collapse show">
                            <!--begin::Form-->
                            <form id="kt_account_profile_details_form"
                                class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                                <!--begin::Card body-->
                                <div class="card-body border-top p-9">
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-outline image-input-empty"
                                                data-kt-image-input="true"
                                                style="background-image: url({{ asset('assets/media/svg/avatars/blank.svg') }})">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-125px h-125px"
                                                    style="background-image: none;"></div>
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Label-->
                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    aria-label="Change avatar" data-kt-initialized="1">
                                                    <i class="bi bi-pencil-fill fs-7"></i>
                                                    <!--begin::Inputs-->
                                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                                    <input type="hidden" name="avatar_remove" value="1">
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Cancel-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                    aria-label="Cancel avatar" data-kt-initialized="1">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Cancel-->
                                                <!--begin::Remove-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                    aria-label="Remove avatar" data-kt-initialized="1">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Remove-->
                                            </div>
                                            <!--end::Image input-->
                                            <!--begin::Hint-->
                                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                            <!--end::Hint-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Full
                                            Name</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Row-->
                                            <div class="row">
                                                <!--begin::Col-->
                                                <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="fname"
                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                        placeholder="First name" value="">
                                                    <div class="fv-plugins-message-container invalid-feedback">
                                                    </div>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="lname"
                                                        class="form-control form-control-lg form-control-solid"
                                                        placeholder="Last name" value="">
                                                    <div class="fv-plugins-message-container invalid-feedback">
                                                    </div>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->

                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Address</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Row-->
                                            <div class="row">
                                                <!--begin::Col-->
                                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="fname"
                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                        placeholder="Address" value="">
                                                    <div class="fv-plugins-message-container invalid-feedback">
                                                    </div>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">City
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Row-->
                                            <div class="row">
                                                <!--begin::Col-->
                                                <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="fname"
                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                        placeholder="city" value="">
                                                    <div class="fv-plugins-message-container invalid-feedback">
                                                    </div>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">State
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Row-->
                                            <div class="row">
                                                <!--begin::Col-->
                                                <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="fname"
                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                        placeholder="State" value="">
                                                    <div class="fv-plugins-message-container invalid-feedback">
                                                    </div>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Zipcode
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Row-->
                                            <div class="row">
                                                <!--begin::Col-->
                                                <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="fname"
                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                        placeholder="Zipcode" value="">
                                                    <div class="fv-plugins-message-container invalid-feedback">
                                                    </div>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span>Contact Phone</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-4 fv-row fv-plugins-icon-container">
                                            <input type="tel" name="phone"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Phone number" value="">
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span>Country</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-4 fv-row fv-plugins-icon-container">
                                            <select name="country" aria-label="Select a Country" data-control="select2"
                                                data-placeholder="Select a country..."
                                                class="form-select form-select-solid">
                                                <option value="">
                                                    Select a Country...</option>
                                                <option value="AF">
                                                    Afghanistan</option>
                                                <option value="AX">
                                                    Aland Islands</option>
                                                <option value="AL">Albania
                                                </option>
                                                <option value="DZ">Algeria
                                                </option>
                                                <option value="AS">
                                                    American Samoa</option>
                                                <option value="AD">Andorra
                                                </option>
                                                <option value="AO">Angola
                                                </option>
                                                <option value="AI">Anguilla
                                                </option>
                                                <option value="AG">
                                                    Antigua and Barbuda</option>
                                                <option value="AR">
                                                    Argentina</option>
                                                <option value="AM">Armenia
                                                </option>
                                                <option value="AW">Aruba
                                                </option>
                                                <option value="AU">
                                                    Australia</option>
                                                <option value="AT">Austria
                                                </option>
                                                <option value="AZ">
                                                    Azerbaijan</option>
                                                <option value="BS">Bahamas
                                                </option>
                                                <option value="BH">Bahrain
                                                </option>
                                                <option value="BD">
                                                    Bangladesh</option>
                                                <option value="BB">Barbados
                                                </option>
                                                <option value="BY">Belarus
                                                </option>
                                                <option value="BE">Belgium
                                                </option>
                                                <option value="BZ">Belize
                                                </option>
                                                <option value="BJ">Benin
                                                </option>
                                                <option value="BM">Bermuda
                                                </option>
                                                <option value="BT">Bhutan
                                                </option>
                                                <option value="BO">Bolivia,
                                                    Plurinational State of</option>
                                                <option value="BQ">Bonaire,
                                                    Sint Eustatius and Saba</option>
                                                <option value="BA">
                                                    Bosnia and Herzegovina</option>
                                                <option value="BW">Botswana
                                                </option>
                                                <option value="BR">Brazil
                                                </option>
                                                <option value="IO">British Indian Ocean Territory</option>
                                                <option value="BN">Brunei
                                                    Darussalam</option>
                                                <option value="BG">Bulgaria
                                                </option>
                                                <option value="BF">
                                                    Burkina Faso</option>
                                                <option value="BI">Burundi
                                                </option>
                                                <option value="KH">Cambodia
                                                </option>
                                                <option value="CM">Cameroon
                                                </option>
                                                <option value="CA">Canada
                                                </option>
                                                <option value="CV">Cape
                                                    Verde</option>
                                                <option value="KY">
                                                    Cayman Islands</option>
                                                <option value="CF">
                                                    Central African Republic</option>
                                                <option value="TD">Chad</option>
                                                <option value="CL">Chile
                                                </option>
                                                <option value="CN">China
                                                </option>
                                                <option value="CX">
                                                    Christmas Island</option>
                                                <option value="CC">Cocos
                                                    (Keeling) Islands</option>
                                                <option value="CO">Colombia
                                                </option>
                                                <option value="KM">Comoros
                                                </option>
                                                <option value="CK">Cook
                                                    Islands</option>
                                                <option value="CR">Costa
                                                    Rica</option>
                                                <option value="CI">Côte
                                                    d'Ivoire</option>
                                                <option value="HR">Croatia
                                                </option>
                                                <option value="CU">Cuba</option>
                                                <option value="CW">Curaçao
                                                </option>
                                                <option value="CZ">
                                                    Czech Republic</option>
                                                <option value="DK">Denmark
                                                </option>
                                                <option value="DJ">Djibouti
                                                </option>
                                                <option value="DM">Dominica
                                                </option>
                                                <option value="DO">
                                                    Dominican Republic</option>
                                                <option value="EC">Ecuador
                                                </option>
                                                <option value="EG">Egypt
                                                </option>
                                                <option value="SV">El
                                                    Salvador</option>
                                                <option value="GQ">
                                                    Equatorial Guinea</option>
                                                <option value="ER">Eritrea
                                                </option>
                                                <option value="EE">Estonia
                                                </option>
                                                <option value="ET">Ethiopia
                                                </option>
                                                <option value="FK">
                                                    Falkland Islands (Malvinas)</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FI">Finland
                                                </option>
                                                <option value="FR">France
                                                </option>
                                                <option value="PF">
                                                    French Polynesia</option>
                                                <option value="GA">Gabon
                                                </option>
                                                <option value="GM">Gambia
                                                </option>
                                                <option value="GE">Georgia
                                                </option>
                                                <option value="DE">Germany
                                                </option>
                                                <option value="GH">Ghana
                                                </option>
                                                <option value="GI">
                                                    Gibraltar</option>
                                                <option value="GR">Greece
                                                </option>
                                                <option value="GL">
                                                    Greenland</option>
                                                <option value="GD">Grenada
                                                </option>
                                                <option value="GU">Guam</option>
                                                <option value="GT">
                                                    Guatemala</option>
                                                <option value="GG">Guernsey
                                                </option>
                                                <option value="GN">Guinea
                                                </option>
                                                <option value="GW">
                                                    Guinea-Bissau</option>
                                                <option value="HT">Haiti
                                                </option>
                                                <option value="VA">Holy
                                                    See (Vatican City State)</option>
                                                <option value="HN">Honduras
                                                </option>
                                                <option value="HK">Hong
                                                    Kong</option>
                                                <option value="HU">Hungary
                                                </option>
                                                <option value="IS">Iceland
                                                </option>
                                                <option value="IN">India
                                                </option>
                                                <option value="ID">
                                                    Indonesia</option>
                                                <option value="IR">Iran, Islamic
                                                    Republic of</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IE">Ireland
                                                </option>
                                                <option value="IM">Isle
                                                    of Man</option>
                                                <option value="IL">Israel
                                                </option>
                                                <option value="IT">Italy
                                                </option>
                                                <option value="JM">Jamaica
                                                </option>
                                                <option value="JP">Japan
                                                </option>
                                                <option value="JE">Jersey
                                                </option>
                                                <option value="JO">Jordan
                                                </option>
                                                <option value="KZ">
                                                    Kazakhstan</option>
                                                <option value="KE">Kenya
                                                </option>
                                                <option value="KI">Kiribati
                                                </option>
                                                <option value="KP">Korea,
                                                    Democratic People's Republic of</option>
                                                <option value="KW">Kuwait
                                                </option>
                                                <option value="KG">
                                                    Kyrgyzstan</option>
                                                <option value="LA">Lao People's
                                                    Democratic Republic</option>
                                                <option value="LV">Latvia
                                                </option>
                                                <option value="LB">Lebanon
                                                </option>
                                                <option value="LS">Lesotho
                                                </option>
                                                <option value="LR">Liberia
                                                </option>
                                                <option value="LY">Libya
                                                </option>
                                                <option value="LI">
                                                    Liechtenstein</option>
                                                <option value="LT">
                                                    Lithuania</option>
                                                <option value="LU">
                                                    Luxembourg</option>
                                                <option value="MO">Macao
                                                </option>
                                                <option value="MG">
                                                    Madagascar</option>
                                                <option value="MW">Malawi
                                                </option>
                                                <option value="MY">Malaysia
                                                </option>
                                                <option value="MV">Maldives
                                                </option>
                                                <option value="ML">Mali</option>
                                                <option value="MT">Malta
                                                </option>
                                                <option value="MH">
                                                    Marshall Islands</option>
                                                <option value="MQ">
                                                    Martinique</option>
                                                <option value="MR">
                                                    Mauritania</option>
                                                <option value="MU">
                                                    Mauritius</option>
                                                <option value="MX">Mexico
                                                </option>
                                                <option value="FM">
                                                    Micronesia, Federated States of</option>
                                                <option value="MD">Moldova,
                                                    Republic of</option>
                                                <option value="MC">Monaco
                                                </option>
                                                <option value="MN">Mongolia
                                                </option>
                                                <option value="ME">
                                                    Montenegro</option>
                                                <option value="MS">
                                                    Montserrat</option>
                                                <option value="MA">Morocco
                                                </option>
                                                <option value="MZ">
                                                    Mozambique</option>
                                                <option value="MM">Myanmar
                                                </option>
                                                <option value="NA">Namibia
                                                </option>
                                                <option value="NR">Nauru
                                                </option>
                                                <option value="NP">Nepal
                                                </option>
                                                <option value="NL">
                                                    Netherlands</option>
                                                <option value="NZ">New
                                                    Zealand</option>
                                                <option value="NI">
                                                    Nicaragua</option>
                                                <option value="NE">Niger
                                                </option>
                                                <option value="NG">Nigeria
                                                </option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">
                                                    Norfolk Island</option>
                                                <option value="MP">
                                                    Northern Mariana Islands</option>
                                                <option value="NO">Norway
                                                </option>
                                                <option value="OM">Oman</option>
                                                <option value="PK">Pakistan
                                                </option>
                                                <option value="PW">Palau
                                                </option>
                                                <option value="PS">
                                                    Palestinian Territory, Occupied</option>
                                                <option value="PA">Panama
                                                </option>
                                                <option value="PG">
                                                    Papua New Guinea</option>
                                                <option value="PY">Paraguay
                                                </option>
                                                <option value="PE">Peru</option>
                                                <option svg" value="PH">
                                                    Philippines</option>
                                                <option value="PL">Poland
                                                </option>
                                                <option value="PT">Portugal
                                                </option>
                                                <option value="PR">Puerto
                                                    Rico</option>
                                                <option value="QA">Qatar
                                                </option>
                                                <option value="RO">Romania
                                                </option>
                                                <option value="RU">Russian
                                                    Federation</option>
                                                <option value="RW">Rwanda
                                                </option>
                                                <option value="BL">Saint
                                                    Barthélemy</option>
                                                <option value="KN">
                                                    Saint Kitts and Nevis</option>
                                                <option value="LC">Saint
                                                    Lucia</option>
                                                <option value="MF">Saint
                                                    Martin (French part)</option>
                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                <option value="WS">Samoa
                                                </option>
                                                <option value="SM">San
                                                    Marino</option>
                                                <option value="ST">Sao
                                                    Tome and Principe</option>
                                                <option value="SA">Saudi
                                                    Arabia</option>
                                                <option value="SN">Senegal
                                                </option>
                                                <option value="RS">Serbia
                                                </option>
                                                <option value="SC">
                                                    Seychelles</option>
                                                <option value="SL">
                                                    Sierra Leone</option>
                                                <option value="SG">
                                                    Singapore</option>
                                                <option value="SX">Sint
                                                    Maarten (Dutch part)</option>
                                                <option value="SK">Slovakia
                                                </option>
                                                <option value="SI">Slovenia
                                                </option>
                                                <option value="SB">
                                                    Solomon Islands</option>
                                                <option value="SO">Somalia
                                                </option>
                                                <option value="ZA">South
                                                    Africa</option>
                                                <option value="KR">South
                                                    Korea</option>
                                                <option value="SS">South
                                                    Sudan</option>
                                                <option value="ES">Spain
                                                </option>
                                                <option value="LK">Sri
                                                    Lanka</option>
                                                <option value="SD">Sudan
                                                </option>
                                                <option value="SR">Suriname
                                                </option>
                                                <option value="SZ">
                                                    Swaziland</option>
                                                <option value="SE">Sweden
                                                </option>
                                                <option value="CH">
                                                    Switzerland</option>
                                                <option value="SY">Syrian Arab
                                                    Republic</option>
                                                <option value="TW">Taiwan,
                                                    Province of China</option>
                                                <option value="TJ">
                                                    Tajikistan</option>
                                                <option value="TZ">Tanzania,
                                                    United Republic of</option>
                                                <option value="TH">Thailand
                                                </option>
                                                <option value="TG">Togo</option>
                                                <option value="TK">Tokelau
                                                </option>
                                                <option value="TO">Tonga
                                                </option>
                                                <option value="TT">
                                                    Trinidad and Tobago</option>
                                                <option value="TN">Tunisia
                                                </option>
                                                <option value="TR">Turkey
                                                </option>
                                                <option value="TM">
                                                    Turkmenistan</option>
                                                <option value="TC">
                                                    Turks and Caicos Islands</option>
                                                <option value="TV">Tuvalu
                                                </option>
                                                <option value="UG">Uganda
                                                </option>
                                                <option value="UA">Ukraine
                                                </option>
                                                <option value="AE">
                                                    United Arab Emirates</option>
                                                <option value="GB">
                                                    United Kingdom</option>
                                                <option value="US">
                                                    United States</option>
                                                <option value="UY">Uruguay
                                                </option>
                                                <option value="UZ">
                                                    Uzbekistan</option>
                                                <option value="VU">Vanuatu
                                                </option>
                                                <option value="VE">
                                                    Venezuela, Bolivarian Republic of</option>
                                                <option value="VN">Vietnam
                                                </option>
                                                <option value="VI">
                                                    Virgin Islands</option>
                                                <option alue="YE">Yemen
                                                </option>
                                                <option value="ZM">Zambia
                                                </option>
                                                <option value="ZW">Zimbabwe
                                                </option>
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Card body-->
                                <!--begin::Actions-->
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <button type="reset"
                                        class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                    <button type="submit" class="btn btn-primary"
                                        id="kt_account_profile_details_submit">Save
                                        Changes</button>
                                </div>
                                <!--end::Actions-->
                                <input type="hidden">
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Basic info-->
                    <!--begin::Sign-in Method-->
                    <div class="card mb-5 mb-xl-10">
                        <!--begin::Card header-->
                        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                            data-bs-target="#kt_account_signin_method">
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Sign-in Method</h3>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Content-->
                        <div id="kt_account_settings_signin_method" class="collapse show">
                            <!--begin::Card body-->
                            <div class="card-body border-top p-9">
                                <!--begin::Email Address-->
                                <div class="d-flex flex-wrap align-items-center">
                                    <!--begin::Label-->
                                    <div id="kt_signin_email">
                                        <div class="fs-6 fw-bold mb-1">Email Address</div>
                                        <div class="fw-semibold text-gray-600">support@keenthemes.com</div>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Edit-->
                                    <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                                        <!--begin::Form-->
                                        <form id="kt_signin_change_email"
                                            class="form fv-plugins-bootstrap5 fv-plugins-framework"
                                            novalidate="novalidate">
                                            <div class="row mb-6">
                                                <div class="col-lg-6 mb-4 mb-lg-0">
                                                    <div class="fv-row mb-0 fv-plugins-icon-container">
                                                        <label for="emailaddress"
                                                            class="form-label fs-6 fw-bold mb-3">Enter
                                                            New Email
                                                            Address</label>
                                                        <input type="email"
                                                            class="form-control form-control-lg form-control-solid"
                                                            id="emailaddress" placeholder="Email Address"
                                                            name="emailaddress" value="">
                                                        <div class="fv-plugins-message-container invalid-feedback">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="fv-row mb-0 fv-plugins-icon-container">
                                                        <label for="confirmemailpassword"
                                                            class="form-label fs-6 fw-bold mb-3">Confirm
                                                            Password</label>
                                                        <input type="password"
                                                            class="form-control form-control-lg form-control-solid"
                                                            name="confirmemailpassword" id="confirmemailpassword">
                                                        <div class="fv-plugins-message-container invalid-feedback">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <button id="kt_signin_submit" type="button"
                                                    class="btn btn-primary me-2 px-6">Update Email</button>
                                                <button id="kt_signin_cancel" type="button"
                                                    class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                            </div>
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Edit-->
                                    <!--begin::Action-->
                                    <div id="kt_signin_email_button" class="ms-auto">
                                        <button class="btn btn-light btn-active-light-primary">Change
                                            Email</button>
                                    </div>
                                    <!--end::Action-->
                                </div>
                                <!--end::Email Address-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-6"></div>
                                <!--end::Separator-->
                                <!--begin::Password-->
                                <div class="d-flex flex-wrap align-items-center mb-10">
                                    <!--begin::Label-->
                                    <div id="kt_signin_password">
                                        <div class="fs-6 fw-bold mb-1">Password</div>
                                        <div class="fw-semibold text-gray-600">************</div>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Edit-->
                                    <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                                        <!--begin::Form-->
                                        <form id="kt_signin_change_password"
                                            class="form fv-plugins-bootstrap5 fv-plugins-framework"
                                            novalidate="novalidate">
                                            <div class="row mb-1">
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-0 fv-plugins-icon-container">
                                                        <label for="currentpassword"
                                                            class="form-label fs-6 fw-bold mb-3">Current
                                                            Password</label>
                                                        <input type="password"
                                                            class="form-control form-control-lg form-control-solid"
                                                            name="currentpassword" id="currentpassword">
                                                        <div class="fv-plugins-message-container invalid-feedback">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-0 fv-plugins-icon-container">
                                                        <label for="newpassword" class="form-label fs-6 fw-bold mb-3">New
                                                            Password</label>
                                                        <input type="password"
                                                            class="form-control form-control-lg form-control-solid"
                                                            name="newpassword" id="newpassword">
                                                        <div class="fv-plugins-message-container invalid-feedback">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-0 fv-plugins-icon-container">
                                                        <label for="confirmpassword"
                                                            class="form-label fs-6 fw-bold mb-3">Confirm New
                                                            Password</label>
                                                        <input type="password"
                                                            class="form-control form-control-lg form-control-solid"
                                                            name="confirmpassword" id="confirmpassword">
                                                        <div class="fv-plugins-message-container invalid-feedback">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-text mb-5">Password must be at least 8 character and
                                                contain symbols</div>
                                            <div class="d-flex">
                                                <button id="kt_password_submit" type="button"
                                                    class="btn btn-primary me-2 px-6">Update Password</button>
                                                <button id="kt_password_cancel" type="button"
                                                    class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                            </div>
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Edit-->
                                    <!--begin::Action-->
                                    <div id="kt_signin_password_button" class="ms-auto">
                                        <button class="btn btn-light btn-active-light-primary">Reset
                                            Password</button>
                                    </div>
                                    <!--end::Action-->
                                </div>
                                <!--end::Password-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Sign-in Method-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::details View-->
            <!--end::Content container-->
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
    </div>
@endsection
@push('script')
    <script src="{{ asset('assets/js/custom/account/settings/signin-methods.js') }}"></script>
    <script>
        loadBreadCrumbWithHeader("Account", "Profile", "Dashboard", "#")
    </script>
@endpush
