<?php
session_start();
$age = $_POST['age'];
$_SESSION['age'] = $age;
$result = $_SESSION;
echo '<pre>';
print_r($result);
echo '</pre>';

echo '<pre>';
print_r($_COOKIE);
echo '</pre>';
echo session_id();