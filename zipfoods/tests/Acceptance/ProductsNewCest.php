<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class ProductsNewCest
{
    // tests
    public function submitReviewWithValidation(AcceptanceTester $I)
    {
        // Act
        $I->amOnPage('/products/new');

        // Fill in valid values for all required fields
        $productName = 'Valid Product Name';
        $sku = 'valid-sku_123';
        $description = 'Valid product description';

        $I->fillField('input[test="test-name"]', $productName);
        $I->fillField('input[test="test-sku"]', $sku);
        $I->fillField('textarea[test="review-textarea"]', $description);
        // Add additional fields as needed


        // Submit the form
        $I->click('Add Product');

        // confirm we see the review confirmation
        $I->see($productName, '[test=review-content]');

        // Visit the products page to verify the new product is listed
        $I->amOnPage('/products');

        // Assert that the new product is listed on the products page
        $I->see($productName, '.product-name');
        $I->see($sku, '.product-sku');
        $I->see($description, '.product-description');
        // Add additional assertions based on your HTML structure
    }
}