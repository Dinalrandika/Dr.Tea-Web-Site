<?php
session_start();
if (empty($_SESSION)){ header('location:login1.php');}
elseif(isset($_SESSION['username']))
{
$username =$_SESSION['username'];
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Administrator Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Administrator Dashboard" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="assets\css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="assets\css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="assets\css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!--skycons-icons-->
<script src="assets\js/skycons.js"></script>
<!--//skycons-icons-->

 <!-- js-->
  <script src="assets\js/bootstrap.js"></script>
<script src="assets\js/jquery-1.11.1.min.js"></script>
<script src="assets\js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Comfortaa:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic' rel='stylesheet' type='text/css'>
<!--//webfonts-->  
<!-- Metis Menu -->
<script src="assets\js/metisMenu.min.js"></script>
<script src="assets\js/custom.js"></script>
<link href="assets\css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<link href="assets\css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="assets\js/jquery.sparkline.min.js"></script>
<script type="text/javascript">
    
    </script>
	<script src="assets\js/Chart.js"></script>
	
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--logo -->
				<div class="logo">
					<a href="admin_dashboard.php"><h1>Add Blog</h1></a>
					
				</div>
</div>
				<!--//logo-->
				<div class="header-left">
					<div class="profile_details_left"><!--notifications of menu start -->
						<div class="profile_details">		
							<ul>
								<li class="dropdown profile_details_drop">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										<div class="profile_img">	
											<span class="prfil-img"><h5><?php $username; ?></h5> <img src="assets\img\admin1.png" style="width:100px;height:50px;" alt=""></span> 
											<div class="clearfix"></div>	
										</div>	
									</a>
									<ul class="dropdown-menu drp-mnu">
										<li> <a href="admin_dashboard.php"><i class="fa fa-sign-out"></i>Back</a> </li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->


		<div id="page-wrapper">
			
<div >
<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="addblog.php"
           method="post"
           enctype="multipart/form-data">
           <div>
           <div  style="height:50px"><h2 >Article name   :<input type="text" name="article"></h2></div>
           <div  style="height:50px"><h2 >Writer  :<input type="text" name="writer"></h2></div>
           <div  style="height:50px"><h2 >Date   :<input type="text" name="date"></h2></div>
           <div  style="height:50px"><h2 >Content 1 :<input type="text" name="Content 1"></h2></div>
           <div  style="height:50px"><h2 >Content 2   :<input type="text" name="Content 2"></h2></div>
            &emsp;&emsp;&emsp;     
            <div style="height:75px"><a><h3><input type="submit" name="submit" value="Upload"></h3></a></div>
            </div>
     </form>				
<div id="table-container4"></div></div>
</div>
</div>
</div>
</div>




				<script src="js/amcharts.js" type="text/javascript"></script>
		<script src="assets\js/serial.js" type="text/javascript"></script>
		<script src="assets\js/amstock.js" type="text/javascript"></script>
		<script type="text/javascript" src="assets\js/bootstrap.min.js"></script>
				<!--scrolling js-->
				<script src="assets\js/jquery.nicescroll.js"></script>
				<script src="assets\js/scripts.js"></script>
				<link href="assets\css/bootstrap.min.css" rel="stylesheet">






				


</body>
</html>



