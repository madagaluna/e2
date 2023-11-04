<?php

use RPS\Game;

function playGame($userMove)
{
    $game = new Game();
    return $game->play($userMove);
}