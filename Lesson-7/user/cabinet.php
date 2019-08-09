<?php
session_start();
include_once "../config.php";

if ($_SESSION['login'] && (isset($_POST['success']))) {
    echo "<h1>Вы авторизованы!!!</h1>";
}

function getUserData($connect, $user) {
    $sql = "SELECT * from users WHERE id=" . strip_tags($user);
    return mysqli_query($connect, $sql);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Кабинет покупателя.</title>
</head>
<body>

</body>
</html>
