<?php

require('src/InteractionInterface.php');
require('src/Map.php');
require('src/MapLocation.php');
require('src/Game.php');


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
    
    public function testCliInterfaceEast() {
        $east = new InteractionInterface(new Map());
        
        $result = $east->cliInterface('go East');
        $this->assertEquals($result, 'You walked east');
    }
    
    public function testCliInterfaceWest() {
        $east = new InteractionInterface(new Map());
        
        $result = $east->cliInterface('go West');
        $this->assertEquals($result, 'You walked west');
    }
    
    public function testCliInterfaceNorth() {
        $east = new InteractionInterface(new Map());
        
        $result = $east->cliInterface('go North');
        $this->assertEquals($result, 'You walked north');
    }
    
    public function testCliInterfaceSouth() {
        $east = new InteractionInterface(new Map());
        
        $result = $east->cliInterface('go South');
        $this->assertEquals($result, 'You walked south');
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
    
    public function testGetDescription() {
        $map = new Map();
        $map->updateField(2, 1, 'Magic forest');
        $this->assertEquals($map->getDescription(2, 1), 'Magic forest');
    }
    
    
    public function testGameOver() {
//        $map = new Map();
//        $interface = new InteractionInterface($map);
        $game = new Game();
        $game->execute('go east');
        $game->execute('go east');
        $game->execute('go east');
        $game->execute('go east');
        $game->execute('go east');
        $game->execute('go east');
        $this->assertEquals($game->execute('look'), 'You died');
//        $this->assertEquals($interface->goEast(), 'You died');
//        $this->assertEquals($interface->goNorth(), 'You died');
//        $this->assertEquals($interface->goSouth(), 'You died');
//        $this->assertEquals($interface->goWest(), 'You died');
    }
}


