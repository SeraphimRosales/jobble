@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Create An Account</title>
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

		form input{
			width: 100%;
			padding: 10px;
			border: 1px solid #CCCCCC;
			border-radius: 5px;
			margin-bottom: 20px;
			font-size: 16px;
			color: #444444;
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
    <h1> Create An Account as Job Seeker</h1>
    <form method="POST" action="{{ route('register.jobseeker') }}">
    @csrf

    <label for="name">Name</label>
    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>   
    @error('name')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
    @enderror

    <label for="email">Email</label>
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    @error('email')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
    @enderror

    <label for="password">Password</label>
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    @error('password')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
    @enderror

    <label for="password-confirm">Confirm Password</label>
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

    <br>

	<input type="hidden" name="user_type" value="jobseeker">
    <button type="submit">Register</button>
    
    <br>
    <br>

                        <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
                        <p>Are you an Employer? <a href="{{ route('register') }}">Register here</a></p>

</form>

@endsection
