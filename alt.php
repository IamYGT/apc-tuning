    <footer class="footer">
		<div class="footer-info bg-primary">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-3 col-md-6 col-sm-6 mb-30 d-none d-sm-block">
						<div class="footer-logo">
							<img src="<?php echo $ayarlar["strURL"]; ?>/images/logo2.png" alt=""> 
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 mb-30">
						<div class="feature-container left footer-info-bx">
							<div class="icon-lg">
								<span class="icon-cell"><img src="<?php echo $ayarlar["strURL"]; ?>/images/icon/contact/icon3.png" alt=""></span> 
							</div>
							<div class="icon-content">
								<p><?php echo $ayarlar["strAddress"]; ?></p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 mb-30">
						<div class="feature-container left footer-info-bx">
							<div class="icon-lg">
								<span class="icon-cell"><img src="<?php echo $ayarlar["strURL"]; ?>/images/icon/contact/icon1.png" alt=""></span> 
							</div>
							<div class="icon-content">
								<p><a style="color:#fff;" href="tel:<?php echo $ayarlar["strPhone"]; ?>"> <?php echo $ayarlar["strPhone"]; ?> </a></p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 mb-30">
						<div class="feature-container left footer-info-bx">
							<div class="icon-lg">
								<span class="icon-cell"><img src="<?php echo $ayarlar["strURL"]; ?>/images/icon/contact/icon2.png" alt=""></span> 
							</div>
							<div class="icon-content">
 								<p><a style="color:#fff;" href="mailto:<?php echo $ayarlar["strMail"]; ?>"> <?php echo $ayarlar["strMail"]; ?> </a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-top bt0">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-md-6">
						<div class="widget footer_widget">
							<h5 class="footer-title">Apc Tuning</h5>
							<p class="mb-20"> <?php echo $ayarlar["kisahakkimizda_en"]; ?></p>
							<div class="ft-content">
								<i class="fa fa-phone"></i>
								<span>Talk To Our Support</span>
								<h4><a style="color:#fff;" href="tel:<?php echo $ayarlar["strPhone"]; ?>"><?php echo $ayarlar["strPhone"]; ?></a> </h4>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<div class="widget widget-link-2">
							<h5 class="footer-title">Our Services</h5>
							<ul>
								 <?php
				$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id DESC LIMIT 4");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> <li><a href="<?php echo $ayarlar["strURL"]; ?>/service-detail/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></li>
							<?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
							</ul>							
						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<div class="widget recent-posts-entry">
							<h5 class="footer-title">Latest news</h5>
							<div class="widget-post-bx">
								 <?php
				$veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id DESC LIMIT 2");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?>  <div class="widget-post clearfix">
									<div class="ttr-post-media"> 
										<img src="<?php echo $ayarlar["strURL"]; ?>/uploads/news/<?php echo $veri_listele["haber_resim"]; ?>" alt=""> 
									</div>
									<div class="ttr-post-info">
										<h6 class="post-title"><a href="<?php echo $ayarlar["strURL"]; ?>/news-detail/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo $veri_listele["haber_baslik"]; ?></a></h6>
										<ul class="post-meta">
											<li class="date"><a href="<?php echo $ayarlar["strURL"]; ?>/news-detail/<?php echo $veri_listele["haber_seo"]; ?>"><i class="fa fa-calendar"></i> <?php echo date("d/m/Y", strtotime($veri_listele["haber_tarih"])); ?></a></li>
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
					</div>
					<div class="col-xl-3 col-md-6">
                        <div style="text-align: center; margin-top: 73px;" class="widget widget_info">
 							<img style="    margin-bottom: 33px;" src="<?php echo $ayarlar["strURL"]; ?>/images/logo2.png" alt=""> 
							<ul class="list-inline ft-social-bx">
			<li><a class="btn button-sm" href="https://www.facebook.com/<?php echo $ayarlar["strFacebook"]; ?>"><i class="fa fa-facebook"></i></a></li>
			<li><a class="btn button-sm" href="https://twitter.com/<?php echo $ayarlar["strTwitter"]; ?>"><i class="fa fa-twitter"></i></a></li>
			<li><a class="btn button-sm" href="https://www.instagram.com/<?php echo $ayarlar["strInstagram"]; ?>"><i class="fa fa-instagram"></i></a></li>
			<li><a class="btn button-sm" href="https://www.youtube.com/<?php echo $ayarlar["strYoutube"]; ?>"><i class="fa fa-youtube"></i></a></li>
			<li><a class="btn button-sm" href="https://wa.me/<?php echo  $ayarlar["strWhatsappPhone_".$lang];  ?>?text=<?php echo  $ayarlar["strWhatsappMessage_".$lang];  ?>"><i class="fa fa-whatsapp"></i></a></li>
							</ul>
						</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center text-md-left">
						<p class="mb-0">© Copyright Apc Tuning <?php echo date("Y"); ?>. All right reserved.</p>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 text-center text-md-right">
						<ul class="widget-link">
							<li>Design By: <a style="color: #f42222;" href="https://www.memsidea.com" rel="dofollow" >Memsidea Digital Agency</a></li>
 						</ul>
					</div>
                </div>
            </div>
		</div>
    </footer>
    <!-- Footer END ==== -->
	<button class="back-to-top fa fa-chevron-up"></button>
</div>
<!-- External JavaScripts -->
<script src="<?php echo $ayarlar["strURL"]; ?>/js/jquery.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/vendor/bootstrap-select/bootstrap-select.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/vendor/magnific-popup/magnific-popup.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/vendor/imagesloaded/imagesloaded.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/vendor/owl-carousel/owl.carousel.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/vendor/progress-bar/jquery.appear.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/vendor/progress-bar/jquery.skillbar.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/vendor/swiper/swiper.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/js/functions.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/js/contact.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/vendor/counter/waypoints-min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/vendor/counter/counterup.min.js"></script>
<script>

function checkVerify(){
    var aracmarkaLink   = $('input[name="aracmarkaLink"]').val();
    var aracmodelLink    = $('input[name="aracmodelLink"]').val();
    var aracyilLink    = $('input[name="aracyilLink"]').val();
    var aractipLink    = $('input[name="aractipLink"]').val();
    if (aracmarkaLink==null || aracmarkaLink=="" || aracmarkaLink.length < 1){
        alert("Controleer de ingevoerde gegevens");
    }else if (aracmodelLink==null || aracmodelLink=="" || aracmodelLink.length < 1){
        alert("Controleer de ingevoerde gegevens");
    }else if (aracyilLink==null || aracyilLink=="" || aracyilLink.length < 1){
        alert("Controleer de ingevoerde gegevens");
    }else if (aractipLink==null || aractipLink=="" || aractipLink.length < 1){
        alert("Controleer de ingevoerde gegevens");
    }else {
        $('.notification').empty();
        $('#basketForm').removeAttr('onsubmit');
    }
};
</script>



	<script type="text/javascript"> 
			$(document).ready(function(){
				
				$.get("/ajax.php?markalar", function(data, status){
					var data = JSON.parse(data);
					var options = '';
						options += '<option data-link="none" value="none">Select Brand</option>';
					for (var i = 0; i < data.length; i++) {
						options += '<option data-link="'+ data[i].link +'" value="' + data[i].marka_id + '">' + data[i].marka + '</option>';
					} 
					$('#marka').html(options);
					$("#marka").form-select("refresh");

					$("#model").html('').prop('disabled', true).form-select("refresh");
					$("#yil").html('').prop('disabled', true).form-select("refresh");
					$("#arac").html('').prop('disabled', true).form-select("refresh");
				});

				$("#marka").change(function(){
					$.get("/ajax.php?arac_modelleri&marka_id=" + $(this).val(), function(data, status){
						var data = JSON.parse(data);

						if (data.state === 'error') {
							$('#model').html('<option disabled>' + data.message + '</option>');
							$("#model").prop('disabled', false).form-select("refresh");
							return;
						}

						var options = ''; 
							options += '<option data-link="none" value="none">Select Model</option>';
						for (var i = 0; i < data.length; i++) {
							options += '<option data-link="'+ data[i].link +'" value="' + data[i].model_id + '">' + data[i].model + '</option>';
						}

						$('#model').html(options);
						$("#model").prop('disabled', false).form-select("refresh");

						$("#yil").html('').prop('disabled', true).form-select("refresh");
						$("#arac").html('').prop('disabled', true).form-select("refresh");
					});
				});

				$("#model").change(function(){
					$.get("/ajax.php?arac_yillari&model_id=" + $(this).val(), function(data, status){
						var data = JSON.parse(data);

						if (data.state === 'error') {
							$('#yil').html('<option disabled>' + data.message + '</option>');
							$("#yil").prop('disabled', false).form-select("refresh");
							return;
						}

						var options = '';
						
							options += '<option data-link="none" value="none">Select Year</option>';
						for (var i = 0; i < data.length; i++) {
							options += '<option data-link="'+ data[i].link +'" value="' + data[i].yil_id + '">' + data[i].yil + '</option>';
						}
						$('#yil').html(options);
						$("#yil").prop('disabled', false).form-select("refresh");

						$("#arac").html('').prop('disabled', true).form-select("refresh");
					});
				});

				$("#yil").change(function(){
					$.get("/ajax.php?arac_tipleri&yil_id=" + $(this).val(), function(data, status){
						var data = JSON.parse(data);

						if (data.state === 'error') {
							$('#arac').html('<option disabled>' + data.message + '</option>');
							$("#arac").prop('disabled', false).form-select("refresh");
							return;
						}

						var dizelOptions = '';
						var benzinOptions = '';
							
						for (var i = 0; i < data.dizel.length; i++) {
							dizelOptions += '<option data-link="'+ data.dizel[i].link + '/' +  data.dizel[i].arac_id +'" value="' + data.dizel[i].arac_id + '">' + data.dizel[i].arac + '</option>';
						}
							
						for (var i = 0; i < data.benzin.length; i++) {
							benzinOptions += '<option data-link="'+ data.benzin[i].link + '/' +  data.benzin[i].arac_id + '" value="' + data.benzin[i].arac_id + '">' + data.benzin[i].arac + '</option>';
						}
						
						if(data.benzin.length > 0 && data.dizel.length > 0 ){ 
							dizelOptions += '<option data-link="none" value="none">Select Engine</option>';
							benzinOptions += '';
						}if(data.benzin.length > 0 || data.dizel.length > 0){  
							dizelOptions += '<option data-link="none" value="none">Select Engine</option>';
							benzinOptions += '';
						}
						/* dizelOptions += '<option data-link="none" value="none">Kies merk</option>';
						benzinOptions += '<option data-link="none" value="none">Kies merk</option>'; */

						$('#arac').html(dizelOptions);
						$('#arac').append(benzinOptions);
						$("#arac").prop('disabled', false).form-select("refresh");

					});
				});

				$('#go_arac_detay').click(function(e) {
					e.stopPropagation();
					var arac = $('#marka option:selected').data('link');
					var model = $('#model option:selected').data('link');
					var yil = $('#yil option:selected').data('link');
					var tip = $('#arac option:selected').data('link');

					if (!arac || !model || !yil || !tip || arac == "none" || model == "none" || yil == "none" || tip == "none") {
						alert('Please make all selections correctly.');
						return;
					}

					var link = 'car-detail';
					link += '/' + arac;
					link += '/' + model;
					link += '/' + yil;
					link += '/' + tip;

					window.location = '/'+link;
				});
				
			});

				$("#marka, #model, #yil, #arac").change(function() {   
					var arac1 = $('#marka option:selected').attr('data-link');
					var model1 = $('#model option:selected').attr('data-link');
					var yil1 = $('#yil option:selected').attr('data-link');
					var tip1 = $('#arac option:selected').attr('data-link'); 
					$(".aracmarkaLink").val(arac1);
					$(".aracmodelLink").val(model1);
					$(".aracyilLink").val(yil1);
					$(".aractipLink").val(tip1); 
				});
</script> 

