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
    <div>
        <form action="gallery.php" method="post" enctype="multipart/form-data">
            <p>
                <label for="cat_file">Загрузите файл:</label>
                <input type="file" id="cat_file" name="cat_file">
            </p>
            <input type="submit">
        </form>
    </div>
    <div class="items">
        <?php
        include "config.php";
        $queryAll = "SELECT * FROM images ORDER BY likes DESC";
        $res = mysqli_query($handle, $queryAll);
            while ($catArray = mysqli_fetch_assoc($res)):
                ?>
                <a href="image.php?id=<?=$catArray['id']; ?>" target="blank" class="cat">
                    <div class="item">
                        <figure>
                            <img src="<?=$catArray['path']; ?>" alt="cat">
                            <div class="item-text">
                                <p><?=$catArray['description']; ?></p>
                                <p><?=$catArray['size']; ?>bytes</p>
                                <p><?=$catArray['likes']; ?>likes</p>
                            </div>
                        </figure>
                    </div>
                </a>
            <?php
            endwhile;
        ?>
    </div>
</div>
<script>
</script>
</body>
</html>
