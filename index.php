

<?php 
include_once("database.php");  
   if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

  ?>

















<!DOCTYPE html>
<html lang="en">
<head>
<title>Send Message</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Child Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
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
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>

<!-- header -->
<header>
	<div class="top-head container">
		<div class="ml-auto text-right right-p">
			<ul>
				<li class="mr-3">
					<span class="fa fa-clock-o"></span> Monday-Friday : 9:00 to 4:30</li>
				<li>
					<span class="fa fa-envelope-open"></span> <a href="mailto:info@example.com">info@ekengelectronics.com</a> </li>
			</ul>
		</div>
	</div>
	<div class="container">
		<!-- nav -->
		<nav class="py-3 d-lg-flex">
			<div id="logo">
				<h1> <a href="#"><img src="images/eken.jpg" alt=""> Ekeng Messaging </a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1">
				
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>



<!-- banner -->
<div class="banner" id="home">
	<div class="layer">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 banner-text-w3pvt">
					<!-- banner slider-->
					<div class="csslider infinity" id="slider1">
						<input type="radio" name="slides" checked="checked" id="slides_1" />
						<input type="radio" name="slides" id="slides_2" />
						<input type="radio" name="slides" id="slides_3" />
						<ul class="banner_slide_bg">
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4">EKENG GROUP</h3>
										<h4 class="b-w3ltxt text-capitalize mt-md-2">Ekeng Official Site for sending Email & SMS</h4>
										<p class="w3ls_pvt-title my-3">Let get our customers close to Us </p>
										
									</div>
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
				<div class="col-lg-5 col-md-8 px-lg-3 px-0">
					<div class="banner-form-w3 ml-lg-5">
						<div class="padding">
							<!-- banner form -->
		
							<form  method="post">
													  <?php 

global $conn;   

if(isset($_POST["submit"])){
	$username=$_POST["username"];
	$password=$_POST["password"];


	$getcredentials="SELECT * FROM users WHERE username='$username' AND password='$password'";
	$run_getcredentials=mysqli_query($conn,$getcredentials);
	$rowCount=mysqli_num_rows($run_getcredentials);

	while ($row=mysqli_fetch_array($run_getcredentials)) {
            	$username=$row["username"];
            	$password=$row['password'];
            	
            }


             if ($rowCount==1) {
        	
        	 
            // Store data in session variables
              $_SESSION["loggedin"] = true;
              $_SESSION['username']=$username;
              $_SESSION["password"]=$password;
             


          echo"<script>window.open('option/index.php','_self')</script>";
}else{
	 echo" <div class='alert alert-danger'>
                 <strong>failled!</strong> Username or password does not exist
           </div>";
}


}





  ?>
								<h5 class="mb-3">Login To Send Email OR SMS</h5>
								<div class="form-style-w3ls">
									
									<input placeholder="Username" name="username" type="text" required="">
									<input placeholder="password" name="password" type="password" required="">
									
									<button Class="btn" type="submit" name="submit">Login</button>
								
								</div>
							</form>
							<!-- //banner form -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->




<!-- copyright -->
<section class="copyright">
	<div class="container py-4">
		<div class="row bottom">
			<ul class="col-lg-6 links p-0">
				
			</ul>
			<div class="col-lg-6 copy-right p-0">
				
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