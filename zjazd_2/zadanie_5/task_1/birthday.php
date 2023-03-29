<?php
if (!empty($_GET["birth_day"])) {
    $birthDay = $_GET["birth_day"];
    echo "<p>Birthday day of week:" . date('l', strtotime($birthDay)) . "</p>";

    $now = date_create(date("Y-m-d"));
    $birthDayDate = date_create($birthDay);
    $difference = date_diff($now, $birthDayDate);
    echo "<p>Difference is: " . $difference->format("%y") . " years </p>";

    $currentYear = date("Y");
    $nextBirthDay = strtotime($currentYear . substr($birthDay, 4));
    $currentDateStrTime = strtotime(date("Y-m-d"));

    if ($nextBirthDay - $currentDateStrTime < 0) {
        $nextBirthDay = strtotime((int)$currentYear + 1 . substr($birthDay, 4));
    }

    $difference = $nextBirthDay - $currentDateStrTime;

    echo "<p> To next birthday: " . ($difference / (24*60*60) ) . " days</p>";

} else {
    echo "<h1>You don't provide any date!!</h1>";
}