<?php

require('src/InteractionInterface.php');
require('src/Map.php');
require('src/MapLocation.php');


class InteractionInterfaceTest extends \PHPUnit_Framework_TestCase
{

    public function testCanWalk()
    {
        $ii = new InteractionInterface(new Map());

        $ii->goEast();
        $ii->goEast();
        $ii->goNorth();

        $this->assertEquals($ii->getPosition(), array(-2, 1));
    }

    public function testCanWalkEast()
    {
        $ii = new InteractionInterface(new Map());

        $ii->goEast();

        $this->assertEquals($ii->getPosition(), array(-1, 0));
    }

    public function testCanWalkWest()
    {
        $ii = new InteractionInterface(new Map());

        $ii->goWest();

        $this->assertEquals($ii->getPosition(), array(1, 0));
    }

    public function testCanWalkNorth()
    {
        $ii = new InteractionInterface(new Map());

        $ii->goNorth();

        $this->assertEquals($ii->getPosition(), array(0, 1));
    }

    public function testCanWalkSouth()
    {
        $ii = new InteractionInterface(new Map());

        $ii->goSouth();

        $this->assertEquals($ii->getPosition(), array(0, -1));
    }

    public function testMapDoesNotChange()
    {
        $ii = new InteractionInterface(new Map());

        $whereAmI = $ii->look();

        $ii->goNorth();
        $ii->goSouth();
        $ii->goEast();
        $ii->goWest();

        $this->assertEquals($whereAmI, $ii->look());
    }

    public function testCanLook()
    {
        $map = new Map();
        $ii = new InteractionInterface($map);

        $description = $ii->look();

        $this->assertTrue(in_array($description, array('Forest',
                'House',
                'Field',
                'Road',
                'Beach',
                'Castle')));


    }
}


