<?php
function deleteItem($handle, $id, $table){
    $id = (int)$id;

    if($id == 0)
        return false;

    $query = sprintf("DELETE FROM {$table} WHERE id='%d'", $id);
    $result = mysqli_query($handle, $query);

    if(!$result) {
        die(mysqli_error($handle));
    }

    return mysqli_affected_rows($handle);
}
