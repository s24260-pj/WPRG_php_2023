<?php

if (!empty($_POST)) {
    try {
        $db = new PDO('mysql:host=localhost;dbname=mojabaza', "root", "");
    } catch (PDOException $exception) {
        throw new PDOException($exception->getMessage(), (int)$exception->getCode());
    }

    $data = [
        "marka" => $_POST['marka'] ?? "",
        "model" => $_POST['model'] ?? "",
        "cena" => $_POST["cena"] ?? 0,
        "rok" => $_POST["rok"] ?? "",
        "opis" => $_POST["opis"] ?? ""
    ];

    $sql = "INSERT INTO samochody (marka, model, cena, rok, opis) VALUES(:marka, :model, :cena, :rok, :opis);";
    $db->prepare($sql)->execute($data);
}
?>

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
<div id="container">
    <?php require "header.html" ?>
    <form action="" method="post">
        <label for="model">
            Model
        </label>
        <input id="model" type="text" name="model" required>
        <br>
        <label for="marka">
            Marka
        </label>
        <input id="marka" type="text" name="marka" required>
        <br>
        <label for="cena">
            Cena
        </label>
        <input id="cena" type="number" name="cena" required>
        <br>
        <label for="rok">
            Rok
        </label>
        <input id="rok" type="number" name="rok" required min="1900">
        <br>
        <label for="opis">
            Opis
        </label>
        <textarea id="opis" name="opis"></textarea>
        <br>
        <input type="submit" value="zapis">
    </form>
</div>
</body>
</html>