<?php 

if (isset($_POST['submit'])) {
	include 'connection.php';
    $writer =$_POST["writer"];
    $article =$_POST["article"];
    $date =$_POST["date"];
    $content1 =$_POST["content1"];
    $content2 =$_POST["content2"];
				// Insert into Database
				$sql = "INSERT INTO blog(writer,article,date,content1,content2) 
				        VALUES('$writer','$article','$date',,'$content1','$content2')";
				mysqli_query($conn, $sql);
				header("Location: admin_dashboard.php");
}