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
                            @include('pages.seller.account_settings.includes.index')
                            <!--end::Details-->
                            <!--begin::Navs-->
                            <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                                        href="{{ route('seller.overview') }}">Overview</a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 active"
                                        href="{{ route('seller.profile') }}">Profile</a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5"
                                        href="{{ route('seller.ebay') }}">E-Bay </a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5"
                                        href="{{ route('seller.plan') }}">Plans</a>
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
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Full
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
                                                        placeholder="First name" value="Max">
                                                    <div class="fv-plugins-message-container invalid-feedback">
                                                    </div>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="lname"
                                                        class="form-control form-control-lg form-control-solid"
                                                        placeholder="Last name" value="Smith">
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
                                            <span class="required">Contact Phone</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                aria-label="Phone number must be active" data-kt-initialized="1"></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <input type="tel" name="phone"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Phone number" value="044 3276 454 935">
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span class="required">Country</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                aria-label="Country of origination" data-kt-initialized="1"></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
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
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Language</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <!--begin::Input-->
                                            <select name="language" aria-label="Select a Language" data-control="select2"
                                                data-placeholder="Select a language..."
                                                class="form-select form-select-solid ">
                                                <option value="" data-select2-id="select2-data-15-52jf">
                                                    Select a Language...</option>
                                                <option data-kt-flag="flags/indonesia.svg" value="id">Bahasa
                                                    Indonesia - Indonesian</option>
                                                <option data-kt-flag="flags/malaysia.svg" value="msa">Bahasa
                                                    Melayu - Malay</option>
                                                <option data-kt-flag="flags/canada.svg" value="ca">Català -
                                                    Catalan</option>
                                                <option data-kt-flag="flags/czech-republic.svg" value="cs">
                                                    Čeština - Czech</option>
                                                <option data-kt-flag="flags/netherlands.svg" value="da">Dansk
                                                    - Danish</option>
                                                <option data-kt-flag="flags/germany.svg" value="de">Deutsch -
                                                    German</option>
                                                <option data-kt-flag="flags/united-kingdom.svg" value="en">
                                                    English</option>
                                                <option data-kt-flag="flags/united-kingdom.svg" value="en-gb">
                                                    English UK - British English</option>
                                                <option data-kt-flag="flags/spain.svg" value="es">Español -
                                                    Spanish</option>
                                                <option data-kt-flag="flags/philippines.svg" value="fil">
                                                    Filipino</option>
                                                <option data-kt-flag="flags/france.svg" value="fr">Français -
                                                    French</option>
                                                <option data-kt-flag="flags/gabon.svg" value="ga">Gaeilge -
                                                    Irish (beta)</option>
                                                <option data-kt-flag="flags/greenland.svg" value="gl">Galego -
                                                    Galician (beta)</option>
                                                <option data-kt-flag="flags/croatia.svg" value="hr">Hrvatski -
                                                    Croatian</option>
                                                <option data-kt-flag="flags/italy.svg" value="it">Italiano -
                                                    Italian</option>
                                                <option data-kt-flag="flags/hungary.svg" value="hu">Magyar -
                                                    Hungarian</option>
                                                <option data-kt-flag="flags/netherlands.svg" value="nl">
                                                    Nederlands - Dutch</option>
                                                <option data-kt-flag="flags/norway.svg" value="no">Norsk -
                                                    Norwegian</option>
                                                <option data-kt-flag="flags/poland.svg" value="pl">Polski -
                                                    Polish</option>
                                                <option data-kt-flag="flags/portugal.svg" value="pt">Português
                                                    - Portuguese</option>
                                                <option data-kt-flag="flags/romania.svg" value="ro">Română -
                                                    Romanian</option>
                                                <option data-kt-flag="flags/slovakia.svg" value="sk">
                                                    Slovenčina - Slovak</option>
                                                <option data-kt-flag="flags/finland.svg" value="fi">Suomi -
                                                    Finnish</option>
                                                <option data-kt-flag="flags/el-salvador.svg" value="sv">
                                                    Svenska - Swedish</option>
                                                <option data-kt-flag="flags/virgin-islands.svg" value="vi">
                                                    Tiếng Việt - Vietnamese</option>
                                                <option data-kt-flag="flags/turkey.svg" value="tr">Türkçe -
                                                    Turkish</option>
                                                <option data-kt-flag="flags/greece.svg" value="el">Ελληνικά -
                                                    Greek</option>
                                                <option data-kt-flag="flags/bulgaria.svg" value="bg">Български
                                                    език - Bulgarian</option>
                                                <option data-kt-flag="flags/russia.svg" value="ru">Русский -
                                                    Russian</option>
                                                <option data-kt-flag="flags/suriname.svg" value="sr">Српски -
                                                    Serbian</option>
                                                <option data-kt-flag="flags/ukraine.svg" value="uk">Українська
                                                    мова - Ukrainian</option>
                                                <option data-kt-flag="flags/israel.svg" value="he">עִבְרִית -
                                                    Hebrew</option>
                                                <option data-kt-flag="flags/pakistan.svg" value="ur">اردو -
                                                    Urdu (beta)</option>
                                                <option data-kt-flag="flags/argentina.svg" value="ar">العربية
                                                    - Arabic</option>
                                                <option data-kt-flag="flags/argentina.svg" value="fa">فارسی -
                                                    Persian</option>
                                                <option data-kt-flag="flags/mauritania.svg" value="mr">मराठी -
                                                    Marathi</option>
                                                <option data-kt-flag="flags/india.svg" value="hi">हिन्दी -
                                                    Hindi</option>
                                                <option data-kt-flag="flags/bangladesh.svg" value="bn">বাংলা -
                                                    Bangla</option>
                                                <option data-kt-flag="flags/guam.svg" value="gu">ગુજરાતી -
                                                    Gujarati</option>
                                                <option data-kt-flag="flags/india.svg" value="ta">தமிழ் -
                                                    Tamil</option>
                                                <option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="kn">
                                                    ಕನ್ನಡ - Kannada</option>
                                                <option data-kt-flag="flags/thailand.svg" value="th">ภาษาไทย -
                                                    Thai</option>
                                                <option data-kt-flag="flags/south-korea.svg" value="ko">한국어 -
                                                    Korean</option>
                                                <option data-kt-flag="flags/japan.svg" value="ja">日本語 -
                                                    Japanese</option>
                                                <option data-kt-flag="flags/china.svg" value="zh-cn">简体中文 -
                                                    Simplified Chinese</option>
                                                <option data-kt-flag="flags/taiwan.svg" value="zh-tw">繁體中文 -
                                                    Traditional Chinese</option>
                                            </select>
                                            <!--end::Input-->
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Time
                                            Zone</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <select name="timezone" aria-label="Select a Timezone" data-control="select2"
                                                data-placeholder="Select a timezone.."
                                                class="form-select form-select-solid ">
                                                <option value="" data-select2-id="select2-data-18-2gui">
                                                    Select a Timezone..</option>
                                                <option data-bs-offset="-39600" value="International Date Line West">
                                                    (GMT-11:00) International
                                                    Date Line West</option>
                                                <option data-bs-offset="-39600" value="Midway Island">
                                                    (GMT-11:00) Midway Island</option>
                                                <option data-bs-offset="-39600" value="Samoa">(GMT-11:00) Samoa
                                                </option>
                                                <option data-bs-offset="-36000" value="Hawaii">(GMT-10:00)
                                                    Hawaii</option>
                                                <option data-bs-offset="-28800" value="Alaska">(GMT-08:00)
                                                    Alaska</option>
                                                <option data-bs-offset="-25200" value="Pacific Time (US &amp; Canada)">
                                                    (GMT-07:00) Pacific
                                                    Time (US &amp; Canada)</option>
                                                <option data-bs-offset="-25200" value="Tijuana">(GMT-07:00)
                                                    Tijuana</option>
                                                <option data-bs-offset="-25200" value="Arizona">(GMT-07:00)
                                                    Arizona</option>
                                                <option data-bs-offset="-21600" value="Mountain Time (US &amp; Canada)">
                                                    (GMT-06:00) Mountain
                                                    Time (US &amp; Canada)</option>
                                                <option data-bs-offset="-21600" value="Chihuahua">(GMT-06:00)
                                                    Chihuahua</option>
                                                <option data-bs-offset="-21600" value="Mazatlan">(GMT-06:00)
                                                    Mazatlan</option>
                                                <option data-bs-offset="-21600" value="Saskatchewan">(GMT-06:00)
                                                    Saskatchewan</option>
                                                <option data-bs-offset="-21600" value="Central America">
                                                    (GMT-06:00) Central America</option>
                                                <option data-bs-offset="-18000" value="Central Time (US &amp; Canada)">
                                                    (GMT-05:00) Central
                                                    Time (US &amp; Canada)</option>
                                                <option data-bs-offset="-18000" value="Guadalajara">(GMT-05:00)
                                                    Guadalajara</option>
                                                <option data-bs-offset="-18000" value="Mexico City">(GMT-05:00)
                                                    Mexico City</option>
                                                <option data-bs-offset="-18000" value="Monterrey">(GMT-05:00)
                                                    Monterrey</option>
                                                <option data-bs-offset="-18000" value="Bogota">(GMT-05:00)
                                                    Bogota</option>
                                                <option data-bs-offset="-18000" value="Lima">(GMT-05:00) Lima
                                                </option>
                                                <option data-bs-offset="-18000" value="Quito">(GMT-05:00) Quito
                                                </option>
                                                <option data-bs-offset="-14400" value="Eastern Time (US &amp; Canada)">
                                                    (GMT-04:00) Eastern
                                                    Time (US &amp; Canada)</option>
                                                <option data-bs-offset="-14400" value="Indiana (East)">
                                                    (GMT-04:00) Indiana (East)</option>
                                                <option data-bs-offset="-14400" value="Caracas">(GMT-04:00)
                                                    Caracas</option>
                                                <option data-bs-offset="-14400" value="La Paz">(GMT-04:00) La
                                                    Paz</option>
                                                <option data-bs-offset="-14400" value="Georgetown">(GMT-04:00)
                                                    Georgetown</option>
                                                <option data-bs-offset="-10800" value="Atlantic Time (Canada)">
                                                    (GMT-03:00) Atlantic Time (Canada)</option>
                                                <option data-bs-offset="-10800" value="Santiago">(GMT-03:00)
                                                    Santiago</option>
                                                <option data-bs-offset="-10800" value="Brasilia">(GMT-03:00)
                                                    Brasilia</option>
                                                <option data-bs-offset="-10800" value="Buenos Aires">(GMT-03:00)
                                                    Buenos Aires</option>
                                                <option data-bs-offset="-9000" value="Newfoundland">(GMT-02:30)
                                                    Newfoundland</option>
                                                <option data-bs-offset="-7200" value="Greenland">(GMT-02:00)
                                                    Greenland</option>
                                                <option data-bs-offset="-7200" value="Mid-Atlantic">(GMT-02:00)
                                                    Mid-Atlantic</option>
                                                <option data-bs-offset="-3600" value="Cape Verde Is.">
                                                    (GMT-01:00) Cape Verde Is.</option>
                                                <option data-bs-offset="0" value="Azores">(GMT) Azores</option>
                                                <option data-bs-offset="0" value="Monrovia">(GMT) Monrovia
                                                </option>
                                                <option data-bs-offset="0" value="UTC">(GMT) UTC</option>
                                                <option data-bs-offset="3600" value="Dublin">(GMT+01:00) Dublin
                                                </option>
                                                <option data-bs-offset="3600" value="Edinburgh">(GMT+01:00)
                                                    Edinburgh</option>
                                                <option data-bs-offset="3600" value="Lisbon">(GMT+01:00) Lisbon
                                                </option>
                                                <option data-bs-offset="3600" value="London">(GMT+01:00) London
                                                </option>
                                                <option data-bs-offset="3600" value="Casablanca">(GMT+01:00)
                                                    Casablanca</option>
                                                <option data-bs-offset="3600" value="West Central Africa">
                                                    (GMT+01:00) West Central Africa</option>
                                                <option data-bs-offset="7200" value="Belgrade">(GMT+02:00)
                                                    Belgrade</option>
                                                <option data-bs-offset="7200" value="Bratislava">(GMT+02:00)
                                                    Bratislava</option>
                                                <option data-bs-offset="7200" value="Budapest">(GMT+02:00)
                                                    Budapest</option>
                                                <option data-bs-offset="7200" value="Ljubljana">(GMT+02:00)
                                                    Ljubljana</option>
                                                <option data-bs-offset="7200" value="Prague">(GMT+02:00) Prague
                                                </option>
                                                <option data-bs-offset="7200" value="Sarajevo">(GMT+02:00)
                                                    Sarajevo</option>
                                                <option data-bs-offset="7200" value="Skopje">(GMT+02:00) Skopje
                                                </option>
                                                <option data-bs-offset="7200" value="Warsaw">(GMT+02:00) Warsaw
                                                </option>
                                                <option data-bs-offset="7200" value="Zagreb">(GMT+02:00) Zagreb
                                                </option>
                                                <option data-bs-offset="7200" value="Brussels">(GMT+02:00)
                                                    Brussels</option>
                                                <option data-bs-offset="7200" value="Copenhagen">(GMT+02:00)
                                                    Copenhagen</option>
                                                <option data-bs-offset="7200" value="Madrid">(GMT+02:00) Madrid
                                                </option>
                                                <option data-bs-offset="7200" value="Paris">(GMT+02:00) Paris
                                                </option>
                                                <option data-bs-offset="7200" value="Amsterdam">(GMT+02:00)
                                                    Amsterdam</option>
                                                <option data-bs-offset="7200" value="Berlin">(GMT+02:00) Berlin
                                                </option>
                                                <option data-bs-offset="7200" value="Bern">(GMT+02:00) Bern
                                                </option>
                                                <option data-bs-offset="7200" value="Rome">(GMT+02:00) Rome
                                                </option>
                                                <option data-bs-offset="7200" value="Stockholm">(GMT+02:00)
                                                    Stockholm</option>
                                                <option data-bs-offset="7200" value="Vienna">(GMT+02:00) Vienna
                                                </option>
                                                <option data-bs-offset="7200" value="Cairo">(GMT+02:00) Cairo
                                                </option>
                                                <option data-bs-offset="7200" value="Harare">(GMT+02:00) Harare
                                                </option>
                                                <option data-bs-offset="7200" value="Pretoria">(GMT+02:00)
                                                    Pretoria</option>
                                                <option data-bs-offset="10800" value="Bucharest">(GMT+03:00)
                                                    Bucharest</option>
                                                <option data-bs-offset="10800" value="Helsinki">(GMT+03:00)
                                                    Helsinki</option>
                                                <option data-bs-offset="10800" value="Kiev">(GMT+03:00) Kiev
                                                </option>
                                                <option data-bs-offset="10800" value="Kyiv">(GMT+03:00) Kyiv
                                                </option>
                                                <option data-bs-offset="10800" value="Riga">(GMT+03:00) Riga
                                                </option>
                                                <option data-bs-offset="10800" value="Sofia">(GMT+03:00) Sofia
                                                </option>
                                                <option data-bs-offset="10800" value="Tallinn">(GMT+03:00)
                                                    Tallinn</option>
                                                <option data-bs-offset="10800" value="Vilnius">(GMT+03:00)
                                                    Vilnius</option>
                                                <option data-bs-offset="10800" value="Athens">(GMT+03:00) Athens
                                                </option>
                                                <option data-bs-offset="10800" value="Istanbul">(GMT+03:00)
                                                    Istanbul</option>
                                                <option data-bs-offset="10800" value="Minsk">(GMT+03:00) Minsk
                                                </option>
                                                <option data-bs-offset="10800" value="Jerusalem">(GMT+03:00)
                                                    Jerusalem</option>
                                                <option data-bs-offset="10800" value="Moscow">(GMT+03:00) Moscow
                                                </option>
                                                <option data-bs-offset="10800" value="St. Petersburg">
                                                    (GMT+03:00) St. Petersburg</option>
                                                <option data-bs-offset="10800" value="Volgograd">(GMT+03:00)
                                                    Volgograd</option>
                                                <option data-bs-offset="10800" value="Kuwait">(GMT+03:00) Kuwait
                                                </option>
                                                <option data-bs-offset="10800" value="Riyadh">(GMT+03:00) Riyadh
                                                </option>
                                                <option data-bs-offset="10800" value="Nairobi">(GMT+03:00)
                                                    Nairobi</option>
                                                <option data-bs-offset="10800" value="Baghdad">(GMT+03:00)
                                                    Baghdad</option>
                                                <option data-bs-offset="14400" value="Abu Dhabi">(GMT+04:00) Abu
                                                    Dhabi</option>
                                                <option data-bs-offset="14400" value="Muscat">(GMT+04:00) Muscat
                                                </option>
                                                <option data-bs-offset="14400" value="Baku">(GMT+04:00) Baku
                                                </option>
                                                <option data-bs-offset="14400" value="Tbilisi">(GMT+04:00)
                                                    Tbilisi</option>
                                                <option data-bs-offset="14400" value="Yerevan">(GMT+04:00)
                                                    Yerevan</option>
                                                <option data-bs-offset="16200" value="Tehran">(GMT+04:30) Tehran
                                                </option>
                                                <option data-bs-offset="16200" value="Kabul">(GMT+04:30) Kabul
                                                </option>
                                                <option data-bs-offset="18000" value="Ekaterinburg">(GMT+05:00)
                                                    Ekaterinburg</option>
                                                <option data-bs-offset="18000" value="Islamabad">(GMT+05:00)
                                                    Islamabad</option>
                                                <option data-bs-offset="18000" value="Karachi">(GMT+05:00)
                                                    Karachi</option>
                                                <option data-bs-offset="18000" value="Tashkent">(GMT+05:00)
                                                    Tashkent</option>
                                                <option data-bs-offset="19800" value="Chennai">(GMT+05:30)
                                                    Chennai</option>
                                                <option data-bs-offset="19800" value="Kolkata">(GMT+05:30)
                                                    Kolkata</option>
                                                <option data-bs-offset="19800" value="Mumbai">(GMT+05:30) Mumbai
                                                </option>
                                                <option data-bs-offset="19800" value="New Delhi">(GMT+05:30) New
                                                    Delhi</option>
                                                <option data-bs-offset="19800" value="Sri Jayawardenepura">
                                                    (GMT+05:30) Sri Jayawardenepura</option>
                                                <option data-bs-offset="20700" value="Kathmandu">(GMT+05:45)
                                                    Kathmandu</option>
                                                <option data-bs-offset="21600" value="Astana">(GMT+06:00) Astana
                                                </option>
                                                <option data-bs-offset="21600" value="Dhaka">(GMT+06:00) Dhaka
                                                </option>
                                                <option data-bs-offset="21600" value="Almaty">(GMT+06:00) Almaty
                                                </option>
                                                <option data-bs-offset="21600" value="Urumqi">(GMT+06:00) Urumqi
                                                </option>
                                                <option data-bs-offset="23400" value="Rangoon">(GMT+06:30)
                                                    Rangoon</option>
                                                <option data-bs-offset="25200" value="Novosibirsk">(GMT+07:00)
                                                    Novosibirsk</option>
                                                <option data-bs-offset="25200" value="Bangkok">(GMT+07:00)
                                                    Bangkok</option>
                                                <option data-bs-offset="25200" value="Hanoi">(GMT+07:00) Hanoi
                                                </option>
                                                <option data-bs-offset="25200" value="Jakarta">(GMT+07:00)
                                                    Jakarta</option>
                                                <option data-bs-offset="25200" value="Krasnoyarsk">(GMT+07:00)
                                                    Krasnoyarsk</option>
                                                <option data-bs-offset="28800" value="Beijing">(GMT+08:00)
                                                    Beijing</option>
                                                <option data-bs-offset="28800" value="Chongqing">(GMT+08:00)
                                                    Chongqing</option>
                                                <option data-bs-offset="28800" value="Hong Kong">(GMT+08:00)
                                                    Hong Kong</option>
                                                <option data-bs-offset="28800" value="Kuala Lumpur">(GMT+08:00)
                                                    Kuala Lumpur</option>
                                                <option data-bs-offset="28800" value="Singapore">(GMT+08:00)
                                                    Singapore</option>
                                                <option data-bs-offset="28800" value="Taipei">(GMT+08:00) Taipei
                                                </option>
                                                <option data-bs-offset="28800" value="Perth">(GMT+08:00) Perth
                                                </option>
                                                <option data-bs-offset="28800" value="Irkutsk">(GMT+08:00)
                                                    Irkutsk</option>
                                                <option data-bs-offset="28800" value="Ulaan Bataar">(GMT+08:00)
                                                    Ulaan Bataar</option>
                                                <option data-bs-offset="32400" value="Seoul">(GMT+09:00) Seoul
                                                </option>
                                                <option data-bs-offset="32400" value="Osaka">(GMT+09:00) Osaka
                                                </option>
                                                <option data-bs-offset="32400" value="Sapporo">(GMT+09:00)
                                                    Sapporo</option>
                                                <option data-bs-offset="32400" value="Tokyo">(GMT+09:00) Tokyo
                                                </option>
                                                <option data-bs-offset="32400" value="Yakutsk">(GMT+09:00)
                                                    Yakutsk</option>
                                                <option data-bs-offset="34200" value="Darwin">(GMT+09:30) Darwin
                                                </option>
                                                <option data-bs-offset="34200" value="Adelaide">(GMT+09:30)
                                                    Adelaide</option>
                                                <option data-bs-offset="36000" value="Canberra">(GMT+10:00)
                                                    Canberra</option>
                                                <option data-bs-offset="36000" value="Melbourne">(GMT+10:00)
                                                    Melbourne</option>
                                                <option data-bs-offset="36000" value="Sydney">(GMT+10:00) Sydney
                                                </option>
                                                <option data-bs-offset="36000" value="Brisbane">(GMT+10:00)
                                                    Brisbane</option>
                                                <option data-bs-offset="36000" value="Hobart">(GMT+10:00) Hobart
                                                </option>
                                                <option data-bs-offset="36000" value="Vladivostok">(GMT+10:00)
                                                    Vladivostok</option>
                                                <option data-bs-offset="36000" value="Guam">(GMT+10:00) Guam
                                                </option>
                                                <option data-bs-offset="36000" value="Port Moresby">(GMT+10:00)
                                                    Port Moresby</option>
                                                <option data-bs-offset="36000" value="Solomon Is.">(GMT+10:00)
                                                    Solomon Is.</option>
                                                <option data-bs-offset="39600" value="Magadan">(GMT+11:00)
                                                    Magadan</option>
                                                <option data-bs-offset="39600" value="New Caledonia">(GMT+11:00)
                                                    New Caledonia</option>
                                                <option data-bs-offset="43200" value="Fiji">(GMT+12:00) Fiji
                                                </option>
                                                <option data-bs-offset="43200" value="Kamchatka">(GMT+12:00)
                                                    Kamchatka</option>
                                                <option data-bs-offset="43200" value="Marshall Is.">(GMT+12:00)
                                                    Marshall Is.</option>
                                                <option data-bs-offset="43200" value="Auckland">(GMT+12:00)
                                                    Auckland</option>
                                                <option data-bs-offset="43200" value="Wellington">(GMT+12:00)
                                                    Wellington</option>
                                                <option data-bs-offset="46800" value="Nuku'alofa">(GMT+13:00)
                                                    Nuku'alofa</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Currency</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <select name="currnecy" aria-label="Select a Currency" data-control="select2"
                                                data-placeholder="Select a currency.."
                                                class="form-select form-select-solid">
                                                <option value="" data-select2-id="select2-data-21-tmy5">
                                                    Select a currency..</option>
                                                <option data-kt-flag="flags/united-states.svg" value="USD">
                                                    USD&nbsp;-&nbsp;USA dollar</option>
                                                <option data-kt-flag="flags/united-kingdom.svg" value="GBP">
                                                    GBP&nbsp;-&nbsp;British pound</option>
                                                <option data-kt-flag="flags/australia.svg" value="AUD">
                                                    AUD&nbsp;-&nbsp;Australian dollar</option>
                                                <option data-kt-flag="flags/japan.svg" value="JPY">
                                                    JPY&nbsp;-&nbsp;Japanese yen</option>
                                                <option data-kt-flag="flags/sweden.svg" value="SEK">
                                                    SEK&nbsp;-&nbsp;Swedish krona</option>
                                                <option data-kt-flag="flags/canada.svg" value="CAD">
                                                    CAD&nbsp;-&nbsp;Canadian dollar</option>
                                                <option data-kt-flag="flags/switzerland.svg" value="CHF">
                                                    CHF&nbsp;-&nbsp;Swiss franc</option>
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label required fw-semibold fs-6">Communication</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <!--begin::Options-->
                                            <div class="d-flex align-items-center mt-3">
                                                <!--begin::Option-->
                                                <label
                                                    class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                                    <input class="form-check-input" name="communication[]"
                                                        type="checkbox" value="1">
                                                    <span class="fw-semibold ps-2 fs-6">Email</span>
                                                </label>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <label
                                                    class="form-check form-check-custom form-check-inline form-check-solid">
                                                    <input class="form-check-input" name="communication[]"
                                                        type="checkbox" value="2">
                                                    <span class="fw-semibold ps-2 fs-6">Phone</span>
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Options-->
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
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
                                                            name="emailaddress" value="support@keenthemes.com">
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
    <script src="{{ asset('assets/js/custom/account/settings/profile-details.js') }}"></script>
    <script src="{{ asset('assets/js/custom/account/settings/deactivate-account.js') }}"></script>
    <script src="{{ asset('assets/js/custom/pages/user-profile/general.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/offer-a-deal/type.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/offer-a-deal/details.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/offer-a-deal/finance.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/offer-a-deal/complete.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/offer-a-deal/main.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/two-factor-authentication.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <script>
        loadBreadCrumbWithHeader("Account", "Profile", "Dashboard", "#")
    </script>
@endpush
