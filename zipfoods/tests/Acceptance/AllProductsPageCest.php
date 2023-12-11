<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class AllProductsPageCest
{
    // tests
    public function tenItems(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/products');

        // count
        $productCount = count($I->grabMultiple('.product-link'));


        // Assertion
        $I->assertGreaterThanOrEqual(10, $productCount, 'Expected at least 10 products');  //didn't need this cuz the code was right there, doh - would have saved me hours! !https://www.geeksforgeeks.org/phpunit-assertgreaterthanorequal-function/ should not have been that hard.
    }
}