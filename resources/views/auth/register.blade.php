@extends('layouts.app')
@section('form_content')

<div class="register_wrapper">
    <div class="register_div">
        <div class="register_heading">
            <span>Register</span>
        </div>
        <div class="register_form">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="name_div">
                    <input type="text" name="name" placeholder="Enter Your Name" id="">
                </div>
                <div class="email_div">
                    <input type="email" name="email" placeholder="Enter Your Email" id="">
                </div>
                <div class="password_div">
                    <input type="password" name="password" placeholder="Enter Your Password" id="">
                </div>
                <div class="password_div">
                    <input type="password" name="password_confirmation" placeholder="Confirm Your Password" id="">
                </div>
                <button type="submit" class="register_submit_btn">Register</button>
            </form>
            <form action="/login/facebook" id="login_with_facebook_form" method="GET">
                @csrf
            </form>
            <button type="submit" class="facebook_login_btn">Register with Facebook</button>
        </div>
        <div class="login_account_div">
            <a href="{{ route('login') }}" class="login_account">Login Account</a>
        </div>
    </div>
</div>

@endsection