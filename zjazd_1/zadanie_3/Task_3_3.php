<?php

class Task_3_3
{
    public static function printMultiplicationTableBySize($size): void
    {
        for ($i = 1; $i <= $size; $i++) {
            for ($j = 1; $j <= $size; $j++) {
                echo " [" . ($i * $j) . "] ";
            }

            echo "<br>";
        }
    }
}

Task_3_3::printMultiplicationTableBySize(10);