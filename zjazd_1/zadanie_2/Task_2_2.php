<?php

class Task_2_2
{
    const NATIONALS = [
        "poland" => "Polish",
        "germany" => "German",
        "greece" => "Greek"
    ];

    public static function getNationality(string $nationality): string
    {
        return self::NATIONALS[$nationality] ?? "";
    }
}

echo Task_2_2::getNationality("poland");