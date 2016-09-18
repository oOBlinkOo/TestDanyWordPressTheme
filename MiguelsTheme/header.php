<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<!-- <header class="header" role="banner"> -->
			<header class="header" role="banner">
					<!-- BannerTOP -->
		
						<div class="bannertop">
				
						<div class="row">
						<?php
							$correo1header = get_field('correo1header','option');
							$correo2header = get_field('correo2header','option');
							$correo3header = get_field('correo3header','option');
							$telefonosheader = get_field('telefonosheader','option');
							$facebookheader= get_field('facebookheader','option');


						  ?>
							<div class="col-sm-1m"> </div>
						<!-- 	<p>aver</p> -->
							<div class="col-sm-3m"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $correo1header; ?></div>
							<div class="col-sm-2"><?php echo $correo2header; ?></div>
							<div class="col-sm-3m"><?php echo $correo3header; ?></div>
							<div class="col-sm-3m"><i class="fa fa-phone-square fa-1x" aria-hidden="true"></i> <?php echo $telefonosheader; ?></div>
							<div>
							<a href="<?php echo $facebookheader; ?>"> <i class="fa fa-facebook fa-1x" aria-hidden="true" href="www.facebook.com"></i></a>
							</div>
						</div>
					</div>

					
					
					<!-- logo -->
				
					<!-- /logo -->

					<!-- nav -->
				<!-- 	<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav> -->

					<div class="container">
							<div class="row">
								<div class="col-sm-3"> 
									<div class="logo">
									  <a href="<?php echo home_url(); ?>">
									  <img src="<?php echo get_template_directory_uri(); ?>/img/logo3.png" alt="Logo" class="logo-img">
									  </a>
									</div>
								</div>
								<div class="col-sm-7"> 
										<div class="row">
											<nav class="navbar navbar-default">
												
													<div class="navbar-header">
														<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
															<span class="sr-only">Toggle navigation</span>
															<span class="icon-bar"></span>
															<span class="icon-bar"></span>
															<span class="icon-bar"></span>
														</button>
													</div>
													 <div id="navbar" class="navbar-collapse collapse">
														<?php html5blank_nav(); ?>
													</div><!--/.nav-collapse -->
												
											</nav>
										</div>
										<div class="row">
											  <nav class="navbar navbar-default">
										           
										              <div class="navbar-header">
										                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2" aria-expanded="false" aria-controls="navbar">
										                  <span class="sr-only">Toggle navigation</span>
										                  <span class="icon-bar"></span>
										                  <span class="icon-bar"></span>
										                  <span class="icon-bar"></span>
										                </button>
										              </div>
										               <div id="navbar2" class="navbar-collapse collapse">
										                <?php html5blank_nav2(); ?>
										              </div><!--/.nav-collapse -->
										          
										          </nav>
										</div>
										
								</div>
										<!-- end of col-sm -8 -->
							</div><!-- end of row-->
				
					</div>
					 
					
					<!-- second nav-->

					
					<!-- /nav -->

			</header>
			<!-- /header -->
