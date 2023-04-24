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
<form method="post" enctype="multipart/form-data">
    <label>
        <input type="file" name="file" id="file">
    </label>
    <input type="submit" value="do" name="submit">
</form>
<?php

if(isset($_POST['submit'])) {
    $filename = $_FILES['file']['name'];
    $tmpPath = $_FILES['file']['tmp_name'];

    $file = fopen($tmpPath, 'r');
    $lines = [];
    $i = 0;

    while(!feof($file)) {
        $lines[] = fgets($file);
        $i++;
    }

    for ($i = count($lines) - 1; $i >= 0; $i--) {
        echo $lines[$i] , "<br>";
    }
}

?>
</body>
</html>