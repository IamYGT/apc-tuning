<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");

	 $tekil_veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND haber_seo = '{$_GET["url"]}' AND dil_id = '{$lang}' ")->fetch(PDO::FETCH_ASSOC); 

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $tekil_veri_cek["haber_baslik"]; ?> - Apc Tuning </title>
<?php include("css.php")?>
</head>
<body>
<div id="loading-icon-bx"><div class="loader"></div></div>
<div class="page-wraper">
	<?php include("ust.php")?>
	<div class="page-content bg-white">
		<!-- Inner Banner -->
		<div class="page-banner ovbl-dark" style="background-image:url(<?php echo $ayarlar["strURL"]; ?>/images/banner/bnr5.jpg);">
			<div class="container">
				<div class="page-banner-entry text-center">
					<h1><span><?php echo $tekil_veri_cek["haber_baslik"]; ?></span></h1>
					<!-- Breadcrumb row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo $ayarlar["strURL"]; ?>"><i class="las la-home"></i>Home</a></li>
							<li class="breadcrumb-item"><a href="<?php echo $ayarlar["strURL"]; ?>/our-services">Our Services</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php echo $tekil_veri_cek["haber_baslik"]; ?></li>
						</ul>
					</nav>
					<!-- Breadcrumb row END -->
				</div>
			</div>
		</div>
		
		<!-- Form -->
		<div class="section-area section-sp1 bg-white">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-5">
						<aside class="sticky-top pb-1">
							<div class="widget">
								<ul class="service-menu">
 											  <?php
				$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id DESC LIMIT 999");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> <li><a href="<?php echo $ayarlar["strURL"]; ?>/service-detail/<?php echo $veri_listele["haber_seo"]; ?>"><span><?php echo 	$veri_listele["haber_baslik"]; ?></span> <i class="fa fa-angle-right"></i></a></li>
								<?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
 								
								</ul>
							</div> 
							<div class="widget">
								<div class="help-bx">
									<div class="media">
										<img src="images/about/pic3.jpg" alt="">
									</div>
									<div class="info">
										<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewbox="0 0 476 476">
											<path d="M400.85,181v-18.3c0-43.8-15.5-84.5-43.6-114.7c-28.8-31-68.4-48-111.6-48h-15.1c-43.2,0-82.8,17-111.6,48 c-28.1,30.2-43.6,70.9-43.6,114.7V181c-34.1,2.3-61.2,30.7-61.2,65.4V275c0,36.1,29.4,65.5,65.5,65.5h36.9c6.6,0,12-5.4,12-12
											V192.8c0-6.6-5.4-12-12-12h-17.2v-18.1c0-79.1,56.4-138.7,131.1-138.7h15.1c74.8,0,131.1,59.6,131.1,138.7v18.1h-17.2
											c-6.6,0-12,5.4-12,12v135.6c0,6.6,5.4,12,12,12h16.8c-4.9,62.6-48,77.1-68,80.4c-5.5-16.9-21.4-29.1-40.1-29.1h-30
											c-23.2,0-42.1,18.9-42.1,42.1s18.9,42.2,42.1,42.2h30.1c19.4,0,35.7-13.2,40.6-31c9.8-1.4,25.3-4.9,40.7-13.9
											c21.7-12.7,47.4-38.6,50.8-90.8c34.3-2.1,61.5-30.6,61.5-65.4v-28.6C461.95,211.7,434.95,183.2,400.85,181z M104.75,316.4h-24.9
											c-22.9,0-41.5-18.6-41.5-41.5v-28.6c0-22.9,18.6-41.5,41.5-41.5h24.9V316.4z M268.25,452h-30.1c-10,0-18.1-8.1-18.1-18.1
											s8.1-18.1,18.1-18.1h30.1c10,0,18.1,8.1,18.1,18.1S278.25,452,268.25,452z M437.95,274.9c0,22.9-18.6,41.5-41.5,41.5h-24.9V204.8
											h24.9c22.9,0,41.5,18.6,41.5,41.5V274.9z"></path>
										</svg>
										<h5 class="title mt-20">How Can We Help</h5>
										<p>If you need any helps, please free to contact us.</p>
										<a href="<?php echo $ayarlar["strURL"]; ?>/contact-us" class="btn btn-primary">Contact Us</a>
									</div>
								</div>
							</div>
						</aside>
					</div>
					<div class="col-lg-8 col-md-7 mb-30">
						<div class="ttr-media mb-30">
							<img src="<?php echo $ayarlar["strURL"]; ?>/uploads/services/<?php echo $tekil_veri_cek["haber_resim"]; ?>" class="imghight" alt="<?php echo $tekil_veri_cek["haber_baslik"]; ?>">
						</div>
						<div class="mb-30">
							<div class="head-text mb-30">
								<h4 class="title mb-10"><?php echo $tekil_veri_cek["haber_baslik"]; ?></h4>
								<p class="mb-0"><?php echo $tekil_veri_cek["haber_aciklama"]; ?></p>
							</div>
							 
						</div>
						 
					</div>
				</div>
			</div>
		</div>
	
	</div>
	<!-- Footer ==== -->
 <?php include("alt.php")?>
</body>
</html>