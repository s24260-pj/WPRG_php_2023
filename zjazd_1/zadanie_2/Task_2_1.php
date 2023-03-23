<?php

class Task_2_1
{
    const MAX_ARRAY_SIZE = 10;

    public static function getRandomArrayValue($index): int
    {
        $array = [];

        for ($i = 0; $i < self::MAX_ARRAY_SIZE; $i++) {
            $array[] = rand();
        }

        return $array[$index];
    }
}

echo Task_2_1::getRandomArrayValue(Task_2_1::MAX_ARRAY_SIZE - 3);