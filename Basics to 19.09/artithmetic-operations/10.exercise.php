<?php

class Geometry
{

    static function circleArea($radius)
    {
        if ($radius<=0){
            return 'Radius is zero or lower!';
        }else{
            return pi() * $radius * 2;
        }


    }

    static function rectangleArea($length, $width)
    {
        if ($length <= 0 || $width <= 0) {
            return 'There are zero or lower values!';
        }else{
            return $length * $width;
        }
    }

    static function triangleArea($base, $height)
    {
        if ($base <= 0 || $height <= 0) {
            return 'There are zero or lower values!';
        }else{
            return $base * $height * 0.5;
        }
    }
}


