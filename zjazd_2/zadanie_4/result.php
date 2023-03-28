<?php
if ($_POST['number'] < 0) echo "<h1>Number cannot be below 0!</h1>";

include "Task_4_1_meet_2.php";
$task = new Task_4_1_meet_2();
$result = $task->isNumberPrime((int) $_POST['number']) ? "yes" : "no";

echo "Is task prime: " . $result;
echo "<br>";
echo "Loop Counter: " . $task->getLoopCounter();
