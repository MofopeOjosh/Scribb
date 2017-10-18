@extends('layouts.app')

@section('content')


<div class="forgotpassword-wrapper">
    <!--Main Content -->
    <div class="main-content-wrapper">
        <div class="row">
            <div class="medium-4 columns medium-centered">
                <div class="main-first-content">
                    <div class="auth-text-content">
                        It happens to the best of us, no worries.
                    </div>
                    @if (session('status'))
                        <div class="message">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form data-abide novalidate method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="medium-12 columns">
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
                            <div class="medium-9 columns medium-centered">
                                <button type="submit" class="button small expanded">Recover</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection