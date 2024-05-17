
<?php
require_once '../config.php';

function query($sql) {
    global $link;
    return mysqli_query($link, $sql);
}

function fetch_all($result) {
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function fetch_assoc($result) {
    return mysqli_fetch_assoc($result);
}
?>
