@extends('layouts.app')

@section('content')
<div class="limiter">
    <div class="container-login100 ">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                    <img src="./admin/images/img-01.png" alt="IMG">
                </div>

            <div class="login100-form validate-form">
              <span class="login100-form-title">
                        WELCOME
                    </span>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                
                            </div>
                        </div>

                      <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                        <div class="text-center p-t-136">
                        <a class="txt2" href="/register">
                        </a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
