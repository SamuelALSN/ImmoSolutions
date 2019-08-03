@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
{{--                <div class="card-header">{{ __('Verify Your Email Address') }}</div>--}}
                <div class="card-header">@lang("Verifier votre adresse Mail")</div>
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
{{--                            {{ __('A fresh verification link has been sent to your email address.') }}--}}
                            @lang("un mail de vérification récent vient d'etre envoyé")
                        </div>
                    @endif

{{--                    {{ __('Before proceeding, please check your email for a verification link.') }}--}}
                        @lang("Verifier votre mail afin de pouvoir vous connecter ")
{{--                    {{ __('If you did not receive the email') }}, --}}
                        @lang("Mail non recu ?")
                        <a href="{{ route('verification.resend') }}">
{{--                            {{ __('click here to request another') }}--}}
                            @lang("cliquez ici afin d'envoyer à nouveau ")
                        </a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
