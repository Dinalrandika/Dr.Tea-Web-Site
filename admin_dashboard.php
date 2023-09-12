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
					<a href="admin_dashboard.php"><h1>User Account</h1></a>
				</div>
				<div>Welcome<h2><?= $username; ?></h2></div>
</div>
				<!--//logo-->
				<div class="header-left">
					<div class="profile_details_left"><!--notifications of menu start -->
						<div class="profile_details">		
							<ul>
								<li class="dropdown profile_details_drop">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										<div class="profile_img">	
											 <span class="prfil-img"><img src="assets\img\admin1.png" style="width:150px;height:75px;" alt=""></span> 
											<div class="clearfix"></div>	
										</div>	
									</a>
									<ul class="dropdown-menu drp-mnu">
                                        <li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
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
			<div class="main-page">
				<div class="four-grids">
					<div class="col-md-3 four-grid">
						<div class="four-grid1">
							<div class="icon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></div>
							<div class="four-text"><h3>Admin Users</h3></div>
							</div></div>
					<button onclick="showadminTable()">Details</button>				<div id="b1" hidden="hidden"><a  onclick="hideadminTable()">Hide</a></div>
<div id="table-container1"></div>
</div></div>

<div >
			<div class="main-page">
				<div class="four-grids">
					<div class="col-md-3 four-grid">
						<div class="four-grid2">
							<div class="icon"><i class="glyphicon glyphicon-align-justify " aria-hidden="true"></i></div>
							<div class="four-text"><h3>Customers</h3></div>
							</div></div>
					<button onclick="showcustomerTable()">Details</button>			<div id="b2" hidden="hidden"><a  onclick="hidecustomerTable()">Hide</a></div>
<div id="table-container2"></div></div>
</div></div>
<div>
			<div class="main-page">
				<div class="four-grids">
					<div class="col-md-3 four-grid">
						<div class="four-grid3">
							<div class="icon"><i class="glyphicon glyphicon-bell" aria-hidden="true"></i></div>
							<div class="four-text"><h3>Feedbacks</h3></div>
							</div></div>
					<button onclick="showfeedbackTable()">Details</button>			<div id="b3" hidden="hidden"><a  onclick="hidefeedbackTable()">Hide</a></div>
<div id="table-container3"></div></div>
</div></div>
<div >
			<div class="main-page">
				<div class="four-grids">
					<div class="col-md-3 four-grid">
						<div class="four-grid4">
							<div class="icon"><i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i></div>
							<div class="four-text"><h3>Items</h3></div>
							</div></div>
					<button onclick="showitemTable()">Details</button>				<div id="b4"  hidden="hidden"><a onclick="hideitemTable()">Hide</a></div>					<a href="itemaddfill.php">Add a product</a>					
<div id="table-container4"></div></div>
</div>
</div>
<div >
			<div class="main-page">
				<div class="four-grids">
					<div class="col-md-3 four-grid">
						<div class="four-grid2">
							<div class="icon"><i class="glyphicon glyphicon-align-justify " aria-hidden="true"></i></div>
							<div class="four-text"><h3>Messages</h3></div>
							</div></div>
					<button onclick="showmessagesTable()">Details</button>			<div id="b5" hidden="hidden"><a  onclick="hidemessagesTable()">Hide</a></div>
<div id="table-container5"></div></div>
</div></div>
<div >
			<div class="main-page">
				<div class="four-grids">
					<div class="col-md-3 four-grid">
						<div class="four-grid1">
							<div class="icon"><i class="glyphicon glyphicon-user " aria-hidden="true"></i></div>
							<div class="four-text"><h3>Blog</h3></div>
							</div></div>
					<button onclick="showblogTable()">Details</button>			<div id="b6" hidden="hidden"><a  onclick="hidemessagesTable()">Hide</a></div>				<a href="addblogfill.php">Add a blog</a>
<div id="table-container6"></div></div>
</div></div>

</div></div>
</div></div>


<script>

function showadminTable() {
	var x = document.getElementById("table-container1");
	var y = document.getElementById("b1");
  if (x.style.display === "none" && y.style.display === "none") {
    x.style.display = "block";
	y.style.display = "block";
  } else {
	var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("table-container1").innerHTML = this.responseText;
	  document.getElementById("b1").style.display = "block";
    }
  };
  xmlhttp.open("GET", "adminusers.php", true);
  xmlhttp.send();
  }}

  function showcustomerTable() {
	var x = document.getElementById("table-container2");
	var y = document.getElementById("b2");
  if (x.style.display === "none" && y.style.display === "none") {
    x.style.display = "block";
	y.style.display = "block";
  } else {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("table-container2").innerHTML = this.responseText;
	  document.getElementById("b2").style.display = "block";
    }
  };
  xmlhttp.open("GET", "customerusers.php", true);
  xmlhttp.send();
}}


function showfeedbackTable() {
	var x = document.getElementById("table-container3");
	var y = document.getElementById("b3");
  if (x.style.display === "none" && y.style.display === "none") {
    x.style.display = "block";
	y.style.display = "block";
  } else {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("table-container3").innerHTML = this.responseText;
	  document.getElementById("b3").style.display = "block";
    }
  };
  xmlhttp.open("GET", "feedbacks.php", true);
  xmlhttp.send();
}}

function showitemTable() {
	var x = document.getElementById("table-container4");
	var y = document.getElementById("b4");
  if (x.style.display === "none" && y.style.display === "none") {
    x.style.display = "block";
	y.style.display = "block";
  } else {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("table-container4").innerHTML = this.responseText;
	  document.getElementById("b4").style.display = "block";
    }
  };
  xmlhttp.open("GET", "items.php", true);
  xmlhttp.send();
}}
function showmessagesTable() {
	var x = document.getElementById("table-container5");
	var y = document.getElementById("b5");
  if (x.style.display === "none" && y.style.display === "none") {
    x.style.display = "block";
	y.style.display = "block";
  } else {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("table-container5").innerHTML = this.responseText;
	  document.getElementById("b5").style.display = "block";
    }
  };
  xmlhttp.open("GET", "blog.php", true);
  xmlhttp.send();
}}
function showblogTable() {
	var x = document.getElementById("table-container5");
	var y = document.getElementById("b5");
  if (x.style.display === "none" && y.style.display === "none") {
    x.style.display = "block";
	y.style.display = "block";
  } else {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("table-container6").innerHTML = this.responseText;
	  document.getElementById("b6").style.display = "block";
    }
  };
  xmlhttp.open("GET", "blog.php", true);
  xmlhttp.send();
}}
function hideadminTable() { 
	document.getElementById("table-container1").style.display = "none";
	document.getElementById("b1").style.display = "none"; }
	function hidecustomerTable() { 
	document.getElementById("table-container2").style.display = "none";
	document.getElementById("b2").style.display = "none"; }
	function hidefeedbackTable() { 
	document.getElementById("table-container3").style.display = "none";
	document.getElementById("b3").style.display = "none"; }
	function hideitemTable() { 
	document.getElementById("table-container4").style.display = "none";
	document.getElementById("b4").style.display = "none"; }
	function hidemessagesTable() { 
	document.getElementById("table-container5").style.display = "none";
	document.getElementById("b5").style.display = "none"; }
	function hidemessagesTable() { 
	document.getElementById("table-container6").style.display = "none";
	document.getElementById("b6").style.display = "none"; }
</script>


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


