<?php
$k = mysqli_connect("localhost","root","","projectsuzuki");
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
	<meta property="og:title" content="Gallery" />
	<meta property="og:url" content="http://localhost/12_gallery.html" />
	<meta property="og:image" content="http://cdn.winterjuice.com/example/autodealer/image.jpg" />
	<meta property="og:description" content="Auto Dealer HTML - Responsive HTML Auto Dealer Template" />

	<!-- Page Title -->
	<title>Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
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
	<script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=84041678"></script>
	
</head>
<body class="index">
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
							<li><a href="#">Produk</a></li>
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
	<div id="upslidershow">
			<div class="wrapper_1" style="width: 1366px; ">
					<div class="page_slider" style="width: 1366px; ">
						<div class="slider slider_2" style="width: 1366px; ">
							<div class="slide">
								<img src="images/placeholders/02-Website-Banner_1366x545.png" alt=""/>
								<!-- <div class="description">
									<h2 class="title">2012 Mercedes-Benz CLS 320</h2>
									<p class="desc"><span><strong>Miles: </strong>25,000</span><span><strong>Engine: </strong>2.6</span></p>
									<div class="price">$ 32 200</div>
								</div> -->
							</div>
							<div class="slide">
								<img src="images/placeholders/LOGObanner-All-New-Swift.jpg" alt=""/>
								<!-- <div class="description">
									<h2 class="title">2010 Mercedes-Benz Sport</h2>
									<p class="desc"><span><strong>Miles: </strong>25,000</span><span><strong>Engine: </strong>2.6</span></p>
									<div class="price">$ 32 200</div>
								</div> -->
							</div>
							<div class="slide">
								<img src="images/placeholders/Inner-banner-APV-Arena1.jpg" alt=""/>
								<!-- <div class="description">
									<h2 class="title">2002 Subaru Impreza</h2>
									<p class="desc"><span><strong>Miles: </strong>25,000</span><span><strong>Engine: </strong>2.6</span></p>
									<div class="price">$ 32 200</div>
								</div> -->
							</div>
							<div class="slide">
								<img src="images/placeholders/Suzuki_Ertiga_Banner.jpg" alt=""/>
								<!-- <div class="description">
									<h2 class="title">2012 Cadillac LaBaron</h2>
									<p class="desc"><span><strong>Miles: </strong>25,000</span><span><strong>Engine: </strong>2.6</span></p>
									<div class="price">$ 32 200</div>
								</div> -->
							</div>
							<div class="slide">
								<img src="images/placeholders/Ciaz-Homepage-RS-Banner.jpg" alt=""/>
								<!-- <div class="description">
									<h2 class="title">2012 Ferrari Maranello 320</h2>
									<p class="desc"><span><strong>Miles: </strong>25,000</span><span><strong>Engine: </strong>2.6</span></p>
									<div class="price">$ 32 200</div>
								</div> -->
							</div>
						</div>
					</div>
				</div>
				
	</div>
		<div id="content">
			<div class="content">
		<div class="wrapper_4">
					<div class="">
					
						<div class="recent_cars four_columns">
						
							<h2><strong>Cars</strong> gallery</h2>
							
							<table  style="width: 100%";>
						<tr>
							<td>
							<video width="640" height="360" controls> <!--autoplay> --> 
							<source src="video.mp4"" type="video/mp4">
							</video> 
							</td>
							<td>
							<div id="" style="overflow-y: scroll; height:360px;">
							<div id="list video" style="padding: 0 0 0 30px";>
								<ul>
								
								<li>
									<a href="#">
											<video width="220" height="164" poster="placeholder.png" >
											<source src="video.mp4#t=15" type="video/mp4">
											</video> 
										<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
										<div class="title">Video 1 <span class="price">$ 115 265</span></div>
									</a>
								</li>
								
								
									<li>
									<a href="#">
											<video width="220" height="164" poster="placeholder.png" >
											<source src="video.mp4#t=15" type="video/mp4">
											</video> 
										<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
										<div class="title">Video 2 <span class="price">$ 115 265</span></div>
									</a>
								</li>
									<li>
									<a href="#">
											<video width="220" height="164" poster="placeholder.png" >
											<source src="video.mp4#t=15" type="video/mp4">
											</video> 
										<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
										<div class="title">Video 2 <span class="price">$ 115 265</span></div>
									</a>
								</li>

								
								
								</ul>
								</div>
							</div>
							</td>
							</tr>
							</table>
							<div>
							<!-- 
							<ul>
								<li>
									<a href="#">
										<img src="images/placeholders/220x164.gif" alt=""/>
										<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
										<div class="title">Mercedes-Benz <span class="price">$ 115 265</span></div>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="images/placeholders/220x164.gif" alt=""/>
										<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
										<div class="title">Mercedes-Benz <span class="price">$ 115 265</span></div>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="images/placeholders/220x164.gif" alt=""/>
										<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
										<div class="title">Mercedes-Benz <span class="price">$ 115 265</span></div>
									</a>
								</li>
								<li class="last">
									<a href="#">
										<img src="images/placeholders/220x164.gif" alt=""/>
										<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
										<div class="title">Mercedes-Benz <span class="price">$ 115 265</span></div>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="images/placeholders/220x164.gif" alt=""/>
										<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
										<div class="title">Mercedes-Benz <span class="price">$ 115 265</span></div>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="images/placeholders/220x164.gif" alt=""/>
										<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
										<div class="title">Mercedes-Benz <span class="price">$ 115 265</span></div>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="images/placeholders/220x164.gif" alt=""/>
										<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
										<div class="title">Mercedes-Benz <span class="price">$ 115 265</span></div>
									</a>
								</li>
								<li class="last">
									<a href="#">
										<img src="images/placeholders/220x164.gif" alt=""/>
										<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
										<div class="title">Mercedes-Benz <span class="price">$ 115 265</span></div>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="images/placeholders/220x164.gif" alt=""/>
										<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
										<div class="title">Mercedes-Benz <span class="price">$ 115 265</span></div>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="images/placeholders/220x164.gif" alt=""/>
										<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
										<div class="title">Mercedes-Benz <span class="price">$ 115 265</span></div>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="images/placeholders/220x164.gif" alt=""/>
										<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
										<div class="title">Mercedes-Benz <span class="price">$ 115 265</span></div>
									</a>
								</li>
								<li class="last">
									<a href="#">
										<img src="images/placeholders/220x164.gif" alt=""/>
										<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
										<div class="title">Mercedes-Benz <span class="price">$ 115 265</span></div>
									</a>
								</li>
							</ul>
							
							
							-->
							
						</div>
					</div>
				</div> 
				<!--
				<div class="services">
					<div class="service service_1">
						<h2><strong>Delivery</strong> on time</h2>
						<p>Lorem ipsum dolo stet consectetur adipiscin elit. Vestibulu dictum, vulputate ullamcoper lorem ipsum dolo stet.</p>
						<a href="#" class="more">More</a>
					</div>
					<div class="service service_2 center">
						<h2><strong>Quality</strong> service</h2>
						<p>Lorem ipsum dolo stet consectetur adipiscin elit. Vestibulu dictum, vulputate ullamcoper lorem ipsum dolo stet.</p>
						<a href="#" class="more">More</a>
					</div>
					<div class="service service_3">
						<h2><strong>Retro</strong> cars</h2>
						<p>Lorem ipsum dolo stet consectetur adipiscin elit. Vestibulu dictum, vulputate ullamcoper lorem ipsum dolo stet.</p>
						<a href="#" class="more">More</a>
					</div>
				</div>
				
				-->
				<div class="wrapper_3">
					<div class="left">
					
						<div class="recent_cars" style=" width: 103.3%;">
							<h2><strong>Promo</strong> Terkini</h2> <!-- Recent listing-->
							<ul>
							
								<?php
								$sql = "SELECT * FROM `mobil` ";
								$list = mysqli_query($k, $sql);
								while($b = mysqli_fetch_array($list)){
					
									?>
								<li>
									<a href="#">
										<img src="<?php echo $b['gambarUtama'];?>" alt=""/>
										<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
										<div class="title"><?php echo $b['namaMobil'];?><span class="price">Belum Ditentukan</span></div>
									</a>
								</li>
								
								
							<!--	<li>
									<a href="#">
										<img src="images/placeholders/220x164.gif" alt=""/>
										<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
										<div class="title">Mercedes-Benz <span class="price">$ 115 265</span></div>
									</a>
								</li>
							-->
							<?php
							}
							?>
							</ul>
							<a href="#" class="all">all listings</a>
						</div>
					
			
				
					
					</div>
					<div class="right">
						<div class="news">
							<h2><strong>Auto</strong> news</h2>
							<div class="news_box">
								<a href="#" class="thumb">
									<img src="images/placeholders/180x135.gif" alt=""/>
								</a>
								<h5><a href="#">UNOFFICIAL PORSCHE 918 SPYDER PRICING POPS UP</a></h5>
								<div class="date">November 1, 2012 </div>
								<div class="post">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit... </p>
								</div>
							</div>
							<div class="news_box bottom">
								<a href="#" class="thumb">
									<img src="images/placeholders/180x135.gif" alt=""/>
								</a>
								<h5><a href="#">UNOFFICIAL PORSCHE 918 SPYDER PRICING POPS UP</a></h5>
								<div class="date">November 1, 2012 </div>
								<div class="post">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit... </p>
								</div>
							</div>
							<div class="all_wrapper"><a href="#" class="all_news">All news</a></div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	<!--EOF CONTENT-->
	<!--BEGIN FOOTER-->
		<div id="footer">
			<!--
			<div class="bg_top_footer">
				<div class="top_footer">
					<div class="f_widget first">
						<h3><strong>About</strong> us</h3>
						<a href="#" class="footer_logo">AutoDealer</a>
						<p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, sed do eiusmod tempor.
Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed do eius  mod tempor incididunt ut.</p>
					</div>
					<div class="f_widget divide second">
						<h3><strong>Open</strong> hours</h3>
						<ul class="schedule">
							<li>
								<strong>Monday</strong>
								<span>9:30 am - 6:00 pm</span>
							</li>
							<li>
								<strong>Tuesday</strong>
								<span>9:30 am - 6:00 pm</span>
							</li>
							<li>
								<strong>Wednesday</strong>
								<span>9:30 am - 6:00 pm</span>
							</li>
							<li>
								<strong>Thursday</strong>
								<span>9:30 am - 6:00 pm</span>
							</li>
							<li>
								<strong>Friday</strong>
								<span>9:30 am - 6:00 pm</span>
							</li>
							<li>
								<strong>Saturday</strong>
								<span>9:30 am - 4:00 pm</span>
							</li>
							<li>
								<strong>Sunday</strong>
								<span>closed</span>
							</li>
						</ul>
					</div>
					<div class="fwidget_separator"></div>
					<div class="f_widget third">
						<h3><strong>Our</strong> contacts</h3>
						<div class="f_contact f_contact_1"><strong>Address Info:<br/></strong>Lorem ipsum Dolor sit amet, 658 Consectetur, Adipisicing 56 D</div>
						<div class="f_contact f_contact_2"><strong>Phone:</strong> +1 (234) 567-8901 <br/><strong>FAX:</strong> +1 (234) 567-8902</div>
						<div class="f_contact f_contact_3"><strong>Email:</strong> <a href="mailto:#">testmail@sitename.com</a></div>
					</div>
					<div class="f_widget divide last frame_wrapper">
						<iframe width="204" height="219" src="https://maps.google.com.ua/maps?f=q&amp;source=s_q&amp;hl=ruamp;hl=en&amp;geocode=&amp;q=%D0%9C%D0%B0%D0%BD%D1%85%D1%8D%D1%82%D1%82%D0%B5%D0%BD,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%A1%D0%BE%D0%B5%D0%B4%D0%B8%D0%BD%D0%B5%D0%BD%D0%BD%D1%8B%D0%B5+%D0%A8%D1%82%D0%B0%D1%82%D1%8B+%D0%90%D0%BC%D0%B5%D1%80%D0%B8%D0%BA%D0%B8&amp;aq=0&amp;oq=%D0%BC%D0%B0%D0%BD%D1%85&amp;sll=48.382803,31.17461&amp;sspn=7.573826,21.643066&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%9C%D0%B0%D0%BD%D1%85%D1%8D%D1%82%D1%82%D0%B5%D0%BD,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%9D%D1%8C%D1%8E+%D0%99%D0%BE%D1%80%D0%BA,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%A1%D0%BE%D0%B5%D0%B4%D0%B8%D0%BD%D1%91%D0%BD%D0%BD%D1%8B%D0%B5+%D0%A8%D1%82%D0%B0%D1%82%D1%8B+%D0%90%D0%BC%D0%B5%D1%80%D0%B8%D0%BA%D0%B8&amp;t=m&amp;ll=40.79042,-73.959961&amp;spn=0.113849,0.139389&amp;z=11&amp;iwloc=A&amp;output=embed"></iframe>
					</div>
				</div>
			</div>
			
			-->
			
			<div class="bottom_footer">
				<div class="f_widget ">
					<h3><strong>Tentang</strong> kami</h3>
					<ul>
						<li><a href="#">Kontak</a></li>
						<li><a href="#">Mitra Kami</a></li>
						<li><a href="#">Iklan Online</a></li>
						<li><a href="#">Halaman Utama</a></li>
					</ul>
				</div>
				<div class="f_widget divide">
					<h3><strong>Ada</strong> pertanyaan?</h3>
					<ul>
						<li><a href="#">Bagaimana cara melakukan kredit?</a></li>
						<li><a href="#">Daftar harga</a></li>
						<li><a href="#">Alamat kantor</a></li>
					</ul>
				</div>
				<div class="fwidget_separator"></div>
				<div class="f_widget">
					<h3><strong>Area</strong> pengguna</h3>
					<ul>
						<li><a href="#">Hubungi kami</a></li>
						<li><a href="#">Register dealder</a></li>
						<li><a href="#">Login Dealer</a></li>
						<li><a href="#">Berita</a></li>
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
				<div class="copyright">&copy; 2016 Nama Website. All Rights Reserved.</div>
			</div>
		</div>
	<!--EOF FOOTER-->
	<!--<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '57f42bbe-f63b-4f8b-a620-1da85fe59db9', f: true }); done = true; } }; })();</script> -->
</body>
</html>
