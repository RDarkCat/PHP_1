<?php
include_once "../config/connect.php";
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$sentValues = file_get_contents("php://input");
$getValues = json_decode($sentValues);

$type = $getValues->{'type'};
$user_id = 1;
if ($type === "delete") {
    $id = (int)$getValues->{'id'};
    $sql = "DELETE FROM carts WHERE JSON_EXTRACT(item, \"$.product_id\") = " . $id;
    $result = mysqli_query($handle, $sql);
    $returnObject['id'] = $id;
    echo json_encode($returnObject, JSON_FORCE_OBJECT);
} else {
    $product_id = $getValues->{'product_id'};
    $quantity = $getValues->{'quantity'};
    $returnObject['product_id'] = $product_id;
    $returnObject['quantity'] = $quantity;
    echo json_encode($returnObject, JSON_FORCE_OBJECT);
    $sql = "UPDATE carts SET item = JSON_SET(item, \"$.quantity\", " . $quantity . ") WHERE JSON_EXTRACT(item, \"$.product_id\") = " . $product_id . " AND user_id = 1";
    $result = mysqli_query($handle, $sql);

}
