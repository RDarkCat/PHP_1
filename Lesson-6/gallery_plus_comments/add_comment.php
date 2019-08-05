<?php
include 'config.php';

$title = strip_tags($_POST['commentTitle']);
$area = strip_tags($_POST['commentArea']);
$id = (int)$_POST['cat_id'];

if (isset($title) && !empty($title)) {
    $sql = mysqli_query($handle, "INSERT INTO comments (title, message, cat_id) VALUES ('$title','$area', $id)");
}

