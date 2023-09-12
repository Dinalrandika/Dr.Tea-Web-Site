<?php
session_start();
if (empty($_SESSION) || $_SESSION=='Login'){ 
$username= "Login"; }
else { $username=$_SESSION['username'];}
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- Meta Tage -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description"
        content="“Ceylon Culture” is looking forward to reaching out to the global
        community to create a single marketplace which enables the company to engage with
        international buyers’ market to communicate and sell our various product category.we decide to create a web-based platform as “Dr.tea” to improve Sri
        Lankan tea cultivation aiming the local community that are currently engaged and beginners in
        tea plantation with our futuristic Technological Idea and also sell our product through online
        based system to the international market.  ">
    <meta name="keywords"
        content=" tea shop, drink, food, gift shop, online shop, organic, organic tea, responsive, store, tea, tea company, Tea Shop, visual composer cv, cv Html, Html, Html5, personal website" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Website Title -->
    <title>Dr.Tea -Ceylon Culture</title>
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

<body>
    <div id="home"></div>
    <!-- Start The Pageloader -->
    <div class="teashop-pageloader">
        <div class="preloader-spinner"></div>
    </div>
   

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
									<ul class="dropdown-menu drp-mnu" >
                                    <li id="login"> <a href="useraccount.php"><i class="fa fa-sign-in"></i><?= $username; ?></a> </li>
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
                    <h1 class="brand-logo">
                        <a class="smooth-scroll" href="home.php"><img class="smooth-scroll" src="assets/img/logo.png" alt="Dr.Tea" style="width:60px;height:60px;"> Dr.Tea </a>
                    </h1>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav text-right">
                        <li class="active smooth-scroll"><a href="index.php">Home</a></li>
                        <!-- <li class="smooth-scroll"><a href="#product">product </a></li> -->
                        <li class="smooth-scroll"><a href="about.php">About</a></li>
                        <!-- <li class="smooth-scroll"><a href="#featurs">features</a></li> -->
                        <li class="smooth-scroll"><a href="shop.php">shop</a></li>
                        <li class="smooth-scroll"><a href="blog-page.php">blog </a></li>
                        <li class="smooth-scroll"><a href="#contact">contacts</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navigation Ends -->
    </header>
    <!-- Header Ends -->

    <!-- Start the Homes lider -->
    <section id="home-slider">
        <!-- Start Slider Wraper -->
        <div class="slider-waper">
            <!-- Slider Single Item -->
            <div class="single-slide-item slider-bg-1 bg-overlay">
                <div class="container">
                    <div class="teashop-table">
                        <div class="teashop-table-cell">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1>We have <span>something</span></h1>
                                    <p>special even for your refined taste</p>
                                    <a href="shop.php" class="teashop-btn">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider Single Item -->

            <!-- Slider Single Item -->
            <div class="single-slide-item slider-bg-2 bg-overlay">
                <div class="container">
                    <div class="teashop-table">
                        <div class="teashop-table-cell">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1>We have <span>something</span></h1>
                                    <p>special even for your refined taste</p>
                                    <a href="shop.php" class="teashop-btn">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider Single Item -->

            <!-- Slider Single Item -->
            <div class="single-slide-item slider-bg-3 bg-overlay">
                <div class="container">
                    <div class="teashop-table">
                        <div class="teashop-table-cell">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1>We have <span>something</span></h1>
                                    <p>special even for your refined taste</p>
                                    <a href="shop.php" class="teashop-btn">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider Single Item -->

            <!-- Slider Single Item -->
            <div class="single-slide-item slider-bg-4 bg-overlay">
                <div class="container">
                    <div class="teashop-table">
                        <div class="teashop-table-cell">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1>We have <span>something</span></h1>
                                    <p>special even for your refined taste</p>
                                    <a href="shop.php" class="teashop-btn">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider Single Item -->
        </div>
        <!-- Ends Slider Wraper -->

        <!-- Start Social Icons -->
        <div class="social-icons">
            <div class="container">
                <a href="#"><i class="fa fa-facebook"></i> <span>Facebook</span></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> <span>Twitter</span></a>
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i> <span>Linkedin</span></a>
            </div>
        </div>
        <!-- Ends Social Icons -->
    </section>
    <!-- Home Slider ends -->

    <!-- Start Product -->
    <section class="section-padding" id="product">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <!-- Start Section Header -->
                    <div class="section-header text-center">
                        <h2>Tea is a drink of health <span>& beauty for you</span></h2>
                        <p>Tea is one of the world's most popular beverages, 
                            and for good reason. Not only is it delicious and comforting, but it also has numerous health and beauty benefits. 
                            From supporting the immune system to promoting healthy skin, there are many compelling reasons to make 
                            drinking tea a part of your daily routine.
                        </p>
                    </div>
                    <!-- Ends Section Header -->
                </div>
            </div>
            <div class="row">
                <!-- Start Single Product Box -->
                <div class="col-md-3 col-sm-6">
                    <div class="single-product-box">
                        <h4>Black Tea</h4>
                        <div class="product-photo">
                            <div class="teashop-table">
                                <div class="teashop-table-cell">
                                    <img src="assets/img/product/1.jpg" alt="Product Photo">
                                </div>
                            </div>
                        </div>
                        <p>
Black tea is a type of tea that is more oxidized than green, oolong, and white teas. 
It is made from the leaves of the Camellia sinensis plant and is known for its strong, bold flavor and dark color.
 The level of oxidation in black tea gives it a higher caffeine content than other types of tea.
                        </p>
                        <a class="teashop-btn" href="blog-page.php">View More</a>
                    </div>
                </div>
                <!-- Ends Single Product Box -->

                <!-- Start Single Product Box -->
                <div class="col-md-3 col-sm-6">
                    <div class="single-product-box">
                        <h4>Green Tea</h4>
                        <div class="product-photo">
                            <div class="teashop-table">
                                <div class="teashop-table-cell">
                                    <img src="assets/img/product/2.jpg" alt="Product Photo">
                                </div>
                            </div>
                        </div>
                        <p>Green tea is a type of tea that is made from the leaves of the Camellia sinensis plant and is known for its fresh, grassy flavor and light, pale green color.
                             Unlike black tea, green tea is not oxidized during processing, which helps to preserve its natural compounds and nutrients.
                        </p>
                        <a class="teashop-btn" href="blog-page.php">View More</a>
                    </div>
                </div>
                <!-- Ends Single Product Box -->

                <!-- Start Single Product Box -->
                <div class="col-md-3 col-sm-6">
                    <div class="single-product-box">
                        <h4>Herbal Tea</h4>
                        <div class="product-photo">
                            <div class="teashop-table">
                                <div class="teashop-table-cell">
                                    <img src="assets/img/product/3.jpg" alt="Product Photo">
                                </div>
                            </div>
                        </div>
                        <p>Herbal tea, also known as tisane, is an infusion made from herbs, spices, fruits, flowers, or other plant materials that are not derived from the Camellia sinensis plant, 
                            which is used to make traditional tea. Herbal teas are caffeine-free and can have a wide range of flavors and health benefits, depending on the ingredients used.
                        </p>
                        <a class="teashop-btn" href="blog-page.php">View More</a>
                    </div>
                </div>
                <!-- Ends Single Product Box -->

                <!-- Start Single Product Box -->
                <div class="col-md-3 col-sm-6">
                    <div class="single-product-box">
                        <h4>Orange Tea</h4>
                        <div class="product-photo">
                            <div class="teashop-table">
                                <div class="teashop-table-cell">
                                    <img src="assets/img/product/4.jpg" alt="Product Photo">
                                </div>
                            </div>
                        </div>
                        <p>Orange tea is a type of flavored tea that combines black or green tea with the essence or flavor of oranges. 
                            The tea can be made by steeping orange peels or using a blend of orange flavoring and tea leaves.
                        </p>
                        <a class="teashop-btn" href="blog-page.php">View More</a>
                    </div>
                </div>
                <!-- Ends Single Product Box -->
            </div>
        </div>
    </section>
    <!-- Ends Product -->

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

    <!-- Start Featurs Area -->
    <section class="section-padding" id="featurs">
        <div class="container">
           
                    <!-- Start Section Header -->
                    <div class="section-header text-center">
                        <h2>From the shop <span>Choose your taste</span></h2>
                        <p>Choose your choice of taste with our Different flavors
                        </p>
                    </div>
                      <!-- Start Blog Content -->
    <section class="section-padding" id="blog-page-content">
        <div class="container">
            <div class="row">
                <!-- Start Blog Content -->
                <div >
                <!-- Start Shop Product -->
                <div class="shop-prodcut">
                                    <?php
                                     include 'connection.php';
                                     $sql ="SELECT * FROM images";
                                     $result =mysqli_query($con,$sql);
                                     $num = mysqli_num_rows($result);
                                    echo "<div style='width:100%'>";
                                    while($row=mysqli_fetch_array($result)) {  ?>
                                    <div class="column">
                                    <div class="col-sm-3 shop-items"> 
                                    <div class="shop-cart-box">
                                    <div class="cart-price">
                                    <img src=uploads/<?=$row[3]?> width='400' height='400'>
                                    <a class="teashop-btn" href="#"><?=$row[1]?></a>
                                    </div>
                                    </div>
                                    <p>Rs.<?=$row[2]?>.00</p>
                                    <a type="button" href="shop.php"><i class="fa fa-cart-plus"></i>Add to Cart</a>
                                </div>
                            </div></div>
                            <?php } ?></div></div>
                    <!-- Ends Section Header -->
                </div>
            </div>
          


    <!-- Start Health -->
    <section class="section-padding" id="health">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-header">
                        <h2>Why Tea is so Healthy?</h2>
                        <p>Tea, particularly green tea and herbal tea, is often associated with various health benefits. 
                            Some of the reasons why tea can be considered healthy include: </p>
                    </div>
                    <ul class="health-list">
                        <li>High in antioxidants: Tea contains a high concentration of antioxidants, which are compounds that can help to protect the body from damage caused by free radicals. Antioxidants have been linked to a variety of health benefits, including reduced inflammation, 
                            improved heart health, and a lower risk of certain types of cancer.</li>
                        <li>Low in calories: Tea is a low-calorie beverage that can be a healthy alternative to sugary drinks. 
                            Drinking tea instead of sugar-sweetened beverages like soda or juice can help to reduce calorie intake and promote weight loss.</li>
                        <li>Can improve brain function: The caffeine and other compounds in tea can help to improve mental alertness and cognitive function. 
                            Some studies have also suggested that drinking tea may help to reduce the risk of cognitive decline and dementia in older adults.</li>
                        <li>Can promote relaxation and reduce stress: Many types of tea, such as chamomile and lavender, 
                            have natural calming properties that can help to promote relaxation and reduce stress and anxiety.</li>
                        <li>May reduce the risk of certain diseases: Some studies have suggested that drinking tea may help to reduce the risk of certain diseases, 
                            such as heart disease, stroke, and some types of cancer. However, more research is needed to fully understand the potential health benefits of tea.</li>    
                    </ul>
                    <a class="read-btn" href="blog-page.php">Read The Article <i class="fa fa-long-arrow-right"></i></a>
                </div>
                <div class="col-md-6">
                    <div class="health-bg">
                        <img src="assets/img/helth-tea.jpg" alt="healthy photo">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ends Health -->

    <!-- Start Blog -->
    <section class="section-padding" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- Start Section Header -->
                    <div class="section-header text-center">
                        <h2>Latest blog on tea shop <span>tea as your life style</span></h2>
                        <p>Tea can be incorporated into your lifestyle in a variety of ways, depending on your personal preferences and habits. Some people enjoy drinking tea as a daily ritual, 
                            while others use tea as a way to unwind and relax after a long day. Here are some ways that tea can become part of your lifestyle:
                        </p>
                    </div>
                    <!-- Ends Section Header -->
                </div>
            </div>

            <!-- Start Blog Content Row -->
            <div class="row blog-content-wrap">
                <div class="col-sm-6">
                    <div class="blog-bg blog-bg-1"></div>
                </div>
                <div class="col-sm-6">
                    <div class="blog-content-box">
                        
                        <p>Use tea to promote relaxation and reduce stress: Many types of tea, such as chamomile, lavender, and valerian root, have natural calming properties that can help to promote relaxation and reduce stress and anxiety. 
                            Incorporating these teas into your evening routine can help to promote a sense of calm and help you to unwind before bedtime. </p>

                    </div>
                </div>
            </div>
            <!-- Ends Blog Content Row -->

            <!-- Start Blog Content Row -->
            <div class="row blog-content-wrap">
                <div class="col-sm-6 col-sm-push-6">
                    <div class="blog-bg blog-bg-2"></div>
                </div>
                <div class="col-sm-6 col-sm-pull-6">
                    <div class="blog-content-box right-content">
                        
                        <p> Choose your favorite type of tea: With so many types of tea available, 
                            it's important to find the ones that you enjoy the most. Experiment with different flavors and blends until you find the ones that suit your taste preferences.</p>
                        
                    </div>
                </div>
            </div>
            <!-- Ends Blog Content Row -->

            <!-- Start Blog Content Row -->
            <div class="row blog-content-wrap">
                <div class="col-sm-6">
                    <div class="blog-bg blog-bg-3"></div>
                </div>
                <div class="col-sm-6">
                    <div class="blog-content-box">
                        
                        <p>Make tea a part of your daily routine: Whether you prefer to start your day with a cup of tea or enjoy it in the afternoon as a pick-me-up, 
                            making tea a regular part of your routine can help you to incorporate it into your lifestyle. </p>
                        <a class="read-btn" href="blog-page.php">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Ends Blog Content Row -->
            </div>
    </section>
    <!-- Ends Blog -->
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
                    <form action="process.php" method="post">
                        <div class="form_group" id="name_field">
                            <div class="input_field">
                                <input type="text" name="u_name" id="u_name" required="required" placeholder="Name..">
                            </div>
                        </div>
                        <div class="form_group" id="email_field">
                            <div class="input_field">
                                <input type="email" name="u_email" id="u_email" required="required" placeholder="Email..">
                            </div>
                        </div>
                        <div class="form_group" id="massage_field">
                            <div class="input_field">
                                <input type="text" name="u_massage" id="u_massage" required="required" placeholder="Massage..">
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
    <script>
// Get the button, and when the user clicks on it, execute myFunction
document.getElementById("myBtn").onclick = function() {myFunction()};

/* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
</script>
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
    <!-- Active Scripts -->
    <script type="text/javascript" src="assets/js/active.js"></script>
    <script>
    function logouthide() 
        { 
        if($_SESSION="Login" || empty($_SESSION))
        {
            var element = document.getElementById("logout");
            element.style.display = "none";
        }
        elseif($_SESSION=$username)
        {
            var element = document.getElementById("logout");
            element.style.display = "block";
        }
        }
</script>
</body>

</html>