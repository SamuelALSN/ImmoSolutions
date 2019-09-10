@extends('layouts.app')
@section('content')
    <div class="app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-group">
                    <div class="card p-4">
                        <div class="card-body">
                            <h1>@lang("Connexion")</h1>
                            <p class="text-muted"> @lang("Connectez vous ")</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                <span class="input-group-text">
                                 <i class="icon-user"></i>
                                 </span>
                                    </div>
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                             <i class="icon-lock"></i>
                                        </span>
                                    </div>
                                    <input id="password" class="form-control @error('password') is-invalid @enderror"
                                           type="password" name="password" required autocomplete="current-password"
                                           placeholder="@lang("Mot de Passe")">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                   id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
{{--                                                {{ __('Remember Me') }}--}}
                                                @lang("Se souvenir de moi")
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-primary px-4" type="submit">@lang("Se connecter")</button>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <div class="col-6 text-right">
                                            <a class="btn btn-link px-0"
                                               href="{{ route('password.request') }}">@lang("Mot de passe oublié ?")</a>
                                        </div>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                        <div class="card-body text-center">
                            <div>
                                <h2>ImmoSolutions</h2>
                                <p>@lang("Connectez vous en tant que Administrateur ou Agent Immobilier ")</p>
                                <button class="btn btn-primary active mt-3" type="button">@lang("S'inscire")</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
