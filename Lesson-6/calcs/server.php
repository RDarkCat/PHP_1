<?php
include "computation.php";

header("Content-Type: application/json");

$sentValues = file_get_contents("php://input");
$getValues = json_decode($sentValues);

$val3 = (int)$getValues->{'num3'};
$val4 = (int)$getValues->{'num4'};
$operator = strip_tags($getValues->{'operation'});

$resultValue['result'] = mathOperation($val3, $val4, $operator);

echo json_encode($resultValue, true);
