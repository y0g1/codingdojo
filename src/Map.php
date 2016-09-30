<?php


class Map
{

    protected $map = array();


    private $randomDescriptions =[
        'Forest',
        'House',
        'Field',
        'Road',
        'Beach',
        'Castle'
    ];

    public function __construct()
    {
        for ($x=-5; $x <= 5; $x++) {
            $map[$x] = array();
            for ($y=-5; $y <= 5; $y++) {
                $this->map[$x][$y] = new MapLocation($this->randomDescriptions[rand(0,count($this->randomDescriptions) - 1)]);
            }
        }

    }

    public function getDescription($x, $y)
    {
        return $this->map[$x][$y]->getDescription();
    }

}
