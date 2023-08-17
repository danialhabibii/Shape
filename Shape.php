<?php

namespace App\abstract\Shape;

abstract class Shape
{

    public $color;
    public function __construct($color){
        $this->color = $color;
    }

    abstract public function calculateArea();


    public function getColor(){
        return $this->color;
    }

}
