@extends('templates/master')

@section('title')
    404 Page Not Found
@endsection

@section('content')
    <h2 test='product-not-found-header'>PRODUCT NOT FOUND</h2>
    <p>Sorry we were not able to find the product you were looking for.</p>


    <p>
        <a href='/products'>&larr; Check out our selection of products...</a>
    </p>
@endsection
