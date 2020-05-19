@extends('layouts.main')

@section('title', 'SGuna')

@section('css')
    <link rel="stylesheet" href="{{asset('asset/lib/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('asset/lib/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection

@section('content')
<section class="landing">
        <div class="landing-content">
            <p>Best day come when you get what you need</p>
            <p>So do you have what you need in daily basis ?</p>
            <a href="{{ url('/shop') }}">
                <div class="landing-content-button">
                    Shop Your Need
                </div>
            </a>
        </div>
        <img src="{{asset('asset/img/Hompage/shopping-illustration.svg')}}" alt="Web-Shopping-Illustration">
    </section>
    <section class="why">
        <h1>Why You Should Buy Here</h1>
        <div class="why-content">
            <div class="why-content-box">
                <img src="{{asset('asset/img/Hompage/Good-quality-icon.svg')}}">
                <div class="why-content-box-text">
                    <p>Good Quality</p>
                    <p>We sell only great quality product</p>
                </div>
            </div>
            <div class="why-content-box">
                <img src="{{asset('asset/img/Hompage/quick-delivery-icon.svg')}}">
                <div class="why-content-box-text">
                    <p>Fast Delivery</p>
                    <p>Our product will delivered quickly</p>
                </div>
            </div>
            <div class="why-content-box">
                <img src="{{asset('asset/img/Hompage/Cheap-icon.svg')}}">
                <div class="why-content-box-text">
                    <p>Budget Friendly</p>
                    <p>We keep our product budget friendly</p>
                </div>
            </div>
        </div>
    </section>
    <section class="quality">
        <p>SGuna Give Top Quality</p>
        <p>We always try to provide customer the top quality of product with a long lasting usage but with budget friendly</p>
        <a href="{{ url('/shop') }}">
            Shop Now
        </a>
        <img src="{{asset('asset/img/Hompage/stock-icon.svg')}}" alt="Stock-Quality">
    </section>
    <section class="customer">
        <h1>Our Happy Customer</h1>
        <div class="customer-carousel">
            <div class="customer-carousel-item">
                <div class="customer-carousel-item-profile">
                    <img src="{{asset('asset/img/Hompage/user-icon.svg')}}" alt="user icon">
                    <p>Imelda Lam</p>
                </div>
                <div class="customer-carousel-item-text">
                    <p>I Found What I Wanted</p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Veniam optio sit quas suscipit labore numquam impedit 
                        rem est nostrum voluptatum, quam modi, 
                        sequi repudiandae expedita voluptatibus neque architecto molestias et.
                    </p>
                </div>
            </div>
            <div class="customer-carousel-item">
                <div class="customer-carousel-item-profile">
                    <img src="{{asset('asset/img/Hompage/user-icon.svg')}}" alt="user icon">
                    <p>Imelda Lam</p>
                </div>
                <div class="customer-carousel-item-text">
                    <p>I Found What I Wanted</p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Veniam optio sit quas suscipit labore numquam impedit 
                        rem est nostrum voluptatum, quam modi, 
                        sequi repudiandae expedita voluptatibus neque architecto molestias et.
                    </p>
                </div>
            </div>
            <div class="customer-carousel-item">
                <div class="customer-carousel-item-profile">
                    <img src="{{asset('asset/img/Hompage/user-icon.svg')}}" alt="user icon">
                    <p>Imelda Lam</p>
                </div>
                <div class="customer-carousel-item-text">
                    <p>I Found What I Wanted</p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Veniam optio sit quas suscipit labore numquam impedit 
                        rem est nostrum voluptatum, quam modi, 
                        sequi repudiandae expedita voluptatibus neque architecto molestias et.
                    </p>
                </div>
            </div>
            <div class="customer-carousel-item">
                <div class="customer-carousel-item-profile">
                    <img src="{{asset('asset/img/Hompage/user-icon.svg')}}" alt="user icon">
                    <p>Imelda Lam</p>
                </div>
                <div class="customer-carousel-item-text">
                    <p>I Found What I Wanted</p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Veniam optio sit quas suscipit labore numquam impedit 
                        rem est nostrum voluptatum, quam modi, 
                        sequi repudiandae expedita voluptatibus neque architecto molestias et.
                    </p>
                </div>
            </div>
            <div class="customer-carousel-item">
                <div class="customer-carousel-item-profile">
                    <img src="{{asset('asset/img/Hompage/user-icon.svg')}}" alt="user icon">
                    <p>Imelda Lam</p>
                </div>
                <div class="customer-carousel-item-text">
                    <p>I Found What I Wanted</p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Veniam optio sit quas suscipit labore numquam impedit 
                        rem est nostrum voluptatum, quam modi, 
                        sequi repudiandae expedita voluptatibus neque architecto molestias et.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{asset('asset/lib/jquery.js')}}"></script>
    <script src="{{asset('asset/lib/slick/slick.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
@endsection