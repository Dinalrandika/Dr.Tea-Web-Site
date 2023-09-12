<?php
include 'connection.php';
$sql = "SELECT message FROM feedback WHERE name ='pasan';
$result = mysqli_query($conn, $sql);

// fetch value
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $value = $row["message"];
    $_SESSION['name1']=$value;
    header('location:about.php');
} else {
    $value1 = "No data found.";
}


?>               