<?php

class Task_1_5
{
    public static function calculate(string $type, $arrayWithVariables): float
    {
        return match ($type) {
            "trapeze" => self::calculateTrapeze(...$arrayWithVariables),
            "square" => self::calculateSquare(...$arrayWithVariables),
            "triangle" => self::calculateTriangle(...$arrayWithVariables),
            default => 0,
        };
    }

    private static function calculateTrapeze($a, $b, $h): float
    {
        return ($a + $b) * $h / 2;
    }

    private static function calculateSquare($a, $b): float
    {
        return $a * $b;
    }

    private static function calculateTriangle($a, $h): float
    {
        return $a * $h / 2;
    }
}

echo Task_1_5::calculate("triangle", [
    "a" => 2,
    "h" => 2
]);
echo "<br>";

echo Task_1_5::calculate("square", [
    "a" => 2,
    "b" => 4,
]);
echo "<br>";

echo Task_1_5::calculate("trapeze", [
    "a" => 2,
    "b" => 4,
    "h" => 2
]);
echo "<br>";
