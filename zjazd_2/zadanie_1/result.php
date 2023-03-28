<?php
$firstNumber = $_POST['first_number'];
$secondNumber = $_POST['second_number'];
$operation = $_POST['operation'];

$result = 0;

switch ($operation) {
    case "add":
        $result = $firstNumber + $secondNumber;
        break;
    case "minus":
        $result = $firstNumber - $secondNumber;
        break;
    case "divide":
        $result = $firstNumber / $secondNumber;
        break;
    case "multiply":
        $result = $firstNumber * $secondNumber;
        break;
}

echo "<h1>Result is $result !</h1>";