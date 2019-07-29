<?php
include_once 'config.php';

$id = $_GET['id'];
if (isset($id) && !empty($id)){
    if (is_numeric($id)){
            $sql = "SELECT * FROM images WHERE id = ". $id;
            $sql = mysqli_query($handle, $sql);
            $result = mysqli_fetch_row($sql);
        ?>
        <img src="<?=$result[2]?>" alt=""/>
        <p>Size: <?=$result[4] ?> bytes</p>
        <?php
            //UPDATE LIKES
            $getLikes = "SELECT likes FROM images WHERE id = " . $id;
            $sqlResult = mysqli_query($handle, $getLikes);
            $result = mysqli_fetch_row($sqlResult);
        ?>
        <p><?=$result[0]?></p>
        <?php
            $newLikes = $result[0] + 1;
            $updateLikes = "UPDATE images set likes=$newLikes WHERE id = ". $id;
            $sqlResult = mysqli_query($handle, $updateLikes);

    } else {
        exit('Completely wrong data!');
    }
} else {
    exit('Wrong input!');
}
