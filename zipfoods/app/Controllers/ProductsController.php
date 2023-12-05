<?php

namespace App\Controllers; // to get out of this namespace and use the methods that is in the Apps namespace, you need a

use App\Products; // change the namespace to App\Products so you can import the new class from products

class ProductsController extends Controller
{
    public function index()
    {
        // because we use this in each function,

        $products = $this->app->db()->all('products');


        return $this->app->view('products/index', ['products' => $products]); //got back to view
    }
    public function show()  //create route for this  // can use dump($_Get['sku']); cuz its a superglobal or can use:
    {

        $sku =  $this->app->param('sku');  // can pass a second argument, e.g. >param('sku', ..defalut value) - can do this with Get using null coelesing
        // because we use this in each function,


        // make sure the sku is not null - if it is, use redirect:

        if (is_null($sku)) {
            $this->app->redirect('/products');
        }


        // $product = $this->productsObj->getBySku($sku);// get individual object
        // dump($product);

        //switch to getting from db
        $productQuery = $this->app->db()->findByColumn('products', 'sku', '=', $sku);

        // EDGE CASE FOR 404 ERROR PAGE

        if (empty($productQuery)) {
            return $this->app->view('products/missing');
        } else {
            $product = $productQuery[0]; //returns single element , assumes unique skus
        }
        // dd($product);

        $reviewSaved = $this-> app->old('reviewSaved');  // using the framework method Old, looks for reviewSaved to FLASH (see redirect below) add this to the view (below)
        // Exercise 1 week 13: getting reviews from the database for show.blade.php
        $reviews = $this->app->db()->findByColumn('reviews', 'product_id', '=', $product['id']);

        return $this->app->view('products/show', [
            'product' => $product, //have to create show view to correspond with this
            'reviewSaved' => $reviewSaved,
            // Exercise 1 week 13: getting reviews from the database for show.blade.php
            'reviews' => $reviews, // Pass the reviews to the view
        ]);


        $reviews = $this->app->db()->findByColumn('reviews', 'product_id', '=', $product['id']);


    }




    public function saveReview()
    {
        $this->app->validate([
            'product_id' => 'required',
            'sku' => 'required',
            'name' => 'required', # Note how multiple validation rules are separated by a |
            'review' => 'required|minLength:100' # Note that some rules accept parameters, which follow a :
        ]);

        // if the above validation checks fail
        // the user is redirected back to where they came from (/product)
        // none of the code that follows will be executed



        // return'Save Review ...';  //collect form data and persist it to database (in past used superglobals $__GET/ e.g. dump($__POST['sku'])) but here we are using a method from the framework - using the INPUT method e.g. dump($this->app->input('sku'));  allows to provide default values as a second parameter ('sku', []) ... now set variables
        //  $id = ($this->app->input('id'));  // I'm not certain - it was added to the table as a PK, keep it hidden on show blade - wasn't part of assignment so no...??
        $product_id = ($this->app->input('product_id'));
        $sku = ($this->app->input('sku'));
        $name = ($this->app->input('name'));
        $review = ($this->app->input('review'));


        # todo: persist review to the database ...*/

        $this ->app->db()->insert('reviews', [
          'product_id' => $product_id,
          //'sku' => $sku,
          'name' => $name,
          'review' => $review
        ]);



        return $this->app->redirect('/product?sku=' . $sku, ['reviewSaved' => true]);
    }
}