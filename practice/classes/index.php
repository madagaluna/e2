<?php

require 'Catalog.php';  #tells where to get info

$catalog = new Catalog('products.json'); # create a varible $cat..., set to (built in key word) new instance new Catalog

$product = $catalog->getById(9); # invoking a method explicitly ^ is a magic method invocation
                                # 9 is hard coding

#var_dump($catalog->products);  is the same as
#var_dump($catalog->getAll());  because $catalog is public in the file .  30 min wk 7, prt 5, revisit this  -although answer to #9
#var_dump($catalog->searchByName('Cheerios'));