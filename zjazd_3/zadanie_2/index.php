<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Test</h1>
</body>
</html>

<?php
$file = './licznik.txt';

if(file_exists($file)) {
    $counter = (int) file_get_contents($file);
    $counter++;
    file_put_contents($file, $counter);
} else {
    file_put_contents($file, 1);
    $counter = 1;
}

echo "Tą strone odwiedzono: " . $counter . " razy.";

?>