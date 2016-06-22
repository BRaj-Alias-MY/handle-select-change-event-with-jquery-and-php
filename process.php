<?php
$mysqli = new mysqli("localhost", "root", "root", "test_db");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//getting gender from previous page through jquery
$title = $_POST['title'];
$result = $mysqli->query("insert tbl_titles(title) values('".$title."')");
if($result)
echo "Title Inserted Successfully!";
else
echo "Not Inserted";
?>