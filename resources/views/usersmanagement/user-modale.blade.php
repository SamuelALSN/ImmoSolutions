<div class="modal fade" id="primaryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-primary" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-titleEdit">Modal title</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="postform" method="POST" action="">
                    @csrf

                    <div class="input-group mb-3" id="div_id">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                            <i class="flag-icon-ke"></i>
                            </span>
                        </div>
                        <input id="user_id" type="text" class="form-control @error('id') is-invalid @enderror"
                               name="user_id" value="{{ old('user_id') }}" required autocomplete="name" autofocus
                               placeholder="Name" disabled="">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                            <i class="icon-user"></i>
                            </span>
                        </div>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                               name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                               placeholder="Name">
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
                        <input id="last_name" type="text" class="form-control @error('name') is-invalid @enderror"
                               name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name"
                               autofocus placeholder="Last name">
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
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="icon-wrench"></i>
                                </span>
                        </div>

                        <select name="role" class="form-control" data-show-subtext="false"
                                data-live-search="true" id="role_id">
                            <option value="" hidden disabled selected>@lang('role')</option>
                            @foreach  (Spatie\Permission\Models\Role::all()  as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
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
                        <select name="country_id" class="form-control" data-show-subtext="false"
                                data-live-search="true" id="country_id">
                            <option value="" hidden disabled selected>@lang('country')</option>
                                                                    @foreach  (\App\Helpers\Country\Country::getCountries()  as $ctry)
                                                                        <option value="{{$ctry->id}}">{{$ctry->name}}</option>
                                                                    @endforeach
                        </select>
                    </div>
                    {{--                                    <button class="btn btn-block btn-success" type="submit">{{ __('Register') }}</button>--}}
                    <div class="modal-footer">
                        <button id="" class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                        <button  id="save_user" class="btn btn-primary" type="button">@lang('Enregistrer')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- show user  modal -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-titleShow">Modal title</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="showparagraph">One fine body…</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="button">Save changes</button>
            </div>
        </div>
    </div>

</div>
<!--end show modal-->

<!-- danger modal-->

<div class="modal fade" id="dangerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-danger" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-titleDelete">Modal title</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="deleteparagraph">Message Test…</p>
                <span class="did"></span>
            </div>
            <div class="modal-footer">
                <button id="" class="btn btn-secondary" type="button" data-dismiss="modal">@lang('Annuler')</button>
                <button id="confirm_delete" class="btn btn-danger" type="button">@lang('Confirmer')</button>
            </div>
        </div>
    </div>

</div>
<!--end danger modal -->
