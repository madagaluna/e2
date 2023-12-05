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

    public function practice()  // TRYS TO CONNECT TO DATABASE a message "Access denied for user 'hes2b' @ local host means one of the creditials below is wrong.
    {
        # Set up all the variables we need to make a connection
        $host = $this->app->env('DB_HOST');
        $database = $this->app->env('DB_NAME');
        $username = $this->app->env('DB_USERNAME');
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

        try {  # attempt to run code.  If it throws an acception, you tell it what to do in the throw new.
            # Create a PDO instance representing a connection to a database
            $pdo = new \PDO($dsn, $username, $password, $options);  #creating the new PDO connection and pass all the details it needs
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }

      #  dump('Connection successful!');  # if all goes well

      ## example 1 USING THE CONNECTION (PDO) READ
      #Write a SQL query
        $sql = "SELECT * FROM products";

        # Execute the statement, getting the result set as a PDOStatement object
        # https://www.php.net/manual/en/pdo.query.php
        $statement = $pdo->query($sql);

        # https://www.php.net/manual/en/pdostatement.fetchall.php
        dump($statement->fetchAll());





        #Example 2 CREATE - insert data into table DON"T USE THIS - can input sql to harm database

        $sql = "INSERT INTO products (name, sku, description, price, available, weight, perishable) 
        VALUES (
            'Driscoll’s Strawberries', 
            'driscolls-strawberries',
            'Driscoll’s Strawberries are consistently the best, sweetest, juiciest strawberries available. This size is the best selling, as it is both convenient for completing a cherished family recipes and for preparing a quick snack straight from the fridge.',
            4.99, 
            0, 
            1,
            1)";

        $pdo->query($sql);

        #Example 3 CREATE USING PREPARED STATEMENT _ USE THIS CUZ IT"S MORE SECURE and OPtimized- insert data into table

        $sqlTemplate = "INSERT INTO products (name, sku, description, price, available, weight, perishable) 
        VALUES (:name, :sku, :description, :price, :available, :weight, :perishable)";

        $values = [
           // 'product_id' => '1',
            'name' => 'Driscoll’s Strawberries',  // inject input from form into database using a superglobal: 'name' => $POST'name' or -with framework - 'name' => $this ->app->input('name'),
            'sku' => 'driscolls-strawberries',
            'description' => 'Driscoll’s Strawberries are consistently the best, sweetest, juiciest strawberries available. This size is the best selling, as it is both convenient for completing a cherished family recipes and for preparing a quick snack straight from the fridge.',
            'sku' => 'driscolls-strawberries',
            'price' => 4.99,
            'available' => 0,
            'weight' => 1,
            'perishable' => 1,
        ];

        $statement = $pdo->prepare($sqlTemplate);
        $statement->execute($values);


    }

}
