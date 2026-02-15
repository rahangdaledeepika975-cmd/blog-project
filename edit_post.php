<?php
include "db.php";

$id = $_GET['id'];

if (isset($_POST['update'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    mysqli_query($conn,
        "UPDATE posts SET Title='$title', Content='$content' WHERE Id=$id"
    );

    header("Location: view_posts.php");
}

$result = mysqli_query($conn, "SELECT * FROM posts WHERE Id=$id");
$row = mysqli_fetch_assoc($result);
?>

<form method="post">
    <input type="text" name="title" value="<?php echo $row['Title']; ?>"><br><br>
    <textarea name="content"><?php echo $row['Content']; ?></textarea><br><br>
    <button name="update">Update</button>
</form>
