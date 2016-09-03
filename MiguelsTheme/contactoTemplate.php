<?php /* Template Name: Contacto Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="container">
						<?php 
							$image1 = get_field('foto1');
							$title =  get_field('Ponte en contacto con nosotros');
							$correo1 = get_field('correo1');
							$correo2 = get_field('correo2');
							$correo3 = get_field('correo3');
							$telefonos = get_field('telefonos');
							$facebook = get_field('facebook');


							?>

				<div class="row">
					<div class="col-md-6 bg-warning"> 
						<div class="row"><br></div>
						<div class="row">
								<div class="col-sm-12 mytest2"><?php echo $title; ?> </div>
								<div class="col-sm-12">
									<img src="<?php echo $image1['url']; ?>" alt="Chania">
								</div>
						</div>
						<div class="row mytest">
						<div class="row"><br></div>
						<div class="row">
						<div class="col-sm-6"><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i></div>
						<div class="col-sm-6">
								<ul class="list-unstyled">
								  <li><?php echo $correo1; ?></li>
								  <li><?php echo $correo2; ?></li>
								  <li><?php echo $correo3; ?></li>
						
		    					<ul>		
    					</div>
						
						</div>
						<div class="row">
						<div class="col-sm-6"><i class="fa fa-phone fa-2x" aria-hidden="true"></i></div>
						<div class="col-sm-6">
							<ul class="list-unstyled">
							  <li><?php echo $telefonos; ?></li>
							  <br>
    						<ul>
						</div>
							
						</div>
						<div class="row">
						<div class="col-sm-6"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></div>
						<div class="col-sm-6">
							<ul class="list-unstyled">
						  	<li><?php echo $facebook; ?></li>
							<ul>
						</div>
							
						</div>
						<div class="row"><br></div>
						<!-- empty row to move columns -->
						
					<!-- rowtest -->
					</div>
					</div>

					<div class="col-md-6"> 
								<?php  while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
								<?php endwhile; ?>
					</div>
					



				</div>


			</div>




		</section>
		<!-- /section -->
	</main>
	



<?php get_footer(); ?>
