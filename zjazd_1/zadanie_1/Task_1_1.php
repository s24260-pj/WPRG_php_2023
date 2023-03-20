<?php

class Task_1_1
{
    public static function generateDiceValue(): int
    {
        return rand(1, 6);
    }
}

//echo Task_1_1::generateDiceValue();