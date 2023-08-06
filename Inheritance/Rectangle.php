<?php
include_once'Shape.php';

class Rectangle extends Shape
{
    public $width;
    public $length;

    function __construct($name, $width, $length)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->length = $length;
    }

    function calculateArea()
    {
        return ($this->length + $this->width) * 2;
    }

    function calculatePerimeter()
    {
        return $this->length * $this->width;
    }
    

}
?>