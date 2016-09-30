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

    public function cliInterface($action) {

        switch ($action) {
            case 'go east' :
                return $this->goEast();
                break;

            case 'go west' :
                return $this->goWest();
                break;

            case 'go north' :
                return $this->goNorth();
                break;

            case 'go south' :
                return $this->goSouth();
                break;

            case 'look' :
                return $this->look();
                break;

            default:
                return 'Wat?';

        }

    }

    public function __construct($map)
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
        return 'You walked east';
    }

    public function goWest()
    {
        $this->positionX++;
        return 'You walked west';
    }

    public function goNorth()
    {
        $this->positionY++;
        return 'You walked north';
    }

    public function goSouth()
    {
        $this->positionY--;
        return 'You walked south';
    }

    public function getPosition()
    {
        return array($this->positionX, $this->positionY);
    }


}
