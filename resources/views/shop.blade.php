@extends('layouts.main')

@section('title','Shop')

@section('css')
    <link rel="stylesheet" href="{{asset('css/shop.css')}}">
@endsection

@section('content')
    <section class="description">
        <h1>Brings Your Need Home</h1>
        <p>We always support all your needs to make your life easier and happier.</p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Beatae eum aliquid laborum minus explicabo molestiae dolorem doloribus delectus! 
            Recusandae eaque harum ab quis est. Eum ad sequi vitae accusamus explicabo?
        </p>
    </section>
    <section class="product">
        <h1>Our Product</h1>
        <div class="product-layout">
            <div class="product-layout-card">
                <img src="{{asset('asset/img/Shop/2662397.jpg')}}" alt="product-image">
                <h2>Bottle</h2>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Nam pariatur aliquam iusto obcaecati optio facere repellat 
                    corporis delectus aspernatur ducimus!
                </p>
                <a href="{{ url('/product') }}" class="product-layout-card-button">
                    <div>IDR 50.000,-</div>
                    <div>See More Detail</div>
                </a>
            </div>
            <div class="product-layout-card">
                <img src="asset/img/Shop/2662397.jpg" alt="product-image">
                <h2>Bottle</h2>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Nam pariatur aliquam iusto obcaecati optio facere repellat 
                    corporis delectus aspernatur ducimus!
                </p>
                <a href="" class="product-layout-card-button">
                    <div>IDR 50.000,-</div>
                    <div>See More Detail</div>
                </a>
            </div>
            <div class="product-layout-card">
                <img src="asset/img/Shop/2662397.jpg" alt="product-image">
                <h2>Bottle</h2>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Nam pariatur aliquam iusto obcaecati optio facere repellat 
                    corporis delectus aspernatur ducimus!
                </p>
                <a href="" class="product-layout-card-button">
                    <div>IDR 50.000,-</div>
                    <div>See More Detail</div>
                </a>
            </div>
            <div class="product-layout-card">
                <img src="asset/img/Shop/2662397.jpg" alt="product-image">
                <h2>Bottle</h2>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Nam pariatur aliquam iusto obcaecati optio facere repellat 
                    corporis delectus aspernatur ducimus!
                </p>
                <a href="" class="product-layout-card-button">
                    <div>IDR 50.000,-</div>
                    <div>See More Detail</div>
                </a>
            </div>
            <div class="product-layout-card">
                <img src="asset/img/Shop/2662397.jpg" alt="product-image">
                <h2>Bottle</h2>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Nam pariatur aliquam iusto obcaecati optio facere repellat 
                    corporis delectus aspernatur ducimus!
                </p>
                <a href="" class="product-layout-card-button">
                    <div>IDR 50.000,-</div>
                    <div>See More Detail</div>
                </a>
            </div>
            <div class="product-layout-card">
                <img src="asset/img/Shop/2662397.jpg" alt="product-image">
                <h2>Bottle</h2>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Nam pariatur aliquam iusto obcaecati optio facere repellat 
                    corporis delectus aspernatur ducimus!
                </p>
                <a href="" class="product-layout-card-button">
                    <div>IDR 50.000,-</div>
                    <div>See More Detail</div>
                </a>
            </div>
            <div class="product-layout-card">
                <img src="asset/img/Shop/2662397.jpg" alt="product-image">
                <h2>Bottle</h2>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Nam pariatur aliquam iusto obcaecpati optio facere repellat 
                    corporis delectus aspernatur ducimus!
                </p>
                <a href="" class="product-layout-card-button">
                    <div>IDR 50.000,-</div>
                    <div>See More Detail</div>
                </a>
            </div>
            <div class="product-layout-card">
                <img src="asset/img/Shop/2662397.jpg" alt="product-image">
                <h2>Bottle</h2>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Nam pariatur aliquam iusto obcaecati optio facere repellat 
                    corporis delectus aspernatur ducimus!
                </p>
                <a href="" class="product-layout-card-button">
                    <div>IDR 50.000,-</div>
                    <div>See More Detail</div>
                </a>
            </div>
            <div class="product-layout-card">
                <img src="asset/img/Shop/2662397.jpg" alt="product-image">
                <h2>Bottle</h2>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Nam pariatur aliquam iusto obcaecati optio facere repellat 
                    corporis delectus aspernatur ducimus!
                </p>
                <a href="" class="product-layout-card-button">
                    <div>IDR 50.000,-</div>
                    <div>See More Detail</div>
                </a>
            </div>
    </section>
    <section class="conclusion">
        <h1>Shop The Product You Need</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Eaque architecto nihil quia doloremque nesciunt, 
            dolores impedit dicta accusamus fugiat quam enim natus 
            necessitatibus ea commodi recusandae itaque tempore optio voluptatum.
        </p>
    </section>
@endsection