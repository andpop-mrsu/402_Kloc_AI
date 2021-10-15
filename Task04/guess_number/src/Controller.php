<?php

namespace klotsai\guess_number\Controller;

use function klotsai\guess_number\Model\setting;
use function klotsai\guess_number\View\MenuGame;
use function klotsai\guess_number\DB\openDatabase;

function startGame()
{
    setting();
    openDatabase();
    MenuGame();
}
