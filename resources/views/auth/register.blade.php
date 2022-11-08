{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address')
                                }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm
                                Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


@extends('layouts.frontend.login.app')

@section('title')
<title>CommsClub-Register</title>
@endsection

@section('content')
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
                <h3 class="maintitle44">Create new account</h3>
                <div class="alredy456">
                    <span>Already a Member?</span>
                    <a href="{{route('login')}}"> Log In</a>
                </div>
                <div class="log_form45">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="inputrow456">
                            <div class="inputfield56 dbl">
                                <div class="form-control">
                                    <input type="text" class=" @error('first_name') is-invalid @enderror"
                                        name="first_name" value="{{ old('first_name') }}" required
                                        autocomplete="first_name" />
                                    <label>First Name</label>
                                    <small class=""><img src="{{asset('assets/images/card44.png')}}"></small>
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-control">
                                    <input type="text" class=" @error('last_name') is-invalid @enderror"
                                        name="last_name" value="{{ old('last_name') }}" required
                                        autocomplete="last_name" />
                                    <label>Last Name</label>
                                    <small class=""><img src="{{asset('assets/images/card44.png')}}"></small>
                                    @error('last_name')
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
                                        name="password" required autocomplete="new-password" />
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
                        <div class="btnbox55">
                            <button class="btndflt58" tabindex="0" type="submit">Create Account</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection