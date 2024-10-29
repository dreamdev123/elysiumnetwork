@extends('_layouts.clean')

@section('meta.title',          __('pages/index.meta_title'))
@section('meta.description',    __('pages/index.meta_description'))
@section('meta.keywords',       __('pages/index.meta_keywords'))

@section('PAGE_START')
@endsection

@section('PAGE_END')
@endsection


@section('content')
<div class="container vh-100" data-backgound="register-details" style="display: none">
    <img src="{{ asset('images/logo-black.svg') }}" class="logo-let-up-corner">
    <a href="{{ route('marketing::index') }}" class="close-icon cursor-pointer"><i class="fas fa-times"></i></a>
    <div class="row minvh-100">
        <div class="col-lg-8 offset-lg-2 align-self-center text-center m-auto mt-5 pb-5" style="padding-top: 150px">
            <h3 class="mb-5">Fill in your details</h3>
            <div class="row mb-4">
                <ul class="nav nav-tabs mb-5 w-100" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#broker" role="tab" aria-controls="broker" aria-selected="true">Introducing Broker</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#affiliate" role="tab" aria-controls="affiliate" aria-selected="false">Affiliate</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="broker" role="tabpanel" aria-labelledby="home-tab">
                        <form data-form="details-broker">
                            <div class="row">
                                <div class="col-sm-6 pr-sm-2 mb-2">
                                    <div class="form-group text-left">
                                        <label class="label-title">Full legal first and middle names</label>
                                        <input type="text" name="first_name" class="form-control" id="firstName" placeholder="Full legal first and middle names" tabindex="1">
                                        <label id="first-name-error" class="has-error" for="first_name" style="display: none"></label>
                                    </div>
                                </div>
                                <div class="col-sm-6 pl-sm-2 mb-2">
                                    <div class="form-group position-relative text-left">
                                        <label class="label-title">Full legal last name(s)</label>
                                        <input type="text" name="last_name" class="form-control" id="lastName" placeholder="Full legal last name(s)" style="padding-right: 45px;" tabindex="2">
                                        <label id="last-name-error" class="has-error" for="last_name" style="display: none"></label>
                                    </div>
                                </div>
                                <div class="col-sm-6 pr-sm-2 mb-4">
                                    <div class="form-group text-left">
                                        <label class="label-title">Date of birth</label>
                                        <div class="row">
                                            <div class="col-sm-3 pr-sm-2 mb-2 mb-sm-0">
                                                <input type="text" name="day" class="form-control" id="day" placeholder="DD" maxlength="2" tabindex="3">
                                            </div>
                                            <div class="col-sm-5 pr-sm-2 pl-sm-2 mb-2 mb-sm-0">
                                                <div class="select">
                                                    <select type="text" name="month" class="form-control" id="month" style="height: 49px;" tabindex="4">
                                                        <option value="january" selected>January</option>
                                                        <option value="february">February</option>
                                                        <option value="march">March</option>
                                                        <option value="april">April</option>
                                                        <option value="may">May</option>
                                                        <option value="june">June</option>
                                                        <option value="july">July</option>
                                                        <option value="august">August</option>
                                                        <option value="september">September</option>
                                                        <option value="october">October</option>
                                                        <option value="november">November</option>
                                                        <option value="december">December</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 pl-sm-2 mb-2 mb-sm-0">
                                                <input type="text" name="year" class="form-control" id="year" placeholder="YYYY" maxlength="4" tabindex="5">
                                            </div>
                                        </div>
                                        <label id="date-error" class="has-error" for="date" style="display: none"></label>
                                    </div>
                                </div>
                                <div class="col-sm-6 pl-sm-2 mb-4">
                                    <div class="form-group position-relative text-left">
                                        <label class="label-title">Phone</label>
                                        <div class="row">
                                            <div class="col-sm-4 pr-sm-2 mb-2 mb-md-0">
                                                <div class="select">
                                                    <select type="text" name="phone_prefix" class="form-control" id="phonePrefix" style="height: 49px;" tabindex="6">
                                                        <option value="44" selected>+ 44</option>
                                                        <option value="55">+ 55</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 pl-sm-2 mb-2 mb-md-0">
                                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" style="padding-right: 45px;" tabindex="7">
                                            </div>
                                        </div>
                                        <label id="phone-error" class="has-error" for="date" style="display: none"></label>
                                    </div>
                                    <p class="description-paragraph text-left mb-0">To confirm your new mobile phone number, <a href="" class="text-link">click here</a> (Optional)</p>
                                </div>
                            </div>

                            <h4 class="text-left mt-4">Your address</h4>
                            <hr class="mb-4">

                            <div class="row mb-4">
                                <div class="col-sm-6 pr-sm-2 mb-2">
                                    <div class="form-group text-left">
                                        <label class="label-title">Country</label>
                                        <div class="select">
                                            <select type="text" name="country" class="form-control" id="country" style="height: 49px;" tabindex="8">
                                                <option value="bahamas">Bahamas</option>
                                                <option value="brazil">Brazil</option>
                                                <option value="poland" selected>Poland</option>
                                                <option value="usa">USA</option>
                                            </select>
                                        </div>
                                        <label id="country-error" class="has-error" for="country" style="display: none"></label>
                                    </div>
                                </div>
                                <div class="col-sm-6 pl-sm-2 mb-2">
                                    <div class="form-group position-relative text-left">
                                        <label class="label-title">Address</label>
                                        <input type="text" name="address" class="form-control" id="address" placeholder="First line of your address" style="padding-right: 45px;" tabindex="9">
                                        <label id="address-error" class="has-error" for="address" style="display: none"></label>
                                    </div>
                                </div>
                                <div class="col-sm-6 pr-sm-2 mb-2">
                                    <div class="form-group position-relative text-left">
                                        <label class="label-title">City</label>
                                        <input type="text" name="city" class="form-control" id="city" style="padding-right: 45px;" tabindex="10">
                                        <label id="city-error" class="has-error" for="city" style="display: none"></label>
                                    </div>
                                </div>
                                <div class="col-sm-6 pl-sm-2 mb-2">
                                    <div class="form-group position-relative text-left">
                                        <label class="label-title">Post code</label>
                                        <input type="text" name="post_code" class="form-control" id="postCode" style="padding-right: 45px;" tabindex="11">
                                        <label id="post-code-error" class="has-error" for="post_code" style="display: none"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 offset-md-2 mb-3">
                                <button class="btn btn-success btn-block btn-lg button-submit" data-button="submit" tabindex="12">Let’s get started</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="affiliate" role="tabpanel" aria-labelledby="profile-tab">

                        ...

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('PAGE_LEVEL_SCRIPTS')
    <script src="{{ url('/js/jquery.validate.min.js') }}"></script>

    <script type="text/javascript">
        const register = {
            init: function () {
                this.variables();
                this.addEventListeners();
                this.firstNameInputFocus();
                this.showRegisterBackground();
            },
            variables: function () {
                this.passwordRegisterInput = $('[data-password="register"]');
                this.passwordRegisterEye = $('[data-password="password-eye"]');
                this.passwordRegisterEyeShow = $('[data-password="password-eye-show"]');
                this.passwordRegisterEyeHide = $('[data-password="password-eye-hide"]');
                this.form = $('[data-form="details-broker"]');
                this.detailsPage = $('[data-backgound="register-details"]');
                this.thankYouPage = '{{ route('marketing::register_thank_you_page') }}';
                this.scrollToError = '';
                this.firstNameInput = $('#firstName');
                this.firstNameError = $('#first-name-error');
                this.lastNameInput = $('#lastName');
                this.lastNameError = $('#last-name-error');
                this.dayInput = $('#day');
                this.yearInput = $('#year');
                this.dateError = $('#date-error');
                this.phoneInput = $('#phone');
                this.phoneError = $('#phone-error');
                this.addressInput = $('#address');
                this.addressError = $('#address-error');
                this.cityInput = $('#city');
                this.cityError = $('#city-error');
                this.postCodeInput = $('#postCode');
                this.postCodeError = $('#post-code-error');
                this.submitButton = $('[data-button="submit"]');
            },
            addEventListeners: function () {
                this.firstNameInput.on('keyup', function () {
                    this.validateFirstNameInput();
                }.bind(this));
                this.lastNameInput.on('keyup', function () {
                    this.validateLastNameInput();
                }.bind(this));
                this.dayInput.on('keyup', function () {
                    this.validateDayInput();
                }.bind(this));
                this.yearInput.on('keyup', function () {
                    this.validateYearInput();
                }.bind(this));
                this.phoneInput.on('keyup', function () {
                    this.validatePhoneInput();
                }.bind(this));
                this.addressInput.on('keyup', function () {
                    this.validateAddressInput();
                }.bind(this));
                this.cityInput.on('keyup', function () {
                    this.validateCityInput();
                }.bind(this));
                this.postCodeInput.on('keyup', function () {
                    this.validatePostCodeInput();
                }.bind(this));
                this.form.on('submit', function (event) {
                    event.preventDefault();
                    if (this.validateFirstNameInput()
                        && this.validateLastNameInput()
                        && this.validateDayInput()
                        && this.validateYearInput()
                        && this.validatePhoneInput()
                        && this.validateAddressInput()
                        && this.validateCityInput()
                        && this.validatePostCodeInput()) {
                        window.location.href = this.thankYouPage;
                    }
                    this.scrollToElement(this.scrollToError);
                    this.scrollToError.focus();
                }.bind(this));
                $(document).on('keypress',function(e) {
                    if(e.which === 13) {
                        this.form.submit();
                    }
                }.bind(this));
            },
            scrollToElement: function (element) {
                $('body, html').animate({
                    scrollTop: element.offset().top - 50
                }, 500);
            },
            firstNameInputFocus: function () {
                setTimeout(function () {
                    this.firstNameInput.focus();
                }.bind(this), 300);
            },
            validateFirstNameInput: function () {
                var validationMessage = '';
                var formControl = this.firstNameInput.parent('.form-group').find('.form-control');
                var labelTitle = this.firstNameInput.parent('.form-group').find('.label-title');
                var value = this.firstNameInput.val();

                if ((/^[a-zA-Z ]{2,50}$/.test(value))) {
                    validationMessage = 'Now, that\'s a good name.\n';
                    formControl.addClass('valid');
                    labelTitle.addClass('valid-text');
                    this.firstNameError.addClass('valid');
                    this.firstNameError.show();
                } else if (value === '') {
                    validationMessage = 'The name field is required.';
                    formControl.removeClass('valid');
                    labelTitle.removeClass('valid-text');
                    formControl.addClass('has-error');
                    labelTitle.addClass('error-text');
                    this.firstNameError.removeClass('valid');
                    this.firstNameError.show();
                } else {
                    validationMessage = 'The name must contain only letter and be minimum of 2 characters.';
                    formControl.removeClass('valid');
                    labelTitle.removeClass('valid-text');
                    formControl.addClass('has-error');
                    labelTitle.addClass('error-text');
                    this.firstNameError.removeClass('valid');
                    this.firstNameError.show();
                }

                this.firstNameError.html(validationMessage);
                this.scrollToError = this.firstNameInput;

                return ((/^[a-zA-Z ]{2,50}$/.test(value)));
            },
            validateLastNameInput: function () {
                var validationMessage = '';
                var formControl = this.lastNameInput.parent('.form-group').find('.form-control');
                var labelTitle = this.lastNameInput.parent('.form-group').find('.label-title');
                var value = this.lastNameInput.val();

                if ((/^[a-zA-Z -]{2,50}$/.test(value))) {
                    validationMessage = 'Now, that\'s a good last name.\n';
                    formControl.addClass('valid');
                    labelTitle.addClass('valid-text');
                    this.lastNameError.addClass('valid');
                    this.lastNameError.show();
                } else if (value === '') {
                    validationMessage = 'The last name field is required.';
                    formControl.removeClass('valid');
                    labelTitle.removeClass('valid-text');
                    formControl.addClass('has-error');
                    labelTitle.addClass('error-text');
                    this.lastNameError.removeClass('valid');
                    this.lastNameError.show();
                } else {
                    validationMessage = 'The last name must contain only letter and be minimum of 2 characters.';
                    formControl.removeClass('valid');
                    labelTitle.removeClass('valid-text');
                    formControl.addClass('has-error');
                    labelTitle.addClass('error-text');
                    this.lastNameError.removeClass('valid');
                    this.lastNameError.show();
                }

                this.lastNameError.html(validationMessage);
                this.scrollToError = this.lastNameInput;

                return ((/^[a-zA-Z -]{2,50}$/.test(value)));
            },
            validateDayInput: function () {

                var validationMessage = '';
                var formControl = this.dayInput.closest('.form-group').find('.form-control');
                var labelTitle = this.dayInput.closest('.form-group').find('.label-title');

                var value = this.dayInput.val();

                if ((/(0[1-9]|[12][0-9]|3[01])$/.test(value)) || (/^[1-9]{1}$/.test(value))) {
                    validationMessage = 'Now, that\'s a good date.\n';
                    formControl.addClass('valid');
                    labelTitle.addClass('valid-text');
                    this.dateError.addClass('valid');
                    this.dateError.show();
                } else if (value === '') {
                    validationMessage = 'The day field is required.';
                    formControl.removeClass('valid');
                    labelTitle.removeClass('valid-text');
                    formControl.addClass('has-error');
                    labelTitle.addClass('error-text');
                    this.dateError.removeClass('valid');
                    this.dateError.show();
                } else {
                    validationMessage = 'The day must contain only digit.';
                    formControl.removeClass('valid');
                    labelTitle.removeClass('valid-text');
                    formControl.addClass('has-error');
                    labelTitle.addClass('error-text');
                    this.dateError.removeClass('valid');
                    this.dateError.show();
                }

                this.dateError.html(validationMessage);
                this.scrollToError = this.dayInput;

                return ((/(0[1-9]|[12][0-9]|3[01])$/.test(value)) || (/^[0-9]{1}$/.test(value)));
            },
            validateYearInput: function () {
                var validationMessage = '';
                var formControl = this.yearInput.closest('.form-group').find('.form-control');
                var labelTitle = this.yearInput.closest('.form-group').find('.label-title');
                var value = this.yearInput.val();

                if ((/^[0-9]{4}$/.test(value))) {
                    validationMessage = 'Now, that\'s a good date.\n';
                    formControl.addClass('valid');
                    labelTitle.addClass('valid-text');
                    this.dateError.addClass('valid');
                    this.dateError.show();
                } else if (value === '') {
                    validationMessage = 'The year field is required.';
                    formControl.removeClass('valid');
                    labelTitle.removeClass('valid-text');
                    formControl.addClass('has-error');
                    labelTitle.addClass('error-text');
                    this.dateError.removeClass('valid');
                    this.dateError.show();
                } else {
                    validationMessage = 'The year must contain only digit.';
                    formControl.removeClass('valid');
                    labelTitle.removeClass('valid-text');
                    formControl.addClass('has-error');
                    labelTitle.addClass('error-text');
                    this.dateError.removeClass('valid');
                    this.dateError.show();
                }

                this.dateError.html(validationMessage);
                this.scrollToError = this.yearInput;

                return ((/^[0-9]{4}$/.test(value)));
            },
            validatePhoneInput: function () {
                var validationMessage = '';
                var formControl = this.phoneInput.closest('.form-group').find('.form-control');
                var labelTitle = this.phoneInput.closest('.form-group').find('.label-title');
                var value = this.phoneInput.val();

                if ((/^[0-9 -]{2,20}$/.test(value))) {
                    validationMessage = 'Now, that\'s a good phone number.\n';
                    formControl.addClass('valid');
                    labelTitle.addClass('valid-text');
                    this.phoneError.addClass('valid');
                    this.phoneError.show();
                } else if (value === '') {
                    validationMessage = 'The phone number field is required.';
                    formControl.removeClass('valid');
                    labelTitle.removeClass('valid-text');
                    formControl.addClass('has-error');
                    labelTitle.addClass('error-text');
                    this.phoneError.removeClass('valid');
                    this.phoneError.show();
                } else {
                    validationMessage = 'The phone number must contain only digits.';
                    formControl.removeClass('valid');
                    labelTitle.removeClass('valid-text');
                    formControl.addClass('has-error');
                    labelTitle.addClass('error-text');
                    this.phoneError.removeClass('valid');
                    this.phoneError.show();
                }

                this.phoneError.html(validationMessage);
                this.scrollToError = this.phoneInput;

                return ((/^[0-9 -]{2,20}$/.test(value)));
            },
            validateAddressInput: function () {
                var validationMessage = '';
                var formControl = this.addressInput.parent('.form-group').find('.form-control');
                var labelTitle = this.addressInput.parent('.form-group').find('.label-title');
                var value = this.addressInput.val();

                if ((/^[a-zA-Z0-9 ./-]{2,50}$/.test(value))) {
                    validationMessage = 'Now, that\'s a good address.\n';
                    formControl.addClass('valid');
                    labelTitle.addClass('valid-text');
                    this.addressError.addClass('valid');
                    this.addressError.show();
                } else if (value === '') {
                    validationMessage = 'The address field is required.';
                    formControl.removeClass('valid');
                    labelTitle.removeClass('valid-text');
                    formControl.addClass('has-error');
                    labelTitle.addClass('error-text');
                    this.addressError.removeClass('valid');
                    this.addressError.show();
                } else {
                    validationMessage = 'The address must contain only letter and be minimum of 2 characters.';
                    formControl.removeClass('valid');
                    labelTitle.removeClass('valid-text');
                    formControl.addClass('has-error');
                    labelTitle.addClass('error-text');
                    this.addressError.removeClass('valid');
                    this.addressError.show();
                }

                this.addressError.html(validationMessage);
                this.scrollToError = this.addressInput;

                return ((/^[a-zA-Z0-9 ./-]{2,50}$/.test(value)));
            },
            validateCityInput: function () {
                var validationMessage = '';
                var formControl = this.cityInput.parent('.form-group').find('.form-control');
                var labelTitle = this.cityInput.parent('.form-group').find('.label-title');
                var value = this.cityInput.val();

                if ((/^[a-zA-Z ]{2,50}$/.test(value))) {
                    validationMessage = 'Now, that\'s a good city name.\n';
                    formControl.addClass('valid');
                    labelTitle.addClass('valid-text');
                    this.cityError.addClass('valid');
                    this.cityError.show();
                } else if (value === '') {
                    validationMessage = 'The city name field is required.';
                    formControl.removeClass('valid');
                    labelTitle.removeClass('valid-text');
                    formControl.addClass('has-error');
                    labelTitle.addClass('error-text');
                    this.cityError.removeClass('valid');
                    this.cityError.show();
                } else {
                    validationMessage = 'The city name must contain only letter and be minimum of 2 characters.';
                    formControl.removeClass('valid');
                    labelTitle.removeClass('valid-text');
                    formControl.addClass('has-error');
                    labelTitle.addClass('error-text');
                    this.cityError.removeClass('valid');
                    this.cityError.show();
                }

                this.cityError.html(validationMessage);
                this.scrollToError = this.cityInput;

                return ((/^[a-zA-Z ]{2,50}$/.test(value)));
            },
            validatePostCodeInput: function () {
                var validationMessage = '';
                var formControl = this.postCodeInput.parent('.form-group').find('.form-control');
                var labelTitle = this.postCodeInput.parent('.form-group').find('.label-title');
                var value = this.postCodeInput.val();

                if ((/^[0-9 -]{2,20}$/.test(value))) {
                    validationMessage = 'Now, that\'s a good post code.\n';
                    formControl.addClass('valid');
                    labelTitle.addClass('valid-text');
                    this.postCodeError.addClass('valid');
                    this.postCodeError.show();
                } else if (value === '') {
                    validationMessage = 'The post code field is required.';
                    formControl.removeClass('valid');
                    labelTitle.removeClass('valid-text');
                    formControl.addClass('has-error');
                    labelTitle.addClass('error-text');
                    this.postCodeError.removeClass('valid');
                    this.postCodeError.show();
                } else {
                    validationMessage = 'The post code must contain only digit and be minimum of 2 characters and max 20.';
                    formControl.removeClass('valid');
                    labelTitle.removeClass('valid-text');
                    formControl.addClass('has-error');
                    labelTitle.addClass('error-text');
                    this.postCodeError.removeClass('valid');
                    this.postCodeError.show();
                }

                this.postCodeError.html(validationMessage);
                this.scrollToError = this.postCodeInput;

                return ((/^[0-9 -]{2,20}$/.test(value)));
            },
            showRegisterBackground: function () {
                setTimeout(function () {
                    this.detailsPage.fadeIn(300);
                }.bind(this), 200)
            },
            addLoader: function () {
                this.submitButton.addClass('loader');
            },
            removeLoader: function () {
                this.submitButton.removeClass('loader');
            }
        };

        $(document).ready(function() {
            register.init();
        });
    </script>
@endsection