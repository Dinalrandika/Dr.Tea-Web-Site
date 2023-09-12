<?php
session_start();
include 'connection.php';
header('location:login1.php');

if(isset($_POST['username']))
{
//accept data
$username =$_POST["username"];
$password = $_POST["signin-password"];
//perform sql
$user_sql ="SELECT * FROM users WHERE username='$username'";
$U_result=mysqli_query($con,$user_sql);
$num = mysqli_num_rows($U_result);
$row = mysqli_fetch_array($U_result);
if($row['username']==$username)
{
$_SESSION['username']=$username;
header('location:index.php');
}
else
{
$admin_sql ="SELECT * FROM admins WHERE username='$username'";
$A_result=mysqli_query($con,$admin_sql);
$num = mysqli_num_rows($A_result);
$row = mysqli_fetch_array($A_result);
if($row['username']==$username)
{
$_SESSION['username']=$username;
header('location:admin_dashboard.php');
}
else
{
header('location:login1.php');
}
}

//disconnect
mysqli_close($con);
}



?>