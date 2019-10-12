








<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/netlogo-135x128.png" type="image/x-icon">
  <meta name="description" content="Web Page Creator Description">
  <title>Web Page Creator Title</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/interface-m/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="assets/interface-m/css/posting.css" type="text/css">
  
  
</head>
<body>
<section id="ext_menu-g">

    <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        
                        <a class="navbar-caption" href="index.html">UWU-NET</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar"><li class="nav-item dropdown"><a class="nav-link link" href="index.html#header1-1">Home</a></li><li class="nav-item"><a class="nav-link link" href="index.html#testimonials1-a">Team</a></li><li class="nav-item dropdown"><a class="nav-link link" href="index.html#header2-f">Articles</a></li><li class="nav-item"><a class="nav-link link" href="index.html#header2-6">Travel</a></li><li class="nav-item"><a class="nav-link link" href="index.html#slider-9">Events</a></li><li class="nav-item"><a class="nav-link link" href="index.html#features3-7">Library</a></li><li class="nav-item"><a class="nav-link link" href="index.html#gallery3-5">Gallery</a></li><li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" href="index.html#contacts2-2" data-toggle="dropdown-submenu" aria-expanded="false">Contact</a><div class="dropdown-menu"><a class="dropdown-item" href="index.html#form1-d">Feedback</a><a class="dropdown-item" href="index.html#form2-4">Newsletter</a><a class="dropdown-item" href="index.html#contacts2-2">Contact us</a></div></li></ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

<section class="engine"></section><section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-k" style="background-image: url(assets/images/nature-2000x1125.jpg); padding-top: 120px; padding-bottom: 0px;">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
    </div>
	 
    <div class="container">
	
       <div class="row" >
	<div><img style=" float :left;" src="assets/images/netlogo-135x128.png">
            <div class="col-md-8 col-md-offset-1">
			
                <h3 class="mbr-section-title display-2 " style="padding-left:-10px; text-align:center;">Uva Wellassa University<br>Nature Explorer Team</h3>
                
				<div class="lead"></div>
              </div>
            </div>
			<div><img style=" width: 120px; height: 150px; padding-bottom: 20px; padding-top:-20px; padding-right:20px;" src="assets/images/uwu-logo.jpg"></div>
        </div>
    
</div>
</section>

<section class="mbr-section mbr-section-hero mbr-section-full" id="header1-j" style="background-color: rgb(192, 163, 117);">

    

    <div class="mbr-table-cell">

        <div class="container">
            <div class="row" style="margin-left: -100px; margin-right: -80px;">
                <div class="mbr-section col-md-12">

                    <div style="float: left; width: 100% ;height: 1000px; margin: 10px; border: 3px solid #C9C9C9;background-color: rgb(240,240,240);  border-radius: 10px;">
                        
                        
                        <?php

require_once ('dbconnector.php');


if (isset($_POST['submit'])){
    $Name=  mysqli_real_escape_string($con,$_POST['Name']);
    $Comment=  mysqli_real_escape_string($con,$_POST['Comment']);
   
    
    $sql="INSERT INTO comment(Name,Comment) VALUES('$Name','$Comment')";
    mysqli_query($con,$sql);
    include 'commentdisplay.php';
echo '<center> Comment Successfully Submitted </center>';

}

 ?>
                        
                        <div class="tab-pane fade active in" id="dark-matter-demo">
<form action="" method="post" class="dark-matter">
<h2>Commenting the Article<span></span></h2>
<p><label><span>Name :</span><input id="name" type="text" name="Name" placeholder="Your Name"></label>
    <label><span>Comment :</span><input  id="email" type="text" name="Comment" placeholder="Comment for Article"></label>


<label><span>&nbsp;</span>
  <input style="color:black;" type="submit" name="submit" value="submit">
</label></p></form>
</div>
                        
                    </div>
                    
					<!--YOU GUYS CAN DO YOUR WORK AT THIS PLACE-->
					
                </div>
            </div>
        </div>
    </div>

    

</section>

<section class="mbr-section mbr-section-md-padding mbr-footer footer1" id="contacts1-m" style="background-color: rgb(46, 46, 46); padding-top: 30px; padding-bottom: 30px;">
    
    <div class="container">
        <div class="row" >
            <div class="mbr-footer-content col-xs-12 col-md-2">
                <div><img src="assets/images/netlogo-135x128.png"></div>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-4">
                <p><font color="#7c7c7c" face="Montserrat, sans-serif" size="5">Uva Wellassa University&nbsp;<br>Nature Explorer Team</strong></p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><font color="#7c7c7c" face="Montserrat, sans-serif" size="3"><span style="letter-spacing: -1px; line-height: 20px;"><strong>Address</strong></span></font><font color="#7c7c7c" face="Montserrat, sans-serif" size="3"><span style="letter-spacing: -1px; line-height: 20px;"><strong><br></strong></span></font><br>Nature Explorer Team,<br>Uva Wellassa University,<br>Passara road, Badulla,<br>Sri Lanka. 90000<br></p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>Contacts</strong><br>Email: XYZ@uwunet.uwu.com<br>Phone No: 000000000000<br></p>
            </div>

        </div>
    </div>
</section>

<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-i" style="background-color: rgb(50, 50, 50); padding-top: 0.875rem; padding-bottom: 0.875rem;">
    
    <div class="container">
        <p class="text-xs-center"></p><p>Copyright (c) 2016 UWU-NET &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Powered by: CST Batch 14.</p><p></p>
    </div>
</footer>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>