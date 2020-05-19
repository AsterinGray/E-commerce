@extends('layouts.main')

@section('title','Register')

@section('css')
    <link rel="stylesheet" href="{{asset('css/Login-Register.css')}}">
@endsection

@section('content')
    <div class="Register">
        <div class="Box">
            <h1>{{ __('REGISTER') }}</h1>
            <form method="POST" action="{{ action('PageController@regis') }}">
                @csrf
                <input type="text" placeholder="Name" class="@error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus required>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input type="text" placeholder="Username" class="@error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}" required>
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
                <input type="email" placeholder="Email" class="@error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" autocomplete="email" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input type="number" placeholder="Phone Number" class="@error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" required>
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input type="text" placeholder="Address" class="@error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') }}" required>
                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
                <input type="text" placeholder="Date of Birth" class="@error('dob') is-invalid @enderror" id="dob" name="dob" value="{{ old('dob') }}" onfocus="(this.type='date')" required>
                @error('dob')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input type="password" placeholder="Password" minlength="8" class="@error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input type="password" placeholder="Confirm Password" minlength="8" required>

                <p>Already have an account? <a href="{{ url('/login')}}">Click here</a></p>
                <button type="submit">REGISTER</button>
            </form>
        </div>
    </div>
@endsection
