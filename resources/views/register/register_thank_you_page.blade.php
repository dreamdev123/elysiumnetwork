@extends('_layouts.clean')

@section('meta.title',          __('pages/index.meta_title'))
@section('meta.description',    __('pages/index.meta_description'))
@section('meta.keywords',       __('pages/index.meta_keywords'))

@section('PAGE_START')
@endsection

@section('PAGE_END')
@endsection


@section('content')
<div class="container vh-100" data-backgound="register-thank-you-page" style="display: none">
    <img src="{{ asset('images/logo-black.svg') }}" class="logo-let-up-corner">
    <div class="row minvh-100">
        <div class="col-lg-8 offset-lg-2 align-self-center text-center m-auto pt-5 pb-5" style="padding-top: 150px">
            <h3 class="mb-4">Welcome To Elysium Network</h3>
            <a href="#" style="text-decoration: none">
                <div class="profile-box mb-5">
                    <div class="profile-circle mb-3">
                        <i class="fas fa-user-tie profile-icon"></i>
                    </div>
                    <h6 class="description-paragraph m-0 font-weight-bold" style="color: #084d67">Introduction Broker</h6>
                </div>
            </a>
            <div class="profile-box mb-5" style="display: none">
                <div class="profile-circle mb-3">
                    <i class="fas fa-users-medical profile-icon"></i>
                </div>
                <h6 class="description-paragraph m-0">Affiliate</h6>
            </div>
            <hr class="mb-5">
            <p class="description-paragraph m-0">Please check you mailbox for instructions how to log into your <a href="">dashboard</a>.</p>
        </div>
    </div>
</div>
@endsection

@section('PAGE_LEVEL_SCRIPTS')
    <script type="text/javascript">
        const register = {
            init: function () {
                this.variables();
                this.addEventListeners();
                this.showThankYouPage();
            },
            variables: function () {
                this.thankYouPage = $('[data-backgound="register-thank-you-page"]');
            },
            addEventListeners: function () {
            },
            showThankYouPage: function () {
                setTimeout(function () {
                    this.thankYouPage.fadeIn(300);
                }.bind(this), 200)
            }
        };

        $(document).ready(function() {
            register.init();
        });
    </script>
@endsection