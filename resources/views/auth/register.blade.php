@extends('layout.template')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col s6 push-s3 center z-depth-5 ">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title text-darken-2"><h4>Register</h4></span>
                </div>
                <br><br><br>
                <div class="card-action">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col s8 push-s2">
                                <input placeholder="Name" id="name" type="text"
                                class="white-text @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s8 push-s2">
                                <input placeholder="Email" id="email" type="email" class="white-text @error('email') is-invalid @enderror" name="email" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s8 push-s2">
                                <input placeholder="Password" id="password" type="password" class="white-text" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s8 push-s2">
                                <input placeholder="Confirmation Password" id="password-confirm" type="password" class="white-text" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s8 push-s2">
                                <button type="submit" class="btn">
                                    {{ __('Register') }}
                                </button>

                                {{-- <a class="btn" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a> no need for now--}}
                            </div>
                        </div>
                    </form>
                </div>
                <br><br><br>
            </div>
        </div>
    </div>
</div>
<br>
@endsection
