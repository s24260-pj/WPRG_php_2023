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
    <?php if (!empty($_GET['id'])) { ?>
        <?php
        try {
            $db = new PDO('mysql:host=localhost;dbname=mojabaza', "root", "");
        } catch (PDOException $exception) {
            throw new PDOException($exception->getMessage(), (int)$exception->getCode());
        }

        require "Car.php";
        $sth = $db->prepare("SELECT * FROM samochody WHERE id = :id;");
        $sth->setFetchMode( PDO::FETCH_CLASS, 'Car');
        $sth->execute(["id" => intval($_GET['id'])]);
        $car = $sth->fetch(PDO::FETCH_CLASS);

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
                <tr>
                    <td><?= $car->id ?></td>
                    <td><?= $car->marka ?></td>
                    <td><?= $car->model ?></td>
                    <td><?= $car->cena ?></td>
                    <td><?= $car->rok ?></td>
                    <td><?= $car->opis ?></td>
                </tr>
            </table>
        </main>
    <?php } else { ?>
        <h1>Nie podano id</h1>
    <?php } ?>
</div>
</body>
</html>
