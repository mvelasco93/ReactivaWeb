<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />

		<!-- METADATA -->
		<meta name="description" content="Reactiva es una plataforma tecnológica que brinda al especialista una manera de llevar el control de sus pacientes en el mismo momento en que se realiza la sesión de terapia." />
		<meta name="keywords" content="APP, Rehabilitación, Rehab, App, Fisioterapia, Fisioterapista, Terapista, Mobile, Android, iOS" />
		<meta name="author" content="CAJANEGRA S.A." />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

		<!-- PAGE TITLE -->
		<title>Reactiva - Rehabilitación Interactiva</title>

		<!-- FAVICON -->
		<link rel="icon" href="<?php echo base_url('assets/landing/images/favicons/favicon.ico'); ?>" />
		<link rel="apple-touch-icon" href="<?php echo base_url('assets/landing/images/favicons/apple-touch-icon.png'); ?>" />
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/landing/images/favicons/apple-touch-icon-72x72.png'); ?>" />
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/landing/images/favicons/apple-touch-icon-114x114.png'); ?>" />

		<!--
		=================================
		STYLESHEETS
		=================================
		-->

		<!-- BOOTSTRAP -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/bootstrap.min.css'); ?>" />

		<!-- WEB FONTS -->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />

		<!-- ICON FONTS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/font-awesome.min.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/simple-line-icons.min.css'); ?>" />

		<!-- OTHER STYLES -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/animate.min.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/owl.carousel.min.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/nivo-lightbox.min.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/nivo-lightbox/default.min.css'); ?>" />

		<!-- MAIN STYLES -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/style.css'); ?>" />

		<!-- COLORS -->
		<link id="color-css" rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/colors/purple.css'); ?>" />
		<?php /*
		<link id="color-css" rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/colors/green.css'); ?>" />
		<link id="color-css" rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/colors/turquoise.css'); ?>" />
		<link id="color-css" rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/colors/blue.css'); ?>" />
		<link id="color-css" rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/colors/pink.css'); ?>" />
		<link id="color-css" rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/colors/red.css'); ?>" />
		<link id="color-css" rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/colors/orange.css'); ?>" />
		<link id="color-css" rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/colors/yellow.css'); ?>" />
		*/ ?>

		<!-- JQUERY -->
		<script type="text/javascript" src="<?php echo base_url('assets/landing/js/jquery-1.11.1.min.js'); ?>"></script>

		<script type="text/javascript">
	        var base_url = '<?php echo base_url(); ?>';

	        var js_site_url = function( urlText ){
	            var urlTmp = "<?php echo site_url('" + urlText + "'); ?>";
	            return urlTmp;
	        }

	        var js_base_url = function( urlText ){
	            var urlTmp = "<?php echo base_url('" + urlText + "'); ?>";
	            return urlTmp;
	        }
	    </script>
	    <style type="text/css">
	    	.preloader-logo img{
	    		display: block;
	    	}
	    </style>
	</head>
	<body class="with-preloader">
		
		<!--
		=================================
		PRELOADER
		=================================
		-->
		<div id="preloader" class="preloader">
			<div class="preloader-inner">
				<span class="preloader-logo">
					<img src="<?php echo base_url('assets/landing/images/logos/preloader-logo.png'); ?>" alt="Reactiva" />
					<strong>Cargando</strong>
				</span>
			</div>
		</div>

		<div id="document" class="document">

			<!--
			=================================
			HEADER
			=================================
			-->
			<header class="header-section navbar navbar-fixed-top navbar-default header-floating">
				<div class="container">

					<div class="navbar-header">

						<!-- RESPONSIVE MENU BUTTON -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<!-- NAVBAR LOGO -->
						<a class="navbar-brand navbar-logo" href="#home"><img src="<?php echo base_url('assets/landing/images/logos/navbar-logo.png'); ?>" alt="EOS - App Landing Page Template" /></a>
					</div>

					<div id="navigation" class="navbar-collapse collapse">
						
						<!-- NAVIGATION LINKS -->
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#home">Descargar</a></li>
							<li><a href="#features">Características</a></li>
							<li><a href="#testimonials">Testimonios</a></li>
							<li><a href="#pricing">Precio</a></li>
						</ul>

					</div>

				</div>
			</header>

			<!--
			=================================
			HERO SECTION
			=================================
			-->
			<section id="home" class="hero-section hero-layout-3 section section-inverse-color parallax-background" data-stellar-background-ratio="0.4">

				<!-- BACKGROUND OVERLAY -->
				<div class="black-background-overlay"></div>

				<div class="container">

					<div class="hero-content">

						<!-- HERO TEXT -->
						<div class="hero-text wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
							
							<!-- LOGO -->
							<img src="<?php echo base_url('assets/landing/images/logos/hero-logo.png'); ?>" alt="EOS - App Landing Page Template" class="hero-logo" />

							<!-- TAGLINE -->
							<h1 class="hero-title">Create Your App Landing Page in No Time with <strong>EOS</strong></h1>

							<!-- HERO DESCRIPTION -->
							<p class="hero-description">An easily customized app landing page template with smooth CSS3 animations and lots of pre-defined layouts.</p>

							<!-- DOWNLOAD BUTTONS -->
							<p class="download-buttons">
								<!-- APP STORE DOWNLOAD -->
								<a href="#please-edit-this-link" class="btn btn-app-download btn-ios">
									<i class="fa fa-apple"></i>
									<strong>Download App</strong> <span>from App Store</span>
								</a>
								<!-- PLAY STORE DOWNLOAD -->
								<a href="#please-edit-this-link" class="btn btn-app-download btn-primary">
									<i class="fa fa-android"></i>
									<strong>Download App</strong> <span>from Play Store</span>
								</a>
								<!-- WINDOWS PHONE STORE DOWNLOAD -->
								<!--<a href="#please-edit-this-link" class="btn btn-app-download btn-windows-phone">
									<i class="fa fa-windows"></i>
									<strong>Download App</strong> <span>from Windows Store</span>
								</a>-->
							</p>

						</div>

						<!-- HERO IMAGES -->
						<div class="hero-images">

							<img src="<?php echo base_url('assets/landing/images/contents/hero-phone-back.png'); ?>" class="hero-image phone-image-double phone-image-left wow fadeInRight" alt="" data-wow-duration="1s" data-wow-delay="0.5s" />
							<img src="<?php echo base_url('assets/landing/images/contents/hero-phone-front.png'); ?>" class="hero-image phone-image-double phone-image-right phone-image-front wow fadeInRight" alt="" data-wow-duration="1s" data-wow-delay="1.5s" />

						</div>
					</div>

				</div>
			</section>

			<!--
			=================================
			FEATURES SECTION
			=================================
			-->
			<section id="features" class="features-section section">
				<div class="container">

					<!-- SECTION HEADING -->
					<h2 class="section-heading text-center wow fadeIn" data-wow-duration="1s">Close Up Features</h2>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="wow fadeIn" data-wow-duration="1s">Use this section to showcase up to 4 core features from your app. You can include a short description for each feature block.</p>
						</div>
					</div>

					<div class="featuers-list-wrapper row">

						<!-- FEATURES LEFT -->
						<div class="col-md-4 col-sm-6">
							<ul class="features-list features-list-left wow fadeInLeft" data-wow-duration="1s">
								<li class="features-list-item">
									<h5>Awesome Features</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus leo mattis metus condimentum sollicitudin.</p>
								</li>
								<li class="features-list-item">
									<h5>Fully Customizable</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus leo mattis metus condimentum sollicitudin.</p>
								</li>
							</ul>
						</div>

						<!-- FEATURES RIGHT -->
						<div class="col-md-4 col-md-push-4 col-sm-6">
							<ul class="features-list features-list-right wow fadeInRight" data-wow-duration="1s">
								<li class="features-list-item">
									<h5>SEO Friendly</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus leo mattis metus condimentum sollicitudin.</p>
								</li>
								<li class="features-list-item">
									<h5>8 Predefined Color Schemes</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus leo mattis metus condimentum sollicitudin.</p>
								</li>
							</ul>
						</div>

						<!-- CLOSE UP PHONE IMAGE -->
						<div class="col-md-4 col-md-pull-4 text-center">
							<img src="<?php echo base_url('assets/landing/images/contents/features-phone.png'); ?>" class="features-image wow fadeInUp" alt="" data-wow-duration="1s" />
						</div>

					</div>

				</div>
			</section>

			<!--
			=================================
			FEATURES WITH ICONS SECTION
			=================================
			-->
			<section id="features-icons" class="features-icons-section section">
				<div class="container">

					<div class="row">
						<div class="col-md-8 col-md-push-4">

							<!-- SECTION HEADING -->
							<h2 class="section-heading wow fadeIn" data-wow-duration="1s">Features with Icons</h2>
							<p class="wow fadeIn" data-wow-duration="1s">Need more feature details in maybe 6 or 8 items? You can use this section to put your features summary with short descriptions and retina icons for each item.</p>

							<!-- FEATURES LIST WITH ICONS -->
							<div class="features-icon-list row wow fadeIn" data-wow-duration="1s">
								<div class="features-icon-list-item col-sm-6">
									<i class="icon-eye"></i>
									<h5>Responsive & Retina Ready</h5>
									<p>Excepteur sint occaecat cupidatat non proident.</p>
								</div>
								<div class="features-icon-list-item col-sm-6">
									<i class="icon-cup"></i>
									<h5>Built with Bootstrap 3</h5>
									<p>Excepteur sint occaecat cupidatat non proident.</p>
								</div>
								<div class="clear"></div>
								<div class="features-icon-list-item col-sm-6">
									<i class="icon-equalizer"></i>
									<h5>Easy to Customize</h5>
									<p>Excepteur sint occaecat cupidatat non proident.</p>
								</div>
								<div class="features-icon-list-item col-sm-6">
									<i class="icon-diamond"></i>
									<h5>Clean & Elegant Design</h5>
									<p>Excepteur sint occaecat cupidatat non proident.</p>
								</div>
								<div class="clear"></div>
								<div class="features-icon-list-item col-sm-6">
									<i class="icon-present"></i>
									<h5>600++ Retina Icons</h5>
									<p>Excepteur sint occaecat cupidatat non proident.</p>
								</div>
								<div class="features-icon-list-item col-sm-6">
									<i class="icon-support"></i>
									<h5>Documentation and Support</h5>
									<p>Excepteur sint occaecat cupidatat non proident.</p>
								</div>
								<div class="clear"></div>
							</div>
						</div>

						<!-- PHONE IMAGE -->
						<div class="col-md-4 col-md-pull-8 text-center">
							<img src="<?php echo base_url('assets/landing/images/contents/features-icons-phone.png'); ?>" class="features-icons-image wow fadeInLeft" alt="" data-wow-duration="1s" />
						</div>
					</div>

				</div>
			</section>

			<!--
			=================================
			VIDEO SECTION
			=================================
			-->
			<section id="video" class="video-section section section-inverse-color parallax-background" data-stellar-background-ratio="0.4">

				<!-- BACKGROUND OVERLAY -->
				<div class="black-background-overlay"></div>

				<div class="container">

					<div class="row">
						<div class="col-md-10 col-md-offset-1">

							<div class="video-embed wow fadeIn" data-wow-duration="1s">

								<!-- VIDEO EMBED FROM VIMEO: please change the URL -->
								<iframe src="//player.vimeo.com/video/103435603?title=0&amp;byline=0&amp;portrait=0&amp;color=8aba56" width="500" height="281" frameborder="0" allowfullscreen></iframe>
								
								<!-- VIDEO EMBED FROM YOUTUBE: please change the URL -->
								<!-- <iframe width="560" height="315" src="//www.youtube.com/embed/7UAy8E3e9f8?rel=0" frameborder="0" allowfullscreen></iframe> -->

							</div>
						</div>
					</div>

				</div>
			</section>

			<!--
			=================================
			DESCRIPTION SECTION
			=================================
			-->
			<section id="description" class="description-section section">
				<div class="container">

					<div class="row">
						<div class="col-md-7">

							<!-- SECTION HEADING -->
							<h2 class="section-heading wow fadeIn" data-wow-duration="1s">A Long Description</h2>
							<p class="wow fadeIn" data-wow-duration="1s">Describe your mobile app in even longer paragraphs. You might include a nice icon list on this section too. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus leo mattis metus condimentum sollicitudin. Quisque convallis nec justo sed consectetur. Duis convallis nunc quis arcu sollicitudin iaculis. <a href="#">Nunc id libero malesuada</a> arcu porta tempus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut vestibulum, nunc eget sollicitudin euismod, erat risus tempor augue, eu vulputate nibh lorem in leo.</p>

							<!-- ICON LIST -->
							<ul class="list-with-icons wow fadeIn" data-wow-duration="1s">
								<li><i class="icon-action-redo"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
								<li><i class="icon-arrow-right"></i>Pellentesque dapibus leo mattis metus condimentum sollicitudin.</li>
								<li><i class="icon-layers"></i>Quisque convallis nec justo sed consectetur.</li>
								<li><i class="icon-bell"></i>Duis convallis nunc quis arcu sollicitudin iaculis. Nunc id libero malesuada arcu porta tempus.</li>
							</ul>

						</div>

						<!-- PHONE IMAGE -->
						<div class="col-md-5 text-center">

							<img src="<?php echo base_url('assets/landing/images/contents/description-phone-back.png'); ?>" class="description-image phone-image-double phone-image-left wow fadeInRight" alt="" data-wow-duration="1s" data-wow-delay="0.5s" />
							<img src="<?php echo base_url('assets/landing/images/contents/description-phone-front.png'); ?>" class="description-image phone-image-double phone-image-right phone-image-front wow fadeInRight" alt="" data-wow-duration="1s" data-wow-delay="1.5s" />

						</div>
					</div>

				</div>
			</section>

			<!--
			=================================
			TESTIMONIALS SECTION
			=================================
			-->
			<section id="testimonials" class="testimonials-section section section-inverse-color parallax-background" data-stellar-background-ratio="0.4">

				<!-- BACKGROUND OVERLAY -->
				<div class="accent-background-overlay"></div>

				<div class="container">

					<!-- TESTIMONIALS -->
					<div class="testimonials-carousel">
						<ul class="testimonial-items owl-carousel wow fadeIn" data-wow-duration="1s">
							<li>
								<div class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in blandit sapien. Fusce euismod vulputate quam, sed fringilla lectus convallis eu. Fusce laoreet risus quis eros venenatis.</div>
								<div class="testimonial-name">John Doe, CEO of Company Inc.</div>
							</li>
							<li>
								<div class="testimonial-text">Fusce euismod vulputate quam, sed fringilla lectus convallis eu. Fusce laoreet risus quis eros venenatis, eu vehicula nibh condimentum. Phasellus suscipit dui fermentum eleifend suscipit.</div>
								<div class="testimonial-name">Jane Doe, Wedding Photographer</div>
							</li>
							<li>
								<div class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in blandit sapien. Fusce euismod vulputate quam, sed fringilla lectus convallis eu. Fusce laoreet risus quis eros venenatis.</div>
								<div class="testimonial-name">John Doe, CEO of Company Inc.</div>
							</li>
							<li>
								<div class="testimonial-text">Fusce euismod vulputate quam, sed fringilla lectus convallis eu. Fusce laoreet risus quis eros venenatis, eu vehicula nibh condimentum. Phasellus suscipit dui fermentum eleifend suscipit.</div>
								<div class="testimonial-name">Jane Doe, Wedding Photographer</div>
							</li>
						</ul>
					</div>

				</div>
			</section>

			<!--
			=================================
			PRICING SECTION
			=================================
			-->
			<section id="pricing" class="pricing-section section">
				<div class="container">

					<!-- SECTION HEADING -->
					<h2 class="section-heading text-center wow fadeIn" data-wow-duration="1s">Affordable Packages</h2>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="wow fadeIn" data-wow-duration="1s">If your app is premium, use this section to list all of your pricing packages complete with the description items.</p>
						</div>
					</div>

					<!-- PRICING TABLE -->
					<ul class="pricing-table row wow bounceIn" data-wow-duration="1s">

						<!-- PRICING PACKAGE 1 -->
						<li class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2">
							<div class="pricing-package">
								<div class="pricing-package-strip"></div>
								<div class="pricing-package-header">
									<h4>Free</h4>
									<p>For personal use</p>
									<div class="price">
										<span class="price-currency">$</span>
										<span class="price-number">0</span>
										<span class="price-period">forever</span>
									</div>
								</div>
								<ul class="pricing-package-items">
									<li><i class="fa fa-check"></i>Unlimited Photos</li>
									<li><i class="fa fa-check"></i>Basic Photo Filters</li>
									<li><i class="fa fa-times"></i>Edit From Gallery</li>
									<li><i class="fa fa-times"></i>Advanced Photo Filters</li>
									<li><i class="fa fa-times"></i>Custom Watermark</li>
								</ul>
							</div>
						</li>

						<!-- PRICING PACKAGE 2 -->
						<li class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2">
							<div class="pricing-package pricing-package-featured">
								<div class="pricing-package-strip"></div>
								<div class="pricing-package-header">
									<h4>Addict <span class="label label-warning">Popular</span></h4>
									<p>More awesome photo filters</p>
									<div class="price">
										<span class="price-currency">$</span>
										<span class="price-number">49</span>
										<span class="price-period">per month</span>
									</div>
								</div>
								<ul class="pricing-package-items">
									<li><i class="fa fa-check"></i>Unlimited Photos</li>
									<li><i class="fa fa-check"></i>Basic Photo Filters</li>
									<li><i class="fa fa-check"></i>Edit From Gallery</li>
									<li><i class="fa fa-check"></i>Advanced Photo Filters</li>
									<li><i class="fa fa-times"></i>Custom Watermark</li>
								</ul>
							</div>
						</li>

						<!-- PRICING PACKAGE 3 -->
						<li class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2">
							<div class="pricing-package">
								<div class="pricing-package-strip"></div>
								<div class="pricing-package-header">
									<h4>Professional</h4>
									<p>Include your business watermark</p>
									<div class="price">
										<span class="price-currency">$</span>
										<span class="price-number">79</span>
										<span class="price-period">per month</span>
									</div>
								</div>
								<ul class="pricing-package-items">
									<li><i class="fa fa-check"></i>Unlimited Photos</li>
									<li><i class="fa fa-check"></i>Basic Photo Filters</li>
									<li><i class="fa fa-check"></i>Edit From Gallery</li>
									<li><i class="fa fa-check"></i>Advanced Photo Filters</li>
									<li><i class="fa fa-check"></i>Custom Watermark</li>
								</ul>
							</div>
						</li>
					</ul>

				</div>
			</section>

			<!--
			=================================
			SCREENSHOTS SECTION
			=================================
			-->
			<section id="screenshots" class="screenshots-section section">
				<div class="container">

					<!-- SECTION HEADING -->
					<h2 class="section-heading text-center wow fadeIn" data-wow-duration="1s">Screenshots</h2>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="wow fadeIn" data-wow-duration="1s">Showcase your app screenshots into a nice carousel below. You can add as many screenshots as you want.</p>
						</div>
					</div>

					<!-- SCREENSHOT IMAGES -->
					<div class="sreenshots-carousel">
						<ul class="screenshot-images owl-carousel wow bounceIn" data-wow-duration="1s">
							<li>
								<a href="<?php echo base_url('assets/landing/images/contents/screenshot-1.jpg'); ?>" class="screenshot-image" data-lightbox-gallery="screenshots-gallery">
									<div class="screenshot-image-inner">
										<img src="<?php echo base_url('assets/landing/images/contents/screenshot-1.jpg'); ?>" alt="screenshot" />
										<div class="hover"><i class="icon-magnifier-add"></i></div>
									</div>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('assets/landing/images/contents/screenshot-2.jpg'); ?>" class="screenshot-image" data-lightbox-gallery="screenshots-gallery">
									<div class="screenshot-image-inner">
										<img src="<?php echo base_url('assets/landing/images/contents/screenshot-2.jpg'); ?>" alt="screenshot" />
										<div class="hover"><i class="icon-magnifier-add"></i></div>
									</div>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('assets/landing/images/contents/screenshot-3.jpg'); ?>" class="screenshot-image" data-lightbox-gallery="screenshots-gallery">
									<div class="screenshot-image-inner">
										<img src="<?php echo base_url('assets/landing/images/contents/screenshot-3.jpg'); ?>" alt="screenshot" />
										<div class="hover"><i class="icon-magnifier-add"></i></div>
									</div>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('assets/landing/images/contents/screenshot-4.jpg'); ?>" class="screenshot-image" data-lightbox-gallery="screenshots-gallery">
									<div class="screenshot-image-inner">
										<img src="<?php echo base_url('assets/landing/images/contents/screenshot-4.jpg'); ?>" alt="screenshot" />
										<div class="hover"><i class="icon-magnifier-add"></i></div>
									</div>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('assets/landing/images/contents/screenshot-1.jpg'); ?>" class="screenshot-image" data-lightbox-gallery="screenshots-gallery">
									<div class="screenshot-image-inner">
										<img src="<?php echo base_url('assets/landing/images/contents/screenshot-1.jpg'); ?>" alt="screenshot" />
										<div class="hover"><i class="icon-magnifier-add"></i></div>
									</div>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('assets/landing/images/contents/screenshot-2.jpg'); ?>" class="screenshot-image" data-lightbox-gallery="screenshots-gallery">
									<div class="screenshot-image-inner">
										<img src="<?php echo base_url('assets/landing/images/contents/screenshot-2.jpg'); ?>" alt="screenshot" />
										<div class="hover"><i class="icon-magnifier-add"></i></div>
									</div>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('assets/landing/images/contents/screenshot-3.jpg'); ?>" class="screenshot-image" data-lightbox-gallery="screenshots-gallery">
									<div class="screenshot-image-inner">
										<img src="<?php echo base_url('assets/landing/images/contents/screenshot-3.jpg'); ?>" alt="screenshot" />
										<div class="hover"><i class="icon-magnifier-add"></i></div>
									</div>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('assets/landing/images/contents/screenshot-4.jpg'); ?>" class="screenshot-image" data-lightbox-gallery="screenshots-gallery">
									<div class="screenshot-image-inner">
										<img src="<?php echo base_url('assets/landing/images/contents/screenshot-4.jpg'); ?>" alt="screenshot" />
										<div class="hover"><i class="icon-magnifier-add"></i></div>
									</div>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('assets/landing/images/contents/screenshot-1.jpg'); ?>" class="screenshot-image" data-lightbox-gallery="screenshots-gallery">
									<div class="screenshot-image-inner">
										<img src="<?php echo base_url('assets/landing/images/contents/screenshot-1.jpg'); ?>" alt="screenshot" />
										<div class="hover"><i class="icon-magnifier-add"></i></div>
									</div>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('assets/landing/images/contents/screenshot-2.jpg'); ?>" class="screenshot-image" data-lightbox-gallery="screenshots-gallery">
									<div class="screenshot-image-inner">
										<img src="<?php echo base_url('assets/landing/images/contents/screenshot-2.jpg'); ?>" alt="screenshot" />
										<div class="hover"><i class="icon-magnifier-add"></i></div>
									</div>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('assets/landing/images/contents/screenshot-3.jpg'); ?>" class="screenshot-image" data-lightbox-gallery="screenshots-gallery">
									<div class="screenshot-image-inner">
										<img src="<?php echo base_url('assets/landing/images/contents/screenshot-3.jpg'); ?>" alt="screenshot" />
										<div class="hover"><i class="icon-magnifier-add"></i></div>
									</div>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('assets/landing/images/contents/screenshot-4.jpg'); ?>" class="screenshot-image" data-lightbox-gallery="screenshots-gallery">
									<div class="screenshot-image-inner">
										<img src="<?php echo base_url('assets/landing/images/contents/screenshot-4.jpg'); ?>" alt="screenshot" />
										<div class="hover"><i class="icon-magnifier-add"></i></div>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</section>

			<!--
			=================================
			PRESS SECTION
			=================================
			-->
			<section id="press" class="press-section section">
				<div class="container">

					<!-- LOGOS -->
					<div class="press-logos wow fadeIn" data-wow-duration="1s">
						<span><img src="<?php echo base_url('assets/landing/images/contents/press-themeforest.png'); ?>" alt="themeforest" /></span>
						<span><img src="<?php echo base_url('assets/landing/images/contents/press-graphicriver.png'); ?>" alt="graphicriver" /></span>
						<span><img src="<?php echo base_url('assets/landing/images/contents/press-codecanyon.png'); ?>" alt="codecanyon" /></span>
						<span><img src="<?php echo base_url('assets/landing/images/contents/press-audiojungle.png'); ?>" alt="audiojungle" /></span>
					</div>

				</div>
			</section>

			<!--
			=================================
			SUBSCRIBE SECTION
			=================================
			-->
			<section id="subscribe" class="subscribe-section section section-inverse-color parallax-background" data-stellar-background-ratio="0.4">

				<!-- BACKGROUND OVERLAY -->
				<div class="black-background-overlay"></div>

				<div class="container">

					<!-- SECTION HEADING -->
					<h2 class="section-heading text-center wow fadeIn" data-wow-duration="1s">Subscribe to Our Updates</h2>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="wow fadeIn" data-wow-duration="1s">Give us your email address and we will notice you everytime we got new updates on the app. Don’t worry we hate spam as much as you do.</p>
						</div>
					</div>

					<!-- SUBSCRIBE FORM -->
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<form action="modules/subscribe-mailchimp.php" method="post" id="subscribe-form" class="subscribe-form wow fadeIn" data-wow-duration="1s" role="form">
								<div class="form-validation alert"><!-- Validation Message here --></div>
								<div class="form-group subscribe-form-input">
									<input type="email" name="email" id="subscribe-form-email" class="subscribe-form-email form-control form-control-lg" placeholder="Enter your email address" autocomplete="off" />
									<button class="subscribe-form-submit btn btn-black btn-lg" data-loading-text="Loading...">Subscribe</button>
								</div>
							</form>
						</div>
					</div>

				</div>
			</section>

			<!--
			=================================
			CONTACT SECTION
			=================================
			-->
			<section id="contact" class="contact-section section collapse">
				<div class="container">

					<!-- SECTION HEADING -->
					<h2 class="section-heading text-center wow fadeIn" data-wow-duration="1s">Get in Touch</h2>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="animated wow fadeIn" data-wow-duration="1s">Have feedback, suggestion, or any thought about our app? Feel free to contact us anytime, we will get back to you in 24 hours.</p>

						</div>
					</div>

					<!-- CONTACT FORM -->
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<form action="modules/send-email.php" method="post" id="contact-form" class="contact-form wow fadeInUp" data-wow-duration="1s" role="form">
								<div class="form-validation alert"><!-- Validation Message here --></div>
								<div class="form-group">
									<input type="text" class="form-control" name="name" placeholder="Your Name" autocomplete="off">
								</div>
								<div class="form-group">
									<input type="email" class="form-control" name="email" placeholder="Your Email Address" autocomplete="off">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="subject" placeholder="Subject" autocomplete="off">
								</div>
								<div class="form-group">
									<textarea rows="4" class="form-control" name="message" placeholder="Message"></textarea>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-block" data-loading-text="Loading...">Send Message</button>
								</div>
							</form>
						</div>
					</div>

				</div>
			</section>

			<!--
			=================================
			FOOTER SECTION
			=================================
			-->
			<footer class="footer-section section">

				<!-- CONTACT SECTION TOGGLE -->
				<a href="#contact" class="contact-toggle" data-toggle="collapse"><i class="icon-envelope"></i></a>

				<div class="container">

					<!-- DOWNLOAD BUTTONS -->
					<p class="download-buttons wow fadeIn" data-wow-duration="1s">
						<!-- APP STORE DOWNLOAD -->
						<a href="#please-edit-this-link" class="btn btn-app-download btn-ios">
							<i class="fa fa-apple"></i>
							<strong>Download App</strong> <span>from App Store</span>
						</a>
						<!-- PLAY STORE DOWNLOAD -->
						<a href="#please-edit-this-link" class="btn btn-app-download btn-primary">
							<i class="fa fa-android"></i>
							<strong>Download App</strong> <span>from Play Store</span>
						</a>
						<!-- WINDOWS PHONE STORE DOWNLOAD -->
						<!--<a href="#please-edit-this-link" class="btn btn-app-download btn-windows-phone">
							<i class="fa fa-windows"></i>
							<strong>Download App</strong> <span>from Windows Store</span>
						</a>-->
					</p>

					<!-- SOCIAL MEDIA LINKS -->
					<ul class="social-media-links wow fadeIn" data-wow-duration="1s">
						<li><a href="http://facebook.com"><i class="fa fa-facebook"></i><span class="sr-only">Facebook</span></a>
						<li><a href="http://twitter.com"><i class="fa fa-twitter"></i><span class="sr-only">Twitter</span></a>
						<li><a href="http://instagram.com"><i class="fa fa-instagram"></i><span class="sr-only">Instagram</span></a>
						<li><a href="http://pinterest.com"><i class="fa fa-pinterest"></i><span class="sr-only">Pinterest</span></a>
						<li><a href="#"><i class="fa fa-envelope"></i><span class="sr-only">Email</span></a>
					</ul>

					<!-- COPYRIGHT -->
					<div class="copyright">Copyright &copy; CAJANEGRA S.A., Todos los derechos reservados</div>
				</div>
			</footer>

		</div>

		<!--
		=================================
		JAVASCRIPTS
		=================================
		-->

		<script src="<?php echo base_url('assets/landing/js/bootstrap.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/landing/js/retina.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/landing/js/smoothscroll.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/landing/js/wow.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/landing/js/jquery.nav.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/landing/js/nivo-lightbox.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/landing/js/jquery.stellar.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/landing/js/owl.carousel.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/landing/js/script.js'); ?>"></script>

	</body>

</html>