@extends('layouts.app')

@section('content') 
<link rel="stylesheet" type="text/css" href="/css/util.css">
<link rel="stylesheet" type="text/css" href="/css/main.css">

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="/images/dlbox.svg" alt="IMG">
            </div>
            <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
               @csrf
                <span class="login100-form-title">会员注册</span>

                <div class="wrap-input100 validate-input" data-validate="Valid name is required">

                    <input class="input100"  type="text" name="name" value="" placeholder="name" required>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                 </div>
                <div class="wrap-input100 validate-input" data-validate="Valid email is required">

                    <input class="input100"  type="email" name="email" value="" placeholder="Email" required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Password is required">

                    <input class="input100" type="password" name="password" value="" placeholder="Password" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="password_confirmation is required">

                    <input id="password-confirm" class="input100" type="password" name="password_confirmation" value="" placeholder="password_confirmation" required>
                   
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="container-login100-form-btn"> 
                    <button  type="submit" class="login100-form-btn">注册</button>
                </div>
                <div class="text-center p-t-12">
                    <span class="txt1">忘记</span> 
                    @if (Route::has('password.request'))
                        <a class="txt2" href="{{ route('password.request') }}">
                        用户名 / 密码?
                        </a>
                    @endif
                </div>
                <div class="text-center p-t-136">
                    <a class="txt2" href="{{ route('login') }}">
                        已有账户 <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
                @if (count($errors) > 0)
                <div id="alert-danger" class="alert alert-danger">
                    <div class="container-fluid">
                        <div class="alert-icon">
                            <i class="material-icons">error_outline</i>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="material-icons">clear</i></span>
                        </button>
                        @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                        @endforeach
                    </div>
                </div>
                @endif
            </form>
        </div>
    </div>
</div>


@endsection