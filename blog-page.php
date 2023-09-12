<?php
session_start();
if (empty($_SESSION) ){ 
header('location:login1.php');}
elseif(isset($_SESSION['username']))
{
$username =$_SESSION['username'];
}
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- Meta Tage -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description"
        content="Green Leaf Tea Shop is a modern and functional html Template best suitable for your Tea Company & Online Tea Shop. Green Leaf Tea Shop has an intuitive visual interface and informative layout that looks wonderful on any platform, since it’s fully responsive ">
    <meta name="keywords"
        content=" drink, food, gift shop, online shop, organic, organic tea, responsive, store, tea, tea company, Tea Shop, template, visual composer cv, portfolio, cv Html, Html, Html5, portfolio tamplate, personal website" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Website Title -->
    <title>Blog</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <!-- All Stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <!-- Custom Style -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

</head>

<body >
    <div id="home"></div>
    <!-- Start The Pageloader -->
    <div class="teashop-pageloader">
        <div class="preloader-spinner"></div>
    </div>
    <!-- Pageloader Ends -->

    <!-- Start The Header -->
    <header>
        <!-- Start Header Top -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-bar text-right">
                            <!-- <span><a href="#"><i class="fa fa-cart-plus"></i>0</a></span> -->
                            <div class="profile_details_left"><!--notifications of menu start -->
						<div class="profile_details">		
							<ul>
								<li class="dropdown profile_details_drop">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										<div class="profile_img">	
											<span class="prfil-img"><img src="assets/img/images.png" style="width:50px;height:50px;" alt=""></span> 
                                            
											<div class="clearfix"></div>	
										</div>	
									</a>
									<ul class="dropdown-menu drp-mnu">
                                    
                                        <li id="login"> <a href="useraccount.php"><i class="fa fa-sign-in"></i><?= $username; ?></a> </li>
										<li  id="logout"> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ends Header Top -->

        <!-- Start The Navigation -->
        <nav class="navigation-area stickyNav">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target=".navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1 class="brand-logo"><a class="" href="home.php"><img src="assets/img/logo.png" alt="Dr.Tea" style="width:60px;height:60px;"> Dr.Tea </a></h1>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav text-right">
                        <li class="smooth-scroll"><a href="index.php">Home</a></li>
                        <!-- <li class="smooth-scroll"><a href="#">product </a></li> -->
                        <li class="smooth-scroll"><a href="about.php">About</a></li>
                        <!-- <li class="smooth-scroll"><a href="#">features</a></li> -->
                        <li class="smooth-scroll"><a href="shop.php">shop</a></li>
                        <li class="active smooth-scroll"><a href="blog-page.php">blog </a></li>
                        <li class="smooth-scroll"><a href="#contact">contacts</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navigation Ends -->
    </header>
    <!-- Header Ends -->

    <!-- Start Page Banner -->
    <section class="section-padding bg-overlay page-banner blog-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h2>Blog</h2>
                    </div>
                    <!-- Breadcrumb -->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ol>
                    <!-- Breadcrumb -->
                </div>
            </div>
        </div>
    </section>
    <!-- Ends Page Banner -->

    <!-- Start Blog Content -->
    <section class="section-padding" id="blog-page-content">
        <div class="container">
            <div class="row">
                <!-- Start Blog Content -->
                <div >
                    <!-- Start Blog Post Content -->
                    <div class="blog-post-content">

<!-- Start Signle Blog Box -->
<div class="signle-blog-box">
<?php
                                     include 'connection.php';
                                     $sql ="SELECT * FROM blog";
                                     $result =mysqli_query($con,$sql);
                                     $num = mysqli_num_rows($result);
                                    while($row=mysqli_fetch_array($result)) {   ?>
                            <div class="blog-bg blog-bg-2"></div>
                            <div class="blog-content-box">
                                <h3><?=$row[0]?></h3>
                                <div class="blog-meta">
                                    <span><i class="fa fa-calendar"></i><?=$row[2]?></span>
                                    <span><a href="#"><i class="fa fa-user"></i><?=$row[1]?></a></span>
                                </div>
                                <p><?=$row[3]?></p>
                                    <a  class="read-btn" >Read More <i class="fa fa-long-arrow-down"></i></a>
                                    
                                <p><?=$row[4]?></p>
                            </div>
                        </div><?php }     ?>
                        <!-- Ends Signle Blog Box -->
                    </div>
                    <!-- Ends Blog Post Content -->
                </div>
                <!-- Ends Blog Content -->
            </div>
        </div>
    </section>
    <!-- Ends Blog Content -->
   <!-- Start Contact  -->
   <section class="section-padding bg-overlay" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="section-header text-center">
                    <h2>Get in touch <span>contact</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <ul class="contact-info">
                    <li>
                        <i class="fa fa-map-marker"></i>
                        914,pallegama <br>
                        Deniyaya,800522
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        +94716942730 <br>
                        +94768000350
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        <a href="https://mail.google.com/">ceylonculture@gmail.com</a> <br>
                        <a href="https://mail.google.com/">dinalrandika@gmail.com</a>
                    </li>
                    <li>
                        <i class="fa fa-globe"></i>
                        <a href="#">www.ceylonculture.com</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6">
                <div class="contact-form">
                    <form action="process.php"  method="post">
                        <div class="form_group" id="name_field">
                            <div class="input_field">
                                <input type="text" name="m_name" id="m_name" required="required"
                                    placeholder="Name..">
                            </div>
                        </div>
                        <div class="form_group" id="email_field">
                            <div class="input_field">
                                <input type="email" name="m_email" id="m_email" required="required"
                                    placeholder="Email..">
                            </div>
                        </div>
                        <div class="form_group" id="massage_field">
                            <div class="input_field">
                                <input type="text" name="m_massage" id="m_massage" required="required"
                                    placeholder="Massage..">
                            </div>
                        </div>
                        <div class="form_group">
                            <div class="input_field">
                                <button class="teashop-btn" type="submit" Name="submt_message">Send Massage</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Ends Contact  -->

    <!-- Start The ScrollToTop -->
    <div class="ScrollToTop">
        <a href="#"><i class="fa fa-angle-up"></i></a>
    </div>
    <!-- ScrollToTop Ends -->

    <!-- Start Footer -->
    <footer class="section-padding" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-top text-center">
                        <img src="assets/img/logo.png" alt="">
                        <!-- Social Icons -->
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                            <a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                            <a href="#"><i class="fa fa-linkedin"></i> Linkedin</a>
                        </div>
                        <!-- Social Icons -->
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright text-center">
                             2023 All Right Reserved. Design by <a
                                href="https://www.facebook.com/dinal.randika.71?mibextid=LQQJ4d" target="_blank">Dinal & Tharindu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </footer>
    <!-- Ends Footer -->

    <!-- 
		All Script
	================================ -->
    <script type="text/javascript" src="assets/js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-3.3.7.min.js"></script>
    <script type="text/javascript" src="assets/js/sticky.js"></script>
    <script type="text/javascript" src="assets/js/easing.min.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/isotope-3.0.4.min.js"></script>
    <script type="text/javascript" src="assets/js/magnific-popup.min.js"></script>
    <script type="text/javascript" src="assets/js/wow-1.3.0.min.js"></script>
    <!-- Active Scripts -->
    <script type="text/javascript" src="assets/js/active.js"></script>
</body>

</html>