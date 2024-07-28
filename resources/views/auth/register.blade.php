@extends('layout')

@section('content')
    <div class="form-section">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row mb-3" style="margin-top: 65px;">

                <div style="width: 100%; text-align: center">
                    <h2> Registro </h2>
                </div>
                <div class="form-group">

                    <label for="name">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">{{ __('Email Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" >{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="@error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm" >{{ __('Confirm Password') }}</label>

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                        autocomplete="new-password">

                </div>

                <div class="form-group">

                    <button type="submit" class="btn btn-send">
                        {{ __('Register') }}
                    </button>

                </div>
            </div>
        </form>
    </div>
@endsection
