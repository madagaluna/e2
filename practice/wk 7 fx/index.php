<?php

# Play 10 rounds
for ($i = 0; $i < 10; $i++) {
    # Flip the coin for Player A
    $playerA = flipCoin();

    # For Player B default to whatever side is left
    $playerB = ($playerA == 'heads') ? 'tails' : 'heads';

    # Flip to pick the winning side
    $flip = flipCoin();

    # Decide the winner
    $winner = ($playerA == $flip) ? 'Player A' : 'Player B';
    
    # Accumulate the results for the view
    $results[] = [
        'playerA' => $playerA,
        'playerB' => $playerB,
        'flip' => $flip,
        'winner' => $winner,
    ];
}

require 'index-view.php';

function flipCoin()
{
    $coin = ['heads', 'tails'];
    return $coin[rand(0, 1)];
}

#flipCoin fx took coin array from the body
#       $coin = ['heads', 'tails']
# and the logic
#      $coin[rand(0, 1)]
# ** stored the results in a variable to be accessible outside fx
#       $results = LOGIC
# ** added the return feature for when it is called
#       return $results
# ** SIMPLIFIED two ** TO:
#       return LOGIC


# Ternary for 
#if (@playerA == 'heads'){
#    $playerB = 'tails;
# } else {
#   $playerB = 'heads'
#}

#ternary for winner
#if (@playerA == $flip) {
#    $winner = 'PlayerA';
#} else {
#   $winner = 'PlayerB';
#}