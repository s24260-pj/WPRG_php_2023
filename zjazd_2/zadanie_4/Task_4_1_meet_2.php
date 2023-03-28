<?php

class Task_4_1_meet_2
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