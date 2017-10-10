<?php
session_start();
$fam = $_POST['fam'];
$_SESSION['fam'] = $fam;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task2</title>
</head>
<body>
<form action="result.php" method="post">
    Ваш возраст: <input type="text" name="age"><br>
    <input type="submit" value="Далее">
</form>
</body>
</html>
