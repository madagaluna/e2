<?php
//comment out code
# Define 4 different variables, which will
# each represent how much a given coin is worth
$penny_value = .01;
$nickel_value = .05;
$dime_value = .10;
$quarter_value = .25;
$hquarter_value = .50;

# Define 4 more variables, which will each
# represent how many of each coin is in the bank
//adding a comment changed penny_value to create another commit - bank.php is not in e2practice repository on git despite first commit.

$pennies = 300;
$nickels = 5;
$dimes = 0;
$quarters = 125;
$hquarters = 33;

# Add up how much money is in the piggy bank
$total = ($pennies * $penny_value) + ($nickels * $nickel_value) + ($dimes * $dime_value) + ($quarters * $quarter_value) + ($hquarters * $hquarter_value);

require 'bank-view.php';