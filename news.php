<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); 

	$sayfa = (isset($q) ? $q : 1);
		$toplam_veri_sayisi = $db->query("SELECT COUNT(*) FROM haberler WHERE dil_id = '{$lang}' ")->fetchColumn();
		$limit = 6; //gösterilecek veri sayısı
		$sonSayfa = ceil($toplam_veri_sayisi/$limit);
		$baslangic = ($sayfa-1)*$limit;
		
		?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>News - Apc Tuning </title>
<?php include("css.php")?>
</head>
<body>
<div id="loading-icon-bx"><div class="loader"></div></div>
<div class="page-wraper">
	<?php include("ust.php")?>
	<div class="page-content bg-gray">
		<!-- Inner Banner -->
		<div class="page-banner ovbl-dark" style="background-image:url(images/banner/bnr5.jpg);">
			<div class="container">
				<div class="page-banner-entry text-center">
					<h1><span>News</span></h1>
					<!-- Breadcrumb row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo $ayarlar["strURL"]; ?>"><i class="las la-home"></i>Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">News</li>
						</ul>
					</nav>
					<!-- Breadcrumb row END -->
				</div>
			</div>
		</div>
		
		<!-- Blog Grid -->
		<section class="section-area section-sp2">
		   <div class="container">
				<div class="row">
					<?php
		$list = $db->query("SELECT * FROM haberler WHERE  dil_id = '{$lang}' ORDER BY haber_ust_id DESC LIMIT $baslangic,$limit"); 
			if ($list->rowCount()){
				foreach($list as $row){ 
?> 	
<div class="col-xl-4 col-md-6">
						<div class="blog-card style-1 bg-white shadow">
							<div class="post-media">
								<a href="<?php echo $ayarlar["strURL"]; ?>/news-detail/<?php echo $row["haber_seo"]; ?>"><img src="<?php echo $ayarlar["strURL"]; ?>/uploads/news/<?php echo $row["haber_resim"]; ?>" alt="<?php echo $row["haber_baslik"]; ?>"></a>
							</div>
							<div class="post-info">
								<h4 class="post-title"><a href="<?php echo $ayarlar["strURL"]; ?>/news-detail/<?php echo $row["haber_seo"]; ?>"><?php echo $row["haber_baslik"]; ?></a></h4>
								<div class="post-content">
									<p class="mb-0"><?php echo $row["haber_kisaaciklama"]; ?></p>
								</div>
								<ul class="post-meta">
									<li class="author"><img src="images/testimonials/pic1.jpg" alt="">By <a href="#">Apc Tuning</a></li>
									<li class="date"><a href="<?php echo $ayarlar["strURL"]; ?>/news-detail/<?php echo $row["haber_seo"]; ?>"><?php echo date("d/m/Y", strtotime($row["haber_tarih"])); ?></a></li>
								</ul>
							</div>
						</div>
					</div>
				<?php 	
				}
			}else{
				echo 'Listelenecek veri bulunamadı.';
			}
?>
				</div>
				
 	<?php if($toplam_veri_sayisi > $limit){ ?>
	 
	
				<div class="row">
					<div class="col-lg-12">
						<div class="pagination-bx text-center clearfix">
							<ul class="pagination">
								<?php 
					$x = 2; 
					if($sayfa > 1){	
						$onceki = $sayfa-1;	
						echo '<li class="previous" ><a href="?q='.$onceki.'" >Prev</a></li>';
					}	
					if($sayfa==1){
						echo '<li class="active" ><a>1</a></li>';
					} else {
						echo '<li class="previous"><a href="?q=1" class="paginate_button previous">1</a></li>';
					}
					if($sayfa-$x > 2){
						echo '...'; 
						$i = $sayfa-$x;
					} else { 			
						$i = 2; 		  
					}
					for($i; $i<=$sayfa+$x; $i++) {
						if($i==$sayfa){
							echo '<li class="active" ><a href="#" class="paginate_button current">'.$i.'</a></li>';
						} else {
							echo '<li class="previous" ><a href="?q='.$i.'" class="paginate_button previous">'.$i.'</a></li>';
						}
						if($i==$sonSayfa) break;  
					}		
					if($sayfa < $sonSayfa){	  
						$sonraki = $sayfa+1;   
						echo '<li class="next"><a href="?q='.$sonraki.'">Next</a></li>';		  
					}	
			?>  
							</ul>
						</div>
							<?php } ?> 
					</div>
				</div>
			</div>
		</section>
		
	</div>
 <?php include("alt.php")?>
</body>
</html>