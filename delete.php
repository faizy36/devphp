<?php

include 'game.php';

$id =$_REQUEST['page_id'];
$delete = "DELETE FROM pages WHERE page_id =$id";

$result = mysqli_query($conn, $delete);

header("location: all_pages.php");

?>