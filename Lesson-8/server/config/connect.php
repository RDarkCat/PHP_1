<?php
session_start();
require_once 'config.php';

$handle = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE, MYSQL_PORT) or die('Error: ' . mysqli_error($handle));
if (!mysqli_set_charset($handle, "utf8")) {
    printf('Error: ' . mysqli_error($handle));
}
