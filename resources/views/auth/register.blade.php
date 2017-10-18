@extends('layouts.app')

@section('content')
<div class="signup-wrapper">
    <!--Main Content -->
    <div class="main-content-wrapper">
        <div class="row">
            <div class="medium-3 columns medium-centered">
                <div class="main-first-content sign up">
                    <div class="auth-text-content">
                        Sign Up to enjoy more benefits
                    </div>
                    <form data-abide novalidate method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="medium-12 columns {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label>
                                    <div class="form-title">
                                        Full Name
                                    </div>
                                    <input type="text" placeholder="Full Name" name="name" value="{{ old('name') }}" required>
                                    <span class="form-error">
                                        This is required!
                                    </span>
                                    @if ($errors->has('name'))
                                    <span class="validate-error">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                    
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="medium-12 columns">
                                <label>
                                    <div class="form-title">
                                        Email Address
                                    </div>
                                    <input type="email" placeholder="Email Address" name="email" value="{{ old('email') }}" required>
                                    <span class="form-error">
                                        This is required!
                                    </span>
                                    @if ($errors->has('email'))
                                    <span class="validate-error">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="medium-12 columns">
                                <label>
                                    <div class="form-title">
                                        Password
                                    </div>
                                    <input type="password" placeholder="xxxxxxxxxx" name="password"required>
                                    <span class="form-error">
                                        This is required!
                                    </span>
                                     @if ($errors->has('password'))
                                    <span class="validate-error">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                    
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="medium-12 columns">
                                <label>
                                    <div class="form-title">
                                        Confirm Password
                                    </div>
                                    <input type="password" placeholder="xxxxxxxxxx" name="password_confirmation" required>
                                    <span class="form-error">
                                        This is required!
                                    </span>
                                     @if ($errors->has('password_confirmation'))
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    @endif
                                    
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="medium-9 columns medium-centered">
                                <button type="submit" class="button small expanded">Sign Up</button>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="medium-12 columns">
                            <a href="#authModal" class="auth-signup-link">Already have an account? Login</a>
                        </div>
                    </div>
                    <div class="row mt-20">
                        <div class="medium-9 columns medium-centered">
                            <button type="submit" class="button small expanded prof-btn">Sign Up With Prof</button>
                            <button type="submit" class="button small expanded fb">Sign Up With Facebook</button>
                            <button type="submit" class="button small expanded tw">Sign Up With Twitter</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
