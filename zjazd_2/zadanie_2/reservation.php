<?php
$peopleQuantity = $_POST["people_quantity"];
$firstName = $_POST["first_name"];
$secondName = $_POST["second_name"];
$address = $_POST["address"];
$cardNumber = $_POST["card_number"];
$email = $_POST["email"];
$date = $_POST["date"];
$hour_of_arrival = $_POST["hour_of_arrival"];
$extra_bed_for_child = $_POST["extra_bed_for_child"] ?? "";
$amenities = $_POST["amenities"] ?? [];
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
</div>
</body>
</html>
