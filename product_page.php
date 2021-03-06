<?php
$k = mysqli_connect("localhost","root","","projectsuzuki");
$namaMobil = $_GET['namaMobil'];
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- Facebook APP ID -->
	<meta property="fb:app_id" content="12345"/>

	<meta name="keywords" content="Car-Dealer, auto-salon, automobile, business, car, car-gallery, car-selling-template, cars, dealer, marketplace, mobile, real estate, responsive, sell, vehicle" />
	<meta name="description" content="Auto Dealer HTML - Responsive HTML Auto Dealer Template" />

	<!-- Open Graph -->
	<meta property="og:site_name" content="Auto Dealer HTML"/>
	<meta property="og:title" content="Product Page" />
	<meta property="og:url" content="http://localhost/06_product_page.html" />
	<meta property="og:image" content="http://cdn.winterjuice.com/example/autodealer/image.jpg" />
	<meta property="og:description" content="Auto Dealer HTML - Responsive HTML Auto Dealer Template" />

	<!-- Page Title -->
	<title>Car</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/styletable.css" />
	<link rel="stylesheet" type="text/css" href="css/style980.css" />
	<link rel="stylesheet" type="text/css" href="css/style800.css" />
	<link rel="stylesheet" type="text/css" href="css/style700.css" />
	<link rel="stylesheet" type="text/css" href="css/style600.css" />
	<link rel="stylesheet" type="text/css" href="css/style500.css" />
	<link rel="stylesheet" type="text/css" href="css/style400.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" media="screen" />
	<!--[if IE]>
	<link href="css/style_ie.css" rel="stylesheet" type="text/css">
	<![endif]-->
	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.selectik.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
	<script type="text/javascript" src="js/jquery.countdown.js"></script>
	<script type="text/javascript" src="js/jquery.checkbox.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
</head>
<body class="car">
	<!--BEGIN HEADER-->
		<div id="header">
			<div class="top_info">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt=""></a>
					<!-- <a href="#">Auto<span>Dealer</span></a> -->
				</div>
				<div class="header_contacts">
					<div class="phone">Website Promo Suzuki</div>
					<div>Kelapa Gading Jakarta Utara</div>
				</div>
				<div class="socials">
					<a href="#"><img src="images/fb_icon.png" alt=""></a>
					<a href="#"><img src="images/twitter_icon.png" alt=""></a>
					<a href="#"><img src="images/in_icon.png" alt=""></a>
				</div>
			</div>
			<div class="bg_navigation">
				<div class="navigation_wrapper">
					<div id="navigation">
						<span>Home</span>
						<ul>
							<li class="current"><a href="#">Home</a></li>
							<li><a href="productGallery.php">Produk</a></li>
							<li><a href="#">Gallery</a></li>
							<li><a href="#">Hubungi Kami</a></li>
							<li><a href="#">About Us</a></li>
							<!--<li><a href="#">Contacts</a></li> -->
						</ul>
					</div>
					<div id="search_form">
						<form method="get" action="#">
							<input type="text" onblur="if(this.value=='') this.value='Search on site';" onfocus="if(this.value=='Search on site') this.value='';" value="Search on site" class="txb_search"/>
							<input type="submit" value="Search" class="btn_search"/>
						</form>
					</div>
				</div>
			</div>
		</div>
	<!--EOF HEADER-->
	<!--BEGIN CONTENT-->
		<div id="content">
			<br/>
			<div class="content">
			
				<div class="main_wrapper">
				
					<h1><strong><?php echo $namaMobil;?></strong></h1>
					<div class="car_image_wrapper car_group">
					
					
					
						<div class="big_image">
						<?php
												$sql = "SELECT * FROM `mobil` WHERE namaMobil = '$namaMobil' ";
												$list = mysqli_query($k, $sql);
												while($b = mysqli_fetch_array($list)){
												
									
											?>
							<a href="<?php echo $b['gambarUtama'];?>" class="car_group">
								<img src="images/zoom.png" alt="" class="zoom"/>
								<img src="<?php echo $b['gambarUtama'];?>" alt=""/>
							</a>
							
							<?php 
							}
							?>
						</div>
						<div class="small_img">
							<a href="images/placeholders/620x425.gif?v=1" class="car_group">
								<img src="images/placeholders/81x62.gif" alt=""/>
							</a>
							<a href="images/placeholders/620x425.gif" class="car_group">
								<img src="images/placeholders/81x62.gif" alt=""/>
							</a>
							<a href="images/placeholders/620x425.gif" class="car_group">
								<img src="images/placeholders/81x62.gif" alt=""/>
							</a>
							<a href="images/placeholders/620x425.gif" class="car_group">
								<img src="images/placeholders/81x62.gif" alt=""/>
							</a>
							<a href="images/placeholders/620x425.gif" class="car_group">
								<img src="images/placeholders/81x62.gif" alt=""/>
							</a>
						</div>
					</div>
					<div class="car_characteristics">
						<a href="#" class="print"></a>
						<div class="price">54.980 EURO <span>* Price negotiable</span></div>
						<div class="clear"></div>
						<div class="features_table">
							<div class="line grey_area">
								<div class="left">Model, Body type:</div>
								<div class="right">Mercedes-Benz CLS 320, Coupe</div>
							</div>
							<div class="line">
								<div class="left">Fabrication:</div>
								<div class="right">2010</div>
							</div>
							<div class="line grey_area">
								<div class="left">Fuel:</div>
								<div class="right">Diesel</div>
							</div>
							<div class="line">
								<div class="left">Engine:</div>
								<div class="right">3200 cm³ (373 kW / 507 CP)</div>
							</div>
							<div class="line grey_area">
								<div class="left">Transmision:</div>
								<div class="right">Automatic</div>
							</div>
							<div class="line">
								<div class="left">Color:</div>
								<div class="right">Black</div>
							</div>
							<div class="line grey_area">
								<div class="left">Doors:</div>
								<div class="right">4/5</div>
							</div>
							<div class="line">
								<div class="left">CO2-Emissions combined:</div>
								<div class="right">ca 423 g/km</div>
							</div>
						</div>
						<div class="wanted_line">
							<div class="left">You want to sell a similar car?</div>
							<div class="right">
								<a href="#">add an offer</a>
							</div>
						</div>
					</div>
					<div class="clear"></div>
					
					
					
					
					<div class="tabs_wrapper home_tabs section">
						  	<ul class="tabs">
						    	<li class="current">Spesifikasi</li>
						    	<li>Harga</li>
						    	<li>Promo</li>
								<li>OTR</li>
						 	</ul>
						 	<div class="box visible">
					
						   		
						   		<div class="clear"></div>
														<!--<div class="tabs_carousel">
															ini kalo mau ada slider kesampingnya
														</div>-->
														
														
							<div>
								<h2><strong>Informasi</strong> kendaraan</h2>
								<p><strong>Features:</strong><br/>alloy wheels, xenon headlights, fog lights, tinted glass</p>
								<p><strong>Other parameters:</strong><br/>service book</p>
								<p><strong>Safety:</strong><br/>ABS, traction control, alarm, airbags, immobilizer, anti-th, ESP, EDS, protection framework</p>
								<p><strong>Comfort:</strong><br/>electric windows, electric mirrors, air conditioning, leathe upholstery, navigation system, central locking, radio / CD, power steering, onboard computer, cruise control, heated seats, rain sensor, steering wheel controls, parking sensor</p>
							</div>
						  	</div>
						  	<div class="box">
						    	
						   		
						   		<div class="clear"></div>
						   		<div>
								<h2><strong>Informasi</strong> harga</h2>
								<table class = "container">
								<thead>
								<tr>
									<td>Tipe Mobil</td>
									<td>Harga</td>
								<tr>
								</thead>
								<?php
									$sql1 = "SELECT * FROM `tipemobil` WHERE namaMobil = '$namaMobil' ";
									$hasil = mysqli_query($k, $sql1);
									while($baris =  mysqli_fetch_array($hasil)){
										echo "<tbody>";
										echo "<tr>";
										echo "<td>".$baris["tipeMobil"]."</td>";
										echo "<td>".$baris["harga"]."</td>";
										echo "</tbody>";
									}

								?>
								</table>
							</div>
							</div>
						  	<div class="box">
						    	
						   		
						   		<div class="clear"></div>
						   	<div>
								<h2><strong>More</strong> info</h2>
								<p class="first"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet fringilla metus, a ultricies ligula consequa at maecenas eget massa at eros.</strong></p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit aenean aliquet fringilla metus, a ultricies ligula consequa at. Maecenas eget massa at eros ornare rhoncus. In sit a enim risus, in mattis felis a ultricies ligula consequat at. Maecenas eget massa at eros ornare.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet fringilla metus, a ultricies ligula consequa at. Maecenas eget massa at eros ornare rhoncus. In sit a enim risus, in mattis felis</p>
							</div>
						  	</div>
							
						<div class="box">
						    	
						   	
						   	<div class="clear"></div>
						   	<div>
								<h2><strong>More</strong> info</h2>
								<p class="first"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet fringilla metus, a ultricies ligula consequa at maecenas eget massa at eros.</strong></p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit aenean aliquet fringilla metus, a ultricies ligula consequa at. Maecenas eget massa at eros ornare rhoncus. In sit a enim risus, in mattis felis a ultricies ligula consequat at. Maecenas eget massa at eros ornare.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet fringilla metus, a ultricies ligula consequa at. Maecenas eget massa at eros ornare rhoncus. In sit a enim risus, in mattis felis</p>
							</div>
						</div>
						
						<br/>
						<br/>
					
						
						
						
					</div>
				</div>
			</div>
						
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
		
			
		<div id="footer">
		
			
			<div class="bottom_footer">
				<div class="f_widget ">
					<h3><strong>About</strong> us</h3>
					<ul>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Our Partners</a></li>
						<li><a href="#">Advertising Online</a></li>
						<li><a href="#">Site Map</a></li>
					</ul>
				</div>
				<div class="f_widget divide">
					<h3><strong>Need</strong> help?</h3>
					<ul>
						<li><a href="#">How do I add an offer?</a></li>
						<li><a href="#">How do I find a vehicle</a></li>
						<li><a href="#">Price list</a></li>
						<li><a href="#">Office for car dealers</a></li>
					</ul>
				</div>
				<div class="fwidget_separator"></div>
				<div class="f_widget">
					<h3><strong>User</strong> area</h3>
					<ul>
						<li><a href="#">Add an offer</a></li>
						<li><a href="#">Register dealder</a></li>
						<li><a href="#">Login Dealer</a></li>
						<li><a href="#">News</a></li>
					</ul>
				</div>
				<div class="f_widget divide last">
					<h3><strong>Find</strong> us here</h3>
					<ul class="horizontal">
						<li><a href="#"><img src="images/fb_icon.png" alt=""></a></li>
						<li><a href="#"><img src="images/twitter_icon.png" alt=""></a></li>
						<li><a href="#"><img src="images/in_icon.png" alt=""></a></li>
					</ul>
				</div>
			</div>
			<div class="copyright_wrapper">
				<div class="copyright">&copy; 2013 Auto Sale. All Rights Reserved.</div>
			</div>
		</div>
	<!--EOF FOOTER-->
</body>
</html>
