<?php
/*
Template name:about-us
*/

?>
<!DOCTYPE html>
<html>
<head>							
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Omega Dezine</title>
	<link rel="icon" type="image/x-icon" href="img/favicon.ico">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link href="<?php echo get_template_directory_uri();?>/main.css" rel="stylesheet">	
     
    <style>
 .omega-padding-45
{
	padding:45px;
}
table.center {
  margin-left: auto; 
  margin-right: auto;
}
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

	<!-- About Us Start -->
	<section id="about-us">
		<h1>About Us</h1>
		<div class="display-item">
     
			<p style="font-color:black;"><img src="<?php echo get_template_directory_uri();?>/img/chica-1-1.png" alt="chica" align="left">Omega Dezine, we are the leading company in the areas of Graphics, Embroidery and Web Development services provider serving the promotional products, retail, quick print and many other industries. The company was started in 2009 with small projects and after only some years our growth has made us the strongest company in this competitive market. Today we have achieved such a grant success in the Corporate World of Artwork, Embroidery, and Web Developments sector. Our main clients are Worldwide.</p>
			<p>In these years, our progress shows our ability to make customer happy and satisfy them with our fastest and best quality services. Our experienced employee gives the perfect designs as per customer’s requirement . We believe that the customer satisfaction is the main pillar of the success of the company.</p>
			<p>Our clients are mainly by reference of other clients who have given us project and these is a matter of pride to us that our clients only send other clients to us and this is also a proof of our best quality and fastest service producing best customer satisfaction.</p>
		<br>
        <h3 style="color: #ffffff;text-align: right;font-family:Nothing You Could Do;font-weight:400;font-style:normal">BY Omega Dezine Inc.</h3> 
        </div>
        <br><br><br>
      <table class="center">
       	<h2>Our Team</h2>
       <tr><td><a href="#"><img src="<?php echo get_template_directory_uri();?>/img/Ray.png" height="200px">  </a></td>
       
       <td><a href="#"><a href="#"><img src="<?php echo get_template_directory_uri();?>/img/Atiq.png" height="200px"></a></td>
       <td><a href="#"><img src="<?php echo get_template_directory_uri();?>/img/Colin-1.png" height="200px">  </a></td>
       </tr>
       <tr><td style="color:black">RAY MARROUF <br>VP - SALES - AZ</td><td style="color:black">ATIQ QURESHI <br> VP - SALES - USA</td><td style="color:black">COLIN MORRIS <br>VP - SALES - AUSTRALIA</td></tr>
       </table>
       <br><br><br>
   <div class="bottom-container">	
<img class="image-new" src="<?php echo get_template_directory_uri();?>/Omega_about_us.png" alt="bottom-about">	
</div>
</div>
</div>
	</section>
    
    
 
 
	<!-- About Us End -->

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