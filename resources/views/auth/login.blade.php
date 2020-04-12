@extends('layouts.app')
@section('form_content')

<div class="login_wrapper">
    <div class="login_div">
        <div class="login_heading">
            <span>Login</span>
        </div>
        <div class="login_form">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="email_div">
                    <input type="email" name="email" placeholder="Enter Your Email" id="">
                </div>
                <div class="password_div">
                    <input type="password" name="password" placeholder="Enter Your Password" id="">
                </div>
                <button type="submit" class="login_submit_btn">Login</button>
            </form>
            <form action="/login/facebook" id="login_with_facebook_form" method="GET">
                @csrf
            </form>
            <button type="submit" class="facebook_login_btn">Login with Facebook</button>

        </div>
        <div class="create_account_div">
            <a href="{{ route('register') }}" class="create_account">Create Account</a>
        </div>
    </div>
</div>

@endsection