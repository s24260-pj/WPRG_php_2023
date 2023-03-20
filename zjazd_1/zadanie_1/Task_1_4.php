<?php

class Task_1_4
{
    public static function getBirthDayFromPesel(string $pesel): string
    {
        $yearOfBirth = substr($pesel, 0, 2);
        $monthOfBirth = substr($pesel, 2, 2);
        $dayOfBirth = (int)substr($pesel, 4, 2);

        $monthOfBirth = $monthOfBirth > 20
            ? $monthOfBirth - 20 < 10
                ? "0" . ($monthOfBirth - 20)
                : $monthOfBirth - 20
            : $monthOfBirth;

        return "Uzytkowni urodzil sie: $dayOfBirth/$monthOfBirth/$yearOfBirth";
    }
}


echo Task_1_4::getBirthDayFromPesel("02291012032");