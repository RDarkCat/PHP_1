<?php
include 'config.php';

$id = (int)$_GET['id'];
if (isset($id) && !empty($id)){
    if ($id > 0){
            $sql = mysqli_query($handle,"SELECT * FROM images WHERE id = " . $id);
            $result = mysqli_fetch_row($sql);
        ?>
        <img src="<?=$result[2]?>" alt=""/>
        <p>Size: <?=$result[4]?> bytes</p>
        <?php
            //UPDATE LIKES
            $sqlResult = mysqli_query($handle, "SELECT likes FROM images WHERE id = " . $id);
            $result = mysqli_fetch_row($sqlResult);
        ?>
        <p>Likes: <?=$result[0]?></p>
        <?php
            $newLikes = $result[0] + 1;
            $updateLikes = "UPDATE images set likes=$newLikes WHERE id = ". $id;
            $sqlResult = mysqli_query($handle, $updateLikes);
        ?>
        <p>Comments</p>
        <?php
        $getCatComment = "SELECT comments.title, comments.message FROM comments INNER JOIN images ON (images.id = comments.cat_id) WHERE (images.id=". $id.")";
        $sqlResult = mysqli_query($handle, $getCatComment);
        ?>
        <blockquote>
            <?php
            while ($resultComment = mysqli_fetch_assoc($sqlResult)):
            ?>
            <div>
                    <label>Comment title: <strong><?= $resultComment['title']?></strong></label>
                    <p>
                    <label>Comment:</br><div><?= $resultComment['message']?></div></label>
                    </p>
            </div>
            <?php
            endwhile;
            ?>
        </blockquote>


        <fieldset>
            <legend>Add comment here</legend>
            <form action="add_comment.php" method="post">
            <p>
            <label><input type="text" id="commentTitle" name="commentTitle"></label>
            </p>
            <p>
            <label><textarea id="commentArea" name="commentArea"></textarea></label>
            <input type="hidden" name="cat_id" value="<?=$id?>">
                <input type="submit" value="Post"/>
            </p>
            </form>
        </fieldset>
<?php
    } else {
        exit('Completely wrong data!');
    }
} else {
    exit('Wrong input!');
}
