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

        // Debugging step
        $actualNumberOfElements = count($I->grabMultiple('.product-name'));
        codecept_debug("Actual Number of Elements: $actualNumberOfElements");

        // Assertion
        $I->assertGreaterThanOrEqual(10, $actualNumberOfElements, 'Expected at least 10 elements with class "product-name".'); //https://www.geeksforgeeks.org/phpunit-assertgreaterthanorequal-function/ should not have been that hard.
    }
}