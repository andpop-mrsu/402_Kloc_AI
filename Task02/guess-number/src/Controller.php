<?php
namespace klotsai\guess_number\Controller;
use function klotsai\guess_number\View\showGame;

function startGame(){
   echo "Game started" .PHP_EOL;
   showGame();
}
?>