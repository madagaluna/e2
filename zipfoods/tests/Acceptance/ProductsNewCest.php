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

        // Fill in valid values for all required fields:
        $productName = 'Valid Product Name';
        $sku = 'valid-sku_123';
        $description = 'Valid product description';

        $I->fillField('input[test=test-name]', $productName);
        $I->fillField('input[test=test-sku]', $sku);
        $I->fillField('textarea[test=description-textarea]', $description);

        // Submit the form
        $I->click('[test= add-product-submit-button]');

    }
    public function viewNewProductTest(AcceptanceTester $I)
    {
        // Visit the products page to verify the new product is listed
        $I->amOnPage('/products');
        $productName = 'Valid Product Name';
        $sku = 'valid-sku_123';
        $description = 'Valid product description';

        // Assert that the new product is listed on the products page and the message is sent out
        $I->see($productName, '[test=test-name]');
        $I->see($sku, '[test=test-sku]');
        $I->see($description, '[test=description-textarea]');
        // from other test page
        // confirm we see the  confirmation
        $I->seeElement('[test=add-confirmation]');  // assertion you get results you are looking for - presence of an element - if statement show if >alerts

    }
}