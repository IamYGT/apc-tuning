<header class="header header-transparent rs-nav">
		<!-- Menu Header -->
		<div class="sticky-header navbar-expand-lg">
			<div class="menu-bar clearfix ">
				<div class="container-fluid clearfix">
					<!-- Website Logo -->
					<div class="menu-logo">
						<a href="<?php echo $ayarlar["strURL"]; ?>" class="main-logo"><img src="<?php echo $ayarlar["strURL"]; ?>/images/logo-white.png" alt=""></a>
						<a href="<?php echo $ayarlar["strURL"]; ?>" class="sticky-logo"><img src="<?php echo $ayarlar["strURL"]; ?>/images/logo.png" alt=""></a>
					</div>
					<!-- Nav Toggle -->
					<button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<!-- Secondary Menu -->
					<div class="secondary-menu">
						<a href="https://app.apc-tuning.com/login" class="btn btn-outline-light">Login</a>
						<a href="https://app.apc-tuning.com/register" class="btn btn-primary ml-3">Register</a>
					</div>
					<!-- Menu Links -->
					<div class="menu-links navbar-collapse collapse justify-content-center" id="menuDropdown">
						<div class="menu-logo">
							<a href="<?php echo $ayarlar["strURL"]; ?>"><img src="<?php echo $ayarlar["strURL"]; ?>/images/logo-white.png" alt=""></a>
						</div>
						<ul class="nav navbar-nav">	
							<li class="active"><a href="<?php echo $ayarlar["strURL"]; ?>">Home</a></li>
							<li class="active"><a href="<?php echo $ayarlar["strURL"]; ?>/about-us">About Us</a></li> 
							<li><a href="<?php echo $ayarlar["strURL"]; ?>/our-services">Our Services <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu left">
									  <?php
				$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id DESC LIMIT 999");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 
<li><a href="<?php echo $ayarlar["strURL"]; ?>/service-detail/<?php echo $veri_listele["haber_seo"]; ?>"><span><?php echo 	$veri_listele["haber_baslik"]; ?></span></a></li>

								<?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>

								</ul>
							</li>
							<li class="active"><a href="<?php echo $ayarlar["strURL"]; ?>/calibration">Calibration</a></li> 
							<li class="active"><a href="<?php echo $ayarlar["strURL"]; ?>/price">Price</a></li> 
 							<li class="active"><a href="<?php echo $ayarlar["strURL"]; ?>/news">News</a></li> 
							<li class="active"><a href="<?php echo $ayarlar["strURL"]; ?>/contact-us">Contact Us</a></li> 

						</ul>
						<ul class="social-media">  						
			<li><a class="btn btn-primary" href="https://www.facebook.com/<?php echo $ayarlar["strFacebook"]; ?>/"><i class="fa fa-facebook"></i></a></li>
			<li><a class="btn btn-primary" href="https://twitter.com/<?php echo $ayarlar["strTwitter"]; ?>"><i class="fa fa-twitter"></i></a></li>
			<li><a class="btn btn-primary" href="https://www.instagram.com/<?php echo $ayarlar["strInstagram"]; ?>"><i class="fa fa-instagram"></i></a></li>
			<li><a class="btn btn-primary" href="https://www.youtube.com/<?php echo $ayarlar["strYoutube"]; ?>"><i class="fa fa-youtube"></i></a></li>
			<li><a class="btn btn-primary" href="https://wa.me/<?php echo  $ayarlar["strWhatsappPhone_".$lang];  ?>?text=<?php echo  $ayarlar["strWhatsappMessage_".$lang];  ?>"><i class="fa fa-whatsapp"></i></a></li>
			</ul>
						<div class="menu-close">
							<i class="ti-close"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main Header End -->
	</header>
	<!-- Header End -->