<?php
include_once'Circle.php';

class Cylinder extends Circle
{

    public $height;

    function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }
    
    function calculateArea()
    {
        return (2 * pi() * ($this->radius) * (($this->height) + ($this->radius)));
    }

    function calculateVolume()
    {
        return $this->calculateArea() * ($this->height);
    }

}

?>