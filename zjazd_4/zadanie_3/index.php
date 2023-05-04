<?php
$is_page_refreshed = (isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] == 'max-age=0');
if (false == $is_page_refreshed) {
    if (empty($_COOKIE["counter"])) {
        $_COOKIE["counter"] = 1;
        setcookie("counter", 1);
    } else {
        setcookie("counter", $_COOKIE['counter'] += 1);
    }
}
?>

<h1>
    <?= $_COOKIE["counter"] ?>
</h1>
