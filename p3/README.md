
# Project 3
+ By: Mary Bradley
+ URL: <http://e2p3.timberthedestroyer.xyz>

## Graduate requirement

+ [x] I have integrated testing into my application
+ [ ] I am taking this course for undergraduate credit and have opted out of integrating testing into my application

## Outside resources
https://stackoverflow.com/questions/43320047/codeception-radio-button-selection-issues
## Notes for instructor
Thank you for all your help over the semester.

  Being able to work along side the videos, and go back and do things over, was a game changer for me.  I am still struggling, but I have moments where pieces of this come together.  The final class brought the lessons together so well!  I don't think I could repeat the steps on my own, but I have a much greater sense of what each file and folder is doing and sometimes I feel like I'm actually reading the code.  Ternary makes perfect sense!  

I am inclined to watch the videos over from the beginning. Now that I know where it's heading, it may fall into place a little better. 

I worked on the .css while waiting for a response to my testing question.  I would have entered quite a few **outside resources** for .css but none of the code worked;  Confetti,overriding bootstrap, a carousel for photos,etc. I also used outside resources to look up [MalformedLocatorException] but I didn't find anything helpful.  I finally found the $I->selectOption('form input[type=radio]', '3pm'); information which got me through the first part of my '/' testing but I still don't understand why my test attributes weren't weren't as they should have.  I had to use grab attribute to get the if/else code to test - otherwise it failed because one condition was always wrong.  I'm curious to know why I had so much trouble with the tests on the '/' page.

I hope I will not be penalized for my game being so similar to your example. I had no idea I'd have a step by step primer to put it all together - alas I ran into many problems, regardless.  


## Codeception testing output
root@hes2b:/var/www/e2/p3# php vendor/bin/codecept run Acceptance --steps
Codeception PHP Testing Framework v5.0.12 https://stand-with-ukraine.pp.ua

Tests.Acceptance Tests (3) ----------------------------------------------------------------------------------------------------------------
root@hes2b:/var/www/e2/p3#  php vendor/bin/codecept run Acceptance --steps
Codeception PHP Testing Framework v5.0.12 https://stand-with-ukraine.pp.ua

Tests.Acceptance Tests (3) ------------------------------------------------------------------------------------
P3Cest: Play game
Signature: Tests\Acceptance\P3Cest:playGame
Test: tests/Acceptance/P3Cest.php:playGame
Scenario --
 I am on page "/"
 I select option "form input[type=radio]","3pm"
 I select option "form input[name=choice]","3pm"
 I see "ENTER A TIME ","h2"
 I see "ENTER A TIME TO ROCK!"
 I see element "form input[name=choice]"
 I fill field "form input[name=choice]","3pm"
 I click "[test=submit-button]"
 I see element "[test=results-div]"
 I grab text from "[test=taken-output]"
 The other band is playing at  2pm
 I grab attribute from "div.results","test"
 I see element "span[test="taken-output"]"
 I see element "span[test="play-output"]"
 I don't see element "span[test="dance-output"]"
 PASSED 

P3Cest: Validate form
Signature: Tests\Acceptance\P3Cest:validateForm
Test: tests/Acceptance/P3Cest.php:validateForm
Scenario --
 I am on page "/"
 I click "[test=submit-button]"
 I see element "[test=validation-output]"
 PASSED 

P3Cest: Shows history and round details
Signature: Tests\Acceptance\P3Cest:showsHistoryAndRoundDetails
Test: tests/Acceptance/P3Cest.php:showsHistoryAndRoundDetails
Scenario --
 I am on page "/history"
 I grab multiple "[test=round-link]"
 I assert greater than or equal 10,19
 I grab text from "[test=round-link]"
 I click "2023-12-16 21:32:47"
 I see "2023-12-16 21:32:47"
 PASSED 

---------------------------------------------------------------------------------------------------------------
Time: 00:00.134, Memory: 12.00 MB

OK (3 tests, 11 assertions)



