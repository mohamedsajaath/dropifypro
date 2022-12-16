<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
@include('layouts.head')
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-column-fluid flex-lg-row">
            <!--begin::Aside-->
            <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
                <!--begin::Aside-->
                <div class="d-flex flex-center flex-lg-start flex-column">
                    <!--begin::Logo-->
                    <a href="{{ route('home') }}" class="mb-7">
                        <img alt="Logo" src="assets/media/Logo/dropify-logo-org.png" />
                    </a>
                    <!--end::Logo-->
                </div>
                <!--begin::Aside-->
            </div>
            <!--begin::Aside-->
            <!--begin::Body-->
            <div class="d-flex flex-center w-lg-50 p-10">
                <!--begin::Card-->
                <div class="card rounded-3 w-md-550px" style="box-shadow: 0px 0px 40px #e5dede;">
                    <!--begin::Card body-->
                    <div class="card-body p-10 p-lg-20">
                        {{-- {{ $register_Plan_details['id'] }} --}}
                        <!--begin::Form-->
                        <form class="form w-100" method="post" id="kt_sign_in_form" action="{{ route('register') }}">
                            @csrf
                            <!--begin::Heading-->
                            <div class="text-center mb-11">
                                <!--begin::Title-->
                                <h1 class="text-dark fw-bolder mb-3">Sign Up</h1>

                                <!--end::Title-->
                            </div>
                            <!--begin::Heading-->
                            <!--begin::Login options-->
                            {{-- <div class="row g-3 mb-9">
									<!--begin::Col-->
									<div class="col-md-6">
										<!--begin::Google link=-->
										<a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
										<img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-15px me-3" />Sign in with Google</a>
										<!--end::Google link=-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6">
										<!--begin::Google link=-->
										<a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
										<img alt="Logo" src="assets/media/svg/brand-logos/apple-black.svg" class="theme-light-show h-15px me-3" />
										<img alt="Logo" src="assets/media/svg/brand-logos/apple-black-dark.svg" class="theme-dark-show h-15px me-3" />Sign in with Apple</a>
										<!--end::Google link=-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Login options-->
								<!--begin::Separator-->
								<div class="separator separator-content my-14">
									<span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
								</div>
								<!--end::Separator--> --}}
                            <!--begin::Input group=-->
                            <input type="hidden" value="{{ request()->get('plan_id') }}" name="plan_id">
                            <div class="fv-row mb-8">
                                <!--begin::First Name-->
                                <input type="text" placeholder="First Name" name="first_name" autocomplete="off"
                                    class="form-control bg-transparent" required />
                                <!--end::First Name-->
                            </div>
                            <div class="fv-row mb-8">
                                <!--begin::Last Name-->
                                <input type="text" placeholder="Last Name" name="last_name" autocomplete="off"
                                    class="form-control bg-transparent" required />
                                <!--end::Last Name-->
                            </div>
                            <div class="fv-row mb-8">
                                <!--begin::Email-->
                                <input type="text" placeholder="Email" name="email" autocomplete="off"
                                    class="form-control bg-transparent" required />
                                <!--end::Email-->
                            </div>
                            <!--end::Input group=-->
                            <div class="fv-row mb-8">
                                <!--begin::Password-->
                                <input type="password" placeholder="Password" name="password" autocomplete="off"
                                    class="form-control bg-transparent" required />
                                <!--end::Password-->
                            </div>
                            <div class="fv-row mb-8">
                                <!--begin::Password-->
                                <input type="password" placeholder="Confirm Password" name="password_confirmation"
                                    autocomplete="off" class="form-control bg-transparent" required />
                                <!--end::Password-->
                            </div>
                            <!--end::Input group=-->
                            <div class="fv-row mb-8">
                                <!--begin::Address-->
                                <input type="text" placeholder="Address" name="address" autocomplete="off"
                                    class="form-control bg-transparent" required />
                                <!--end::Address-->
                            </div>
                            <div class="fv-row mb-8">
                                <!--begin::City-->
                                <input type="text" placeholder="City" name="city" autocomplete="off"
                                    class="form-control bg-transparent" required />
                                <!--end::City-->
                            </div>
                            <div class="fv-row mb-8">
                                <!--begin::State-->
                                <input type="text" placeholder="State" name="state" autocomplete="off"
                                    class="form-control bg-transparent" required />
                                <!--end::State-->
                            </div>
                            <div class="fv-row mb-8">
                                <!--begin::ZipCode-->
                                <input type="text" placeholder="ZipCode" name="zipcode" autocomplete="off"
                                    class="form-control bg-transparent" required />
                                <!--end::ZipCode-->
                            </div>
                            <div class="fv-row mb-8">
                                <select name="country_id" aria-label="Select a Country" data-control="select2"
                                    data-placeholder="Select a country..." class="form-select form-select-solid">
                                    <option value="">Select A Country</option>
                                    @foreach (App\models\MdCountry::country() as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="fv-row mb-8">
                                <!--begin::Phone Number-->
                                <input type="text" placeholder="Phone Number" name="phone_no" autocomplete="off"
                                    class="form-control bg-transparent" required />
                                <!--end::Phone Number-->
                            </div>

                            <!--begin::Submit button-->
                            <div class="d-grid mb-10">
                                <button type="submit" class="btn btn-primary">Sign Up
                                </button>
                            </div>
                            <!--end::Submit button-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="assets/js/custom/authentication/sign-in/general.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
