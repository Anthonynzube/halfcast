@extends('layouts.app')

@section('content')
<div class="login-register-area pt-95 pb-100">
    <div class="container">
        <div class="row justify-content-center mt-100">
            <div class="col-md-8">
                <div class="login-register-wrap mr-70">
                    <h3><i class="fa fa-user-o"></i> Login</h3>
                    <div class="login-register-form">
                        <form  method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="sin-login-register">
                                <label>Email Address <span>*</span></label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="sin-login-register">
                                <label>Password <span>*</span></label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="login-register-btn-remember">
                                <div class="login-register-btn">
                                    <button type="submit">Log in</button>
                                </div>
                                <div class="login-register-remember">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label>Remember me</label>
                                </div>
                            </div>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
