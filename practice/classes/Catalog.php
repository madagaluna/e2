<?php

class Catalog
{
    # Properties
    public $products = [];  #prefix with visibility keyword public in this case. private, protected are other options - can use public within and outside context of class

    # Methods
    public function __construct(string $dataSource)  #load the data from the json file - aka MAGIC METHODD - Auto-invoked whenever construct is used
    ## double underscore before construct
## $dataSource is a parameter in the construct that makes the class adaptable - it is defined on index on line five : new Catalog('products.json') - you can update products.json to a new list on index as needed and this will still work so then when you get a product list or if you want to create different product lists for different locations (e.g. cambridge - @ 27.44 wk 7 part 5)
    {
        $json = file_get_contents($dataSource);  #yellow = built in fx. 
        $this->products = json_decode($json, true); #decode into array TRUE is whether or not it is associative 
        #var_dump(Sproducts); to test it you have to use it - line 5 on index.php
    }
    
    public function getAll()  # add visibiilty keyword to all fx, defaults to public
    {
        return $this->products;  # about $this - gives you access to the $products set up in properties, w/o $this, you are limited to (?) the methods - dont comletely understand this, haha  
        # -> is an objects operator
    }

    public function getById(int $id) #specif product, get the parameter as an int
    {
        return $this->products[$id]; #$id is the number of the product eg. 1  strawberries
        #as an aside, this is how to test
        #var_dump($this->products[$id]);
        # ^ gives only the info from the properties array plus simplifies:
             #var_dump('You invoked get by ID of'.$id):  .$id concatenates
             #var_dump($this->products);
    }

    public function searchByName(string $term)  # indicate name instead of ID, 
    {
        $results = [];  # local variable / array
        foreach ($this->products as $product) {  # iterate through products
            if (strstr($product['name'], $term)) {  # to make it a fuzzy search by using strstr built-in fx, product name is the haystack, term is the needle (hard code 'ee' in place of 'Cheerios' on index.php)
                $results[] = $product;  # revist explanation 34 min wk 7 pt 5
            }
        }

        return $results;
    }
}

# this is a file for a class instead of defining it within the folder
# name of file is the same as name of class 
# there shouldn't be anythig other than the code for class in the file except some debugging

#jasn JAVASCRIPT OBJECT NOTATON - parsable text
# the object is denoted by the start and end of the curly bracket 

# "1" "2" are KEYS pointingto values with a COLON : and inside that are more KEY:VALUE  pairs  - see products.json