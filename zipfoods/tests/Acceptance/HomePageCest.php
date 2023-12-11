<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class HomePageCest
{
    // tests
    public function tryToTest(AcceptanceTester $I)
    {

        $I->amOnPage('/');
        $I->see('Welcome', 'h2');   //  - works but want to put test on the index.blade.php

    }
}