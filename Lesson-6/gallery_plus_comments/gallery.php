<?php

function scan_current_dir($path)
{
    $assocCat = [];
    $filesArray = array_slice(scandir($path), 2);
    foreach ($filesArray as $fileItem) {
        $assocCat[$fileItem] = 'small/' . $fileItem;
    }
    return $assocCat;
}

function inputChecker($inputArray)
{
    $allowed = ["image/png"];
    if (in_array($inputArray, $allowed)) {
        return true;
    }
    return false;
}

function cropper($inputImage)
{
    $original = imagecreatefrompng("tmp/" . basename($inputImage));
    $modified = imagecrop($original, ['x' => 0, 'y' => 0, 'width' => 261, 'height' => 364]);
    if ($modified !== FALSE) {
        imagepng($modified, "small/" . basename($inputImage));
        imagedestroy($modified);
    }
    imagedestroy($original);
}
/*
$filename = "tmp/" . $_FILES['cat_file']['name'];
$filetype = $_FILES['cat_file']['type'];

/*if (!inputChecker($filetype)) {
    die("Bad image or this isn't an image");
}

if (move_uploaded_file($_FILES['cat_file']['tmp_name'], $filename)) {
    echo "Файл загружен";
    cropper($filename);
    // переместим файл из временной директории
    rename($filename, "normal/" . basename($filename));
    sleep(1); // эмулятор долгой загрузки :)
    header('Location: index.php');
} else {
    echo "Файл не загружен";
    sleep(1); // эмулятор долгой загрузки :)
    header('Location: index.php');
}
*/
