<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Strona glowna</title>
</head>
<body>
<?php
    try {
        $db = new PDO('mysql:host=localhost;dbname=mojabaza', "root", "");
    } catch (PDOException $exception) {
        throw new PDOException($exception->getMessage(), (int)$exception->getCode());
    }

    require "Car.php";
    $cars = $db->query("SELECT * FROM samochody ORDER BY cena LIMIT 5;")->fetchAll(PDO::FETCH_CLASS, 'Car')

?>
<div id="container">
    <?php require "header.html" ?>
    <main>
        <table>
            <tr>
                <th>id</th>
                <th>marka</th>
                <th>model</th>
                <th>cena</th>
                <th>rok</th>
                <th>opis</th>
            </tr>
            <?php foreach ($cars as $car) { ?>
                <tr>
                    <td><?= $car->id ?></td>
                    <td><?= $car->marka ?></td>
                    <td><?= $car->model ?></td>
                    <td><?= $car->cena ?></td>
                    <td><?= $car->rok ?></td>
                    <td><?= $car->opis ?></td>
                </tr>
            <?php } ?>
        </table>
    </main>
</div>
</body>
</html>