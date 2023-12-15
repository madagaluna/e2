<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class P3Cest
{
    public function playGame(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        //  $I->fillField('[test=3pm-radio]', '3pm');
        // $I->click('[test=submit-button]');
        // $I->seeElement('[test=results-div]');
        # Assert the correct title is set on the page - in the html element
        $I->see('Enter a time to Perform!', 'h2');

        # Assert the existence of certain text on the page
        $I->see('Enter a time to Perform!');

        $taken = $I->grabTextFrom('[test=taken-output]');
        $I->comment('Your neighbors are playing at:  ' . $taken);

        if($taken == '3pm') {
            $I-> seeElement('[test=play-output]');
        } else {
            $I-> seeElement('[test=dance-output]');
        }
    }

    public function validateForm(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->click('[test=submit-button]');
        $I->seeElement('[test=validation-output]');
    }


    public function showsHistoryAndRoundDetails(AcceptanceTester $I)
    {
        $I->amOnPage('/history');

        $roundCount = count($I->grabMultiple('[test=round-link]'));
        $I->assertGreaterThanOrEqual(10, $roundCount);

        $timestamp = $I->grabTextFrom('[test=round-link]');
        $I->click($timestamp);
        $I->see($timestamp);
    }

}