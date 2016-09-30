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
    private $map;


    public function __construct(Map $map)
    {
        $this->map = $map;
    }

    public function look()
    {
        return $this->map->getDescription(
            $this->positionX,
            $this->positionY
        );
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
