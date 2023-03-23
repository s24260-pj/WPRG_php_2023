<?php

class Task_3_1
{
    const NUMBERS = [12, 123124, 12513940, 123, 23];

    public static function getMaxElement(string $loopType): int
    {
        return match ($loopType) {
            "for" => self::getMaxElementUsingForLoop(),
            "while" => self::getMaxElementUsingWhileLoop(),
            "do_while" => self::getMaxElementUsingDoWhileLoop(),
            "foreach" => self::getMaxElementUsingForEachLoop(),
            default => 0,
        };
    }

    private static function getMaxElementUsingForLoop(): int
    {
        $maxValue = self::NUMBERS[0];

        for ($i = 0; $i < count(self::NUMBERS); $i++) {
            if ($maxValue >= self::NUMBERS[$i]) continue;

            $maxValue = self::NUMBERS[$i];
        }

        return $maxValue;
    }

    private static function getMaxElementUsingWhileLoop(): int
    {
        $i = 0;
        $maxValue = self::NUMBERS[$i];

        while ($i < count(self::NUMBERS)) {
            if ($maxValue >= self::NUMBERS[$i]) {
                $i++;
                continue;
            }

            $maxValue = self::NUMBERS[$i];
            $i++;
        }

        return $maxValue;
    }

    private static function getMaxElementUsingDoWhileLoop(): int
    {
        $i = 0;
        $maxValue = self::NUMBERS[$i];

        do {
            if ($maxValue >= self::NUMBERS[$i]) {
                $i++;
                continue;
            }

            $maxValue = self::NUMBERS[$i];
            $i++;
        } while ($i < count(self::NUMBERS));

        return $maxValue;
    }

    private static function getMaxElementUsingForEachLoop(): int
    {
        $maxValue = self::NUMBERS[0];

        foreach (self::NUMBERS as $number) {
            if ($maxValue >= $number) continue;

            $maxValue = $number;
        }

        return $maxValue;
    }
}

echo Task_3_1::getMaxElement("for");
echo "<br>";
echo Task_3_1::getMaxElement("while");
echo "<br>";
echo Task_3_1::getMaxElement("do_while");
echo "<br>";
echo Task_3_1::getMaxElement("foreach");
echo "<br>";