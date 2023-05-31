<?php
error_reporting(0);
include("connection/connect.php");
$book = $_GET['book'];


if(isset($_POST['submit']))                 
{   
$fname = $_POST['fname'];   
$lname = $_POST['lname'];
$address = $_POST['address'];
$city = $_POST['city'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$brand = $_POST['brand'];
$cardno = $_POST['cardno'];
$month = $_POST['exp_month'];
$year = $_POST['exp_year'];



                     

	if($fname==' '||$lname==' '||$address==' '||$city==' '||$email==' '||$phone==' '||$brand==' '||$cardno==' '||$month==' '||$year=='' )
	{
	
	           $on= '<div class="alert alert-dismissable fade in" style="background:#ea8f8f;border:1px solid #ce7575;color:#fff;">';
                    $tw=	'<a href="#"  data-dismiss="alert" ></a>';				
				    $th= ' All Text Field must be required!';
					$fu=  	'</div>';	
	
	}
	else
	{
	  
					
	$sql = "INSERT INTO detail(fname,lname,address,city,email,phone,brand,cardno,emonth,eyear) VALUES('$fname', '$lname','$address','$city','$email','$phone','$brand','$cardno','$month','$year')";
	mysqli_query($db, $sql);
	
  $fi= '<div class="alert alert-success alert-dismissable fade in">';
 $si=	'<a href="#" data-dismiss="alert" ></a>';
 $se= 'Felminderit per rezervimin. Te dhenat ju jane derguar ne emailin tuaj te shenuar.';
$ei=  	'</div>';
	}
	
	
}












$sql="select * from booking where r_id='$book'";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_array($result);

						$r_id =  $row['r_id'];
						$rimage =  $row['rimage'];
						$rtype =  $row['rtype'];
				        $rprice =  $row['rprice'];
						$newprice= $rprice + 300;
						$rtext =  $row['rtext'];

					
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
						
					</div>
				</div>
			</div><!--top-bar end-->
			<div class="bottom-header">
				<div class="container">
					<div class="hd">
						<div class="logo">
							<a href="#" title="">
								<img src="images/logo1.png" alt="" />
							</a>
						</div>
						<div class="menu-search">
							<nav>
								<ul>
									<li class="active menu-item-has-children"><a href="index.php" title=""><i class="fa fa-joomla"></i>Home</a>
										
									</li>
									
									<li><a href="about.php" title="">Rreth Nesh</a></li>
									<li><a href="contact.php" title="">Na Kontaktoni</a></li>
								</ul>
		 					</nav>
							
						</div>
						<div class="menu-icon">
							<span class="first-bar"></span>
							<span class="second-bar"></span>
							<span class="third-bar"></span>
						</div>
					</div>
				</div>
			</div>
		</header>
		
		
		
		<div class="about-bg">
			<div class="container">
				<div class="rl-banner">
					<h2>Dhoma Rezervimeve</h2>
					<ul></br>
						<li><a href="#">Home</a></li>
						<li><span class="active">Forma e Rezervimit</span></li>
					</ul>
				</div>
			</div>
		</div>
	


		<section>
		
<?php		
echo$on;
echo$tw;
 echo$th;
echo$fu;
 echo $fi;
 echo$si;
echo $se;
echo$ei;

?>
			<div class="block">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="res-dates">
								
								
								
								
								
								<div class="select-rooms">
									<h3 class="res-title">Select Rooms</h3>
									<div class="rom-details">
										<h3>Room Type </h3>
										<h2><?php echo $rtype; ?></h2>
										
										<ul>
											<li>
												<span>Service</span>
												<b>Free</b>
											</li>
											
												<li>
												<span>Qmimi</span>
												<b><?php echo $rprice.'.00'; ?></b>
												
											</li>
											<li>
												<span>Tax</span>
												<b>300.00</b>
												
											</li>
										
										</ul>
										<h4 class="sc">Total  <span><?php echo $newprice; ?></span></h4>
									</div>
							
									<div class="total-bill">
										<h3>Totali</h3>
										<b><?php echo $newprice.'.00'; ?></b>
									</div><!--total-bill end-->
								</div>
							</div><!--res-dates end-->
						</div>
						<div class="col-md-8">
							<div class="billing-details">
								<h2>Billing details</h2>
								<div class="billing-form">
									<form   action="" method='post'>
										<div class="row">
											
											<div class="col-md-6">
												<label>
													<h3>Emri <span>*</span></h3>
													<input type="text" name="fname">
												</label>
											</div>
											<div class="col-md-6">
												<label>
													<h3>Mbiemri <span>*</span></h3>
													<input type="text" name="lname">
												</label>
											</div>
											
											<div class="col-md-12">
												<label class="sco">
													<h3>Address <span>*</span></h3>
													<input type="text" name="address">
													
												</label>
											</div>
											<div class="col-md-6">
												<label>
													<h3>Vendi / Qyteti <span>*</span></h3>
													<input type="text" name="city" placeholder="Street Address">
												</label>
											</div>
											
											<div class="col-md-6">
												<label>
													<h3>Email address <span>*</span></h3>
													<input type="text" name="email" placeholder="Email">
												</label>
											</div>
											<div class="col-md-6">
												<label>
													<h3>Telefoni <span>*</span></h3>
													<input type="text" name="phone" placeholder="Phone Number">
												</label>
											</div>
										
											<div class="col-md-12">
												<label>
													<h3>Card Type</h3>
													<select    name='brand'	>
													<option selected="selected" disabled="disabled">Card Brand</option>
                                                  <option value='Master Card'>Master Card</option>
                                                  <option value='Visa'>Visa</option>
                                   </select> 
													<i class="fa fa-angle-down"></i>
												</label>
											</div>
											<div class="col-md-6">
												<label>
													<h3>ENTER YOUR 16 DIGIT CARD NUMBER:</h3>
													<input type="text" name="cardno" placeholder="xxxx-xxxxxx-xxxx-xx">
												</label>
											</div>
											<div class="col-md-6">
												<label>
													<h3>MUAJI  </h3>
												<select    name='exp_month'	 >
							<option selected="selected" disabled="disabled">Expiry Month:</option>
                                                  <option value='01 '>01</option>
												    <option value='02 '>02</option>
													  <option value='03 '>03</option>
													    <option value='05 '>05</option>
														    <option value='07 '>07</option>
															  <option value='08 '>08</option>
															    <option value='09 '>09</option>
																<option value='10 '>10</option>
																<option value='11 '>11</option>
																<option value='12 '>12</option>
                                                  
												      
                                   </select>   
													<i class="fa fa-angle-down"></i>
												</label>
											</div>
											<div class="col-md-6">
												<label>
													<h3>YEAR OF EXPIRY:</h3>
													<select    name='exp_year'	>
									<option selected="selected" disabled="disabled">Expiry year:</option>
                                                  <option value='2018'>2023</option>
												    <option value='2017 '>2024</option>
													  <option value='2016 '>2025</option>
													    <option value='2015 '>2026</option>
														  <option value='2014 '>2027</option>
														    <option value='2013 '>2028</option>
															  <option value='2012 '>2029</option>
															    <option value='2011 '>2030</option>
																<option value='2010 '>2031</option>
                                                  
												      
                                   </select>   
													<i class="fa fa-angle-down"></i>
												</label>
											</div>
											
										</div>
											<div class="total-bill" >
										
												<input type="submit" name="submit"   class="total-bill" style='border-radius:5px;'/>
												
													</div>
									</form>
									
									
									
									
									
									
									<div class="cr-account">
										<div class="make-acnt">
										
										
									
									
										</div>
									</div><!--cr-account end-->
								</div><!--billing-form end-->
							</div><!--billing-details end-->
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
							</div>
							<div class="credit">
								<p>Punuar nga : <a href="#" title>Edona Gashi, Drita Kryeziu, Ardian Sallauka & Ilir Selmani</a></p>
							</div><!--credit end-->
						</div><!--bottom-footer end-->
					</div>
				</div>
			</div>
		</footer><!--footer end-->




	</div><!--wrapper end-->


<script type="text/javascript" src="http://creativethemes.us/relax/js/jquery.min.js"></script>

<script type="text/javascript" src="http://creativethemes.us/relax/js/bootstrap.min.js"></script>

<script type="text/javascript" src="http://creativethemes.us/relax/js/script.js"></script>


</body>


</html>