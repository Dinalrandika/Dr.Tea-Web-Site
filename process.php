<?php
session_start();
header('location:index.php');
header('location:home.php');
header('location:about.php');
header('location:shop.php');
header('location:blog-page.php');
if(isset($_POST['u_name']))
{
//accept data
$name = $_POST["u_name"];
$email=$_POST["u_email"];
$message = $_POST["u_massage"];
include 'connection.php';
//perform sql
$sql ="INSERT INTO feedback (name,email,message) values('$name','$email','$message')";
$ret=mysqli_query($con,$sql);
echo "Message sent !!!";
//disconnect
mysqli_close($con);
}
else if(isset($_POST['m_name']))
{
//accept data
$name = $_POST["m_name"];
$email=$_POST["m_email"];
$message = $_POST["m_massage"];
include 'connection.php';
//perform sql
$sql ="INSERT INTO messages (name,email,message) values('$name','$email','$message')";
$ret=mysqli_query($con,$sql);
echo "Message sent !!!";
//disconnect
mysqli_close($con);
}
?>