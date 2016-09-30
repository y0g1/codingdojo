<?php


class Map
{

    protected $map = array();

    public function __construct() {


        for($x=-5; $x <= 5; $x++) {
            $map[$x] = array();
            for($y=-5; $y <= 5; $y++) {
                $map[$x][$y] = new MapLocation();
            }
        }

    }

    public function getDescription($x, $y) {
        $this->map[$x][$y]->getDescription();
    }

}