<?php

require('InteractionInterface.php');
require('Map.php');
require('MapLocation.php');

class Game
{
    private $map;
    private $interface;

    public function __construct()
    {
        $this->map = new Map();
        $this->interface = new InteractionInterface($this->map);
    }
    
    public function execute($action) {
        return $this->interface->cliInterface($action);
    }

    public function getMap()
    {
        return $this->map;
    }
}
