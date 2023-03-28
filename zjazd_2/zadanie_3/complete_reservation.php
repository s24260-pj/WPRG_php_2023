<?php
session_start();
$peopleQuantity = $_POST["people_quantity"] ?? 0;
$_SESSION['first_name'] = $_POST["first_name"] ?? "";
$_SESSION['second_name'] = $_POST["second_name"] ?? "";
$_SESSION['address'] = $_POST["address"] ?? "";
$_SESSION['card_number'] = $_POST["card_number"] ?? "";
$_SESSION["email"] = $_POST["email"] ?? "";
$_SESSION["date"] = $_POST["date"] ?? "";
$_SESSION["hour_of_arrival"] = $_POST["hour_of_arrival"] ?? "";

if (!empty($_POST["extra_bed_for_child"]) && !empty($_POST["amenities"])) {
    $_SESSION["extra_bed_for_child"] = $_POST["extra_bed_for_child"];
    $_SESSION["amenities"] = $_POST["amenities"];
}
?>

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
<form action="reservation.php">
    <?php for ($i = 0; $i < $peopleQuantity; $i++) { ?>
        <label for="first_name_<?= $i ?>">First name:</label>
        <input type="text" name="first_name_<?= $i ?>" id="first_name_<?= $i ?>" required>
        <br><br>
        <label for="second_name_<?= $i ?>">Second name:</label>
        <input type="text" name="second_name_<?= $i ?>" id="second_name_<?= $i ?>" required>
        <br><br>
        <label for="email_<?= $i ?>">E-mail:</label>
        <input type="email" name="email_<?= $i ?>" id="email_<?= $i ?>" required>
        <br><br>
        <hr>
    <?php } ?>
    <input type="submit" value="submit">
</form>
</body>
</html>
