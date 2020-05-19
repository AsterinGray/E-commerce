@extends('layouts.main')

@section('title', 'SGuna')

@section('css')
    <link rel="stylesheet" href="{{asset('css/checkout.css')}}">
@endsection

@section('content')
<section class="content">
    <div class="cart">
        <div class="cart-head">
            <img src="{{asset('asset/img/Hompage/cart-icon.svg')}}" alt="cart-icon">
            <p>Cart</p>
        </div>
        <div class="cart-item">
            <img src="{{asset('asset/img/Shop/2662397.jpg')}}" alt="dummy-img">
            <div class="cart-item-description">
                <h1>Bottle</h1>
                <p>IDR 50.000,-</p>
            </div>
            <div class="cart-item-qty qty">
                <input type="button" value="-" class="button-minus" data-field="qty"></input>
                <input type="number" value="1" class="cart-item-qty-value" name="qty"></input>
                <input type="button" value="+" class="button-plus" data-field="qty"></input>
            </div>
        </div>
    </div>
    <div class="checkout">
        <div class="checkout-head">
            <p>Checkout</p>
        </div>
        <div class="checkout-content">
            <select>
                <option disabled selected>Select your payment method</option>
                <option value="">Card</option>
                <option value="">Card</option>
                <option value="">Card</option>
            </select>
            <select>
                <option disabled selected>Select your delivery service</option>
                <option value="">Card</option>
                <option value="">Car</option>
                <option value="">Car</option>
            </select>
            <button>Checkout</button>
        </div>
    </div>
</section>
@endsection

@section('js')
    <script src="{{asset('asset/lib/jquery.js')}}"></script>
    <script src="{{asset('js/shop.js')}}"></script>
@endsection