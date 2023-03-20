<?php

class Task_1_2
{
    public static function getDiameterOfCircle(float $radius): float
    {
        return 2 * $radius;
    }
}

echo Task_1_2::getDiameterOfCircle(10);
