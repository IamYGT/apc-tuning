<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Calibration - Apc Tuning </title>
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
					<h1><span>Calibration</span></h1>
					<!-- Breadcrumb row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo $ayarlar["strURL"]; ?>"><i class="las la-home"></i>Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Calibration</li>
						</ul>
					</nav>
					<!-- Breadcrumb row END -->
				</div>
			</div>
		</div>
			
		<!-- Contact Info -->
		<section style="padding-top: 70px;" class="section-area section-sp1">
			<div class="container"> 
			<div style="    text-align: center;" class="row">
 				
			<?php
				$veri_cek = $db->query("SELECT * FROM arac_marka WHERE marka_durum = 1 ORDER BY marka ASC");
				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?>  	 			<div style="margin-bottom: 18px;" class="col-sm-2 col-lg-2 col-xs-6 mm "> 
				<a href="car/<?php echo $veri_listele["link"]; ?>"><img style="    height: 61px;
    width: 91px;" src="<?php echo $ayarlar["strURL"]; ?>/uploads/cars/<?php echo $veri_listele["resim"]; ?>" alt="<?php echo 	$veri_listele["marka"]; ?>" ></a></div>
			
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
</body>
</html>