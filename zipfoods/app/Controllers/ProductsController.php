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

        // make sure the sku is not null - if it is, use redirect:

        if(is_null($sku)) {
            $this->app->redirect('/products');
        }


        $product = $this->productsObj->getBySku($sku);// get individual object
        // dump($product);


        // EDGE CASE FOR 404 ERROR PAGE

        if(is_null($product)) {
            return $this->app->view('products/missing');

        }

        $reviewSaved = $this-> app->old('reviewSaved');  // using the framework method Old, looks for reviewSaved to FLASH (see redirect below) add this to the view (below)


        return $this->app->view('products/show', [
            'product' => $product, //have to create show view to correspond with this
            'reviewSaved' => $reviewSaved
        ]);
    }

    public function saveReview()
    {
        $this->app->validate([
          //  'id' => 'required',
            'sku' => 'required',
            'name' => 'required', # Note how multiple validation rules are separated by a |

            'review' => 'required|minLength:200' # Note that some rules accept paramaters, which follow a :
        ]);

        // if the above validation checks fail
        // the user is redirected back to where they came from (/product)
        // none of the code that follows will be executed



        // return'Save Review ...';  //collect form data and persist it to database (in past used superglobals $__GET/ e.g. dump($__POST['sku'])) but here we are using a method from the framework - using the INPUT method e.g. dump($this->app->input('sku'));  allows to provide default values as a second parameter ('sku', []) ... now set variables
        //  $id = ($this->app->input('id'));  // I'm not certain - it was added to the table as a PK, keep it hidden on show blade - wasn't part of assignment so no...??
        $sku = ($this->app->input('sku'));
        $name = ($this->app->input('name'));
        $review = ($this->app->input('review'));


        # todo: persist review to the database ...

       

        // from class
        // return $this->app->redirect('/product?sku=' . $sku, ['reviewSaved' => true]);    //  sends back to individual product page by invocate back to product, specify sku, get from hidden variable - include data to show that the review was accepted  FLASH - - shows for one page request

        return $this->app->redirect('/product?sku=' . $sku, ['reviewSaved' => true]);
    }

}