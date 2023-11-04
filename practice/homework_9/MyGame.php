<?php

namespace RPS;

class MyGame extends Game
{
    protected $moves = ['heads', 'tails'];

    /**
     * Compares $playerMove against $computerMove and
     * determines whether the player won or lost (no tie)
     */
    protected function determineOutcome($playerMove, $computerMove)
    {
        if ($playerMove == $computerMove) {
            return 'lost';
        } elseif ($playerMove == 'heads' && $computerMove == 'tails' || $playerMove == 'tails' && $computerMove == 'heads') {
            return 'won';
        } else {
            return 'invalid';
        }
    }
}