<?php

require_once('InteractionInterface.php');
require_once('Map.php');
require_once('MapLocation.php');

class Game
{
    private $map;
    private $interface;
    private $isAlive = true;

    public function __construct()
    {
        $this->map = new Map();
        $this->interface = new InteractionInterface($this->map);
    }
    
    public function execute($action) {
        if($this->isAlive){
            try{
                return $this->interface->cliInterface($action);       
            } catch (Exception $ex) {
                $this->isAlive = false;
            }
        }
        return 'You died';
    }

    public function getMap()
    {
        return $this->map;
    }
}
