<?php
require_once "../zadanie_1/Task_1_1.php";

class Task_3_2
{
    public static function getDiceTriesResults($numberOfTries): array
    {
        $result = [];

        for ($i = 0; $i < $numberOfTries; $i++) {
            $result[] = Task_1_1::generateDiceValue();
        }

        return $result;
    }
}

echo implode(", ", Task_3_2::getDiceTriesResults(5));