<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class ProductPageCest
{
    // tests
    public function pageLoads(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/product?sku=driscolls-strawberries');

        # Assert the correct title is set on the page - in the html element
        $I->seeInTitle('Driscoll’s Strawberries');

        # Assert the existence of certain text on the page
        $I->see('Driscoll’s Strawberries');

        # Assert the existence of a certain element on the page
        $I->seeElement('.product-thumb');

        # Assert the existence of text within a specific element on the page
        $I->see('$4.99', '.product-price');
    }
    public function reviewAProductTest(AcceptanceTester $I)
    {
        $I->amOnPage('/product?sku=driscolls-strawberries');
        $name = 'Bob';

        $I->fillField('[test=reviewer-name-input]', $name);

        $review = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in pulvinar libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in pulvinar libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.';

        $I->fillField('[test=review-textarea]', $review);

        $I->click('[test=review-submit-button]');

        // confirm we see the review confirmation
        $I->seeElement('[test=review-confirmation]');


        // to comfirm the review is on the page
        $I->see($name, '[test=review-name]');
        $I->see($review, '[test=review-content]');
        // to run php vendor/bin/codecept run Acceptance --steps
    }

    public function testPageNotFound(AcceptanceTester $I)
    {
        $I->amOnPage('/products/missing');
        # Assert the correct title is set on the page - in the html element
        $I->seeInTitle('404');
    }

}