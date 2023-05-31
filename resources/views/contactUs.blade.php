@extends('template.template')

@section('title', 'Contact Us - Rumah Hijau')

@section('content')

<style>
.signUpHere{
    color: green; 
    font-weight: bold; 
    text-decoration: none
}

.signUpHere:hover{
    color: red; 
    font-weight: bold; 
    text-decoration: none
}
</style>

<div style="margin: 8%; margin-left: 35%; margin-right: 35%; text-align: center; box-shadow: 5px 12px 12px gray">
    <img src="gambar/contohgambar.png" style="width: 100%">
    <input type="email" id="email" placeholder="Enter your name" style="width: 90%; height: 40px; margin: 3%">
    <div style="text-align: right; padding-right: 4%; font-size: 75%; font-weight: bold"><a href="#" style="text-decoration: none">Forgot Password?</a></div>
    <input type="password" id="password" placeholder="Enter your password" style="width: 90%; height: 40px; margin-bottom: 10%">
    <button style="padding: 3%; padding-right: 10%; padding-left: 10%; border: none; background-color: rgb(37, 209, 37); color: white; border-radius: 5px; box-shadow: 2px 4px 6px black">Login</button>
    <p style="text-align: right; font-size: 75%; padding: 2%">Don't have an Account? <a href="#" class="signUpHere">Sign up here</a></p>
</div>

@endsection