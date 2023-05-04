<?php
if (empty($_COOKIE["counter"])) {
    $_COOKIE["counter"] = 1;
    setcookie("counter", 1);
} else {
    setcookie("counter", $_COOKIE['counter'] += 1);
}
?>

<h1>
    <?= $_COOKIE["counter"] ?>
</h1>
