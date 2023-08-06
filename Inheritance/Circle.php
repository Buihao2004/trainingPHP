<?php
 include_once"Shape.php";

 class Circle extends Shape 
 {
    public $radius;

    function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    function calculateArea()
    {
        return ($this->radius * 2) * pi();
    }

    function calculatePerimeter()
    {
        return ($this->radius * $this->radius) * pi();
    }
        
 }

?>