<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home - Apc Tuning </title>
<?php include("css.php")?>
</head>
<body>
<div id="loading-icon-bx"><div class="loader"></div></div>
<div class="page-wraper">
	<?php include("ust.php")?>
	<div class="page-content bg-white">
		<div class="ttr-slider style-2">
			<div class="swiper-container ttr-swiper01">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="slider-img">
							<img src="images/slider/slide3.jpg" alt="">
						</div>
						<div class="slider-content container text-center text-white">
							<div class="content-inner">
								<h6 class="sub-title" data-swiper-parallax="-200">Apc Tuning</h6>
								<h2 class="title" data-swiper-parallax="-400">Custom Calibration Tuning Service</h2>
								<div class="car-wheel wheel2" data-swiper-parallax="-600">
									<img src="images/slider/car2.png" alt="">
									<div class="wheel-1"><img src="images/slider/wheel2.png" alt=""></div>
									<div class="wheel-2"><img src="images/slider/wheel2.png" alt=""></div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="slider-img slide-move" style="background-image:url(images/slider/slide1.jpg);">
							<img src="images/slider/slide1.jpg" alt="">
						</div>
						<div class="slider-content container text-center text-white">
							<div class="content-inner">
								<h6 class="sub-title" data-swiper-parallax="-200">Apc Tuning</h6>
								<h2 class="title" data-swiper-parallax="-400">Custom Calibration Tuning Service</h2>
								<div class="car-wheel" data-swiper-parallax="-600">
									<img src="images/slider/car.png" alt="">
									<div class="wheel-1"><img src="images/slider/wheel.png" alt=""></div>
									<div class="wheel-2"><img src="images/slider/wheel.png" alt=""></div>
								</div>
							</div>
						</div>
					</div>			
				
				</div>
				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>
			</div>
		</div>
			<!-- Appointment Form -->
		<section class="section-area bg-primary form-card">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-3 align-self-center">
						<div class="form-head text-white mb-md-30">
							<h3 class="title">Contact Us</h3>
							<h6 class="mb-0"><span class="fw4 mr-1">OR Call</span> <?php echo $ayarlar["strPhone"]; ?></h6>
						</div>
					</div>
					<div class="col-lg-9">
						<form id="basketForm" action="offerte" method="post"  onsubmit="return false;">
 									<div class="row sp5"> 
									<div style="    margin-bottom: 11px!important;" class="col-12 col-md-4 mb-2 mb-md-0">
				<select class="form-control bg-secondary full-width"  name="aracmarka" id="marka"   >
			    </select>
		    </div> 
			<div style="    margin-bottom: 11px!important;" class="col-12 col-md-4 mb-2 mb-md-0">
				<select class="form-control bg-secondary full-width" disabled title="Select Model"  name="aracmodel"  id="model" >
													<option selected>Select Model</option> 
			    </select>
		    </div>
		    <div style="    margin-bottom: 11px!important;" class="col-12 col-md-4 mb-2 mb-md-0">
				<select class="form-control bg-secondary full-width " disabled title="Select Year"  name="aracyil"  id="yil">
				<option selected>Select Year</option>
			    </select>
		    </div>
		    <div style="    margin-bottom: 11px!important;" class="col-12 col-md-4 ">
				<select class="form-control bg-secondary full-width " disabled title="Select Engine" name="aractip"   id="arac">
								<option selected>Select Engine</option> 
			    </select>
		    </div> 
							
							<div class="col-md-8 col-sm-6">
									<div class="form-group">
										<a  id="go_arac_detay" class="btn btn-warning btn-block">INFO</a>
									</div>
								</div>
								
								</div>
							
							</form>
							</div>
							</div>
							</div>
						
   		</section>
		 
		<!-- About US -->
		<section class="section-area section-sp1 bg-white" style="background-image: url(images/background/bg1.png); background-repeat:no-repeat;">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 mb-30 mb-md-50">
						<div class="heading-bx">
							<h6 class="title-ext text-primary">APC TUNING</h6>
							<h2 class="title">ABOUT US</h2>
						 <?php echo  $ayarlar["hakkimizda_".$lang];  ?> 
						</div>
						<div class="row">
							<div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6">
								<div class="counter-style-1">
									<div class="text-secondry">
										<h2 class="text-primary"><span class="counter">487</span><span>+</span></h2>
									</div>
									<h5 class="counter-text">HAPPY CUSTOMER</h5>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6">
								<div class="counter-style-1">
									<div class="text-secondry">
										<h2 class="text-primary"><span class="counter">11</span><span>K</span></h2>
									</div>
									<h5 class="counter-text">NUMBER OF VEHICLES</h5>
								</div>
							</div>
							<div class="col-xl-4 col-lg-12 col-md-4 col-sm-12">
								<div class="counter-style-1">
									<div class="text-secondry">
										<h2 class="text-primary"><span class="counter">780</span><span>+</span></h2>
									</div>
									<h5 class="counter-text">NUMBER OF FILES</h5>
								</div>
							</div>
						</div>
					 
					</div>
					<div class="col-lg-6 mb-30">
						<div class="about-imgbox">
							<img src="images/about/pic2.jpg" alt="Apc Tuning">
							<div class="about-year">
								<h2 class="count"><span class="counter">11</span>+</h2>
								<h6 class="text">YEARS OF EXPERIENCE</h6>
 							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
<section class="section-area section-sp3 about-wraper2 bg-gray" style="background-image: url(images/background/bg1.png); background-repeat:no-repeat;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-sm-12 col-12 text-center">
						<div class="heading-bx text-center">
						<h6 class="title-ext">OUR SERVICES</h6>
						<h2 class="title mb-0">WE PROVIDE BEST SERVICES</h2>
						</div>
						<div class="about-content text-center">
							<div class="ttr-media">
								<img src="images/about/about-car.png" alt="">
							</div>
							<div class="content-info">
								<div class="content-left">
								 <?php
				$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id DESC LIMIT 3");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 	
									<div class="service-content">
										<h6 class="title"><a href="<?php echo $ayarlar["strURL"]; ?>/service-detail/<?php echo $veri_listele["haber_seo"]; ?>"> <?php echo 	$veri_listele["haber_baslik"]; ?> </a></h6>
									</div>
<?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>

									 
								 
								</div>
								<div class="content-right">
											 <?php
				$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 3");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 	
									<div class="service-content">
										<h6 class="title"><a href="<?php echo $ayarlar["strURL"]; ?>/service-detail/<?php echo $veri_listele["haber_seo"]; ?>"> <?php echo 	$veri_listele["haber_baslik"]; ?> </a></h6>
									</div>
<?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>  
	 
<section class="section-area section-sp2 bg-gray ov-hidden">
			<div class="container">
				<div class="heading-bx text-center">
					<h6 class="title-ext text-primary">Latest NEWS</h6>
					<h2 class="title mb-0">OUR LATEST NEWS</h2>
 				</div>
				<div class="blog-carousel owl-carousel owl-loaded owl-none owl-drag">
				    <?php
				$veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id DESC LIMIT 6");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> <div class="item">
						<div class="blog-card style-1 bg-white shadow">
							<div class="post-media">
								<a href="<?php echo $ayarlar["strURL"]; ?>/news-detail/<?php echo $veri_listele["haber_seo"]; ?>"><img src="<?php echo $ayarlar["strURL"]; ?>/uploads/news/<?php echo $veri_listele["haber_resim"]; ?>" alt=""></a>
							</div>
							<div class="post-info">
								<h5 class="post-title"><a href="<?php echo $ayarlar["strURL"]; ?>/news-detail/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></h5>
								<div class="post-content">
									<p class="mb-0"><?php echo 	$veri_listele["haber_kisaaciklama"]; ?></p>
								</div>
								<ul class="post-meta">
									<li class="author"><img src="<?php echo $ayarlar["strURL"]; ?>/images/testimonials/pic1.jpg" alt="">By <a href="#">Apc Tuning</a></li>
									<li class="date"><a href="<?php echo $ayarlar["strURL"]; ?>/news-detail/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo date("d/m/Y", strtotime($veri_listele["haber_tarih"])); ?></a></li>
								</ul>
							</div>
						</div>
					</div>
					 <?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
					 </div>
			</div>
		</section>
				
 <section class="section-area section-sp2 bg-gray ovbl-dark testimonial-area" style="background-image:url(images/background/bg1.jpg); background-repeat:no-repeat; background-attachment:fixed; background-size:cover;">
			<div class="container">
				<div class="heading-bx text-white d-lg-flex d-md-block align-items-end justify-content-between">
					<div class="clearfix mb-2">
						<h6 class="title-ext text-primary">TESTIMONIAL</h6>
						<h2 class="title mb-0">WHAT CLIENTS SAY</h2>
					</div> 
				</div>
				<div class="testimonial-carousel-1 owl-carousel owl-btn-1 owl-btn-center-lr dots-style-1 owl-none wow fadeIn" data-wow-delay="0.9s">
					    <?php
				$veri_cek = $db->query("SELECT * FROM nedenildi WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id DESC LIMIT 6");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 	<div class="item">
						<div class="testimonial-bx">
							<div class="testimonial-content">
								 <?php echo 	$veri_listele["haber_aciklama"]; ?> 
							</div>
							<div class="client-info">
								<div class="testimonial-info">
									<h6 class="name">- <?php echo $veri_listele["haber_baslik"]; ?></h6>
								</div>
								<div class="testimonial-thumb">
									<img src="<?php echo $ayarlar["strURL"]; ?>/images/testimonials/pic1.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
					 <?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
			  </div>
			</div>
		</section> 
		</div>
    <?php include("alt.php")?>
<style>
b, strong, .strong {
    font-weight: 600;
    color: #020d26;
} 

.form-control {
    width: 100%;
    padding: 0 8px 0;
    font-family: "poppins", sans-serif;
    text-transform: none;
    background: #fff !important;
    font-size: 14px;
    height: 45px;
}
}
.bootstrap-select.btn-group:not(.input-group-btn), .bootstrap-select.btn-group[class*=col-] {
    float: none;
    display: none !important;
    margin-left: 0;
}

.bootstrap-select.form-control {
    display: none !important;
    padding: 0;
}
</style>
</body>
</html>