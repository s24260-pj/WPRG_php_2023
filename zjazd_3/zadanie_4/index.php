<?php
$file = "./restricted.txt";

$f = fopen($file, 'r');
$lines = [];

while (!feof($f)) {
    $line = fgets($f);
    $lines[] = $line;
}

return in_array( $_SERVER['REMOTE_ADDR'], $lines)
    ? require("404.html")
    : require("index.html");
