 <?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); 
 
$segments = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
$markaSegmentIndex = 1;
$aracMarka = isset($segments[$markaSegmentIndex]) ? $segments[$markaSegmentIndex] : '';
$aracModel = isset($segments[$markaSegmentIndex + 1]) ? $segments[$markaSegmentIndex + 1] : '';
$aracModelID = isset($segments[$markaSegmentIndex + 2]) ? $segments[$markaSegmentIndex + 2] : '';
$aracYil = isset($segments[$markaSegmentIndex + 3]) ? $segments[$markaSegmentIndex + 3] : '';
$aracYilID = isset($segments[$markaSegmentIndex + 4]) ? $segments[$markaSegmentIndex + 4] : '';
 
 
	if($aracMarka !='') {
		$arac_marka = $db->query("SELECT * FROM arac_marka WHERE link = '{$aracMarka}'")->fetch(PDO::FETCH_ASSOC);
		$arac = $arac_marka["marka"];
		$aracid = $arac_marka["arac_id"];
		$aracResim = $arac_marka["buyuk_resim"];
	}
	if($aracModel!='') {
		$arac_model = $db->query("SELECT * FROM arac_model WHERE link = '{$aracModel}' AND model_id = '{$aracModelID}' ")->fetch(PDO::FETCH_ASSOC);
		$model = $arac_model["model"];
		$modelid = $arac_model["model_id"];
	}
	if($aracYil!='') {
		$arac_yil = $db->query("SELECT * FROM arac_yil WHERE link = '{$aracYil}' AND yil_id = '{$aracYilID}'")->fetch(PDO::FETCH_ASSOC);
		$yil = $arac_yil["yil"];
		$yilid = $arac_yil["yil_id"];
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title><?php echo $arac; ?>  - <?php echo $arac_model["model"]; ?> - <?php echo $arac_yil["yil"]; ?> - Apc Tuning </title>
         <meta name="description" content="<?php echo $arac_marka["marka"]; ?>  / <?php echo $arac_model["model"]; ?> / <?php echo $arac_yil["yil"]; ?> <?php echo LANG("TEXT_63",$lang); ?> ">
<?php include("css.php")?>

</head>
<body>
<div id="loading-icon-bx"><div class="loader"></div></div>
<div class="page-wraper">
	<?php include("ust.php")?>
	<div class="page-content bg-white">
		<!-- Inner Banner -->
		<div class="page-banner ovbl-dark" style="background-image:url(<?php echo $ayarlar["strURL"]; ?>/images/banner/bnr1.jpg);">
			<div class="container">
				<div class="page-banner-entry text-center">
					<h1><span><?php echo $arac; ?></span></h1>
					<!-- Breadcrumb row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
					 <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo $ayarlar["strURL"]; ?>/calibration">Calibration</a></li>
    <li class="breadcrumb-item"><a href="<?php echo $ayarlar["strURL"]; ?>/car/<?php echo $arac_marka["link"]; ?>"><?php echo $arac; ?>   </a></li>
    <li class="breadcrumb-item"><a href="<?php echo $ayarlar["strURL"]; ?>/car/<?php echo $arac_marka["link"]; ?>/<?php echo $arac_model["link"]; ?>"><?php echo $arac_model["model"]; ?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $arac_yil["yil"]; ?></li>
  </ul>
					</nav>
					<!-- Breadcrumb row END -->
				</div>
			</div>
		</div>
			
		<!-- Contact Info -->
		<section style="padding-top: 70px;" class="section-area section-sp1">
			<div class="container"> 
			<div class="row"> 
				<?php if(!$model) { ?>
				<?php 
						$bilgi= $db->query("SELECT * FROM arac_model WHERE marka_id = {$arac_marka["marka_id"]} ORDER BY model ASC");
						foreach($bilgi as $row){
						echo '<div class=" col-lg-4 col-md-4 col-sm-4 " style="margin-bottom: 10px;"><div class="aracmarkalar">
						<a href="/car/'.$aracMarka.'/'.$row["link"].'/'.$row["model_id"].'"> '.$row["model"].' </a></div> </div>';
										}
				?> 
		  <?php } ?>
			<?php if($model!='') { ?>
				<?php if(!$yil) { ?>  
					<?php 
									$bilgi= $db->query("SELECT * FROM arac_yil WHERE model_id = {$modelid} ORDER BY yil ASC");
									foreach($bilgi as $rowz){
										echo '<div class=" col-lg-4 col-md-4 col-sm-4 " style="margin-bottom: 10px;"><div class="aracmarkalar">
						<a href="/car/'.$aracMarka.'/'.$aracModel.'/'.$aracModelID.'/'.$rowz["link"].'/'.$rowz["yil_id"]. '"> '.$rowz["yil"].' </a>
						</div> </div>';
									}
					?> 
				<?php } ?>
			<?php } ?>
				
		<?php if($yil!='') { ?>   
		
			<?php
						$bilgial= $db->query("SELECT * FROM arac_tip WHERE yil = {$yilid} ORDER BY arac ASC ");
						foreach($bilgial as $rowt){
							echo'<div class=" col-lg-4 col-md-4 col-sm-4 " style="margin-bottom: 10px;"><div class="aracmarkalar">
				<a href="/car-detail/'.$aracMarka.'/'.$aracModel.'/'.$aracYil.'/'.Seo_Link_Cevir($rowt["link"]).'/'.$rowt["arac_id"].'"> '.$rowt["arac"].' </a>
				</div> </div>';
							}
			?>
		<?php } ?>	 
			
 		   </div>
			</div>
		</section> 
	</div>
  <?php include("alt.php")?>
  
<style>
	
	.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #0a2752;
    border-color: #0a2752;
} 
.aracmarkalar {

    background: none;
    color: rgb(40, 40, 40);
    padding-top: 18px;
    padding-bottom: 20px;
    border: 2px solid rgb(170, 170, 170) !important;
     box-sizing: border-box;
    margin: 0px 0px 1.5% 1.5%;
     text-align: center;
    padding-right: 20px;
    padding-left: 20px;
    font-weight: 400;
	
} 
.aracmarkalar a {
	display: block;
    color: #444444;
    font-size: 16px; 
} 
.aracmarkalar a:hover {
	 opacity:0.5;
	-webkit-transition: all 200ms ease-in-out 0s;
    transition: all 200ms ease-in-out 0s;

} 
 .breadcrumb {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding: 8px 1rem 8px 15px !important;
    margin-bottom: 1rem;
    list-style: none;
    background-color: #e9ecef;
    border-radius: .25rem;
}

.breadcrumb-item.active {
    color: #e22937;
}
</style> 
</body>
</html>