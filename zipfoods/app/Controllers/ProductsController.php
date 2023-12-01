<?php

namespace App\Controllers; // to get out of this namespace and use the methods that is in the Apps namespace, you need a

use App\Products; // change the namespace to App\Products so you can import the new class from products

class ProductsController extends Controller
{
    // public constructs are called for each new instance before methods


    //   private $productsObj; no longer using productsObj because everything is coming from the database

    # Create a construct method to set up a productsObj property that can be used across different methods
    //   public function __construct($app)  no longer need this  because it only invokes the parent class and it's being over written
    //   {
    //       parent::__construct($app);

    //  $this->productsObj = new Products($this->app->path('database/products.json')); //- used this when we were getting products from .json file

    //   }

    public function index()
    {
        // because we use this in each function,
        // $productsObj = new Products($this->app->path('/database/products.json'));
        //put it in a shared construct // get products object
        //dump($productsObj);
        // $products = $this->productsObj->getAll();

        $products = $this->app->db()->all('products');

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


        # todo: persist review to the database ...*/

        $this ->app->db()->insert('reviews', [
          'sku' => $sku,
          'name' => $name,
          'review' => $review
        ]);







        /*
        # Set up all the variables we need to make a connection
        $host = $this->app->env('DB_HOST'); // where to find the database
        $database = $this->app->env('DB_NAME'); // make sure this is updated in the env file to the name of the database (FINAL PROJECT ALERT!!)
        $username = $this->app->env('DB_USERNAME'); // myuser name and password hes2b hiworld - the values are not hard coded - coming from environment (.env file: holds settings and configurations that may vary e.g. databases - production database wouldn't have this)
        $password = $this->app->env('DB_PASSWORD');

        # DSN (Data Source Name) string
        # contains the information required to connect to the database
        $dsn = "mysql:host=$host;dbname=$database;charset=utf8mb4";

        # Driver-specific connection options
        $options = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {  // try catch: attempt to run code and if it fails, we dictate what happens
            # Create a PDO instance representing a connection to a database
            $pdo = new \PDO($dsn, $username, $password, $options);  // creating a new PDO connection - new class
            // new code
            $sql = "SELECT * FROM reviews";
            $statement = $pdo->query($sql);
            $reviews = $statement->fetchall();

            dump($reviews);
            // new code end


        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());  // stops the execution if there is an error - check env file and steps makes sure all the info is correct
        }

        $sqlTemplate = "INSERT INTO reviews (name, sku, review)
            VALUES (:name, :sku, :review)";

        $VALUES = [
            'name' => $name,
            'sku' => $sku,
            'review' => $review,
        ];



        $statement = $pdo->prepare($sqlTemplate);
        $statement->execute($VALUES); */

        // from class
        // return $this->app->redirect('/product?sku=' . $sku, ['reviewSaved' => true]);    //  sends back to individual product page by invocate back to product, specify sku, get from hidden variable - include data to show that the review was accepted  FLASH - - shows for one page request

        // redo persisting to the database using framework method



        return $this->app->redirect('/product?sku=' . $sku, ['reviewSaved' => true]);
    }
}