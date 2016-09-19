<?php /* Template Name: Inicio Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<!-- <h1><?php the_title(); ?></h1> -->


		<?php 
		$image1 = get_field('foto1');
		$image2 = get_field('foto2');	

		$nombre1 = get_field('nombre1');
		$precio1 = get_field('precio1');	
		$imgventa1 = get_field('imgventa1');
		$descripcion1 = get_field('descripcion1');

		$nombre2 = get_field('nombre2');
		$precio2 = get_field('precio2');	
		$imgventa2 = get_field('imgventa2');
		$descripcion2 = get_field('descripcion2');

		$nombre3 = get_field('nombre3');
		$precio3 = get_field('precio3');	
		$imgventa3 = get_field('imgventa3');
		$descripcion3 = get_field('descripcion3');
		
		?>
<div id="myCarousel" class="carousel slide" align="center" >

  <div class="carousel-inner" role="listbox">
    	<div class="item active">
      		<img src="<?php echo $image1['url']; ?>" alt="Chania">
      	</div>
		<div class="item" >
	      <img src="<?php echo $image2['url']; ?>" alt="Chania">
	    </div>

  </div>
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	    <!-- <span class="icon-prev" aria-hidden="true"></span> -->
	    <span class="sr-only">Previous</span>
    </a>
	 <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	    <!-- <span class="icon-next" aria-hidden="true"></span> -->
	    <span class="sr-only">Next</span>
	 </a>




</div>

<div class="top_grid"><!-- start top_grid -->
				<div class="col-md-10 span1_of_1">
						<h3><strong>¿Aún no tienes un asesor?</strong></h3>
						<p>Es este lugar puedes encontrar el asesor que necesitas, pincha el botón para más información</p>
				</div>
				<div class="col-md-2 span1_of_2">
					<a class="btn btn-danger" href="<?php echo home_url(); ?>/contacto">Solicitalo Aquí...</a>
				</div>
				<div class="clearfix"></div>
</div>

<div class="pricing2 main"><!-- start pricing2 -->
		<h5>Paquetes</h5>
		<!--<h6>Nuestras nuevas promociones.</h6>-->
   		<div class="span_of_4 texxt-center"><!-- start span_of_4 -->
        <ul class="pricing_table list-unstyled">
		<li class="price_block">
			<h3 class="primero"><?php echo $nombre1; ?></h3>
			<div class="price1">
				<div class="price_figure">
					<span class="price_number"><?php echo $precio1; ?></span>
				</div>
			</div>

			<ul class="features list-unstyled">
				                <li><a><img width="190" height="170" src="<?php echo $imgventa1['url']; ?>"></a></li>
                				<li style="height:100px;"><?php echo $descripcion1;?> : <?php echo $precio1;?></li>
			</ul>
			<div class="pricing_btn1">
				<a href="<?php echo home_url(); ?>" class="action_button1 popup-with-zoom-anim">Conóce más</a>
			</div>
		</li>
				
		<li class="price_block">
			<h3 class="segundo"><?php echo $nombre2; ?></h3>
			<div class="price2">
				<div class="price_figure">
					<span class="price_number"><?php echo $precio2; ?></span>
				</div>
			</div>
            
			<ul class="features list-unstyled">
				                <li><a><img width="190" height="170" src="<?php echo $imgventa2['url']; ?>"></a></li>
                				<li style="height:100px;"><?php echo $descripcion2;?> : <?php echo $precio2;?></li>
			</ul>
			<div class="pricing_btn2">
				<a href="<?php echo home_url(); ?>" class="action_button2 popup-with-zoom-anim">Conóce más</a>
			</div>
		</li>
				
		<li class="price_block">
			<h3 class="tercero"><?php echo $nombre3; ?></h3>
			<div class="price3">
				<div class="price_figure">
					<span class="price_number"><?php echo $precio3; ?></span>
				</div>
			</div>
            
			<ul class="<!-- <!-- features list-unstyled --> -->">
				                <li><a><img width="190" height="170" src="<?php echo $imgventa3['url']; ?>"></a></li>
                				<li style="height:100px;"><?php echo $descripcion3;?> : <?php echo $precio3;?></li>
			</ul>
			<div class="pricing_btn3">
				<a href="<?php echo home_url(); ?>" class="action_button3 popup-with-zoom-anim">Conóce más</a>
			</div>
		</li>
				
		<div class="clearfix"></div>
	</ul>
    	</div>
	<div class="clear"></div>
	</div><!-- end pricing2 -->





	<!--  -->

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>

