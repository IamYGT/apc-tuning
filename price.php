<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Prices - Apc Tuning </title>
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
					<h1><span>Prices</span></h1>
					<!-- Breadcrumb row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo $ayarlar["strURL"]; ?>"><i class="las la-home"></i>Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Prices</li>
						</ul>
					</nav>
					<!-- Breadcrumb row END -->
				</div>
			</div>
		</div>
		
		<section class="section-area bg-white section-sp1">
			<div class="container">
				<div class="pricingtable-row">
					<div class="row">  
 									<div class="col-sm-1"> </div>
	
 <?php
	  // Türkçe - tr İngilizce - dolar  Flemençe - euro
	    
				switch($lang){
					case "tr":
						$FiyatTipi = "tr";
						break;
					case "en":
						$FiyatTipi = "dolar";
						break;
					case "nl":
						$FiyatTipi = "euro";
						break;
				}  
 		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://app.apc-tuning.com/api-fiyat?fiyat='.$FiyatTipi.'');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$fiyatlar = curl_exec($ch);
		curl_close($ch);
		$fiyatlar = json_decode($fiyatlar, true);
		?>
				<?php foreach ($fiyatlar as $fiyat): ?>	
			 
						<div class="col-xl-2 col-sm-6 mb-30">
							<div class="pricingtable-wrapper style1">
								<div class="pricingtable-inner">
									<div class="pricingtable-main">
										<div style="    text-align: center;" class="pricingtable-price"> 
											<span class="priceing-doller">$<?=number_format($fiyat['fiyati'], 2)?></span><br>
											<span class="pricingtable-bx"><?=$fiyat['adi']?>   <?php echo LANG("TEXT_60",$lang); ?> </span>
										</div> 
									</div>  
								</div>
							</div>
						</div>
						   <?php endforeach;?> 
   
				     </div>
				</div>
			</div>
					 		   
<div class="container">
	<div class="row">
	<div class="col-md-12">  
                    <div id="accordion" class="checkout">
					
					 
   <?php
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://app.ecusoftfile.com/api');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $prices = curl_exec($ch);
                curl_close($ch);
                $prices = json_decode($prices, true);
                  ?> 
				<?php foreach($prices as $key => $price): ?>
				
                        <div class="panel checkout-step">
                            <div>  
                                <h4 class="checkout-step-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$key?>" > <?=$price['tuning']?> 
<?php if($price['fiyat'] > 0): ?>								
								- <?=$price['fiyat']?> <?php echo LANG("TEXT_60",$lang); ?> 
								<?php endif; ?>
								</a> </h4>
                            </div>
                            <div id="collapse<?=$key?>" class="collapse">
                                <div class="checkout-step-body">

 <div class="table-responsive">
          <!--Table-->
          <table style="    margin-bottom: 22px;"  class="table table-hover mb-0">

            <!--Table head-->
            <thead>
                  <tr>  
                <th class="th-lg"><a style="      color: #000;  font-weight: 500;" ><?php echo LANG("TEXT_61",$lang); ?>  <i class="fa fa-sort ml-1"></i></a></th>
                <th class="th-lg"><a style="   color: #000;  font-weight: 500;"><?php echo LANG("TEXT_60",$lang); ?> <i class="fa fa-sort ml-1"></i></a></th>
               </tr>
             </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody>
             
			 	<?php foreach($price['items'] as $item): ?>

              <tr>
               
                <td><?=$item['adi']?></td>
                <td><?=$item['fiyat']?></td> 
              </tr>
			  
			  			  <?php endforeach; ?>

</tbody>
            <!--Table body-->
          </table>
          <!--Table-->
        </div>
        <!-- Table responsive wrapper -->


                                     </div>
                            </div>
                        </div>
                       <?php endforeach; ?>
					   </div>
                </div>
	</div>
</div>
 
		</section> 
	</div>
<?php include("alt.php")?>
 		
 <style>
		
		.panel-default>.panel-heading {
    color: #fff;
    background-color: #000000cc ;
    border-color: #000000cc ;
}
.panel-title>a, .panel-title>small, .panel-title>.small, .panel-title>small>a, .panel-title>.small>a {
    color: inherit;
    font-family: "oswaldmedium";
}


 
.wrapper{
  width:70%;
}
@media(max-width:992px){
 .wrapper{
  width:100%;
} 
}
.panel-heading {
  padding: 0;
	border:0;
}
.panel-title>a, .panel-title>a:active{
	display:block;
	padding:15px;
  color:#555;
  font-size:16px;
  font-weight:bold;
	text-transform:uppercase;
	letter-spacing:1px;
  word-spacing:3px;
	text-decoration:none;
}
.panel-heading  a:before {
   font-family: 'Glyphicons Halflings';
   content: "\e114";
   float: right;
   transition: all 0.5s;
}
.panel-heading.active a:before {
	-webkit-transform: rotate(180deg);
	-moz-transform: rotate(180deg);
	transform: rotate(180deg);
} 


/* */

.panel-default>.panel-heading {
  color: #333;
  background-color: #fff;
  border-color: #e4e5e7;
  padding: 0;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.panel-default>.panel-heading a {
  display: block;
  padding: 10px 15px;
}

.panel-default>.panel-heading a:after {
  content: "";
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: 400;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  float: right;
  transition: transform .25s linear;
  -webkit-transition: -webkit-transform .25s linear;
}

.panel-default>.panel-heading a[aria-expanded="true"] {
  background-color: #eee;
}

.panel-default>.panel-heading a[aria-expanded="true"]:after {
  content: "\2212";
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}

.panel-default>.panel-heading a[aria-expanded="false"]:after {
  content: "\002b";
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}

table {
  width: 100%;
  border-collapse: collapse;
}


/* Zebra striping */

tr:nth-of-type(odd) {
  background: #f4f4f4;
}

tr:nth-of-type(even) {
  background: #fff;
}

th {
  background: #e51515;
  color: #ffffff;
  font-weight: 300;
}

td,
th {
  padding: 10px;
  border: 1px solid #ccc;
  text-align: left;
      background: white;

}

td:nth-of-type(1) {
  font-weight: 500 !important;
}

td {
  font-family: 'Roboto', sans-serif !important;
  font-weight: 300;
  line-height: 20px;
}

 
@media only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px) {

  /* Force table to not be like tables anymore */
  table.responsive,
  .responsive thead,
  .responsive tbody,
  .responsive th,
  .responsive td,
  .responsive tr {
    display: block !important;
  }

  /* Hide table headers (but not display: none;, for accessibility) */
  .responsive thead tr {
    position: absolute !important;
    top: -9999px;
    left: -9999px;
  }

  .responsive tr {
    border: 1px solid #ccc;
  }

  .responsive td {
    /* Behave  like a "row" */
    border: none;
    border-bottom: 1px solid #eee !important;
    position: relative !important;
    padding-left: 25% !important;
  }

  .responsive td:before {
    /* Now like a table header */
    position: absolute !important;
    /* Top/left values mimic padding */
    top: 6px;
    left: 6px;
    width: 45%;
    padding-right: 10px;
    white-space: nowrap !important;
    font-weight: 500 !important;
  }

  /*
	Label the data
	*/
  .responsive td:before {
    content: attr(data-table-header) !important;
  }
}


.checkout-wrapper{padding-top: 40px; padding-bottom:40px; background-color: #fafbfa;}
.checkout{    background-color: #fff;
    border:1px solid #eaefe9;
     
    font-size: 14px;}
.panel{margin-bottom: 0px;}
.checkout-step {
     
    border-top: 1px solid #f2f2f2;
    color: #666;
    font-size: 14px;
    padding: 30px;
    position: relative;
}

.checkout-step-number {
    border-radius: 50%;
    border: 1px solid #666;
    display: inline-block;
    font-size: 12px;
    height: 32px;
    margin-right: 26px;
    padding: 6px;
    text-align: center;
    width: 32px;
}
.checkout-step-title{ font-size: 18px;
    font-weight: 500;
    vertical-align: middle;display: inline-block; margin: 0px;
     }
 
.checout-address-step{}
.checout-address-step .form-group{margin-bottom: 18px;display: inline-block;
    width: 100%;}

.checkout-step-body{  padding-top: 30px;}

.checkout-step-active{display: block;}
.checkout-step-disabled{display: none;}

.checkout-login{}
.login-phone{display: inline-block;}
.login-phone:after {
    content: '+91 - ';
    font-size: 14px;
    left: 36px;
}
.login-phone:before {
    content: "";
    font-style: normal;
    color: #333;
    font-size: 18px;
    left: 12px;
        display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.login-phone:after, .login-phone:before {
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}
.login-phone .form-control {
    padding-left: 68px;
    font-size: 14px;
    
}
.checkout-login .btn{height: 42px;     line-height: 1.8;}
 
.otp-verifaction{margin-top: 30px;}
.checkout-sidebar{background-color: #fff;
    border:1px solid #eaefe9; padding: 30px; margin-bottom: 30px;}
.checkout-sidebar-merchant-box{background-color: #fff;
    border:1px solid #eaefe9; margin-bottom: 30px;}
.checkout-total{border-bottom: 1px solid #eaefe9; padding-bottom: 10px;margin-bottom: 10px; }
.checkout-invoice{display: inline-block;
    width: 100%;}
.checout-invoice-title{    float: left; color: #30322f;}
.checout-invoice-price{    float: right; color: #30322f;}
.checkout-charges{display: inline-block;
    width: 100%;}
.checout-charges-title{float: left; }
.checout-charges-price{float: right;}
.charges-free{color: #43b02a; font-weight: 600;}
.checkout-payable{display: inline-block;
    width: 100%; color: #333;}
.checkout-payable-title{float: left; }
.checkout-payable-price{float: right;}

.checkout-cart-merchant-box{ padding: 20px;display: inline-block;width: 100%; border-bottom: 1px solid #eaefe9;
 padding-bottom: 20px; }
.checkout-cart-merchant-name{color: #30322f; float: left;}
.checkout-cart-merchant-item{ float: right; color: #30322f; }
.checkout-cart-products{}

.checkout-cart-products .checkout-charges{ padding: 10px 20px;
    color: #333;}
.checkout-cart-item{ border-bottom: 1px solid #eaefe9;
    box-sizing: border-box;
    display: table;
    font-size: 12px;
    padding: 22px 20px;
    width: 100%;}
 .checkout-item-list{}
.checkout-item-count{ float: left; }
.checkout-item-img{width: 60px; float: left;}
.checkout-item-name-box{ float: left; }
.checkout-item-title{ color: #30322f; font-size: 14px;  }
.checkout-item-unit{  }
.checkout-item-price{float: right;color: #30322f; font-size: 14px; font-weight: 600;}


.checkout-viewmore-btn{padding: 10px; text-align: center;}

.header-checkout-item{text-align: right; padding-top: 20px;}
.checkout-promise-item {
    background-repeat: no-repeat;
    background-size: 14px;
    display: inline-block;
    margin-left: 20px;
    padding-left: 24px;
    color: #30322f;
}
.checkout-promise-item i{padding-right: 10px;color: #43b02a;}
</style>
<style>

html, html a {
  -webkit-font-smoothing: antialiased !important;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.004);
}

small {
  display: block;
  opacity: 0.7;
}

.subscription {
  margin-top: 0;
      margin-bottom: 70px;

}
.subscription .title {
    font-size: 18.1px;
  font-weight: bold;
  text-transform: uppercase;
}
@media (max-width: 480px) {
  .subscription .title {
    font-size: 1em;
  }
}
.subscription .price {
  margin: 1.4em 0;
}
.subscription .price span {
  font-weight: 300;
    font-size: 21px;
	
  padding: 0 0.025em;
}
@media (max-width: 480px) {
  .subscription .price span {
    font-size: 29px;
  }
}
.subscription .inclusions {
  text-transform: uppercase;
}

.btn-opt-group {
  display: block;
  margin-left: 0;
  margin-right: 0;
}
.btn-opt-group .btn {
  border-radius: 0.2em;
  padding: 2em;
  text-transform: none;
  white-space: normal;
  transition: all 0.4s ease;
}
.btn-opt-group .btn input[type=radio] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
}
.btn-opt-group .btn-opt {
  background-color: #fff;
  border-color: #95a8b2;
  color: #565656;
  font-size: 1em;
    height: 9.2em;
 }
.btn-opt-group .btn-opt:focus, .btn-opt-group .btn-opt.focus {
  border-color: #e51515;
  transition: all 0.2s ease;
}
.btn-opt-group .btn-opt:focus .title, .btn-opt-group .btn-opt.focus .title {
  color: #e51515;
}
.btn-opt-group .btn-opt:hover {
  border-color: #e51515;
  transition: all 0.2s ease;
}
.btn-opt-group .btn-opt:hover .title {
  color: #e51515;
}
.btn-opt-group .btn-opt:active, .btn-opt-group .btn-opt.active, .open > .btn-opt-group .btn-opt.dropdown-toggle {
  border-color: #e51515;
  -webkit-transform: scale(1.05);
  -ms-transform: scale(1.05);
  transform: scale(1.05);
  box-shadow: inset 0 0 0 1px #e51515;
  border: 0;
}
.btn-opt-group .btn-opt:active .title, .btn-opt-group .btn-opt:active .price, .btn-opt-group .btn-opt.active .title, .btn-opt-group .btn-opt.active .price, .open > .btn-opt-group .btn-opt.dropdown-toggle .title, .open > .btn-opt-group .btn-opt.dropdown-toggle .price {
  color: #e51515;
}
.btn-opt-group .btn-opt:active, .btn-opt-group .btn-opt.active, .open > .btn-opt-group .btn-opt.dropdown-toggle {
  background-image: none;
}

</style>



<script> 

 $('.panel-collapse').on('show.bs.collapse', function () {
    $(this).siblings('.panel-heading').addClass('active');
  });

  $('.panel-collapse').on('hide.bs.collapse', function () {
    $(this).siblings('.panel-heading').removeClass('active');
  });
  </script> 

</body>
</html>