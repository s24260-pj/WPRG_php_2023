<?php

class Task_5_2_meet_2
{
    public static function factorialRecursive($number): int
    {
        if ($number <= 2) return $number;
        return $number * self::factorialRecursive($number - 1);
    }

    public static function factorial($number): int
    {
        if ($number <= 2) return $number;

        $result = 1;

        for ($i = 1; $i <= $number; $i++) {
            $result *= $i;
        }

        return $result;
    }
}

$milliseconds = microtime(true) * 1000;

echo "<p> Result recursive: " . Task_5_2_meet_2::factorialRecursive(4) . "</p>";
$milliseconds_2 = microtime(true) * 1000;
echo "<p><b>" . $milliseconds_2 - $milliseconds. "ms</b></p>";

$milliseconds = microtime(true) * 1000;
echo "<p> Result: " . Task_5_2_meet_2::factorial(4) . "</p>";
$milliseconds_2 = microtime(true) * 1000;
echo "<p><b>" . $milliseconds_2 - $milliseconds. "ms</b></p>";