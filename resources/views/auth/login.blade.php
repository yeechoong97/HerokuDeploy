@extends('layouts.default')
@section('content')

<link href="{{ asset('css/login.css') }}" rel="stylesheet">
<div class="login-clean">
<form method="POST" action="{{ route('login') }}">
                        @csrf
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><span class="fas fa-sign-in-alt"></span></div>
            <div class="form-group"><input id="username" class="form-control @error('username') is-invalid @enderror" type="text" name="username" placeholder="Username" required autofocus>           
                 @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group"><input id="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Login</button>
            <div class="form-group"><a href="{{ url('/register') }}" class="btn-danger btn-register btn-block remove-decoration" type="submit">Register</a>
        </form>
    </div>


@endsection
