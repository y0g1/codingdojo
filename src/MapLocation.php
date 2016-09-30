<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 9/30/16
 * Time: 11:21
 */

class MapLocation {

    private $description;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }
}
