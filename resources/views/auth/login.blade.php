@extends('layouts.app')
@section('form_content')

<div class="login_wrapper">
    <div class="login_div">
        <div class="login_heading">
            <span>Login</span>
        </div>
        <div class="login_form">
            <form action="">
                <div class="email_div">
                    <input type="email" name="" placeholder="Enter Your Email" id="">
                </div>
                <div class="password_div">
                    <input type="password" name="" placeholder="Enter Your Password" id="">
                </div>
                <button type="submit" class="login_submit_btn">Login</button>
            </form>
            <form action="">
                <button type="submit" class="facebook_login_btn">Login with Facebook</button>
            </form>
        </div>
    </div>
</div>

@endsection