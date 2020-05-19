@extends('layouts.main')

@section('title','Product')

@section('css')
    <link rel="stylesheet" href="{{asset('css/product.css')}}">
@endsection

@section('content')
    <section class="product">
        <img src="asset/img/Product/bot.jpg" alt="product-icon">
        <div class="product-description">
            <h1>Bottle</h1>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                Nam pariatur aliquam iusto obcaecati optio facere repellat 
                corporis delectus aspernatur ducimus!
            </p>
            <div class="product-description-qty qty">
                <input type="button" value="-" class="button-minus" data-field="qty"></input>
                <input type="number" value="1" class="cart-item-qty-value" name="qty"></input>
                <input type="button" value="+" class="button-plus" data-field="qty"></input>
            </div>
            <p>IDR <span id="price">50.000</span>,-</p>
            <a href="{{ url('/cart') }}">
                Add to Cart
            </a>
        </div> 
    </section>
    <section class="review">
        <div class="review-head">
            <p>Review</p>
            <button onclick="review()">Write Review</button>
        </div>
        <form class="review-form">
            <p>Write a review</p>
            <div class="profile">
                <img src="asset/img/Hompage/user-icon.svg" alt="person-icon">
                <span>William Daniel</span>
            </div>
            <label>Review Title</label>
            <input type="text" placeholder="Give your review a title" maxlength="25" required>
            <label>Body of review</label>
            <textarea cols="30" rows="5" placeholder="Write your comment here" maxlength="600" required></textarea>
            <button type="submit">Submit Review</button>
            <hr>
        </form>
        <div class="review-card">
            <div class="profile">
                <img src="asset/img/Hompage/user-icon.svg" alt="person-icon">
                <p>William Daniel</p>
            </div>
            <div class="content">
                <h3>I Love this Bottle</h3>
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, 
                    sed diam nonumy eirmod tempor invidunt ut labore et dolore
                    magna aliquyam erat, sed diam voluptua. At veros eos et 
                    accusam et justo duo dolores et ea rebum, Stet clita kasd 
                    gubergren, no sea takimata sanctus est Lorem ipsum dolor sit 
                    amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, 
                    sed diam nonumy eirmod tempor invidunt ut labore et 
                    dolore magna aliquyam erat, sed diam voluptua.
                </p>
            </div>
        </div>
        <div class="review-card">
            <div class="profile">
                <img src="asset/img/Hompage/user-icon.svg" alt="person-icon">
                <p>William Daniel</p>
            </div>
            <div class="content">
                <h3>I Love this Bottle</h3>
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, 
                    sed diam nonumy eirmod tempor invidunt ut labore et dolore
                    magna aliquyam erat, sed diam voluptua. At veros eos et 
                    accusam et justo duo dolores et ea rebum, Stet clita kasd 
                    gubergren, no sea takimata sanctus est Lorem ipsum dolor sit 
                    amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, 
                    sed diam nonumy eirmod tempor invidunt ut labore et 
                    dolore magna aliquyam erat, sed diam voluptua.
                </p>
            </div>
        </div>
        <hr>
    </section>
@endsection

@section('js')
    <script src="{{asset('asset/lib/jquery.js')}}"></script>
    <script src="{{asset('js/shop.js')}}"></script>
@endsection