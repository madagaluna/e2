<?php

namespace App\Controllers; // to get out of this namespace and use the methods that is in the Apps namespace, you need a

use App\Products; // change the namespace to App\Products so you can import the new class from products

class ProductsController extends Controller
{
    public function index()
    {
        $productsObj = new Products($this->app->path('/database/products.json'));
        //dump($productsObj);
        $products = $productsObj->getAll();



        // dd($productsObj);


        return $this->app->view('products/index', ['products' => $products]); //got back to view
    }
}