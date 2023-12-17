<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class P3Cest
{
    public function playGame(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->selectOption('form input[type=radio]', '3pm');  //cutom attribute doesn't work here ??
        $I->selectOption('form input[name=choice]', '3pm');
        # Assert the correct title is set on the page - in the html element
        $I->see('ENTER A TIME ', 'h2');
        # Assert the existence of certain text on the page
        $I->see('ENTER A TIME TO ROCK!');
        $I->seeElement('form input[name=choice]');
        $I->fillField('form input[name=choice]', '3pm');
        $I->click('[test=submit-button]');  // custom attribute works here
        $I->seeElement('[test=results-div]');
        $taken = $I->grabTextFrom('[test=taken-output]');
        // $taken = $I->grabTextFrom('[test=choice-output]');
        // $I->comment('Your neighbors are playing at:  ' . $taken);
        $I->comment('The other band is playing at  ' . $taken);

        if($taken == "3pm") {  //fails because it tests both and one is always wrong
            $I->see('got a gig!');
        //  $I->seeElementProperties('[test=results-div]', ['color' => 'rgb(0, 0, 255)']);
        } else {
            $I->see('No gig!');
            //  $I->seeElementProperties('[test=dance-output]', ['color' => 'rgb(209, 114, 13)']);
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