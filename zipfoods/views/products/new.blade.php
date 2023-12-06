    @extends('templates/master')

    @section('title')
        Add New Products
    @endsection

    @section('content')
        <!-- Exercise 2 Week 13: New Product Form -->
        <h2> Add New Products</h2>
    @endsection

    <form method='POST' id='new-product' action='/products/new'>
        <form method='POST' id='new-product' action='/products/add'>
            <h3>Add a New Product</h3>

            <div class='form-group'>
                <label for='new-name'>Name</label>
                <input type='text' class='form-control' name='new-name' id='new-name'
                    value='{{ $app->old('new-name') }}' required>
            </div>

            <div class='form-group'>
                <label for='new-sku'>SKU</label>
                <input type='text' class='form-control' name='new-sku' id='new-sku'
                    value='{{ $app->old('new-sku') }}' required>
            </div>

            <div class='form-group'>
                <label for='new-description'>Description</label>
                <textarea name='new-description' id='new-description' class='form-control' required>{{ $app->old('new-description') }}</textarea>
            </div>

            <div class='form-group'>
                <label for='new-price'>Price</label>
                <input type='number' step='0.01' class='form-control' name='new-price' id='new-price'
                    value='{{ $app->old('new-price') }}' required>
            </div>

            <div class='form-group'>
                <label for='new-available'>Available</label>
                <input type='number' class='form-control' name='new-available' id='new-available'
                    value='{{ $app->old('new-available') }}' required>
            </div>

            <div class='form-group'>
                <label for='new-weight'>Weight</label>
                <input type='number' step='0.01' class='form-control' name='new-weight' id='new-weight'
                    value='{{ $app->old('new-weight') }}' required>
            </div>

            <div class='form-group'>
                <label for='new-perishable'>Perishable</label>
                <select name='new-perishable' id='new-perishable' class='form-control' required>
                    <option value='1' {{ $app->old('new-perishable') == 1 ? 'selected' : '' }}>Yes</option>
                    <option value='0' {{ $app->old('new-perishable') == 0 ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <div class='form-group'>
                <!--https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/file -->
                <label for='new-image'>Product Image:</label>
                <input type='file' name='new-image' id='new-image' accept='image/png, image/jpeg' required>
            </div>

            <button type='submit' class='btn btn-primary'>Add Product</button>
        </form>
