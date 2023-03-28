<?php
var_dump($_SESSION);
$peopleQuantity = $_SESSION["people_quantity"];
$firstName = $_SESSION["first_name"];
$secondName = $_SESSION["second_name"];
$address = $_SESSION["address"];
$cardNumber = $_SESSION["card_number"];
$email = $_SESSION["email"];
$date = $_SESSION["date"];
$hour_of_arrival = $_SESSION["hour_of_arrival"];
$extra_bed_for_child = $_SESSION["extra_bed_for_child"] ?? "";
$amenities = $_SESSION["amenities"] ?? [];

session_destroy();
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
<div>
    <h1>Your reservation</h1>
    <p>People quantity: <?= $peopleQuantity ?></p>
    <p>First Name: <?= $firstName ?></p>
    <p>Second Name: <?= $secondName ?></p>
    <p>Address: <?= $address ?></p>
    <p>Card Number: <?= $cardNumber ?></p>
    <p>Email: <?= $email ?></p>
    <p>Date: <?= $date ?></p>
    <p>Hour of arrival: <?= $hour_of_arrival ?></p>
    <p>Is Extra bed for child: <?= $extra_bed_for_child ? "yes" : "no" ?></p>
    <div>
        <?php if (!empty($amenities)) { ?>
            <p>Amenities:</p>
            <?php foreach ($amenities as $key => $amenity) { ?>
                <p><b><?= $key += 1 ?>:</b> <?= $amenity ?></p>
            <?php } ?>
        <?php } ?>
    </div>
    <hr>
    <?php if (empty($_POST)) { ?>
        <?php for ($i = 0; $i < $peopleQuantity; $i++) { ?>
            <h2>Person <?= $i + 1 ?> : </h2>
            <p>First Name: <?= $_POST["first_name_" . $i] ?></p>
            <p>Second Name: <?= $_POST["second_name_" . $i] ?></p>
            <p>Email: <?= $_POST["email_" . $i] ?></p>
        <?php } ?>
    <?php } ?>
</div>
</body>
</html>
