<?php
session_start();
include 'connection.php';
header('location:login1.php');

if(isset($_POST['username'])){
//accept data
$username = $_POST['username'];
$password = $_POST["signup-password"];
$email=$_POST['email'];
$confirmpassword = $_POST['confirm-password'];
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

$sql = "SELECT * FROM users WHERE username='$username' ";
        $result= mysqli_query($con, $sql);
        $num_row = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);
        if($password != $confirmpassword)
                {
                     $message="dosent match password and confirm password!";
                     echo "<script type='text/javascript'>alert('$message')</script>";
                }
                else
                {
                    if($row['username'] == $username)
                     {  
                     echo '<script>alert("Username is Taken ")</script>';
                     }
                     else
                     {
                        $sql ="INSERT INTO users (username,password,email) values('$username','$password','$email')";
                        $ret=mysqli_query($con,$sql);
                        $_SESSION['username']=$username;
                        header('location:index.php');
                     }
                }



//disconnect
mysqli_close($con);
}
?>