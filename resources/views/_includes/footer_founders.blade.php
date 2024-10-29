<div class="copyWrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center">
                <p>{!! __('footer.copyright', ['year' => date('Y')]) !!}</p>
            </div>
            <div class="col-lg-6 text-center">
                <ul style="padding: 0">
                    <li><a href="{{ route('marketing::legal::gdpr') }}">{{ __('footer.gdpr') }}</a></li>
                    <li><a href="{{ route('marketing::legal::terms-of-supply') }}">{{ __('footer.terms-of-supply') }}</a></li>
                    <li><a href="{{ route('marketing::legal::terms-of-use') }}" style="border-right: 0;">{{ __('footer.terms-of-use') }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row footerWrapper">
    <div class="container">
        <p>
            {{ __('footer.displaimer_founders') }}
        </p>
    </div>
</div>