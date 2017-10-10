<?php
if (isset($_COOKIE['name'])) {
    $name = $_COOKIE['name'];
} else {
    $name = "Гость";
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
<h1>страница page</h1>
<p>hello, <?= $name; ?></p>
<a href="index.php">назад</a>
</body>
</html>
