<?php

namespace App\Controllers;

use App\Products;

class ProductsController extends Controller
{
    public function index()
    {
        $products = $this->app->db()->all('products');

        return $this->app->view('products/index', ['products' => $products]);
    }

    public function show()
    {
        $sku =  $this->app->param('sku');

        if (is_null($sku)) {
            $this->app->redirect('/products');
        }

        $productQuery = $this->app->db()->findByColumn('products', 'sku', '=', $sku);

        if (empty($productQuery)) {
            return $this->app->view('products/missing');
        } else {
            $product = $productQuery[0];
        }

        $reviewSaved = $this->app->old('reviewSaved');

        // Exercise 1 week 13: getting reviews from the database for show.blade.php
        $reviews = $this->app->db()->findByColumn('reviews', 'product_id', '=', $product['id']);

        return $this->app->view('products/show', [
            'product' => $product,
            'reviewSaved' => $reviewSaved,
            'reviews' => $reviews,
        ]);
    }

    public function saveReview()
    {
        $this->app->validate([
            'product_id' => 'required',
            'sku' => 'required',
            'name' => 'required',
            'review' => 'required|minLength:100'
        ]);

        $product_id = ($this->app->input('product_id'));
        $sku = ($this->app->input('sku'));
        $name = ($this->app->input('name'));
        $review = ($this->app->input('review'));

        $this->app->db()->insert('reviews', [
            'product_id' => $product_id,
            'name' => $name,
            'review' => $review
        ]);

        return $this->app->redirect('/product?sku=' . $sku, ['reviewSaved' => true]);
    }

    public function new()
    {
        $product = [];

        if (
            empty($this->app->input('new-name')) ||
            empty($this->app->input('new-sku')) ||
            empty($this->app->input('new-description')) ||
            empty($this->app->input('new-price')) ||
            empty($this->app->input('new-available')) ||
            empty($this->app->input('new-weight')) ||
            empty($this->app->input('new-perishable'))
        ) {
            $this->app->redirect('/new');
        }

        $this->handleNewProductForm();
    }

    private function handleNewProductForm()
    {
        $this->app->validate([
            'new-name' => 'required',
            'new-sku' => 'required',
            'new-description' => 'required',
            'new-price' => 'required|numeric',
            'new-available' => 'required|digit',
            'new-weight' => 'required|numeric',
            'new-perishable' => 'required',
        ]);

        $name = $this->app->input('new-name');
        $sku = $this->app->input('new-sku');
        $description = $this->app->input('new-description');
        $price = $this->app->input('new-price');
        $available = $this->app->input('new-available');
        $weight = $this->app->input('new-weight');
        $perishable = $this->app->input('new-perishable');

        $this->persistNewProduct($name, $sku, $description, $price, $available, $weight, $perishable);

        $this->app->redirect('/products');
    }

    private function persistNewProduct($name, $sku, $description, $price, $available, $weight, $perishable)
    {
        $perishable = $perishable ? 1 : 0;

        $this->app->db()->insert('products', [
            'name' => $name,
            'sku' => $sku,
            'description' => $description,
            'price' => $price,
            'available' => $available,
            'weight' => $weight,
            'perishable' => $perishable,
        ]);
    }
}