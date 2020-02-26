@extends('layouts.app')

@section('content')
<div class="login-register-area pt-95 pb-100">
    <div class="container">
        <div class="row justify-content-center mt-100">
            <div class="col-md-8">
                <div class="login-register-wrap register-wrap">
                    <h3> <i class="fa fa-user-o"></i> Register</h3>

                    <div class="login-register-form">
                        <form method="POST" action="{{ route('register') }}">
                   
                            @csrf

                            <div class="sin-login-register">
                                <label>Name <span>*</span></label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="sin-login-register">
                               <label>Email Address <span>*</span></label>
                               <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>

                            <div class="sin-login-register">
                               <label>Password <span>*</span></label>
                               <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>

                            <div class="sin-login-register">
                               <label>Confirm Password <span>*</span></label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>

                            <p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#">privacy policy</a></p>
                            <div class="login-register-btn">
                                <button type="submit">Register</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
