@extends('templates/master')

@section('title')
    {{ $product['name'] }}
@endsection

@section('content')
    @if ($reviewSaved)
        <div class='alert alert-success'>Thank you, your review was submitted!</div>
        <!-- using bootstrap method class alert and alert success -->
    @endif



    <div id='product-show'>
        <h2>{{ $product['name'] }}</h2>

        <img src='/images/products/{{ $product['sku'] }}.jpg' class='product-thumb'>

        <p class='product-description'>
            {{ $product['description'] }}
        </p>

        <div class='product-price'>${{ $product['price'] }}</div>
    </div>

    <form method='POST' id='product-review' action='/products/save-review'>
        <!-- action - the form '/products/save-review'doesn't exist yet -->
        <h3>Review {{ $product['name'] }}</h3>
        <input type='hidden' name='sku' value='{{ $product['sku'] }}'>
        <!-- stores hidden content, allows the sku to be injected into input -->
        <div class='form-group'>
            <label for='name'>Name</label>
            <input type='text' class='form-control' name='name' id='name'>
            <!-- name attribute IDENTIFIES input (line 30)  -->
        </div>

        <div class='form-group'>
            <label for='review'>Review</label>
            <textarea name='review' id='review' class='form-control'></textarea> <!-- the names on the form are for sku, name (reviewer) amd review -->
        </div>

        <button type='submit' class='btn btn-primary'>Submit Review</button>
        <!-- submites to action - defined in routes (next step)  -->
    </form>

    <a href='/products'>&larr; Return to all products</a>
@endsection
