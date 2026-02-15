<?php
include "db.php";

$result = mysqli_query($conn, "SELECT * FROM posts");

while ($row = mysqli_fetch_assoc($result)) {
    echo "<h2>".$row['Title']."</h2>";
    echo "<p>".$row['Content']."</p>";
    echo "<hr>";
}
?>
