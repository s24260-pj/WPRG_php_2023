<?php
if (!empty($_POST['save_in_session'])) {
    session_start();
    $_SESSION['first_name'] = $_POST['first_name'];
    $_SESSION['last_name'] = $_POST['last_name'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['credit_card'] = $_POST['credit_card'];
    $_SESSION['count_of_quest'] = $count_of_quest = $_POST['count_of_quest'];

    for ($i = $count_of_quest; $i > 0; $i--) {
        $_SESSION["name_$i"] = $_POST["name_$i"];
    }
}

$first_name = $_POST['first_name'] ?? $_SESSION['first_name'];
$last_name = $_POST['last_name'] ?? $_SESSION['last_name'];
$age = intval($_POST['age']) ?? intval($_SESSION['age']);
$credit_card = $_POST['credit_card'] ?? $_SESSION['credit_card'];
$count_of_quest = intval($_POST['count_of_quest']) ?? intval($_SESSION['count_of_quest']);
?>
<form action="next.php" method="post">
    <input type="hidden" name="first_name" value="<?= $first_name ?>">
    <input type="hidden" name="last_name" value="<?= $last_name ?>">
    <input type="hidden" name="age" value="<?= $age ?>">
    <input type="hidden" name="credit_card" value="<?= $credit_card ?>">
    <input type="hidden" name="count_of_quest" value="<?= $count_of_quest ?>">

    <?php for ($i = $count_of_quest; $i > 0; $i--) { ?>
        <label>
            Imie:
            <input type="text" name="name_<?= $i ?>" value="<?= $_SESSION["name_$i"] ?? "" ?>">
        </label>
        <br>
    <?php } ?>

    <input type="submit" name="save_in_session" value="zapisz w sesji">
</form>

<form action="last.php">
    <input type="submit" value="przejdz do podsumowania">
</form>