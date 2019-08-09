<?php
    include_once "../config/connect.php";
    # $sentValues = file_get_contents("php://input");
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");

    #$getValues = json_decode($sentValues);

    $isFrontCatalog = 9; //(int)$getValues->{'is_front'};
    $queryAll = "SELECT * FROM products ORDER BY RAND() LIMIT 9"; //sprintf("SELECT * FROM products ORDER BY RAND() LIMIT '%d'", $isFrontCatalog);
    $result = mysqli_query($handle, $queryAll);
    $products = array();

    while ($catalogArray = mysqli_fetch_assoc($result)){
        $tmp = array();
        $tmp['id_product'] = $catalogArray['id'];
        $tmp['product_name'] = $catalogArray['title'];
        $tmp['price'] = $catalogArray['price'];
        $tmp['product_link'] = "http://localhost:8888/img/item" . $catalogArray['id'] . ".jpg";
        array_push($products, $tmp);
    }

    echo json_encode($products);
