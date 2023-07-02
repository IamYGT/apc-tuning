 <?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); 

$segments = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
$markaSegmentIndex = 1;
$aracMarka = isset($segments[$markaSegmentIndex]) ? $segments[$markaSegmentIndex] : '';  
$aracModel = isset($segments[$markaSegmentIndex + 1]) ? $segments[$markaSegmentIndex + 1] : '';   
$aracYil = isset($segments[$markaSegmentIndex + 2]) ? $segments[$markaSegmentIndex + 2] : '';   
$aracTip = isset($segments[$markaSegmentIndex + 3]) ? $segments[$markaSegmentIndex + 3] : '';  
$aracTipID = isset($segments[$markaSegmentIndex + 4]) ? $segments[$markaSegmentIndex + 4] : '';   


$arac_marka = $db->query("SELECT * FROM arac_marka WHERE link = '$aracMarka'")->fetch(PDO::FETCH_ASSOC);
 $marka_id = $arac_marka["marka_id"];

$arac_model = $db->query("SELECT * FROM arac_model WHERE marka_id = '$marka_id' AND link = '$aracModel'")->fetch(PDO::FETCH_ASSOC);
$model_id = $arac_model["model_id"];

 $arac_yil = $db->query("SELECT * FROM arac_yil WHERE model_id = '$model_id' AND link = '$aracYil'")->fetch(PDO::FETCH_ASSOC);
 $yil_id = $arac_yil["yil_id"];

//echo "SELECT * FROM arac_tip WHERE yil = {$yil_id} AND arac_id = {$aracTipID}"; 
$arac_tip = $db->query("SELECT * FROM arac_tip WHERE yil = {$yil_id} AND arac_id = {$aracTipID}")->fetch(PDO::FETCH_ASSOC);
$arac_id = $arac_tip["arac_id"];

$yakit = ($arac_tip["yakit"] == 1 ? LANG("TEXT_64",$lang) : LANG("TEXT_65",$lang)); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $arac_marka["marka"]; ?>  - <?php echo $arac_model["model"]; ?> - <?php echo $arac_yil["yil"]; ?>  -  <?php echo $arac_tip["arac"]; ?> - <?php echo $ayarlar["strTitle"]; ?> </title>
<meta name="description" content="You can request for a Tuning Calibration for your <?php echo $arac_marka["marka"]; ?> <?php echo $arac_model["model"]; ?> <?php echo $arac_yil["yil"]; ?> <?php echo $arac_tip["arac"]; ?> vehicle on our file service site. we can increase the power of your engine from <?php echo $arac_tip['oguc']; ?> HP to <?php echo $arac_tip['yguc']; ?> HP, <?php echo $arac_tip['otork']; ?> Torque to <?php echo $arac_tip['ytork']; ?> Torque">
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
					<h1><span><?php echo $arac_marka["marka"]; ?> <?php echo $arac_model["model"]; ?> <?php echo $arac_yil["yil"]; ?>  <?php echo $arac_tip["arac"]; ?> </span></h1>
					<!-- Breadcrumb row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index">Home</a></li>
								<li class="breadcrumb-item"><a href="<?php echo $ayarlar["strURL"]; ?>/calibration">Calibration</a></li>
								<li class="breadcrumb-item active" aria-current="page"><?php echo $arac_marka["marka"]; ?> </li>
													</ul>
					</nav>
					<!-- Breadcrumb row END -->
				</div>
			</div>
		</div>
		
		<section class="section-area section-sp1 bg-white">
			<div class="container">
				<div class="row member-detail">
					<div class="col-lg-8 col-md-7 mb-30">
						<h3 style="    margin-bottom: 5px;" class="title"><?php echo $arac_marka["marka"]; ?> <?php echo $arac_model["model"]; ?> <?php echo $arac_yil["yil"]; ?> <?php echo $arac_tip["arac"]; ?> </h3>
						<div style="color: #f42222;  margin-bottom: 5px;" class="yildiz"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </div>
						<ins> <p class="mb-10">Tuning information may differ from vehicle to vehicle.</p> </ins>
					
					<div class="row">
					   <div class="car-assets">
                            <div class="car-assets-item  col-sm-4 col-6">
                                <div class="icon"><img style="    width: 44px;" alt="Gaziantep Seat Gizli Özellik"src="/images/tork.svg"></img></div>
                                <div class="content">
                                    <div class="sub-title">Previous Power:</div>
                                    <h5 class="title"><?php echo $arac_tip["oguc"]; ?>  <kbd style="background-color: #cc0a0a;" >hp</h5>
                                </div>
                            </div>
                            <!--// car assets item-->

                            <div class="car-assets-item  col-sm-4 col-6">
                                <div class="icon"><img style="    width: 44px;" alt="Gaziantep Bmw Gizli Özellik" src="/images/tork_artis.svg"></img></div>
                                <div class="content">
                                    <div class="sub-title">Next Power:</div>
                                    <h5 class="title"><?php echo $arac_tip["yguc"]; ?> <kbd style="    background-color: #59c11f;">hp</h5>
                                </div>
                            </div>
							
							   <div class="car-assets-item  col-sm-4 col-6">
                                <div class="icon"><img alt="Gaziantep Gizli Özellik" style="width: 44px;" src="/images/guc.svg"></img></div>
                                <div class="content">
                                    <div class="sub-title">Power Difference</div>
                                    <h5 class="title">+<?php echo $arac_tip["gfark"]; ?>  <kbd> HP</h5>
                                </div>
                            </div>
							
                            <!--// car assets item-->
              

                            <div class="car-assets-item col-sm-4 col-6">
                                <div class="icon"><img style="    width: 44px;"  alt="Gaziantep Gizli Özellik" src="/images/tork.svg"></img></div>
                                <div class="content">
                                    <div class="sub-title">Previous Torque:</div>
                                    <h5 class="title"><?php echo $arac_tip["otork"]; ?> <kbd style="background-color: #cc0a0a;" >nm</h5>
                                </div>
                            </div>
                            <!--// car assets item-->
                            <div class="car-assets-item  col-sm-4 col-6">
                                <div class="icon"><img style="    width: 44px;" alt="Gaziantep Mercedes Chip Tuning" src="/images/tork_artis.svg"></img></div>
                                <div class="content">
                                    <div class="sub-title">Next Torque:</div>
                                    <h5 class="title"><?php echo $arac_tip["ytork"]; ?>  <kbd style="    background-color: #59c11f;">nm</h5>
                                </div>
                            </div>
                            <!--// car assets item-->
                     
 
                         
                            <!--// car assets item-->
 
                            <div class="car-assets-item  col-sm-4 col-6">
                                <div class="icon"><img alt="Gaziantep Aracın Torku" style="width: 44px;" src="/images/guc.svg"></img></div>
                                <div class="content">
                                    <div class="sub-title">Torque Difference</div>
                                    <h5 class="title">+<?php echo $arac_tip["tfark"]; ?> <kbd> NM</kbd></h5>   
                                </div> 
                            </div> 
                            </div> 
					
					
					</div>
						<div class="row">
							 	<div class="col-sm-6 col-6 " id="chart"></div>
 	<div class="col-sm-6 col-lg-6 col-6" id="chart2"></div>
							</div>	
<div class="row">
							 	<div class="col-lg-12">
						<div class="ttr-accordion style1" id="themeAccordion1">
							<div class="card">
								<div class="card-header" id="headingOne" data-toggle="collapse" role="button" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<i class="fa fa-question-circle"></i>
									Description
								</div>
								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#themeAccordion1">
									<div class="card-body">
									 You can request for a Tuning Calibration for your <?php echo $arac_marka["marka"]; ?>  <?php echo $arac_model["model"]; ?> <?php echo $arac_yil["yil"]; ?>   <?php echo $arac_tip["arac"]; ?> vehicle on our file service site. 
									These Tuning Calibrations always made in real time suited to your needs and cars maximum ability. 
All our Tuning files are made with maximum precision and care to be efficient. 
In this particular case, we can increase the power of your engine from <?php echo $arac_tip['oguc']; ?> HP to <?php echo $arac_tip['yguc']; ?> HP, <?php echo $arac_tip['otork']; ?> Torque to <?php echo $arac_tip['ytork']; ?> Torque within a Stage1 Calibration package.

									</div>
								</div>
							</div>
							 	</div>
					</div>
					</div>	
					</div>
			<div class="col-lg-4 col-md-5 mb-30"> 	
						<div class="sticky-top">
		<div style="margin-bottom:10px; " class="team-box">
											 <a style="    width: 100%;    text-align: center;    margin-bottom: 5px;    text-transform: uppercase;    line-height: 40px;"  class="btn btn-primary" 
href="https://app.apc-tuning.com/login">LOGIN</a> 
 
							 <a style="    width: 100%;    text-align: center;    margin-bottom: 5px;    text-transform: uppercase;    line-height: 40px; background:black; border-color:#000;"  class="btn btn-primary" 
href="https://app.apc-tuning.com/register">REGISTER</a> 
 
							</div>

							<div style="margin-bottom:10px; " class="team-box">
								<div style="   text-align: center;  " class="team-media">
									<img style="    max-width: 80px;" src="<?php echo $ayarlar["strURL"]; ?>/uploads/cars/<?php echo $arac_marka["resim"]; ?>" alt="<?php echo $arac_marka["marka"]; ?> <?php echo $arac_model["model"]; ?> <?php echo $arac_yil["yil"]; ?> <?php echo $arac_tip["arac"]; ?>">
								</div> 
							</div>
					
							 <div class="sidebar-dealer-info"> 
                                
                                <div class="dealer-info"> 
                                    <ul style="    margin-top: 0;" class="info-items">
									
                                        <li>
                                            <i class="fa fa-map-marker"></i>
                                            <span><?php echo $ayarlar["strAddress"]; ?></span>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone"></i>
                                            <span><a class="call" href="tel:<?php echo $ayarlar["strPhone"]; ?>"><?php echo $ayarlar["strPhone"]; ?></a></span> 
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope"></i>
                                            <span><a href="mailto:<?php echo $ayarlar["strMail"]; ?>"><?php echo $ayarlar["strMail"]; ?></a></span>
                                        </li>
                                        
                                    </ul> 
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
					
			</div>
			</div>
		</section>
		
	</div>
  <?php include("alt.php")?>
  
  
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


<script>
              
        var options = {
          series: [{
          name: 'Next Power', 
          data: [<?php echo $arac_tip["oguc"]; ?>]
        },   
		


		{
          name: 'Next Power',
		  colors: ['#000000'],
          data: [<?php echo $arac_tip["yguc"]; ?>]
        }],
          chart: {
          type: 'bar',
		  toolbar: {
            show: false
          },
		  color: ['#000000'],
          height: 350
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '55%',
			color: ['#000000'],
            endingShape: 'rounded'
          },
        },
        dataLabels: {
          enabled: false
        },
		
		title: {
    text: ['Power'],
 },
 
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
        xaxis: {
          categories: ['Previous Power', 'Next Power'],
		  
        }, 
		
		  legend: {
      show: false,

		  },
        fill: {
		colors: ['#000000'],
          opacity: ['1']
        } 
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();          
        var options = {
          series: [{
          name: 'Previous Torque', 
          data: [<?php echo $arac_tip["otork"]; ?>]
        },   
		


		{
          name: 'Next Torque',
		  colors: ['#000000'],
          data: [<?php echo $arac_tip["ytork"]; ?>]
        }],
          chart: {
          type: 'bar',
		    toolbar: {
            show: false
          },
		  color: ['#000000'],
          height: 350
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '55%',
			color: ['#f42222'],
            endingShape: 'rounded'
          },
        },
        dataLabels: {
          enabled: false
        },
		
		title: {
    text: ['Torque'],
 },
 
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
		
 


        xaxis: {
          categories: ['Previous Torque', 'Next Torque'],
		  
        }, 
		
		  legend: {
      show: false,

		  },
        fill: {
		colors: ['#f42222'],
          opacity: ['1']
        } 
        };

        var chart = new ApexCharts(document.querySelector("#chart2"), options);
        chart.render();
      
      
    



</script>

</body>
</html>