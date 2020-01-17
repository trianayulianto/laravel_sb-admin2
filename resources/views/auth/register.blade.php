@extends('theme.auth')

@section('content')
<div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
<div class="col-lg-7">
    <div class="p-5">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
        </div>
        <form class="user" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <input id="name" type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus autofocus placeholder="Enter Username...">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Email Address...">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" autofocus placeholder="Enter Password...">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-sm-6">
                    <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" required autocomplete="new-password"autofocus placeholder="Enter Repeat Password...">
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    REGISTER <i class="fas fa-arrow-circle-right"></i>
                </button>
                <hr>
            </div>

            <div class="form-group text-center">
                <a class="small" href="{{ route('login') }}">
                    {{ __('Already Have an Account?') }}
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
