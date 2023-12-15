<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;
use Faker\Factory;

class ProductsNewCest
{
    // tests
    public function addNewProductTest(AcceptanceTester $I)
    {
        //Use Faker to generate dummy data
        $faker = Factory::create();
        $productName = $faker->words(3, true);
        $sku = str_replace('', '-', $productName);

        // Act
        $I->amOnPage('/products/new');
        $I->fillField('[test=name-input]', $productName);
        $I->fillField('[test=sku-input]', $sku);
        $I->fillField('[test=description-input]', $faker->paragraph(1, true));
        $I->fillField('[test=price-input]', 4.99);
        $I->fillField('[test=available-input]', 50);
        $I->fillField('[test=weight-input]', 1.34);

        // Submit the form
        $I->click('[test=add-product-submit-button]');

        // Visit the products page to verify the new product is listed
        $I->amOnPage('/product?sku=' . $sku);
        $I->see($productName);
    }

    // Test validation is working

    public function testValidationIsWorking(AcceptanceTester $I)
    {
        $I->amOnPage('/products/new');
        $I->click('[test=add-product-submit-button]');

        //Assert
        $I->seeElement('[test=validation-errors-alert]');
    }


}
