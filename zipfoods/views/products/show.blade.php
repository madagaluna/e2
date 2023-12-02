@extends('templates/master')

@section('title')
    {{ $product['name'] }}
@endsection

@section('content')
    @if ($reviewSaved)
        <div class='alert alert-success'>Thank you, your review was submitted!</div>
        <!-- using bootstrap method class alert and alert success -->
    @endif

    <!-- to put the error message at the top of the page -->
    @if ($app->errorsExist())
        <div class = 'alert alert-danger'>Please correct the errors below</div>
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
        <input type='hidden' name='product_id' value='{{ $product['id'] }}'>
        <input type='hidden' name='sku' value='{{ $product['sku'] }}'>
        <!-- stores hidden content, allows the sku to be injected into input -->
        <div class='form-group'>
            <label for='name'>Name</label>
            <input type='text' class='form-control' name='name' id='name' value='{{ $app->old('name') }}'>
            <!-- the value is keeping values filled in the form from a failed submission as is >$app->old('review') in the text area below< -->
            <!-- name attribute IDENTIFIES input (line 30)  -->
        </div>

        <div class='form-group'>
            <label for='review'>Review</label>
            <textarea name='review' id='review' class='form-control'>{{ $app->old('review') }}</textarea><!-- the names on the form are for sku, name (reviewer) amd review -->
            (Min: 200 characters)
        </div>

        <button type='submit' class='btn btn-primary'>Submit Review</button>
        <!-- submites to action - defined in routes (next step)  -->
    </form>

    @if ($app->errorsExist())
        <ul class='error alert alert-danger'>
            @foreach ($app->errors() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <a href='/products'>&larr; Return to all products</a>
@endsection
