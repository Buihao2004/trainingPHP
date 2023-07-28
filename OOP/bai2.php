<?php

use function PHPSTORM_META\elementType;

class QuadracticEquation {
    private int $A;
    private int $B;
    private int $C;

    public function __construct($A, $B, $C)
    {
        $this->A = $A;
        $this->B = $B;
        $this->C = $C;

    }
    
    public function getDelta()
    {
        return ($this->B * $this->B) - 2 * ($this->A *$this->C);
    }

    public function getRoot1() 
    {
        $delta = $this->getDelta();
        if($delta >=0){
            return (-$this->B + sqrt($delta)) /( 2 * $this->A);

        }else {
            return null;
        }
    }

    public function getRoot2() 
    {
        $delta = $this->getDelta();
        if($delta >= 0 ){
            return (-$this->B - sqrt($delta)) / (2 * $this->A);
        }else{
            return null;
        }
    }
}

?>