<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class P3Cest
{
    public function playGame(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->fillField('[test=1pm-radio]', '1pm');
        $I->click('[test=submit-button]');
        $I->seeElement('[test=results-div]');
    }
}