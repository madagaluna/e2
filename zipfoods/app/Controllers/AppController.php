<?php

namespace App\Controllers;

class AppController extends Controller
    //{
    /**
     * This method is triggered by the route "/"
     */
    //    public function index()
    //   {
    //       $welcomes = ['Welcome', 'Aloha', 'Welkom', 'Bienvenidos', 'Bienvenu', 'Welkomma'];

    //      return $this->app->view('index', [  // two parameters, name of view file without directory, index om view ends with .blade.php - has syntax
    //         'welcome' => $welcomes[array_rand($welcomes)],  //$welcomes[array_rand($welcomes)
    //  'time' => date('g:ia') //returns the view
    //       ]);
    //   }
    //   public function contact()
    //   {
    //  return  "hello";  returns a string as a test  NOT WORKING
    //      return $this->app->view('contact', ['email' => 'support@zipfoods.com']);  // make contact file in views

    //   }
    //}

    // 3.  next:  views<index.blade - has content,

    // any data you want available to view needs to be explicitly passed
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {

        return $this->app->view('index');
    }

    public function contact()
    {
        return $this->app->view('contact', [
            'email' => 'support@zipfoods.com'
        ]);
    }

    // HOMEWORK
    public function about()
    {
        return $this->app->view(
            'about',
            ['about' => 'About'
            ]
        );
    }

    # src/Controllers/AppController.php

    public function saveReview()
    {
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

       // dump('Connection successful!');

       //EXAMPLE 1

       # Write a SQL query
        $sql = "SELECT * FROM reviews ORDER BY sku";

        // $sql = "INSERT INTO reviews (name, sku, review)
        // VALUES ('Bubba', "

        # Execute the statement, getting the result set as a PDOStatement object
        # https://www.php.net/manual/en/pdo.query.php
        $statement = $pdo->query($sql);

        # https://www.php.net/manual/en/pdostatement.fetchall.php
        dump($statement->fetchAll());


        //EXAMPLE 2 BEWARNED: every time it is refreshed, more berries are added to database

        $sql = "INSERT INTO products (name, sku, description, price, available, weight, perishable) 
    VALUES (
        'Driscoll’s Strawberries', 
        'driscolls-strawberries',
        'Driscoll’s Strawberries are consistently the best, sweetest, juiciest strawberries available. This size is the best selling, as it is both convenient for completing a cherished family recipes and for preparing a quick snack straight from the fridge.',
        4.99, 
        0, 
        1,
        1)";

        $pdo->query($sql);  // run statement via the query method

        //EXAMPLE #3 -adds two rows at atime
        //best to use this: security; data is coming from visitors - they can put SQL in and destroy the database so use this!!
        // is optimal
        //$sqlTemplate = "INSERT INTO products (name, sku, description, price, available, weight, perishable)
        // VALUES (:name, :sku, :description, :price, :available, :weight, :perishable)";

        //$values = [
        //'name' => 'Driscoll’s Strawberries',
        //'sku' => 'driscolls-strawberries',
        // 'description' => 'Driscoll’s Strawberries are consistently the best, sweetest, juiciest strawberries available. This size is the best selling, as it is both convenient for completing a cherished family recipes and for preparing a quick snack straight from the fridge.',
        // 'sku' => 'driscolls-strawberries',
        // 'price' => 4.99,
        // 'available' => 0,
        // 'weight' => 1,
        // 'perishable' => 1,


        $sqlTemplate = "INSERT INTO reviews (name, sku, review) 
        VALUES (:name, :sku, :review)";

        $VALUES = [
            'name' => 'Jill User',
            'sku' => 'driscolls-strawberries',
            'review' => 'Delicious and fresh! Would order again.',

    ];

        $statement = $pdo->prepare($sqlTemplate);
        $statement->execute($values);


    }
}