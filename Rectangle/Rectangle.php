<?php

namespace App\abstract\Shape\Rectangle;

use App\abstract\Shape\Shape;

class Rectangle extends Shape
{
    protected $width;
    protected $height;

    public function __construct($color,$width,$height)
    {
        parent::__construct($color);
        $this->width = $width;
        $this->height = $height;
    }


    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}
