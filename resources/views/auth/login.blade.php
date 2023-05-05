@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<style>
		body {
			background-color: #F8F8F8;
		}

		h1 {
			font-size: 28px;
			font-weight: bold;
			text-align: center;
			margin-top: 40px;
			margin-bottom: 40px;
		}

		form {
			background-color: #FFFFFF;
			border: 1px solid #CCCCCC;
			border-radius: 5px;
			padding: 30px;
			margin-top: 30px;
			margin-bottom: 30px;
			box-shadow: 0px 0px 5px 0px #CCCCCC;
		}

		form label {
			display: block;
			font-size: 16px;
			font-weight: bold;
			margin-bottom: 10px;
			color: #444444;
		}

		form input[type="email"],
		form input[type="password"] {
			width: 100%;
			padding: 10px;
			border: 1px solid #CCCCCC;
			border-radius: 5px;
			margin-bottom: 20px;
			font-size: 16px;
			color: #444444;
		}

		form select {
			width: 100%;
			padding: 10px;
			border: 1px solid #CCCCCC;
			border-radius: 5px;
			margin-bottom: 20px;
			font-size: 16px;
			color: #444444;
		}

		form input[type="checkbox"] {
			margin-right: 10px;
		}

		form button[type="submit"] {
			background-color: #444444;
			color: #FFFFFF;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			font-weight: bold;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		form button[type="submit"]:hover {
			background-color: #333333;
		}

		form a {
			color: #444444;
			text-decoration: none;
			margin-left: 10px;
		}

		form a:hover {
			color: #333333;
		}
	</style>
</head>
<body>
	<h1>Sign In</h1>

	<form method="POST" action="{{ route('login') }}">
		@csrf

		<label for="email">Email Address</label>
		<input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
	@error('email')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
    @enderror

		<label for="password">Password</label>
		<input id="password" type="password" name="password" required>
	@error('password')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
    @enderror
	
		<label for="user_type">Login as</label>
		<select id="user_type" name="user_type" required>
			<option value="jobseeker">Job Seeker</option>
			<option value="employer">Employer</option>
		</select>

		<div>
			<input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
			<label for="remember">Remember Me</label>
		</div>

		<button type="submit">Login</button>
		@if (Route::has('password.request'))
			<a href="{{ route('password.request') }}">Forgot Your Password?</a>
		@endif

@endsection

