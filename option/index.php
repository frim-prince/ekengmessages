<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();



}


    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    
    
}else{
	echo "<script>window.open('../index.php','_self')</script>";
}


  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>choose option</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bank Card Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
    <link href="css/css_slider.css" rel="stylesheet"><!-- Slider css -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Niramit:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>


<!-- header -->
<header>
	<div class="container">
		<!-- nav -->
		<nav class="py-3 d-lg-flex">
			<div id="logo">
				<h1> <a href="index.html"><span class="fa fa-university"></span> Ekeng Messaging </a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1">
				<li class=""><a href="#" style="text-transform: lowercase;font-size: 13px;padding-right: 100px;">welcome: <?php echo $_SESSION["username"] ?></a></li>
				<li class="last-grid"><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->


<!-- banner -->
<div class="banner" id="home">
	<div class="layer">
		<div class="container">
			<div class="banner-text-w3pvt">
				<!-- banner slider-->
				<div class="csslider infinity" id="slider1">
					<input type="radio" name="slides" checked="checked" id="slides_1" />
					<input type="radio" name="slides" id="slides_2" />
					<input type="radio" name="slides" id="slides_3" />
					<ul class="banner_slide_bg">
						<li>
							<div class="w3ls_banner_txt">
								<h2 class="b-w3ltxt text-capitalize mt-md-4">Message <span>Options</span> </h2>
								<h4 class="b-w3ltxt text-capitalize">Ekeng Group</h4>
								<p class="w3ls_pvt-title my-3">Official Platform to send email or sms</p>
								<a href="https://apps.mnotify.net/admin_groups/message_excel" target="_blank" class="btn btn-banner my-3 mr-2">Send sms</a>
								<a href="sendemail.php" class="btn btn-banner1 my-3">Send Email</a>
							</div>
						</li>
						
					</ul>
					<div class="navigation">
						<div>
							
							
						</div>
					</div>
				</div>
				<!-- //banner slider-->
			</div>
		</div>
	</div>
</div>
<!-- //banner -->

<!-- copyright -->
<section class="copy-right py-4">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<p class="">© 2020 Ekeng. All rights reserved 
					
				</p>
			</div>
					</div>
	</div>
</section>
<!-- //copyright -->

<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top"> 
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
<!-- move top -->


</body>
</html>