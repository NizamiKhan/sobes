<?php
if (isset($_POST['name']) && !empty($_POST['name'])) {
    $name = $_POST['name'];
    setcookie('name', $name, time() + 5);
    echo $name;
} elseif (isset($_COOKIE['name'])) {
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
    <title>Страница index</title>
</head>
<body>
<h1>Страница index</h1>
<a href="page.php">Страница page</a><br><br>
<p>Привет, <?php echo $name; ?></p>
<form method="post">
    <input type="text" name="name"><br>
    <input type="submit"><br>
</form>
</body>
</html>
