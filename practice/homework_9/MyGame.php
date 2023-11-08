<?php

namespace RPS;

//use RPS\Game;  // Susam has this ... also she had MyGame in Class folder (app)

class MyGame extends Game
{
    protected $moves = ['heads', 'tails'];  // protected is used within the same class and overwrites  so heads and tails instead of RPS - when class is protected

    /**
     * Compares $playerMove against $computerMove and
     * determines whether the player won or lost (no tie)
     */

    protected function determineOutcome($playerMove, $computerMove)
    {
        return $computerMove == $playerMove;
    }
    //        if ($playerMove == $computerMove) {
    ///          return 'lost';
    //       } elseif ($playerMove == 'heads' && $computerMove == 'tails' || $playerMove == 'tails' && $computerMove == 'heads') {
    //          return 'won';
    //       } else {
    //            return 'invalid';
    //       }
    //   }

}