<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;
use Faker\Factory;

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

        $name = 'Bob';
        $review = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in pulvinar libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in pulvinar libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.';
        //Act
        $I->amOnPage('/product?sku=driscolls-strawberries');
        $I->fillField('[test=reviewer-name-input]', $name);
        $I->fillField('[test=review-textarea]', $review);
        $I->click('[test=review-submit-button]');

        // Assert we see the review confirmation message
        // confirm we see the review confirmation
        $I->seeElement('[test=review-confirmation]');  // assertion you get results you are looking for - presence of an element - if statement show if >alerts

        // Assert we see the review
        // to comfirm the review is on the page
        $I->see($name, '[test=review-name]');
        $I->see($review, '[test=review-content]');
    }

    // Test form validation is working for reviews

    public function reviewValidationTest(AcceptanceTester $I)
    {
        // ACT
        $I->amOnPage('/product?sku=driscolls-strawberries');
        $I->fillField('[test=reviewer-name-input]', 'Bob');
        $I->fillField('[test=review-textarea]', 'This review is not long enough');
        $I->click('[test=review-submit-button]');

        // Assert we see the appropriate validation feedback
        $I->see('The value for review must be at least 200 character(s) long');
    }

    // test product not fount

    public function productNotFound(AcceptanceTester $I)
    {
        //Act
        $I->amOnPage('/product?sku=abc');
        //Assert
        $I->seeElement('[test=product-not-found-header]');

    }


}

// to run: \zipfoods# php vendor/bin/codecept run Acceptance --steps
