<?php

class Game
{
    private $map;

    public function __construct()
    {
        $this->map = new Map();
    }

    public function getMap()
    {
        return $this->map;
    }
}
