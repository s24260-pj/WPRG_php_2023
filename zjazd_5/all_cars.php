<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="container">
    <?php

    try {
        $db = new PDO('mysql:host=localhost;dbname=mojabaza', "root", "");
    } catch (PDOException $exception) {
        throw new PDOException($exception->getMessage(), (int)$exception->getCode());
    }

    require "Car.php";
    $cars = $db->query("SELECT * FROM samochody ORDER BY rok;")->fetchAll(PDO::FETCH_CLASS, 'Car')

    ?>
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
                    <td><a href="get_car_info.php?id=<?= $car->id ?>">Szczegóły</a></td>
                </tr>
            <?php } ?>
        </table>
    </main>
</div>
</body>
</html>
