<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>About Us - Apc Tuning </title>
<?php include("css.php")?>
</head>
<body>
<div id="loading-icon-bx"><div class="loader"></div></div>
<div class="page-wraper">
	<?php include("ust.php")?>
	<div class="page-content bg-white">
		<!-- Inner Banner -->
		<div class="page-banner ovbl-dark" style="background-image:url(images/banner/bnr1.jpg);">
			<div class="container">
				<div class="page-banner-entry text-center">
					<h1><span>About Us</span></h1>
					<!-- Breadcrumb row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo $ayarlar["strURL"]; ?>"><i class="las la-home"></i>Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">About Us</li>
						</ul>
					</nav>
					<!-- Breadcrumb row END -->
				</div>
			</div>
		</div>
	
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
				 
		</div>
		<!-- Footer ==== -->
   <?php include("alt.php")?>
<style>
 b, strong, .strong {
    font-weight: 600;
    color: #020d26;
}
</style>
</body>
</html>