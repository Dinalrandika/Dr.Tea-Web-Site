<?php
session_start();
if (empty($_SESSION) ){ 
header('location:login1.php');
}
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
        content="	coffee, coffee shop, drink, food, gift shop, online shop, organic, organic tea, responsive, store, tea, tea company, Tea Shop, template, visual composer cv, portfolio, cv Html, Html, Html5, portfolio tamplate, personal website" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Website Title  -->
    <title>About</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <!-- All Stylesheet  -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <!-- Custom Style -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>

<body>
    <div id="home"></div>
    <!-- Start The Pageloader -->
    <div class="teashop-pageloader">
        <div class="preloader-spinner"></div>
    </div>
    <!-- Pageloader Ends  -->

    <!-- Start The Header  -->
    <header>
        <!-- Start Header Top  -->
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
                                    
                                        <li id='login'> <a href="useraccount.php"><i class="fa fa-sign-in"></i><?= $username; ?></a> </li>
										<li id="logout"> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
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
        <!-- Ends Header Top  -->

        <!-- Start The Navigation  -->
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
                    <h1 class="brand-logo"><a class="" href="home.php"><img src="assets/img/logo.png" alt="Dr.Tea" style="width:60px;height:60px;"> Dr.Tea </a>
                               </h1>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav text-right">
                        <li class="smooth-scroll"><a href="index.php">Home</a></li>
                        <!-- <li class="smooth-scroll"><a href="#product">product </a></li> -->
                        <li class="active smooth-scroll"><a href="about.php">About</a></li>
                        <!-- <li class="smooth-scroll"><a href="#featurs">features</a></li> -->
                        <li class="smooth-scroll"><a href="shop.php">shop</a></li>
                        <li class="smooth-scroll"><a href="blog-page.php">blog </a></li>
                        <li class="smooth-scroll"><a href="#contact">contacts</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navigation Ends  -->
    </header>
    <!-- Header Ends  -->

    <!-- Start Page Banner  -->
    <section class="section-padding bg-overlay page-banner about-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h2>About Us</h2>
                    </div>
                    <!-- Breadcrumb -->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                        <li class="breadcrumb-item active">about us</li>
                    </ol>
                    <!-- Breadcrumb -->
                </div>
            </div>
        </div>
    </section>
    <!-- Ends Page Banner  -->


    <!-- Start About -->
    <section class="section-padding" id="about">
        <!-- Start Video Button -->
        <div class="video-area bg-overlay">
            <a class="video-play-btn mfp-iframe" href="https://youtu.be/Kv1vQyrEOyA">
                <i class="fa fa-play"></i>
            </a>
        </div>
        <!-- Ends Video Button -->

               <!-- Start About Content -->
               <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-6">
                    <div class="section-header">
                        <h2>About Us</h2>
                        <p> Our Tea Company “Ceylon Culture” is looking forward to reaching out to the global
community to create a single marketplace which enables the company to engage with
international buyers’ market to communicate and sell our various product category.
Our main object is to encourage the local tea producers to increase their production by giving
them most valuable price for their precious products. we are working forward to support them by
exchanging agricultural knowledge with them and create global market for their products. We
hope to create a community platform where every customer can connect with us and get the
knowledge about Ceylon tea.As the first step of that, we decide to create a web-based platform as “Dr.tea” to improve Sri
Lankan tea cultivation aiming the local community that are currently engaged and beginners in
tea plantation with our futuristic Technological Idea and also sell our product through online
based system to the international market. 
 </p>
                    </div>
                    <ul class="about-list">
                        <li>
                            <h3><i class="fa fa-check"></i>100% Natural</h3>
                         
                        </li>
                        <li>
                            <h3><i class="fa fa-check"></i>Fast Delivery</h3>
                            
                        </li>
                        <li>
                            <h3><i class="fa fa-check"></i>Quality Product</h3>
                            
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Ends About Content -->
    </section>
    <!-- Ends About -->

    <!-- Start Team  -->
    <section class="section-padding" id="team">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="section-header text-center">
                        <h2>Meet Our <span>team members</span></h2>
                    </div>
                </div>
            </div>
            <div class="team-slides">
                <div class="single-team-item">
                    <div class="single-team-box">
                        <img src="assets/img/about-page/team/tharindu.jpg" alt="team member">
                        <h4 class="team-overlay">Tharindu Dananjaya <span>Project manager</span></h4>
                    </div>
                </div>
                <div class="single-team-item">
                    <div class="single-team-box">
                        <img src="assets/img/about-page/team/dinal.jpg" alt="team member">
                        <h4 class="team-overlay">Dinal Randika <span>Project manager</span></h4>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Ends Team  -->

    <!-- Start Testimonial  -->
    <!-- <section class="section-padding" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="section-header text-center">
                        <h2>What Our clients say? <span>clients feedback</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="testimonial-slides"> -->
                        <!-- Testimonial Single Item -->
                        <!-- <div class="testimonial-single-item">
                            <div class="clint">
                                <img src="assets/img/testimonial/1.jpg" alt="clint">
                                <div class="clint-name">
                                    <h4>Johny john</h4>
                                    <div class="clint-ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="clint-reviews">
                                <p></p>
                            </div>
                        </div> -->
                        <!-- Testimonial Single Item -->

                       
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
                                <input type="text" name="u_name" id="u_name" required="required"
                                    placeholder="Name..">
                            </div>
                        </div>
                        <div class="form_group" id="email_field">
                            <div class="input_field">
                                <input type="email" name="u_email" id="u_email" required="required"
                                    placeholder="Email..">
                            </div>
                        </div>
                        <div class="form_group" id="massage_field">
                            <div class="input_field">
                                <input type="text" name="u_massage" id="u_massage" required="required"
                                    placeholder="Massage..">
                            </div>
                        </div>
                        <div class="form_group">
                            <div class="input_field">
                                <button class="teashop-btn" type="submit">Send Massage</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Ends Contact  -->


    <!-- Start The ScrollToTop  -->
    <div class="ScrollToTop">
        <a href="#"><i class="fa fa-angle-up"></i></a>
    </div>
    <!-- ScrollToTop Ends  -->

    <!-- Start Footer  -->
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
    <!-- Ends Footer  -->

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
    <!-- Google Map -->
    <script type="text/javascript" src="assets/js/google-map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcTTWvVJPW54aA5PEWrQTldVBFDhC0c-Q"></script>
    <!-- Contact Form -->
    <script type="text/javascript" src="assets/js/contact-form.js"></script>
    <!-- Active Script  -->
    <script type="text/javascript" src="assets/js/active.js"></script>
 
</body>

</html>