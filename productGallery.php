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
	<title>List Product</title>
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
			
	</div>
		<div id="content">
			<div class="content">
		<div class="wrapper_4">
					<div class="">
					
					<div class="recent_cars four_columns">
			<div id="" style="overflow-x: hidden; width:100%;">				
		<div class="recent">
					<br/>
					<br/>
					<h2><strong>Promo</strong> list</h2>
					<div class="recent_carousel" style="width:200px;">
						<div class="slide">
							<a href="#">
								<img src="images/placeholders/220x164.gif" alt=""/>
								<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
								<div class="title">Mercedes<span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="images/placeholders/220x164.gif" alt=""/>
								<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
								<div class="title">Benz <span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="images/placeholders/220x164.gif" alt=""/>
								<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
								<div class="title">Mer<span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="images/placeholders/220x164.gif" alt=""/>
								<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
								<div class="title">des-Benz <span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="images/placeholders/220x164.gif" alt=""/>
								<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
								<div class="title">nz <span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="images/placeholders/220x164.gif" alt=""/>
								<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
								<div class="title">rcedes<span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="images/placeholders/220x164.gif" alt=""/>
								<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
								<div class="title">Mercede<span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="images/placeholders/220x164.gif" alt=""/>
								<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
								<div class="title">enz <span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="images/placeholders/220x164.gif" alt=""/>
								<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
								<div class="title">cedes-Benz <span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="images/placeholders/220x164.gif" alt=""/>
								<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
								<div class="title">Merced <span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="images/placeholders/220x164.gif" alt=""/>
								<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
								<div class="title">Merced <span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="images/placeholders/220x164.gif" alt=""/>
								<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
								<div class="title">rcedes-Benz <span class="price">$ 115 265</span></div>
							</a>
						</div>
					</div>
				</div>	
							
					</div>		
					
					
					
					
					</div>
					
					
					
					
						
						<div class="recent_cars four_columns">
						<br/>
						<br/>
							<h2><strong>Gallery<strong> produk</h2>
						</div>
		
					
					<div class="tabs_wrapper home_tabs section" style="min-height:550px;">
						  	<ul class="tabs">
						    	<li class="current">All</li>
								<li>Hatchback</li>
						    	<li>Sedan</li>
						    	<li>City Car</li>
								<li>Commercial</li>
								<li>SUV</li>
								<li>MPV</li>
								<li>Pickup</li>
								<li>Ambulan</li>
						 	</ul>
									<!-- ALL -->
									<div class="box visible" style="border: 0px solid #D9DDE3;margin-top: 10px;     padding: 0px 0px 0px;" >
												<div class="clear"></div>
										<div class="recent_cars four_columns"   style=" width: 110%;">
										<?php
										function formatrp($angka){
														$hasil = "Rp " . number_format($angka,0,',','.');
														return $hasil;
														}
										?>
											<ul>
											<?php
												$sql = "SELECT * FROM `mobil`";
												$list = mysqli_query($k, $sql);
												while($b = mysqli_fetch_array($list)){
												
									
											?>
												<li>
													<a href="product_page.php?namaMobil=<?php echo $b['namaMobil']; ?>">
														<img src="<?php echo $b['gambarUtama'];?>" alt=""/>
														<div class="title"><?php echo $b['namaMobil'];?>
															
															<span class="price">
																			<?php
																				$nama = $b['namaMobil'];
																				$sqlh = "SELECT * FROM `tipeMobil` where namaMobil ='$nama'";
																				$listed = mysqli_query($k, $sqlh);
																				$harga= '99999999999';
																				while($a = mysqli_fetch_array($listed)){
																				
																				$x = $a['harga'];
																				
																						if ($x>=1){
																							if ($harga >= $x) {
																									$harga = $x;
																									}
																						}
																				}
																					if($harga=='99999999999'){
																					echo "Hubungi Kami";
																					}else{

																					echo formatrp($harga);
																					}
																			?>
															</span>
														</div>
													</a>
												</li>
												
												<?php
													}
												?>
										
										
											<?php
												$sqlj = "SELECT * FROM `tipemobil` WHERE jenisLain != ' '";
												$listj = mysqli_query($k, $sqlj);
												while($b = mysqli_fetch_array($listj)){
												
									
											?>
												<li>
													<a href="product_page.php?namaMobil=<?php echo $b['namaMobil']." ".$b['tipeMobil']; ?>">
														<img src="<?php echo $b['gambarUtamaLain'];?>" alt=""/>
														<div class="title"><?php echo $b['namaMobil']." ".$b['tipeMobil']; ?>
															
															<span class="price">
																			<?php
																				$nama = $b['namaMobil'];
																				$sqll = "SELECT * FROM `tipeMobil` where namaMobil ='$nama' AND jenisLain != ' ' ";
																				$listed = mysqli_query($k, $sqll);
																				$harga= '99999999999';
																				while($a = mysqli_fetch_array($listed)){
																				
																				$x = $a['harga'];
																				
																						if ($x>=1){
																							if ($harga >= $x) {
																									$harga = $x;
																									}
																						}
																				}
																					if($harga=='99999999999'){
																					echo "Hubungi Kami";
																					}else{

																					echo formatrp($harga);
																					}
																			?>
															</span>

														</div>
													</a>
												</li>
												
												<?php
													}
												?>
										
										
										
										
											</ul>
									
										</div>
									</div>
									
									<!-- Hatchback -->
									<div class="box" style="border: 0px solid #D9DDE3;margin-top: 10px;     padding: 0px 0px 0px;" >
												<div class="clear"></div>
										<div class="recent_cars four_columns"   style=" width: 110%;">
										
											<ul>
											<?php
												$sql = "SELECT * FROM `mobil` WHERE jenis = 'hatchback'";
												$list = mysqli_query($k, $sql);
												while($b = mysqli_fetch_array($list)){
									
											?>
												<li>
													<a href="product_page.php?namaMobil=<?php echo $b['namaMobil']; ?>">
														<img src="<?php echo $b['gambarUtama'];?>" alt=""/>
														<div class="title"><?php echo $b['namaMobil'];?>
														<span class="price">
																			<?php
																				$nama = $b['namaMobil'];
																				$sqlh = "SELECT * FROM `tipeMobil` where namaMobil ='$nama'";
																				$listed = mysqli_query($k, $sqlh);
																				$harga= '99999999999';
																				while($a = mysqli_fetch_array($listed)){
																				
																				$x = $a['harga'];
																				
																						if ($x>=1){
																							if ($harga >= $x) {
																									$harga = $x;
																									}
																						}
																				}
																					if($harga=='99999999999'){
																					echo "Hubungi Kami";
																					}else{

																					echo formatrp($harga);
																					}
																			?>
															</span>
														
														</div>
													</a>
												</li>
												
												<?php
													}
												?>
										
											</ul>
									
										</div>
									</div>
									
										<!-- Sedan -->
									<div class="box" style="border: 0px solid #D9DDE3;margin-top: 10px;     padding: 0px 0px 0px;" >
												<div class="clear"></div>
										<div class="recent_cars four_columns"   style=" width: 110%;">
										
											<ul>
											<?php
												$sql = "SELECT * FROM `mobil` WHERE jenis = 'sedan'";
												$list = mysqli_query($k, $sql);
												while($b = mysqli_fetch_array($list)){
									
											?>
												<li>
													<a href="product_page.php?namaMobil=<?php echo $b['namaMobil']; ?>">
														<img src="<?php echo $b['gambarUtama'];?>" alt=""/>
														<div class="title"><?php echo $b['namaMobil'];?>
														<span class="price">
																			<?php
																				$nama = $b['namaMobil'];
																				$sqlh = "SELECT * FROM `tipeMobil` where namaMobil ='$nama'";
																				$listed = mysqli_query($k, $sqlh);
																				$harga= '99999999999';
																				while($a = mysqli_fetch_array($listed)){
																				
																				$x = $a['harga'];
																				
																						if ($x>=1){
																							if ($harga >= $x) {
																									$harga = $x;
																									}
																						}
																				}
																					if($harga=='99999999999'){
																					echo "Hubungi Kami";
																					}else{

																					echo formatrp($harga);
																					}
																			?>
															</span>
														</div>
													</a>
												</li>
												
												<?php
													}
												?>
										
											</ul>
									
										</div>
									</div>
									<!-- city car -->
									<div class="box" style="border: 0px solid #D9DDE3;margin-top: 10px;     padding: 0px 0px 0px;" >
												<div class="clear"></div>
										<div class="recent_cars four_columns"   style=" width: 110%;">
										
											<ul>
											<?php
												$sql = "SELECT * FROM `mobil` WHERE jenis = 'city car'";
												$list = mysqli_query($k, $sql);
												while($b = mysqli_fetch_array($list)){
									
											?>
												<li>
													<a href="product_page.php?namaMobil=<?php echo $b['namaMobil']; ?>">
														<img src="<?php echo $b['gambarUtama'];?>" alt=""/>
														<div class="title"><?php echo $b['namaMobil'];?>
														<span class="price">
																			<?php
																				$nama = $b['namaMobil'];
																				$sqlh = "SELECT * FROM `tipeMobil` where namaMobil ='$nama'";
																				$listed = mysqli_query($k, $sqlh);
																				$harga= '99999999999';
																				while($a = mysqli_fetch_array($listed)){
																				
																				$x = $a['harga'];
																				
																						if ($x>=1){
																							if ($harga >= $x) {
																									$harga = $x;
																									}
																						}
																				}
																					if($harga=='99999999999'){
																					echo "Hubungi Kami";
																					}else{

																					echo formatrp($harga);
																					}
																			?>
															</span>
														</div>
													</a>
												</li>
												
												<?php
													}
												?>
										
											</ul>
									
										</div>
									</div>
									<!-- commercial -->
									<div class="box" style="border: 0px solid #D9DDE3;margin-top: 10px;     padding: 0px 0px 0px;" >
												<div class="clear"></div>
										<div class="recent_cars four_columns"   style=" width: 110%;">
										
											<ul>
											<?php
												$sql = "SELECT * FROM `mobil` WHERE jenis = 'commercial'";
												$list = mysqli_query($k, $sql);
												while($b = mysqli_fetch_array($list)){
									
											?>
												<li>
													<a href="product_page.php?namaMobil=<?php echo $b['namaMobil']; ?>">
														<img src="<?php echo $b['gambarUtama'];?>" alt=""/>
														<div class="title"><?php echo $b['namaMobil'];?>
														<span class="price">
																			<?php
																				$nama = $b['namaMobil'];
																				$sqlh = "SELECT * FROM `tipeMobil` where namaMobil ='$nama'";
																				$listed = mysqli_query($k, $sqlh);
																				$harga= '99999999999';
																				while($a = mysqli_fetch_array($listed)){
																				
																				$x = $a['harga'];
																				
																						if ($x>=1){
																							if ($harga >= $x) {
																									$harga = $x;
																									}
																						}
																				}
																					if($harga=='99999999999'){
																					echo "Hubungi Kami";
																					}else{

																					echo formatrp($harga);
																					}
																			?>
															</span>
														</div>
													</a>
												</li>
												
												<?php
													}
												?>
										
											</ul>
									
										</div>
									</div>
									<!-- city SUV -->
									<div class="box" style="border: 0px solid #D9DDE3;margin-top: 10px;     padding: 0px 0px 0px;" >
												<div class="clear"></div>
										<div class="recent_cars four_columns"   style=" width: 110%;">
										
											<ul>
											<?php
												$sql = "SELECT * FROM `mobil` WHERE jenis = 'SUV'";
												$list = mysqli_query($k, $sql);
												while($b = mysqli_fetch_array($list)){
									
											?>
												<li>
													<a href="product_page.php?namaMobil=<?php echo $b['namaMobil']; ?>">
														<img src="<?php echo $b['gambarUtama'];?>" alt=""/>
														<div class="title"><?php echo $b['namaMobil'];?>
														<span class="price">
																			<?php
																				$nama = $b['namaMobil'];
																				$sqlh = "SELECT * FROM `tipeMobil` where namaMobil ='$nama'";
																				$listed = mysqli_query($k, $sqlh);
																				$harga= '99999999999';
																				while($a = mysqli_fetch_array($listed)){
																				
																				$x = $a['harga'];
																				
																						if ($x>=1){
																							if ($harga >= $x) {
																									$harga = $x;
																									}
																						}
																				}
																					if($harga=='99999999999'){
																					echo "Hubungi Kami";
																					}else{

																					echo formatrp($harga);
																					}
																			?>
															</span>
														</div>
													</a>
												</li>
												
												<?php
													}
												?>
										
											</ul>
									
										</div>
									</div>
									<!-- MPV -->
									<div class="box" style="border: 0px solid #D9DDE3;margin-top: 10px;     padding: 0px 0px 0px;" >
												<div class="clear"></div>
										<div class="recent_cars four_columns"   style=" width: 110%;">
										
											<ul>
											<?php
												$sql = "SELECT * FROM `mobil` WHERE jenis = 'MPV'";
												$list = mysqli_query($k, $sql);
												while($b = mysqli_fetch_array($list)){
									
											?>
												<li>
													<a href="product_page.php?namaMobil=<?php echo $b['namaMobil']; ?>">
														<img src="<?php echo $b['gambarUtama'];?>" alt=""/>
														<div class="title"><?php echo $b['namaMobil'];?>
														<span class="price">
																			<?php
																				$nama = $b['namaMobil'];
																				$sqlh = "SELECT * FROM `tipeMobil` where namaMobil ='$nama'";
																				$listed = mysqli_query($k, $sqlh);
																				$harga= '99999999999';
																				while($a = mysqli_fetch_array($listed)){
																				
																				$x = $a['harga'];
																				
																						if ($x>=1){
																							if ($harga >= $x) {
																									$harga = $x;
																									}
																						}
																				}
																					if($harga=='99999999999'){
																					echo "Hubungi Kami";
																					}else{

																					echo formatrp($harga);
																					}
																			?>
															</span>
														</div>
													</a>
												</li>
												
												<?php
													}
												?>
										
											</ul>
									
										</div>
									</div>
									<!-- pickup -->
									<div class="box" style="border: 0px solid #D9DDE3;margin-top: 10px;     padding: 0px 0px 0px;" >
												<div class="clear"></div>
										<div class="recent_cars four_columns"   style=" width: 110%;">
										
											<ul>
											<?php
												$sql = "SELECT * FROM `tipemobil` WHERE jenisLain = 'pickup'";
												$list = mysqli_query($k, $sql);
												while($b = mysqli_fetch_array($list)){
									
											?>
												<li>
													<a href="product_page.php?namaMobil=<?php echo $b['namaMobil']; ?>">
														<img src="<?php echo $b['gambarUtama'];?>" alt=""/>
														<div class="title"><?php echo $b['namaMobil'];?>
														<span class="price">
																			<?php
																				$nama = $b['namaMobil'];
																				$sqll = "SELECT * FROM `tipeMobil` where namaMobil ='$nama' AND jenisLain != ' ' ";
																				$listed = mysqli_query($k, $sqll);
																				$harga= '99999999999';
																				while($a = mysqli_fetch_array($listed)){
																				
																				$x = $a['harga'];
																				
																						if ($x>=1){
																							if ($harga >= $x) {
																									$harga = $x;
																									}
																						}
																				}
																					if($harga=='99999999999'){
																					echo "Hubungi Kami";
																					}else{

																					echo formatrp($harga);
																					}
																			?>
															</span>
														
														</div>
													</a>
												</li>
												
												<?php
													}
												?>
										
											</ul>
									
										</div>
									</div>
									
										<!-- ambulan -->
									<div class="box" style="border: 0px solid #D9DDE3;margin-top: 10px;     padding: 0px 0px 0px;" >
												<div class="clear"></div>
										<div class="recent_cars four_columns"   style=" width: 110%;">
										
											<ul>
											<?php
												$sql = "SELECT * FROM `tipemobil` WHERE jenisLain = 'ambulan'";
												$list = mysqli_query($k, $sql);
												while($b = mysqli_fetch_array($list)){
									
											?>
												<li>
													<a href="product_page.php?namaMobil=<?php echo $b['namaMobil']; ?>">
														<img src="<?php echo $b['gambarUtama'];?>" alt=""/>
														<div class="title"><?php echo $b['namaMobil'];?>
														<span class="price">
																			<?php
																				$nama = $b['namaMobil'];
																				$sqll = "SELECT * FROM `tipeMobil` where namaMobil ='$nama' AND jenisLain != ' ' ";
																				$listed = mysqli_query($k, $sqll);
																				$harga= '99999999999';
																				while($a = mysqli_fetch_array($listed)){
																				
																				$x = $a['harga'];
																				
																						if ($x>=1){
																							if ($harga >= $x) {
																									$harga = $x;
																									}
																						}
																				}
																					if($harga=='99999999999'){
																					echo "Hubungi Kami";
																					}else{

																					echo formatrp($harga);
																					}
																			?>
															</span>
														</div>
													</a>
												</li>
												
												<?php
													}
												?>
										
											</ul>
									
										</div>
									</div>
				
				
				
						
				
				
				
					</div>	
					
					
					
					
					
					
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
