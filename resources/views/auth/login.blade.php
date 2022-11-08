@extends('layouts.frontend.login.app')



@section('title')
<title>CommsClub-Login</title>
@endsection

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address')
                                }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password')
                                }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                        old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<section class="login_sectin456">
    <div class="container">
        <div class="login_cont45">
            <div class="logheader45">
                <a href="#" class="logo"><img src="{{asset('assets/images/logo.png')}}"></a>
                <ul class="logmenu45">
                    <li><a href="{{route('welcome')}}">Home</a></li>
                    <li><a href="#">Join</a></li>
                </ul>
            </div>
            <div class="logmidcont45">
                <h2 class="title44">Start for Freee</h2>
                <h3 class="maintitle44">Login</h3>
                <div class="alredy456">
                    <span>Don't Have an Account?</span>
                    <a href="{{route('register')}}"> Register</a>
                </div>
                <div class="log_form45">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="inputrow456">
                            <div class="inputfield56 ">
                                <div class="form-control">
                                    <input type="email" class=" @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" />
                                    <label>Email</label>
                                    <small class="fa fa-envelope"></small>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>
                        </div>
                        <div class="inputrow456">
                            <div class="inputfield56 ">
                                <div class="form-control">
                                    <input type="password" class=" @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="current-password" />
                                    <label>Password</label>
                                    <small class="fa fa-eye open" style="display: none"></small>
                                    <small class="fa fa-eye-slash close" style="display: block"></small>

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                        <div class="btnbox55">
                            <button class="btndflt58" type="submit" tabindex="0">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection