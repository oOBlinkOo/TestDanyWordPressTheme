<?php /* Template Name: Nosotros Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
		<?php 
		$image1 = get_field('foto1');
		$image2 = get_field('foto2');	
		// $texto = the_post();	

		// $nombre1 = get_field('nombre1');
		// $precio1 = get_field('precio1');	
		// $imgventa1 = get_field('imgventa1');
		// $descripcion1 = get_field('descripcion1');

		// $nombre2 = get_field('nombre2');
		// $precio2 = get_field('precio2');	
		// $imgventa2 = get_field('imgventa2');
		// $descripcion2 = get_field('descripcion2');

		// $nombre3 = get_field('nombre3');
		// $precio3 = get_field('precio3');	
		// $imgventa3 = get_field('imgventa3');
		// $descripcion3 = get_field('descripcion3');
		
		?>
<div class="container">
	<div class="row"> 
	<div class="col-sm-6">
		 <div class="divScroll">
   
       			<div class="col-sm-6"> 
					<?php  while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
					<?php endwhile; ?>

				</div>

    

      
    </div>
	</div>
	<div class="col-sm-6">
		<div class="row">
		<div class="divScrollimagetop">
			<img  src="<?php echo get_template_directory_uri(); ?>/img/logo3.png" alt="imag1" class="img-rounded">
		</div>
			
		</div>
		<div class="row">
			<div class="divScrollimage"> 
		<div id="myCarousel" class="carousel slide" >
					<div class="carousel-inner" role="listbox">
				    	<div class="item active">
				     	 <img src="<?php echo $image1['url']; ?>" alt="Chania">
				      	<div class="carousel-caption">
				        <h3>12345678</h3>
				        <p>12345678</p>
				      	</div>
    				</div>
    				<div class="item">
				      <img src="<?php echo $image2['url']; ?>" alt="Chania">
				      <div class="carousel-caption">
				        <h3>Chania</h3>
				        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
				      </div>
				    </div>
				     <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					    <!-- <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> -->
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					    <!-- <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> -->
					    <span class="sr-only">Next</span>
					  </a>
    				<!--  -->
		</div><!-- /carousel -->
		</div><!-- /row -->
		
	</div>
	</div>
	</div>
</div>
		
	


		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
