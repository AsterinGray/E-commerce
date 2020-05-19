@extends('layouts.main')

@section('title','Login')

@section('css')
    <link rel="stylesheet" href="{{asset('css/Login-Register.css')}}">
@endsection

@section('content')
    <section class="Login">
        <div class="Box">
            <h1>LOGIN</h1>
            <form action="GET" action="{{ action('PageController@login') }}">
                @csrf
                <input type="text" placeholder="Username" class="@error('username') is-invalid @enderror" id="username" name="username" required>
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input type="password" placeholder="Password" minlength="8" class="@error('password') is-invalid @enderror" id="password" name="dob" value="{{ old('password') }}" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror<br>
                
                <p>Don't have any account yet? <a href="{{ url('/register') }}">click here</a></p>
                <button type="submit">LOGIN</button>
            </form>
        </div>
    </section>
@endsection