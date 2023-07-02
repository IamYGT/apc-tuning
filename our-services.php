<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Our Services - Apc Tuning </title>
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
					<h1><span>Our Services</span></h1>
					<!-- Breadcrumb row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo $ayarlar["strURL"]; ?>"><i class="las la-home"></i>Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Our Services</li>
						</ul>
					</nav>
					<!-- Breadcrumb row END -->
				</div>
			</div>
		</div>
			
		<!-- Services -->
		<section class="section-area bg-gray section-sp1" style="background-image: url(images/background/bg2.png); background-repeat: no-repeat; background-position:right top;">
			<div class="container">
				<div class="row">
					    <?php
				$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id DESC LIMIT 4");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 		<div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
						<div class="feature-container feature-bx1"> 
							<div class="icon-content">
								<h5 class="ttr-tilte"><?php echo 	$veri_listele["haber_baslik"]; ?></h5>
								<p><?php echo 	$veri_listele["haber_kisaaciklama"]; ?></p>
								<a href="<?php echo $ayarlar["strURL"]; ?>/service-detail/<?php echo $veri_listele["haber_seo"]; ?>" class="btn-link">Read More</a>
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
	 
		<!-- Brand List -->
		<section class="section-area section-sp1 bg-white">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-5 col-lg-5">
						<div class="heading-bx mb-4 pr-lg-5">
							<h6 class="title-ext m-b0 text-primary">PARTNERSHIPS</h6>
							<h2 class="title">OUR PARTNERSHIPS</h2>
							<p>We offer a full range of garage services to vehicle owners located in Tucson area. All mechanic services are performed.</p>
						</div>
					</div>
					<div class="col-xl-7 col-lg-7 mb-30">
						<ul class="brand-list">
							<li><img src="images/why-choose/car-1.png" alt=""></li>
							<li><img src="images/why-choose/car-2.png" alt=""></li>
							<li><img src="images/why-choose/car-3.png" alt=""></li>
							<li><img src="images/why-choose/car-4.png" alt=""></li>
							<li><img src="images/why-choose/car-5.png" alt=""></li>
							<li><img src="images/why-choose/car-6.png" alt=""></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
			
	</div>
	<?php include("alt.php")?>
</body>
</html>