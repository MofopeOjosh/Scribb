@extends('layouts.pagesliding')

@section('display')
            <div class="pageslidin-title">
			Authentication
		    </div>
	   </div>

	<div class="pageslidin-content-wrapper">
		<div class="row">
			<div class="medium-3 columns medium-centered">
				<div class="main-first-content login">
					<div class="auth-text-content">
						Login to enjoy more benefits
					</div>
					<form data-abide novalidaterole="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
						<div class="row">
							<div class="medium-12 columns {{ $errors->has('email') ? ' has-error' : '' }}">
								<label>
									<div class="form-title">
										Email Address
									</div>
									<input type="email" placeholder="Email Address" name="email" value="{{ old('email') }}" required>
									<span class="form-error">
										An email address is required!
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
							<div class="medium-12 columns {{ $errors->has('password') ? ' has-error' : '' }}">
								<label>
									<div class="form-title">
										Password
									</div>
									<input type="password" placeholder="xxxxxxxxxx" name="password" required>
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
							<div class="medium-6 columns ">
								<a href="{{ url('/password/reset') }}" class="auth-forgot-link">Forgot Password?</a>
							</div>
							<div class="medium-6 columns text-right">
    						<input id="rememberMe"type="checkbox"><label for="rememberMe" class="auth-forgot-link" >Remember Me</label>
							</div>
						</div>
						<div class="row">
							<div class="medium-9 columns medium-centered">
								<button type="submit" class="button small expanded mt-20">Login</button>
							</div>
						</div>
					</form>
					<div class="row">
						<div class="medium-12 columns">
							<a href="signup" class="auth-signup-link">Don't have an account? Sign Up</a>
						</div>
					</div>
					<div class="row">
						<div class="medium-9 columns medium-centered">
							<button type="submit" class="button small expanded prof-btn mt-20">Login With Prof</button>
							<button type="submit" class="button small expanded fb">Login With Facebook</button>
							<button type="submit" class="button small expanded tw">Login With Twitter</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
