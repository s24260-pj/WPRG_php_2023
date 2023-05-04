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
<div>
    <form action="next.php" method="post">
        <label for="first_name">Imie:</label>
        <input id="first_name" type="text" name="first_name" required>

        <label for="last_name">Nazwisko:</label>
        <input id="last_name" type="text" name="last_name" required>

        <label for="age">Wiek:</label>
        <input id="age" type="number" name="age" min="18" required>

        <label for="credit_card">Numer Karty:</label>
        <input id="credit_card" type="tel" name="credit_card" pattern="\d*" maxlength="16" required>

        <label for="count_of_quest">Liczba gości: </label>
        <input id="count_of_quest" type="number" name="count_of_quest" min="0" required>

        <input type="submit" name="submit_first" value="Next ->">
    </form>
</div>
</body>
</html>