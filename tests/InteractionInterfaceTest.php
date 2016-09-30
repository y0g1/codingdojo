<?php

require('src/InteractionInterface.php');


class InteractionInterfaceTest extends \PHPUnit_Framework_TestCase
{

    public function testCanWalk()
    {
        $ii = new InteractionInterface();

        $ii->goEast();
        $ii->goEast();
        $ii->goNorth();

        $this->assertEquals($ii->getPosition(), array(-2, 1));
    }

    public function testCanWalkEast()
    {
        $ii = new InteractionInterface();

        $ii->goEast();

        $this->assertEquals($ii->getPosition(), array(-1, 0));
    }

    public function testCanWalkWest()
    {
        $ii = new InteractionInterface();

        $ii->goWest();

        $this->assertEquals($ii->getPosition(), array(1, 0));
    }

    public function testCanWalkNorth()
    {
        $ii = new InteractionInterface();

        $ii->goNorth();

        $this->assertEquals($ii->getPosition(), array(0, 1));
    }

    public function testCanWalkSouth()
    {
        $ii = new InteractionInterface();

        $ii->goSouth();

        $this->assertEquals($ii->getPosition(), array(0, -1));
    }
}


