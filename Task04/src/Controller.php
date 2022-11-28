<?php

namespace ine_vatkina\guess_number\Controller;

use function ine_vatkina\guess_number\Model\setting;
use function ine_vatkina\guess_number\View\MenuGame;
use function ine_vatkina\guess_number\DB\openDatabase;

function startGame()
{
    setting();
    openDatabase();
    MenuGame();
}