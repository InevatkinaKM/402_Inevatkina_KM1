<?php
namespace rmvit\hangman\Controller;
use function rmvit\hangman\View\showGame;

function startGame(){
   echo "Game started" .PHP_EOL;
   showGame();
}
?>