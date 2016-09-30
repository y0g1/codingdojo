<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 9/30/16
 * Time: 10:53
 */

class InteractionInterface 
{
    protected $positionX = 0;
    protected $positionY = 0;


    public function lookUp()
    {

    }

    public function lookDown()
    {

    }

    public function lookLeft()
    {

    }

    public function lookRight()
    {

    }

    public function goEast()
    {
        $this->positionX--;
    }

    public function goWest()
    {
        $this->positionX++;
    }

    public function goNorth()
    {
        $this->positionY++;
    }

    public function goSouth()
    {
        $this->positionY--;
    }

    public function getPosition()
    {
        return array($this->positionX, $this->positionY);
    }


}