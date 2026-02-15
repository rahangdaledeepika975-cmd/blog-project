<?php
include "db.php";

$id = $_GET['id'];

$query = "DELETE FROM posts WHERE Id=$id";
mysqli_query($conn, $query);

header("Location: view_posts.php");
?>
