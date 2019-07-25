<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>
<body>
<div class="container">

    <form action="gallery.php" method="post" enctype="multipart/form-data">
        <p>
        <label for="cat_file">Загрузите файл:</label>
        <input type="file" id="cat_file" name="cat_file">
        </p>
        <input type="submit">
    </form>
    <div class="items">
        <?php

        function scan_current_dir($path) {
            $assocCat = [];
            $filesArray = array_slice(scandir($path), 2);
            foreach ($filesArray as $fileItem) {
                $assocCat[$fileItem] = 'small/' . $fileItem;
            }
            return $assocCat;

        }

        $catArray = scan_current_dir('small');
        if (empty($catArray)) {
            echo "No images in gallery";
        } else {
            foreach ($catArray as $key => $cat) {

                echo "<a href=\"normal/$key\" target='blank' class=\"cat\">
                        <div class=\"item\">
                          <figure>
                            <img src=\"$cat\" alt=\"cat\">
                            <div class=\"item-text\">
                                <p>$key</p>
                            </div>
                          </figure>
                        </div>
                      </a>";
            }
        }
        ?>
    </div>


</div>
<script>

</script>
</body>
</html>
