@extends('templates/master')

@section('title')
All Products
@endsection

@section('content')

<h2>All Products</h2>

<div id='product-index'>
    @foreach ($products as $product)
    <a class='product-link' href='/product?sku={{ $product['sku'] }}'>
        {{-- This is how to append unique sku for each product and link to its own page via the query string - this is visible in view source--}}
        <div>
            <div class='product-name'>{{ $product['name'] }}</div>
            <img class='product-thumb' src="/images/products/{{ $product['sku'] }}.jpg">
        </div>
    </a>
    @endforeach
</div>

@endsection