<?php

class Task_3_4
{
    private int $loopCounter;

    public function __construct()
    {
        $this->loopCounter = 0;
    }

    public function isNumberPrime(int $number): bool
    {
        $isPrime = true;
        $divisor = 2;

        while ($divisor < $number) {
            if ($number % $divisor === 0) {
                $isPrime = false;
                break;
            }

            $this->loopCounter += 1;
            $divisor++;
        }

        return $isPrime;
    }

    public function getLoopCounter(): int
    {
        return $this->loopCounter;
    }
}

$task3_4 = new Task_3_4();
var_dump($task3_4->isNumberPrime(23));
echo "<br>";
echo "Liczba cykli: " . $task3_4->getLoopCounter();

echo "<br>";

$task3_4_v2 = new Task_3_4();
var_dump($task3_4_v2->isNumberPrime(8));
echo "<br>";
echo "Liczba cykli: " . $task3_4_v2->getLoopCounter();