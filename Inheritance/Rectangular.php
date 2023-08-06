<?php
include_once'Rectangle.php';

class Rectangular extends Rectangle
{
    public $height;

    function __construct($name, $width, $length, $height )
    {
        parent::__construct($name, $width, $length);
        $this->height = $height;  
    }
    
    function calculateArea()
    {
        return 2 * $this->height * ($this->length + $this->width) + 2 * $this->length * $this->width;
    }

    function calculateVolume()
    {
        return $this->calculateArea() * ($this->height);
    }

}

?>