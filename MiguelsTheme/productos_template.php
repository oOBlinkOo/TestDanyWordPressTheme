<?php /* Template Name: Productos Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
<div class="container">
	
		<?php if( have_rows('producto') ): ?>
				<ul>
        <?php 
        $arreglo =null;
        while( have_rows('producto') ): the_row(); 
          $u =0;
                $categoria = get_sub_field('categoria');
                $nombre = get_sub_field('nombre');
                $description = get_sub_field('description');
                $image = get_sub_field('image');
                $precio = get_sub_field('precio');
                // echo "paso" + var_dump($categoria);
              ?>
			<?php 
				if (!is_null($categoria)) {
					# code...
					if (is_null($arreglo)) {
						$arreglo[0]=$categoria;
					}else{
						for ($i=0; $i < count($arreglo); $i++) { 
							if (strcmp($var1, $var2) !== 0){
								$arreglo[i]=$categoria;
							}
						}
					}

				}


			 ?>
			

              <?php endwhile; ?>
              </ul>

			<?php endif; ?>	










</div>



		<div class="container">
			
<div class="row">


			<?php if( have_rows('producto') ): ?>
				<?php while( have_rows('producto') ): the_row(); 
		            $categoria = get_sub_field('categoria');
		            $nombre = get_sub_field('nombre');
		            $description = get_sub_field('description');
		            $image = get_sub_field('image');
		            $precio = get_sub_field('precio');
            		// echo "paso" + var_dump($categoria);
            	?>

            	<div class="col-md-3 productborder">
            		<div class="col-md-6"><div class="row"><p class="nombre"> <?php echo "$nombre";?></p></div>
            			<div class="row"> <img src="<?php echo $image['url']; ?>" alt="Chania"></div>
            		</div>
            		<div class="col-md-6 descripcion"><p class=""> <?php echo "$description";?></p></div>

				</div>


             	<?php endwhile; ?>
			<?php endif; ?>	
 	

</div><!-- /row de las filas principales -->


		</div><!-- /container -->
		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
