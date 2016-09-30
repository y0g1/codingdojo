<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 9/30/16
 * Time: 12:03
 */

require('Game.php');

$game = new Game();

do {

    $command = readline("What do you want to do? ");
    
    echo $game->execute($command) ."\n\n";
    

} while ($command != 'exit');