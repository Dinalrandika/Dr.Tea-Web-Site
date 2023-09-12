<?php 

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include 'connection.php';

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];
    $name =$_POST["name"];
    $price =$_POST["price"];

	if ($error === 0) {
		if ($img_size > 999000) {
			$em = "Sorry, your file is too large.";
		    header("Location: itemaddfill.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "INSERT INTO images(name,price,image_url) 
				        VALUES('$name','$price','$new_img_name')";
				mysqli_query($conn, $sql);
				header("Location: admin_dashboard.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: itemaddfill.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: itemaddfill.php?error=$em");
	}

}else {
	header("Location: itemaddfill.php");
}