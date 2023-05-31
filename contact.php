
<?php
include("connection/connect.php");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
		$email=$_POST['email'];	
		$subject=$_POST['subject'];
			$message=$_POST['message'];
			
			
	$sql = "INSERT INTO contact(name,email,subject,message) VALUES('$name', '$email','$subject','$message')";
	mysqli_query($db, $sql);
	

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

	
	<link rel="stylesheet" type="text/css" href="css/popup.php">
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
	
	<div class="about-bg">
			<div class="container">
				<div class="rl-banner">
					<h2>Na Kontaktoni</h2>
					<ul></br>
						<li><a href="#">Home</a></li>
						<li><span class="active">Na Kontaktoni</span></li>
					</ul>
				</div>
			</div>
		</div>



		<section>
			<div class="block">
				<div class="container">
					<div class="title f3 mg-btm-40">
						<h3>Na Kontaktoni</h3>
					</div><!--title end-->
					<div class="row">
						<div class="col-md-9">
							<div class="contact-form no-pdd">
								<form  action=''  method='post'> 
									<div class="row">
										<div class="col-md-12">
											<input placeholder="Your Name" type="text"  name='name'>
											<i class="fa fa-male"></i>
										</div>
										<div class="col-md-6">
											<input placeholder="Email" type="text"  name='email'>
											<i class="fa fa-envelope"></i>
										</div>
										<div class="col-md-6">
											<input  placeholder="Subject" type="text"  name='subject'>
											<i class="fa fa-book"></i>
										</div>
										<div class="col-md-12">
											<textarea placeholder="Message"  name='message'></textarea>
										</div>
										
										<div class="col-md-12">
											<input type='submit'   name='submit' class="submit style2"/>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-3">
							<div class="conp">
								<div class="contact-information style2">
									<img src="http://creativethemes.us/relax/images/icon11.png" alt="">
									<div class="cn-info">
										<h4>Adresa</h4>
										<span>Prizren,<br>UBT I.T.P</span>
									</div>
								</div><!--contact-information end-->
								<div class="contact-information style2">
									<img src="http://creativethemes.us/relax/images/icon22.png" alt="">
									<div class="cn-info">
										<h4>Telefoni</h4>
										<span>(+383) 49 111 222</span>
									</div>
								</div><!--contact-information end-->
								<div class="contact-information style2">
									<img src="http://creativethemes.us/relax/images/icon33.png" alt="">
									<div class="cn-info">
										<h4>Emaili</h4>
										<span> trojanhotel@gmail.com</span>
									</div>
								</div><!--contact-information end-->
								<div class="shear">
									<h4></h4>
									<ul>
										<li><a href="#" title=""><i class=""></i></a></li>
										<li><a href="#" title=""><i class=""></i></a></li>
										<li><a href="#" title=""><i class=""></i></a></li>
										<li><a href="#" title=""><i class=""></i></a></li>
										<li><a href="#" title=""><i class=""></i></a></li>
									</ul>
								</div><!--shear end-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


	
	

<footer>
			<div class="block no-padding">
				<div class="bg bg3">
					<div class="container">
						<div class="top-footer">
							<div class="row">
								<div class="col-md-4">
									<div class="widget">
										<div class="about-widget">
											<a href="#" title=""><img src="images/logo2s.png" alt=""></a>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,  sed diam nonummy nibh euismod it tincidunt ut laoreet commodo consequat.  </p>
										
											<ul class="sc-links">
												<li><a href="#" title=""><i class=""></i></a></li>
												<li><a href="#" title=""><i class=""></i></a></li>
												<li><a href="#" title=""><i class=""></i></a></li>
											
											</ul>
										</div><!--about-widget end-->
									</div><!--widget end-->
								</div>
								<div class="col-md-3">
									<div class="widget">
										<div class="news-widget">
											<h3 class="widget-title">Dhomat</h3>
											<div class="news">
												<img src="images/resources/sroom1.png" alt="">
												<div class="news-details">
													<h3><a href="#" title="">Single Room</a></h3>
													<span>$85 një natë</span>
												</div>
											</div><!--news end-->
											<div class="news">
												<img src="images/resources/sroom2.png" alt="">
												<div class="news-details">
													<h3><a href="#" title="">Luxury Room</a></h3>
													<span>$352 një natë</span>
												</div>
											</div><!--news end-->
											<div class="news">
												<img src="images/resources/sroom3.png" alt="">
												<div class="news-details">
													<h3><a href="#" title="">Double Room </a></h3>
													<span>$125 një natë</span>
												</div>
											</div><!--news end-->
										</div><!--news-widget end-->
									</div><!--widget end-->
								</div>
								<div class="col-md-3">
									<div class="widget">
										<div class="widget-quick-links">
											<h3 class="widget-title">Linqet</h3>
											<div class="qk-links">
												<ul>
												<li><a href="#" title="">Home</a></li>
													<li><a href="#" title="">Rreth nesh</a></li>
													<li><a href="#" title="">Suitat</a></li>
													<li><a href="#" title="">Lajmet</a></li>
													<li><a href="#" title="">Na kontaktoni</a></li>
													<li><a href="#" title="">Rezervimet</a></li>
												</ul>
												<ul>
												<li><a href="#" title="">Aktivitetet</a></li>
													<li><a href="#" title="">Galeria</a></li>
													<li><a href="#" title="">Ofertat</a></li>
												</ul>
											</div>
										</div><!--widget-quick-links end-->
									</div><!--widget-end-->
								</div>
								<div class="col-md-2 lst">
									<div class="widget">
										<div class="widget-tags">
											<h3 class="widget-title">Tags</h3>
											<ul>
											<li><a href="#" title="">Rezervimet</a></li>
												<li><a href="#" title="">TV</a></li>
												<li><a href="#" title="">Servisi</a></li>
												<li><a href="#" title="">Dhomat</a></li>
												<li><a href="#" title="">Hotelet</a></li>
												<li><a href="#" title="">WIFI</a></li>
												<li><a href="#" title="">Kamera</a></li>
												<li><a href="#" title="">Party</a></li>
												<li><a href="#" title="">Pishina</a></li>
												<li><a href="#" title="">Ofertat</a></li>
											</ul>
										</div><!--widget-tags end-->
									</div><!--widget end-->
								</div>
							</div>
						</div><!--top-footer end-->
						<div class="bottom-footer">
							<div class="copyright">
								<p>© 2023 . All Rights Reserved. </p>
							</div><!--copyright end-->
							<div class="credit">
								<p>Punuar nga : <a href="#" title>Edona Gashi, Ardian Sallauka & Ilir Selmani</a></p>
							</div><!--credit end-->
						</div><!--bottom-footer end-->
					</div>
				</div>
			</div>
		</footer><!--footer end-->





	</div><!--wrapper end-->

<!-- Including Jquery Js File -->
<script type="text/javascript" src="http://creativethemes.us/relax/js/jquery.min.js"></script>
<!-- Including Bootstrap js file -->
<script type="text/javascript" src="http://creativethemes.us/relax/js/bootstrap.min.js"></script>
<!-- Custom Js file -->
<script type="text/javascript" src="http://creativethemes.us/relax/js/script.js"></script>


</body>


</html>