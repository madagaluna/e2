@extends('templates/master')

@section('title')
    All Products
@endsection

@section('content')
    <h2>All Products</h2>

    <div id='product-index'>
        @foreach ($products as $product)
            <a class='product-link' href='/product?sku={{ $product['sku'] }}'>
                <div>
                    <div class=' product-name'>{{ $product['name'] }}
                    </div>
                    <img class='product-thumb' src="/images/products/{{ $product['sku'] }}.jpg">
                </div>
            </a>
        @endforeach
    </div>
    <!-- Exercise 2 Week 13: New Product Form -->

    <p> <a href='/new'> Would you like to add a product?</a> </p>
@endsection
