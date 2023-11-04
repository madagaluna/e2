<?php

require __DIR__ . '/vendor/autoload.php';  # pulls in autoload from autoload dir - pulls in all referenced classes


require 'MyGame.php';

use RPS\Game;  #imports from namespace / references the class Game from RPS/ namespace
use App\Debug; #invoking thoughout file

$game = new Game();  #new instance

# Each invocation of the `play` method will play and track a new round of player (given move) vs. computer
Debug::dump($game->play('rock'));  #invoking play method