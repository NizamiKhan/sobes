<?php
session_start();
$name = $_POST['name'];
$_SESSION['name'] = $name;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task1</title>
</head>
<body>
<form action="task2.php" method="post">
    Введите фамилию: <input type="text" name="fam"><br>
    <input type="submit" value="Далее">
</form>
</body>
</html>
