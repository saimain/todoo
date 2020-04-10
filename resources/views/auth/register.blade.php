@extends('layouts.app')
@section('form_content')

<div class="register_wrapper">
    <div class="register_div">
        <div class="register_heading">
            <span>Register</span>
        </div>
        <div class="register_form">
            <form action="">
                <div class="name_div">
                    <input type="text" name="" placeholder="Enter Your Name" id="">
                </div>
                <div class="email_div">
                    <input type="email" name="" placeholder="Enter Your Email" id="">
                </div>
                <div class="password_div">
                    <input type="password" name="" placeholder="Enter Your Password" id="">
                </div>
                <div class="password_div">
                    <input type="password" name="" placeholder="Confirm Your Password" id="">
                </div>
                <button type="submit" class="register_submit_btn">Register</button>
            </form>
            <form action="">
                <button type="submit" class="facebook_register_btn">Register with Facebook</button>
            </form>
        </div>
    </div>
</div>

@endsection