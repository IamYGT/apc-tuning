<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact Us - Apc Tuning </title>
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
					<h1><span>Contact Us</span></h1>
					<!-- Breadcrumb row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo $ayarlar["strURL"]; ?>"><i class="las la-home"></i>Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
						</ul>
					</nav>
					<!-- Breadcrumb row END -->
				</div>
			</div>
		</div>
			
		<!-- Contact Info -->
		<section class="section-area section-sp1">
			<div class="container">
				<div class="heading-bx mb-20">
					<h6 class="title-ext text-primary">Contact Info</h6>
					<h2 class="title mb-0">CONTACT US FOR ANY <br>INFORMATIONS</h2>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="icon-box">
							<h6 class="title"><i class="ti-map-alt"></i>Location</h6>		
							<p><?php echo $ayarlar["strAddress"]; ?></p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="icon-box">
							<h6 class="title"><i class="ti-id-badge"></i>Email & Phone</h6>		
							<a href="mailto:<?php echo $ayarlar["strMail"]; ?>"><?php echo $ayarlar["strMail"]; ?></a><br>
							<a style="color:#777" href="tel:<?php echo $ayarlar["strPhone"]; ?>"><?php echo $ayarlar["strPhone"]; ?></a>
 						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="icon-box">
							<h6 class="title"><i class="ti-world"></i>Follow Us</h6>
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
		</section>
		
		<!-- Map -->
		<div class="section-area">
 			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43162.40657908818!2d19.209827083433638!3d47.45775361867702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741c3d5ab85b413%3A0xb00c42ca3a19413!2sBudape%C5%9Fte%2C%201174%20Macaristan!5e0!3m2!1str!2str!4v1623586882221!5m2!1str!2str" class="align-self-stretch d-flex" style="width:100%; width:100%; min-height: 450px;" allowfullscreen=""></iframe>
		</div>
		
		<!-- Contact Form -->
		<section class="section-area section-sp2">
			<div class="container">		
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<form class="contact-form ajax-form" action="script/contact.php">
							<div class="heading-bx mb-20">
								<h6 class="title-ext text-primary">Contact Form</h6>
								<h2 class="title mb-0">DO YOU HAVE ANY<br> QUESTIONS</h2>
							</div>
							<div class="ajax-message"></div>
							<div class="row">
								<div class="col-lg-4 col-md-6">
									<div class="form-group">
										<div class="input-group">
											<input name="name" type="text" required="" class="form-control valid-character" placeholder="Your Name">
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="form-group">
										<div class="input-group"> 
											<input name="email" type="email" class="form-control" required="" placeholder="Your Email Address">
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-12">
									<div class="form-group">
										<div class="input-group">
											<input name="phone" type="text" required="" class="form-control int-value" placeholder="Your Phone">
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<div class="input-group">
											<textarea name="message" rows="4" class="form-control" placeholder="Your Message" required=""></textarea>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<div class="input-group">
											<div class="g-recaptcha" data-sitekey="6Lf2gYwUAAAAAJLxwnZTvpJqbYFWqVyzE-8BWhVe" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
											<input class="form-control d-none" style="display:none;" data-recaptcha="true" required="" data-error="Please complete the Captcha">
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<button name="submit" type="submit" value="Submit" class="btn btn-primary btn-lg"> Send Message</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- contact area END -->
    
	</div>
  <?php include("alt.php")?>
</body>
</html>