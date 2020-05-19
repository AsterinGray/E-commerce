@extends('layouts.main')

@section('title', 'SGuna')

@section('css')
    <link rel="stylesheet" href="{{asset('css/checkout.css')}}">
@endsection

@section('content')
<section class="admin">
    <table class="table-content">
        <tr>
            <th>Name</th>
            <th>Image</th>
            <th>Description</th>
            <th>Price</th>
            <th>ID</th> 
            <th>Action</th>
        </tr>
        <tr>
            <td class="name">Bottle</td>
            <td><img src="{{asset('asset/img/Product/bot.jpg')}}" alt="product-bot"></td>
            <td>
                <p>
                    Lorem ipsum color sit amet, consentetur sadipscing sed diam
                    nonumy eirmod tempor invidunt ut, labore et dolore magna aliquyam
                    erat, sed diam voliptua.
                </p>
            </td>
            <td>50.000</td>
            <td>B001</td>
            <td>
                <button class="del">
                    Delete
                </button>
                <button class="edit">
                    Edit
                </button>
            </td>
        </tr>
    </table>
    <section class="add">
        <div class="add-head">
            Add New Item
        </div>
        <form class="add-content">
            <input type="text" placeholder="Product Name"></input>
            <input type="text" placeholder="Product Image"></input>
            <label for="image">
                <img src="" alt="Image Preview"  id="image-preview">
            </label>
            <input type="file" id="image">
            <textarea placeholder="Product Description" ></textarea>
            <input type="text" placeholder="Product ID"></input>
            <input type="text" placeholder="Product Price"></input>
            <button type="submit" class="item">Add Item</button>
        </div>
    </section>
</section>
@endsection

@section('js')
@endsection