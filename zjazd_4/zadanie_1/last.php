<?php
session_start();
$first_name = $_SESSION['first_name'] ?? "";
$last_name = $_SESSION['last_name'] ?? "";
$age = $_SESSION['age'] ?? "";
$credit_card = $_SESSION['credit_card'] ?? "";
$count_of_quest = $_SESSION['count_of_quest'] ?? "";
session_destroy()
?>


<?php if (false == in_array("", [$first_name, $last_name, $age, $credit_card, $count_of_quest])) { ?>

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
        Imie: <?= $first_name ?> <br>
        Nazwisko: <?= $last_name ?> <br>
        Wiek: <?= $age ?> <br>
        Karta: <?= $credit_card ?> <br>
        Liczba gości: <?= $count_of_quest ?> <br>
        <?php for ($i = 1; $i <= $count_of_quest; $i++) { ?>
            Gość <?= $i ?>: <?= $_SESSION["name_$i"] ?>
        <?php } ?>
    </div>
</body>
</html>

<?php } else { ?>
    <h1>Nie ma danych w sesji</h1>
<?php } ?>

