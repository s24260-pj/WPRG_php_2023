<?php
$file = "./adresy.txt";

$f = fopen($file, 'r');
$lines = [];

while(!feof($f)) {
    $line = fgets($f);
    $array = explode(";", $line);

    $link = "http://" . $array[0] . "/" . $array[1];

    echo "<a href='$link'>$link</a>";
    echo "<br>";
}

