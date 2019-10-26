@extends('layout.template')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col s6 push-s3 center z-depth-5 ">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title text-darken-2"><h4>Login</h4></span>
                </div>
                <br><br><br>
                <div class="card-action">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col s8 push-s2">
                                <input placeholder="Name or Email" id="login" type="text"
                                class="white-text"
                                name="login" value="{{ old('name') ?: old('email') }}" required autofocus>
                                @if ($errors->has('name') || $errors->has('email'))
                                    <span class="red white-text">
                                        <strong>{{ $errors->first('name') ?: $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s8 push-s2">
                                <input placeholder="Password" id="password" type="password" class="white-text" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="red white-text">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s8 push-s2">
                                <button type="submit" class="btn">
                                    {{ __('Login') }}
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
