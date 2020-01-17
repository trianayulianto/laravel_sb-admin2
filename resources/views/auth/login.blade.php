@extends('theme.auth')

@section('content')
<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
<div class="col-lg-6">
    <div class="p-5">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
        </div>
        <form class="user" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group row">
                <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Email Address...">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group row">
                <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password...">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group row">
                <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label" for="remember">Remember Me</label>
                </div>
            </div>

            <div class="form-group row">
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    LOGIN <i class="fas fa-arrow-circle-right"></i>
                </button>
                <hr>
            </div>

            <div class="form-group text-center mb-n2">
                @if (Route::has('password.request'))
                    <a class="small" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>

            <div class="form-group text-center">
                <a class="small" href="{{ route('register') }}">
                    {{ __('Already Have an Account? Login!') }}
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
