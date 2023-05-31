<?php
if(isset($_GET['search']))
{
	header("location:search.php");
}


?>




<!DOCTYPE html>
<html>


<head>
<meta charset="UTF-8">
<title>Trojan Hotel</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Linking Bootstrap css file -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- Linking Main Css file -->
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/flatpickr.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/color.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">

</head>


<body>

	<div class="wrapper">
		<header class="abs">
			<div class="top-bar">
				<div class="container">
					<div class="con-links">
						<ul>
							<li><i class="fa fa-phone" aria-hidden="true"></i> (+383) 49 111 222</li>
							<li><i class="fa fa-envelope" aria-hidden="true"></i> trojanhotel@gmail.com</li>
						</ul>
					</div><!--con-links end-->
					<div class="social-links">
						<ul class="social-lnks">
							<li><a href="#" title=""><i class=""></i></a></li>
							<li><a href="#" title=""><i class=""></i></a></li>
							<li><a href="#" title=""><i class=""></i></a></li>
						
						</ul>
						
					</div><!--socail-links end-->
				</div>
			</div><!--top-bar end-->
			<div class="bottom-header">
				<div class="container">
					<div class="hd">
						<div class="logo">
							<a href="#" title="">
							<img src="images/logo1.png" alt="" />
							</a>
						</div><!--logo end-->
						<div class="menu-search">
							<nav>
								<ul>
									<li class="active menu-item-has-children"><a href="index.php" title=""><i class="fa fa-joomla"></i>Home</a>
										
									</li>
									
									<li><a href="about.php" title="">Rreth Nesh</a></li>
									<li><a href="contact.php" title="">Na Kontaktoni</a></li>
								</ul>
		 					</nav><!--nav end-->
							
						</div><!--menu-search end-->
						<div class="menu-icon">
							<span class="first-bar"></span>
							<span class="second-bar"></span>
							<span class="third-bar"></span>
						</div>
					</div>
				</div>
			</div><!--bottom-header end-->
		</header><!--Header end-->

		
		
		<section id="home" class="home-bg">
			<div class="block remove-btm-gap">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="home-detial">
								<div class="home-banner">
									<div class="block">
									
										<div class="greeting"><h3>Vetëm tek...</h3></div>
										<div class="greeting2"><h2>Trojan Hotel</h2></div>
										<div class="service-block">
											<i class="fa fa-wifi"></i>
											<div>
												<h5>Free WI-FI</h5>
												<span>në të gjithë hotelin</span> 
											</div>
										</div>
										<div class="service-block">
											<i class="fa fa-television"></i>
											<div>
												<h5>Cable TV</h5>
												<span>Kanale FREE</span> 
											</div>
										</div>
										<div class="service-block">
											<i class="fa fa-coffee"></i>
											<div>
												<h5>Resturant</h5>
												<span>Bar & Resturant</span> 
											</div>
										</div>
									</div>
								</div>
								<div class="room-finding">
									<div class="find-room">
										<div class="search-room">
											<h3>Kërkoni dhomën</h3>
											
											<form    action='search.php' method='get'>
												<div>
													<label>
														<select name='type'>
															<option>Select Room Type</option>
															<option value='Single Room'>Single</option>
															<option value='Double Room'>Double</option>
															<option value='First Room'>First class</option>
														</select>
														<i class="fa fa-building-o"></i>
													</label>
												</div>
													
												
												<div>
													<label>
														<select name='tërritur'>
															<option>Të rritur</option>
															<option value='1'>1</option>
															<option value='2'>2</option>
															<option value='3'>3</option>
														</select>
														<i class="fa fa-angle-down"></i>
													</label>
												</div>
												<div>
													<label>
														<select name='fëmijë'>
															<option>Fëmijë</option>
															<option  value='1'>1</option>
															<option  value='2'>2</option>
															<option  value='3'>3</option>
														</select>
														<i class="fa fa-angle-down	"></i>
													</label>
												</div>
										
										</div>
										<div class="other-options">
											<input type="submit" name='search' class="searching" value="Search Now" />
											
										</div>
											</form>
									</div><!--find-room end-->
								</div><!--room-finding end-->
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section>
			<div class="block">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="about-us">
								<div class="title">
									<h3>Rreth Trojan Hotel</h3>
								</div><!--title end-->
								<h5><a href="about.html" title="">Zbulojeni se qfarë na bën ne një hotel me 5 yje</a></h5>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi.</p>
								<ul class="ab-links">
									<li><i class="fa fa-user-secret"></i>Dedicated Team</li>
									<li><i class="fa fa-user"></i>Best Advisors</li>
									<li><i class="fa fa-history"></i>24/7 Supports</li>
								</ul>
							</div><!--about-us end-->
						</div>
						<div class="col-md-8">
							<div class="fav-areas">
								<div class="title f2">
									<h3>Dhomat tona favorite</h3>
								</div><!--title end-->
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy magna aliquam erat volutpat. Ut wisi enim ad minim</p>
								<div class="row">
									<div class="col-md-4">
										<div class="fav-room">
											<img src="images/resources/fav-room1.jpg" alt="">
											<div class="fav-rm-data">
												<h3><a href="#" title=""> Single Room</a></h3>
											
											</div>
										</div><!--fav-room end-->
									</div>
									<div class="col-md-4">
										<div class="fav-room">
											<img src="images/resources/fav-room2.jpg" alt="">
											<div class="fav-rm-data">
												<h3><a href="#" title="">Double Room</a></h3>
												
											</div>
										</div><!--fav-room end-->
									</div>
									<div class="col-md-4">
										<div class="fav-room">
											<img src="images/resources/fav-room3.jpg" alt="">
											<div class="fav-rm-data">
												<h3><a href="#" title="">First Class Room</a></h3>
											
											</div>
										</div><!--fav-room end-->
									</div>
								</div>
							</div><!--fav areas end-->
						</div>
					</div>
				</div>
			</div>
		</section>


		<section>
			<div class="pd2 bg bg1 overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-7">
							<div class="ft-img thumb-carousel" data-slider-id="1">
								<div>
									<figure>
										<img src="images/resources/ft-img3.jpg" alt="">
									</figure>
								</div>
								<div>
									<figure>
										<img src="images/resources/ft-img4.jpg" alt="">
									</figure>
								</div>
								<div>
									<figure>
										<img src="images/resources/ft-img.jpg" alt="">
									</figure>
								</div>
								<div>
									<figure>
										<img src="images/resources/ft-img2.jpg" alt="">
									</figure>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="our-services">
								<div class="title f2">
									<h3>Shërbimet tona</h3>
								</div><!--title end-->
								<div class="service-thumbs owl-thumbs" data-slider-id="1">
									<div class="service owl-thumb-item">
										<img src="images/icon1.png" alt="">
										<h4>Restaurant</h4>
										<p>Lorem ipsum dolor sit amet, consectetuer elit, sed diam nonummy .</p>
									</div><!--service end-->
									<div class="service owl-thumb-item">
										<img src="images/icon2.png" alt="">
										<h4>Masazhe</h4>
										<p>Lorem ipsum dolor sit amet, consectetuer elit, sed diam nonummy .</p>
									</div><!--service end-->
									<div class="service owl-thumb-item">
										<img src="images/icon3.png" alt="">
										<h4>Dhoma e konferencave</h4>
										<p>Lorem ipsum dolor sit amet, consectetuer elit, sed diam nonummy .</p>
									</div><!--service end-->
									<div class="service owl-thumb-item">
										<img src="images/icon4.png" alt="">
										<h4>Pishina</h4>
										<p>Lorem ipsum dolor sit amet, consectetuer elit, sed diam nonummy .</p>
									</div><!--service end-->
								</div>
							</div><!--our-services end-->
						</div>
					</div>
				</div>
			</div>
		</section>	