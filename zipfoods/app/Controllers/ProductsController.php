<?php

namespace App\Controllers; // to get out of this namespace and use the methods that is in the Apps namespace, you need a

use App\Products; // change the namespace to App\Products so you can import the new class from products

class ProductsController extends Controller
{
    // public constructs are called for each new instance before methods


    private $productsObj;

    # Create a construct method to set up a productsObj property that can be used across different methods
    public function __construct($app)
    {
        parent::__construct($app);

        $this->productsObj = new Products($this->app->path('database/products.json'));
    }

    public function index()
    {
        // because we use this in each function,
        // $productsObj = new Products($this->app->path('/database/products.json'));
        //put it in a shared construct // get products object
        //dump($productsObj);
        $products = $this->productsObj->getAll();

        // dd($productsObj);

        return $this->app->view('products/index', ['products' => $products]); //got back to view
    }
    public function show()  //create route for this  // can use dump($_Get['sku']); cuz its a superglobal or can use:
    {

        $sku =  $this->app->param('sku');  // can pass a second argument, e.g. >param('sku', ..defalut value) - can do this with Get using null coelesing
        // because we use this in each function,
        // $productsObj = new Products($this->app->path('/database/products.json'));
        //put it in a shared construct // get products object
        $product = $this->productsObj->getBySku($sku);// get individual object
        // dump($product);


        // EDGE CASE FOR 404 ERROR PAGE

        if(is_null($product)) {
            return $this->app->view('products/missing');

        }


        return $this->app->view('products/show', ['product' => $product]); //have to create show view to correspond with this
    }

}