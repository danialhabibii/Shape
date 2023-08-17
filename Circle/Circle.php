<?php

namespace App\abstract\Shape\Circle;

use App\abstract\Shape\Shape;

class Circle extends Shape
{

    protected $radios;


    public function __construct($color,$radios)
    {
        parent::__construct($color);
        $this->radios = $radios;
    }



    public function calculateArea()
    {
        return pi() * $this->radios * $this->radios;
    }
}
