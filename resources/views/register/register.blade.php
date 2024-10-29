@extends('_layouts.clean')

@section('meta.title',          __('pages/index.meta_title'))
@section('meta.description',    __('pages/index.meta_description'))
@section('meta.keywords',       __('pages/index.meta_keywords'))

@section('PAGE_START')
@endsection

@section('PAGE_END')
@endsection


@section('content')
<div class="container-fluid vh-100" data-backgound="register" style="display: none">
    <a href="{{ route('marketing::index') }}" class="close-icon cursor-pointer"><i class="fas fa-times"></i></a>
    <div class="row minvh-100">
        <div class="col-lg-5 p-0 register-bg-container">
            <div class="register-bg"></div>
        </div>
        <div class="col-lg-7 align-self-center text-center m-auto pt-5 pb-5">
            <img src="{{ asset('images/logo-black.svg') }}" class="mb-5 pt-5" style="width: 200px">
            <h3 class="mb-3">Sign Up</h3>
            <p class="description-paragraph mb-5">Already signed up? <a href="" class="text-link">Log in</a></p>
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                    <form data-form="register">
                        <div class="row">
                            <div class="col-6 pr-2">
                                <div class="form-group text-left">
                                    <label class="form-control cursor-pointer radio-container" data-option="investment">
                                        <input class="radio-button" type="radio" checked="checked" name="radio">
                                        <span class="checkbox-circle mr-1 align-middle"></span>
                                        <span class="d-block align-middle" style="margin-left: 36px">Introducing Broker</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 pl-2">
                                <div class="form-group text-left">
                                    <label class="form-control cursor-pointer radio-container" data-option="affiliate">
                                        <input class="radio-button" type="radio" name="radio">
                                        <span class="checkbox-circle mr-1 align-middle"></span>
                                        <span class="d-block align-middle" style="margin-left: 36px">Affiliate</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group text-left">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Your email address" tabindex="1">
                                    <label id="email-error" class="has-error" for="email" style="display: none"></label>
                                </div>
                                <div class="form-group position-relative text-left">
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Create a password" data-password="register" style="padding-right: 45px;" tabindex="2">
                                    <div class="password-eye" data-password="password-eye">
                                        <i class="fas fa-eye cursor-pointer" data-password="password-eye-show"></i>
                                        <i class="fas fa-eye-slash cursor-pointer" data-password="password-eye-hide" style="display: none"></i>
                                    </div>
                                    <label id="password-error" class="has-error" for="password" style="display: none"></label>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <button class="btn btn-success btn-block btn-lg button-submit" data-button="submit" tabindex="3"><i class="fas fa-unlock-alt mr-2"></i> Sign Up</button>
                            </div>
                            {{--<div class="col-12">
                                <p class="description-paragraph">Or, continue with <a href="">Google</a> or <a href="">Facebook</a></p>
                            </div>
                            <hr class="m-0 mb-3">--}}
                            <div class="col-12">
                                <p class="description-paragraph mb-0">By signing up you agree to our <a href="" class="text-link">Terms of Use</a><br>and <a href="" class="text-link">Privacy Policy</a>.</p>
                            </div>
                        </div>
                    </form>
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
                this.emailInputFocus();
                this.showRegisterPage();
            },
            variables: function () {
                this.passwordRegisterInput = $('[data-password="register"]');
                this.passwordRegisterEye = $('[data-password="password-eye"]');
                this.passwordRegisterEyeShow = $('[data-password="password-eye-show"]');
                this.passwordRegisterEyeHide = $('[data-password="password-eye-hide"]');
                this.form = $('[data-form="register"]');
                this.passwordInput = $('#password');
                this.passwordError = $('#password-error');
                this.emailInput = $('#email');
                this.emailError = $('#email-error');
                this.backgroundRegister = $('[data-backgound="register"]');
                this.secondStep = '{{ route('marketing::register_details') }}';
                this.scrollToError = '';
                this.submitButton = $('[data-button="submit"]');
            },
            addEventListeners: function () {
                this.passwordRegisterEye.on('click', function () {
                    this.togglePasswordVisibility();
                }.bind(this));
                this.emailInput.on('keyup', function () {
                    this.validateEmailInput();
                }.bind(this));
                this.passwordInput.on('keyup', function () {
                    this.validatePasswordInput();
                }.bind(this));
                this.form.on('submit', function (event) {
                    event.preventDefault();
                    if (this.validateEmailInput() && this.validatePasswordInput()) {
                        window.location.href = this.secondStep;
                    }
                    this.scrollToError.focus();
                }.bind(this));
                $(document).on('keypress',function(e) {
                    if ((e.which === 13)) {
                        this.form.submit();
                    }
                }.bind(this));
            },
            togglePasswordVisibility: function () {
                if (this.passwordRegisterInput.attr('type') === "password") {
                    this.passwordRegisterInput.attr('type', 'text');
                    this.passwordRegisterEyeShow.hide();
                    this.passwordRegisterEyeHide.show();
                } else {
                    this.passwordRegisterInput.attr('type', 'password');
                    this.passwordRegisterEyeShow.show();
                    this.passwordRegisterEyeHide.hide();
                }
            },
            emailInputFocus: function () {
                setTimeout(function () {
                    this.emailInput.focus();
                }.bind(this), 300);
            },
            validateEmailInput: function () {
                var validationMessage = '';
                var formControlEmail = this.emailInput.parent('.form-group').find('.form-control');
                var value = this.emailInput.val();

                if ((/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value))) {
                    validationMessage = 'Now, that\'s a good email.\n';
                    formControlEmail.addClass('valid');
                    this.emailError.addClass('valid');
                    this.emailError.show();
                } else if (value === '') {
                    validationMessage = 'The email field is required.';
                    formControlEmail.removeClass('valid');
                    formControlEmail.addClass('has-error');
                    this.emailError.removeClass('valid');
                    this.emailError.show();
                } else {
                    validationMessage = 'This email is not valid.';
                    formControlEmail.removeClass('valid');
                    formControlEmail.addClass('has-error');
                    this.emailError.removeClass('valid');
                    this.emailError.show();
                }

                this.emailError.html(validationMessage);
                this.scrollToError = this.emailInput;

                return ((/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value)));
            },
            validatePasswordInput: function () {
                var validationMessage = '';
                var value = this.passwordInput.val();

                if ((/\d/.test(value)) && (/[a-zA-Z]/.test(value)) && (/^.{9,}$/.test(value))) {
                    validationMessage = 'Now, that\'s a secure password.\n';
                    this.errorRegisterPassword();
                } else if ((/\d/.test(value)) && (/[a-zA-Z]/.test(value))) {
                    validationMessage = 'Password must contain a <strong><del>letter</del></strong> and a <strong><del>number</del></strong>, and be minimum of <strong>9 characters</strong>.';
                    this.validRegisterPassword();
                } else if ((/^.{9,}$/.test(value)) && (/[a-zA-Z]/.test(value))) {
                    validationMessage = 'Password must contain a <strong><del>letter</del></strong> and a <strong>number</strong>, and be minimum of <strong><del>9 characters</del></strong>.';
                    this.validRegisterPassword();
                } else if ((/^.{9,}$/.test(value)) && (/\d/.test(value))) {
                    validationMessage = 'Password must contain a <strong>letter</strong> and a <strong><del>number</del></strong>, and be minimum of <strong><del>9 characters</del></strong>.';
                    this.validRegisterPassword();
                } else if ((/^.{9,}$/.test(value))) {
                    validationMessage = 'Password must contain a <strong>letter</strong> and a <strong>number</strong>, and be minimum of <strong><del>9 characters</del></strong>.';
                    this.validRegisterPassword();
                } else if ((/\d/.test(value))) {
                    validationMessage = 'Password must contain a <strong>letter</strong> and a <strong><del>number</del></strong>, and be minimum of <strong>9 characters</strong>.';
                    this.validRegisterPassword();
                } else if ((/[a-zA-Z]/.test(value))) {
                    validationMessage = 'Password must contain a <strong><del>letter</del></strong> and a <strong>number</strong>, and be minimum of <strong>9 characters</strong>.';
                    this.validRegisterPassword();
                } else if (value === '') {
                    validationMessage = 'Password must contain a <strong>letter</strong> and a <strong>number</strong>, and be minimum of <strong>9 characters</strong>.';
                    this.validRegisterPassword();
                } else {
                    validationMessage = 'Password must contain a <strong>letter</strong> and a <strong>number</strong>, and be minimum of <strong>9 characters</strong>.';
                    this.validRegisterPassword();
                }

                this.passwordError.html(validationMessage);
                this.scrollToError = this.passwordInput;

                return (/\d/.test(value)) && (/[a-zA-Z]/.test(value)) && (/^.{9,}$/.test(value));
            },
            validRegisterPassword: function () {
                var formControlPassword = this.passwordInput.parent('.form-group').find('.form-control');
                formControlPassword.removeClass('valid');
                formControlPassword.addClass('has-error');
                this.passwordError.removeClass('valid');
                this.passwordError.show();
            },
            errorRegisterPassword: function () {
                var formControlPassword = this.passwordInput.parent('.form-group').find('.form-control');
                formControlPassword.addClass('valid');
                this.passwordError.addClass('valid');
                this.passwordError.show();
            },
            showRegisterPage: function () {
                setTimeout(function () {
                    this.backgroundRegister.fadeIn(300);
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