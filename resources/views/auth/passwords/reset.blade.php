@extends('layouts.app')

@section('content')
<div class="updatepassword-wrapper">
	<!--Main Content -->
	<div class="main-content-wrapper">
		<div class="row">
			<div class="medium-4 columns medium-centered">
				<div class="main-first-content">
					<div class="auth-text-content">
						Update your password
					</div>
					<form data-abide novalidate method="POST" action="{{ url('/password/reset') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

						<div class="row">
                            <div class="medium-12 columns">
                                <label>
                                    <div class="form-title">
                                        Email Address
                                    </div>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" readonly>
                                    
                                    <span class="form-error">
                                        Password is required!
                                    </span>
                                    @if ($errors->has('email'))
                                        <span class="validate-error">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </label>
                            </div>
							<div class="medium-12 columns">
								<label>
									<div class="form-title">
										New Password
									</div>
									<input type="password" name="password" placeholder="********" required>
                                    <span class="form-error">
										Password is required!
                                    </span>
                                    @if ($errors->has('password'))
                                        <span class="validate-error">
                                            <strong>{{ $errors->first('password') }}</strong>
                                	   </span>
                                    @endif
								</label>
							</div>
							<div class="medium-12 columns {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
								<label>
									<div class="form-title">
										Confirm New Password
									</div>
									<input type="password" placeholder="********" name="password_confirmation" required>
                                    <span class="form-error">
										Passwords are supposed to match!
                                    </span>
                                    @if ($errors->has('password_confirmation'))
                                        <span class="validate-error">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                	   </span>
                                    @endif
								</label>
							</div>
						</div>
						<div class="row mt-10">
							<div class="medium-9 columns medium-centered">
								<button type="submit" class="button small expanded">Update</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection