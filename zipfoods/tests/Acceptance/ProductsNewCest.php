<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class ProductsNewCest
{
    // tests
    public function addNewProductTest(AcceptanceTester $I)
    {
        // Act
        $I->amOnPage('/products/new');

        // Fill in valid values for a required field:
        $product = 'Valid Product Name';


        $I->fillField('input[test=test-name]', $newProduct);

        // Submit the form
        $I->click('[test= add-product-submit-button]');

    }
    public function viewNewProductTest(AcceptanceTester $I)
    {
        // Visit the products page to verify the new product is listed
        $I->amOnPage('/products');
        $product = 'Valid Product Name';



        // Assert that the new product is listed on the products page and the message is sent out
        $I->see($product, '[test=test-name]');

        // from other test page
        // confirm we see the  confirmation
        $I->seeElement('[test=add-confirmation]');  // assertion you get results you are looking for - presence of an element - if statement show if >alerts

    }
}