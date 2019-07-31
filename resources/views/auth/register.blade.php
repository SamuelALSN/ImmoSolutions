@extends('layouts.app')
@section('content')
    <div class="app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mx-4">
                    <div class="card-body p-4">
                        <h1>{{ __('Register') }}</h1>
                        <p class="text-muted">Create your account</p>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                            <span class="input-group-text">
                            <i class="icon-user"></i>
                            </span>
                                </div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                            <span class="input-group-text">
                            <i class="icon-user-follow"></i>
                            </span>
                                </div>
                                <input id="last_name" type="text" class="form-control @error('name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus placeholder="Last name">
                                @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email"
                                       placeholder="Email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                             <span class="input-group-text">
                            <i class="icon-lock"></i>
                            </span>
                                </div>
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="new-password" placeholder="Password">
                                @error('password')
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
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required autocomplete="new-password"
                                       placeholder="Repeat Password">
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="icon-location-pin"></i>
                                    </span>
                                </div>
                                <select name="country_id" class=" selectpicker form-control" data-show-subtext="false"
                                        data-live-search="true" id="country_id">
                                    @foreach  (\App\Helpers\Country\Country::getCountries()  as $ctry)
                                        <option value="{{$ctry->id}}">{{$ctry->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button class="btn btn-block btn-success" type="submit">{{ __('Register') }}</button>
                        </form>
                    </div>

                    <div class="card-footer p-4">
                        <div class="row">
                            <div class="col-6">
                                <button class="btn btn-block btn-facebook" type="button">
                                    <span>facebook</span>
                                </button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-block btn-twitter" type="button">
                                    <span>twitter</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection


