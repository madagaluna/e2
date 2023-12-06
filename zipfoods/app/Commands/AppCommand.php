<?php

namespace App\Commands;

use App\Products;
use Faker\Factory;
use App\NewProducts;

class AppCommand extends Command
{
    # Add a use statement at the top of the file so we can use the Products class use App\Products;
    public function test()
    {
        dump('It works! You invoked your first command. :0');
    }

    public function fresh()
    {
        $this->migrate();
        $this->seedProducts();
        $this->seedReviews();
        $this->newProducts();
    }

    public function migrate()
    {
        # Note that the *createTable* method automatically adds an auto-incrementing
        # primary key column named `id` so you don’t have to include that in your array of columns.
        $this->app->db()->createTable('products', [
            'name' => 'varchar(255)',
            'sku' => 'varchar(255)',
            'description' => 'text',
            'price' => 'decimal(10,2)',
            'available' => 'int',
            'weight' => 'decimal(10,2)',
            'perishable' => 'tinyint(1)'
        ]);

        $this->app->db()->createTable('reviews', [
            'product_id' => 'int',
            'name' => 'varchar(255)',
            'review' => 'text',
        ]);

        dump('Migration complete; check the database for your new tables.');
    }

    public function seedProducts()
    {
        $products = new Products($this->app->path('database/products.json'));

        foreach ($products->getAll() as $product) {

            # We’re not tracking `categories`
            unset($product['categories']);

            # Don’t need ID - that will get automatically added - it was hard coded in json
            unset($product['id']);

            # Convert perishable boolean to int recording t/f as 1, 0 in products
            $product['perishable'] = $product['perishable'] ? 1 : 0;

            # Insert product
            $this->app->db()->insert('products', $product);
        }
        dump('products table has been seeded');
    }
    # Add a use statement at the top of the file so we can use the Faker\Factory class
    #use Faker\Factory;

    public function seedReviews()
    {
        # Instantiate a new instance of the Faker\Factory class
        $faker = Factory::create();

        # Use a loop to create 5 reviews
        for ($i = 0; $i < 5; $i++) {

            # Set up a review
            $review = [
                'name' => $faker->name,
                'review' => $faker->sentences(3, true),
                'product_id' => ($i % 2 == 0) ? 1 : 2, # Alternate between products 1 and 2 - could have written a query to run a random product
            ];

            # Insert the review
            $this->app->db()->insert('reviews', $review);
        }
        dump('reviews table has been seeded');
    }

    /* Exercise 2 wk 13 */
    public function newProducts()
    {
        # Note that the *createTable* method automatically adds an auto-incrementing
        # primary key column named `id` so you don’t have to include that in your array of columns.
        $this->app->db()->createTable('newProducts', [
            'name' => 'varchar(255)',
            'sku' => 'varchar(255)',
            'description' => 'text',
            'price' => 'decimal(10,2)',
            'available' => 'int',
            'weight' => 'decimal(10,2)',
            'perishable' => 'tinyint(1)'
        ]);
    }

    public function seedNewProducts() // Update the method name
    {
        $newProducts = new NewProducts($this->app->path('database/products.json')); // Update the class name

        foreach ($newProducts->getAll() as $newProduct) {
            // ...

            # Insert product
            $this->app->db()->insert('newProducts', $newProduct);
        }
        dump('newProducts table has been seeded');
    }
}