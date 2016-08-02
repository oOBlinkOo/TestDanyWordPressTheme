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
			<header class="header clear" role="banner">
					<!-- BannerTOP -->

					<div class="bannertop">
					<br>
						<div class="row">
							<div class="col-sm-1"> </div>
							<div class="col-sm-2">ventas@radioalarmas.com.mx</div>
							<div class="col-sm-2">direccion@radioalarmas.com.mx</div>
							<div class="col-sm-3">ventas@radioalarmas@hotmail.com</div>
							<div class="col-sm-3">(999) 981-40-85 y 981-40-86</div>
							<div class="col-sm-1">logo face</div>
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
									  <img src="<?php echo get_template_directory_uri(); ?>/img/logo2.png" alt="Logo" class="logo-img">
									  </a>
									</div>
								</div>
								<div class="col-sm-7"> 
										<div class="row">
											<nav class="navbar navbar-default">
												<div class="container">
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
												</div>
											</nav>
										</div>
										<div class="row">
											  <nav class="navbar navbar-default">
										            <div class="container">
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
										            </div>
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
