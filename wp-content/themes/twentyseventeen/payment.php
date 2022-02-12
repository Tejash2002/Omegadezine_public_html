<?php
/*
Template name:payment
*/

?>
<!DOCTYPE html>
<html>
<head>							
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Payment - Omega Dezine</title>
	<link rel="icon" type="image/x-icon" href="img/favicon.ico">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link href="<?php echo get_template_directory_uri();?>/main.css" rel="stylesheet">
<style>
.bottom-container{
		width: 100%;
		float: left;
		text-align: center;
		padding: 0;
		position: relative;
		top: -54px;

	}
	.bottom-container span{text-align: center;}
	.bottom-container span img{width: 105px; height: 105px; border-radius: 50%; text-align: center;


	}
	.image-new
	{
		width: 100%;
    box-shadow: 0px 5px 20px -20px #006699;
    border-radius: 30px;
    margin-top: -15px;

	}
    .omega-about-container
{
	margin-top:65px;
}
.omega-shadow-radius
{
	background-color:rgba(255, 255, 255, 0.73);
	border-radius:20px; 
	box-shadow: 1px 1px 10px 2px #006699;
}
img.image-new {
    height: 99px;
}
</style> 

</head>
<body>
	<header>
		<nav class="navbar navbar-dark">
			<a class="navbar-brand" href="<?php echo get_template_directory_uri();?>/index.php" style="text-align: center;">
				<img id="logo-image" src="<?php echo get_template_directory_uri();?>/img/omegaSymbol.png" height="70px"><br>
				<img src="<?php echo get_template_directory_uri();?>/img/logotext.jpg" height="35px">
			</a>
			<div>
				<ul class="navbar-nav navbar-expand-md justify-content-end" style="text-align: right;">
					 <li class="nav-item" style="text-align: right;">
			       <a href="https://www.instagram.com/omega.dezine.inc"><i class="fa fa-instagram" aria-hidden="true" style="font-size: 1.2em;"></i></a>
								<a href="https://www.facebook.com/omega.dezines"><i class="fa fa-facebook" aria-hidden="true" style="font-size: 1.2em;"></i></a>
								<a href="#"><i class="fa fa-whatsapp" aria-hidden="true" style="font-size: 1.2em;"></i></a>
								<a href="https://twitter.com/OmegaDezine"><i class="fa fa-twitter" aria-hidden="true" style="font-size: 1.2em;"></i></a>
                                <a href="https://www.linkedin.com/in/omega-dezine-inc-4a840831/"><i class="fa fa-linkedin" aria-hidden="true" style="font-size: 1.2em;"></i></a>
                      
			      </li>
				</ul>
				<ul class="navbar-nav  navbar-expand-md" style="">
				<li class="nav-item popup" onclick="myFunction()" style="">
						 
					<a class="nav-link" href="<?php echo home_url('');?>/upload" style="color: white;">Upload</a>
                    </li>
					<li class="nav-item" style="">
						<a class="nav-link" href="mailto:info@omegadezine.com" style="color: white;">info@omegadezine.com</a>
					</li>
					<li class="nav-item" style="">
						<a class="nav-link" href="#" style="color: white;">678-367-3758</a>
					</li>
					<li class="nav-item" style="">
						<a class="nav-link" href="<?php echo home_url('');?>/register" style="color: white;">Register</a>
					</li>    
				</ul>
			</div>  
		</nav>
	</header>

	<div class="collapse" id="submit-form" style="">
		<form action="">
			<input type="file" name="myfile" style="">
			<button onclick="myFunction()" style="">Submit</button>
		</form>
	</div>

	
	<!-- Slider Start -->

	<section id="section1">
		<div id="demo" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
			</ul>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?php echo get_template_directory_uri();?>/img/Omega11.jpg" alt="Slider1"> 
				</div>
				<div class="carousel-item">
					<img src="<?php echo get_template_directory_uri();?>/img/Slider-01.jpg" alt="Slider2">
				</div>
				<div class="carousel-item">
					<img src="<?php echo get_template_directory_uri();?>/img/Slider-03.jpg" alt="Slider3"> 
				</div>
			</div>
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
	</section>
	<!-- Slider End -->

	<!-- Submenu Start -->
	<section id="section2" class="sticky-top" style="background-color: rgb(25, 25, 25);">
		<nav class="navbar navbar-expand-lg navbar-dark" style="font-size: 0.8rem;font-weight: 500;">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" style="width: 100%; text-align: center;">
				<span class="navbar-toggler-icon" style="color: white;"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-center submenu" id="collapsibleNavbar" >
				<ul class="navbar-nav">
				 <li class=" nav-item submenu-list"><a class="nav-link" href="<?php echo home_url('');?>/home" style="color: white;">Home</a></li>
				<li class=" nav-item submenu-list"><a class="nav-link" href="<?php echo home_url('');?>/shop" style="color: white;">SHOP</a></li>
				<li class=" nav-item submenu-list"><a class="nav-link" href="<?php echo home_url('');?>/about-us" style="color: white;">ABOUT US</a></li>
				<li class=" nav-item submenu-list"><a class="nav-link" href="<?php echo home_url('');?>/services" style="color: white;">SERVICES</a></li>
				<li class=" nav-item submenu-list"><a class="nav-link" href="<?php echo home_url('');?>/portfolio" style="color: white;">PORTFOLIO</a></li>
				<li class=" nav-item submenu-list"><a class="nav-link" href="<?php echo home_url('');?>/paynow" style="color: white;">PAYMENT</a></li>
				<li class=" nav-item submenu-list"><a class="nav-link" href="<?php echo home_url('');?>/contact-us" style="color: white;">CONTACT US</a></li>
				</ul>
			</div>  
		</nav>

	</section>
	<!-- Submenu End -->

	<!-- Services Start -->
	<section id="section4" style="background-color:#c9c9c9;; border-radius: 10px;">
		<h1>Pay Now</h1>
		<div class="display-item" style="text-align: center;">
	<form method="post" action="https://www.paypal.com/cgi-bin/webscr">

                        <input value="_xclick" name="cmd" type="hidden">
                        <input value="samuelsoans@hotmail.com" name="business" type="hidden">
                        <input value="https://omegadezine.com/" name="return" type="hidden">
                        <input value="0" name="no_shipping" type="hidden">
                        <input value="1" name="no_note" type="hidden">
                        <input value="USD" name="currency_code" type="hidden">
                        <input value="IE" name="lc" type="hidden">
                        <input value="PP-BuyNowBF" name="bn" type="hidden">
                        <input value="0" name="tax" type="hidden">
                        <input value="Online Payment" name="item_name" type="hidden">
                        <input value="OP" name="item_number" type="hidden">

                        <div class="first_name_invoice_payment">
                            Your Name (*) :<input value="" name="first_name"> 
                        </div><br>

                        <div class="email_invoice_payment">     
                            Email (*):<input value="" name="email"> 
                        </div><br>

                        <div class="first_name_invoice_payment">
                            Contact Number (*): <input id="inv" value="" name="contact_number">
                        </div><br>

                        <div class="last_name_invoice_payment">     
                            Amount  (*): <input id="amt" value="" name="amount">
                        </div><br>

                        <div class="job_title_invoice_payment"> 
                            <input alt="PayPal - The safer, easier way to pay online!" name="submit" border="0" src="https://www.paypal.com/en_US/i/btn/btn_paynowCC_LG.gif" type="image" class="no-width image" style="width:auto !important; border:none; margin-top:20px;"> 
                            <img height="1" width="1" src="https://www.paypal.com/en_US/i/scr/pixel.gif" border="0" alt="">
                        </div><br>

                    </form>

    
 <br>
        
   </div>     
        
        <div class="bottom-container">	
<img class="image-new" src="<?php echo get_template_directory_uri();?>/Omega_about_us.png" alt="bottom-about">	
</div>
	</section>
	<!-- Services Start -->



	<!-- Footer Start -->
	<footer>
		<div id="subscription-form">
			<form class="col-sm-5">
				<input type="email" name="email" placeholder="Email">
				<button>Subscribe</button>
			</form>
			<p class="col-sm-12">Feel free to place your Mail ID and subscribe to our newsletter here. So that, you can receive our existing updated and offers with no wait</p>
		</div>
		<div id="footer-details">
			<div id="footer-discription" class="col-sm-5">
				<img src="<?php echo get_template_directory_uri();?>/img/Omega_New-logo.png" height="100px">
				<p>Omega Dezine. We are the leading company in the areas of Graphic. Embroidery and Web Development Services provider serving the promotion products. Retail, quick print and may other industries. The company was started in 2009 with small projects and after only some years out growth has made us the strongest company in the compititive market.</p>
			</div>
			<div id="footer-link" class="col-sm-3">
				<h6>QUICK LINKS</h6>
				<ul>
					  
                <li><a href="<?php echo home_url('');?>/home">Home</a></li>
					<li><a href="<?php echo home_url('');?>/shop">Shop</a></li>
					<li><a href="<?php echo home_url('');?>/about-us">About Us</a></li>
					<li><a href="<?php echo home_url('');?>/services">Services</a></li>
					<li><a href="<?php echo home_url('');?>/portfolio">Portfolio</a></li>
					<li><a href="<?php echo home_url('');?>/paynow">Payment</a></li>
					<li><a href="<?php echo home_url('');?>/contact-us">Contact Us</a></li>
				</ul>						
			</div>
			<div id="get-in-touch" class="col-sm-3">
				<h6>GET IN TOUCH</h6>
				<div class="text">
					<div class="subtext">
						<p><i class="fa fa-map-marker" aria-hidden="true"></i> 14455 N. 28th Way Phoenix,AZ</p>
					 
                    </div>
					<div class="subtext">
						<p><i class="fa fa-phone" aria-hidden="true"></i> Australia<br>&nbsp;&nbsp;&nbsp;+61 (03) 90169357</p>
					</div>
					<div class="subtext">
						<p><i class="fa fa-phone" aria-hidden="true"></i> USA<br>&nbsp;&nbsp;&nbsp;+1 (229)-638-1577 <br>&nbsp;&nbsp; +1 (678)-367-3758</p>
					</div>
					<div class="subtext">
						<p><i class="fa fa-envelope-o" aria-hidden="true"></i> info@omegadezine.com</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<section id="bottom-ribbon" style="text-align: center;">
		<div id="text" class="col-sm-8">
			&copy;2017 ALL RIGHTS RESERVED BY OMEGA DEZINE
		</div>
		<div id="links" class="col-sm-2">
			<a href="https://www.instagram.com/omega.dezine.inc"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<a href="https://www.facebook.com/omega.dezines"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
				<a href="https://twitter.com/OmegaDezine"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="https://www.linkedin.com/in/omega-dezine-inc-4a840831/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
		</div>	
		<div id="logo" class="col-sm-1">
			 
             
		</div>
	</section>
</body>
</html>