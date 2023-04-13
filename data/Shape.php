<?php

namespace Shape;

class Shape{
    function getCorner()
    {
        return 0;
    }
}

class Rectangle extends Shape {
    function getCorner()
    {
        return 4;
    }
    function getCornerParent()
    {
        return parent::getCorner();
    }
}