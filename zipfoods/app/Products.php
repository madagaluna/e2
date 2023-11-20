<?php

namespace App;

class Products
{
    # Properties

    private $products = [];  //public on the video, private in the notes

    # Methods  // create a new instance in the ProductsController that calls this method  - pass it the path to the products.json file ($dataSource)
    public function __construct($dataSource)
    {
        $json = file_get_contents($dataSource);  //opens the file
        $this->products = json_decode($json, true);  // decodes it into an array
    }

    public function getAll()
    {
        return $this->products;
    }

    public function getById(int $id)
    {
        return $this->products[$id] ?? null;
    }

    public function getBySku(string $sku)
    {
        $productId = array_search($sku, array_column($this->products, 'sku', 'id'));
        return $this->getById($productId);
    }
}
