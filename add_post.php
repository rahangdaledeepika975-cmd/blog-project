<?php
include "db.php";

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $query = "INSERT INTO posts (Title, Content) VALUES ('$title', '$content')";
    mysqli_query($conn, $query);

    echo "Post added successfully!";
}
?>

<form method="post">
    <input type="text" name="title" placeholder="Post Title" required><br><br>
    <textarea name="content" placeholder="Post Content" required></textarea><br><br>
    <button name="submit">Add Post</button>
</form>
