<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");
$tekil_veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND haber_seo = '{$_GET["url"]}' AND dil_id = '{$lang}' ")->fetch(PDO::FETCH_ASSOC); 
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
		<div class="page-banner ovbl-dark" style="background-image:url(<?php echo $ayarlar["strURL"]; ?>/uploads/news/<?php echo $tekil_veri_cek["haber_resim"]; ?>);">
			<div class="container">
				<div class="page-banner-entry text-center">
					<h1><span><?php echo $tekil_veri_cek["haber_baslik"]; ?></span></h1>
					<!-- Breadcrumb row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo $ayarlar["strURL"]; ?>"><i class="las la-home"></i>Home</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php echo $tekil_veri_cek["haber_baslik"]; ?></li>
						</ul>
					</nav>
 				</div>
			</div>
		</div> 
		<section class="section-area section-sp1 bg-white">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-8 col-xl-8 mb-30 mb-md-60">
						<!-- blog start -->
						<div class="blog-lg blog-single">
							<div class="action-box blog-lg">
								<img src="<?php echo $ayarlar["strURL"]; ?>/uploads/news/<?php echo $tekil_veri_cek["haber_resim"]; ?>" alt="<?php echo $tekil_veri_cek["haber_baslik"]; ?>">
							</div>
							<div class="info-bx">
								<ul class="post-meta">
									<li class="author"><img src="<?php echo $ayarlar["strURL"]; ?>/images/testimonials/pic1.jpg" alt="<?php echo $tekil_veri_cek["haber_baslik"]; ?>">By <a href="javascript:;">Apc Tuning</a></li>
									<li class="date"><a href="javascript:;"><?php echo $tekil_veri_cek["haber_tarih"]; ?></a></li>
								</ul>
								<div class="ttr-post-title">
									<h3 class="post-title"><?php echo $tekil_veri_cek["haber_baslik"]; ?></h3>
								</div>
								<div class="ttr-post-text">
									<?php echo $tekil_veri_cek["haber_aciklama"]; ?>
									</div>
								<div class="ttr-post-footer">
									 <div class="share-post ">
										<ul class="social-media">
											<li><strong>SHARE:</strong></li> 
											<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $ayarlar["strURL"]; ?>/news-detail/<?php echo $tekil_veri_cek["haber_seo"]; ?>" class="btn btn-primary"><i class="fa fa-facebook"></i></a></li>
											<li><a href="https://pinterest.com/pin/create/button/?url=<?php echo $ayarlar["strURL"]; ?>/news-detail/<?php echo $tekil_veri_cek["haber_seo"]; ?>" class="btn btn-primary"><i class="fa fa-pinterest"></i></a></li>
											<li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $ayarlar["strURL"]; ?>/news-detail/<?php echo $tekil_veri_cek["haber_seo"]; ?>" class="btn btn-primary"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="https://twitter.com/intent/tweet?url=<?php echo $ayarlar["strURL"]; ?>/news-detail/<?php echo $tekil_veri_cek["haber_seo"]; ?>" class="btn btn-primary"><i class="fa fa-twitter"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="author-box blog-user mb-60">
							<div class="author-profile-info">
								<div class="author-profile-pic">
									<img src="<?php echo $ayarlar["strURL"]; ?>/images/testimonials/pic1.jpg" alt="Apc Tuning">
								</div>
								<div class="author-profile-content">
									<h5>Apc Tuning</h5>
									<p>APC is a Company offering Personalized Custom Engine and Transmission calibrations focusing on Performance and Efficiency.</p>
									<ul class="social-media">
			<li><a class="btn btn-primary" href="https://www.facebook.com/<?php echo $ayarlar["strFacebook"]; ?>/"><i class="fa fa-facebook"></i></a></li>
			<li><a class="btn btn-primary" href="https://twitter.com/<?php echo $ayarlar["strTwitter"]; ?>"><i class="fa fa-twitter"></i></a></li>
			<li><a class="btn btn-primary" href="https://www.instagram.com/<?php echo $ayarlar["strInstagram"]; ?>"><i class="fa fa-instagram"></i></a></li>
			<li><a class="btn btn-primary" href="https://www.youtube.com/<?php echo $ayarlar["strYoutube"]; ?>"><i class="fa fa-youtube"></i></a></li>
			<li><a class="btn btn-primary" href="https://wa.me/<?php echo  $ayarlar["strWhatsappPhone_".$lang];  ?>?text=<?php echo  $ayarlar["strWhatsappMessage_".$lang];  ?>"><i class="fa fa-whatsapp"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					 </div>
					<div class="col-md-12 col-lg-4 col-xl-4 mb-30">
						<aside class="side-bar sticky-top aside-bx">
							 <div class="widget recent-posts-entry">
								<h5 class="widget-title">Recent News</h5>
								<div class="widget-post-bx">   <?php
				$veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id DESC LIMIT 3");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> <div class="widget-post clearfix">
										<div class="ttr-post-media"> <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/news/<?php echo $veri_listele["haber_resim"]; ?>" width="200" height="143" alt=""> </div>
										<div class="ttr-post-info">
											<div class="ttr-post-header">
												<h6 class="post-title"><a href="<?php echo $ayarlar["strURL"]; ?>/news-detail/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></h6>
											</div>
											<ul class="post-meta">
												<li class="author">By <a href="<?php echo $ayarlar["strURL"]; ?>/news-detail/<?php echo $veri_listele["haber_seo"]; ?>">Apc Tuning</a></li>
											</ul>
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
						</aside>
					</div>
				</div>
			</div>
		</section>
		
	</div>
   <?php include("alt.php")?>
</body>
</html>