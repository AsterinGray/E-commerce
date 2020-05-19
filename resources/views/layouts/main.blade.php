<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @yield('css')
</head>
<body>
    <nav class="navbar">
        <label for="hamburger">&#9776;</label>
        <input type="checkbox" id="hamburger">
        <span class="navbar-logo">
            <a href="{{ url('/') }}">SGuna</a>
        </span>
        <span class="navbar-link">
            <a href="{{ url('/shop') }}">Shop</a>
            <a href="{{ url('/about') }}">About</a>
        </span>
        <span class="navbar-button">
            <a href="{{ url('/checkout') }}">
                <img src="{{asset('asset/img/Hompage/cart-icon.svg')}}" alt="Cart-icon">
                <span>Cart</span>
            </a>
            <a href="{{ url('/login') }}">
                <img src="{{asset('asset/img/Hompage/user-icon.svg')}}" alt="User-icon">
                <span>Login|Regis</span>
            </a>
        </span>
    </nav>
    @yield('content')
    <footer>
        <div class="footer-content">
            <span>SGuna</span>
            <span>
                <p>Do you get any question ?</p>
                <p>Call us on Monday-Friday 10am-5pm</p>
                <p>Regarding our product <a href="tel:+628827068245">+62 882-7068-2425</a></p>
            </span>
        </div>
        <hr>
        <span>&copy; E-commerce Serba Guna</span>
    </footer>
    @yield('js')
</body>
</html>