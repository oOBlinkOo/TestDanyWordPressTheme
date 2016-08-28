<?php /* Template Name: Productos Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
<div class="container">
	
		<?php if( have_rows('producto') ): ?>
				<ul>
        <?php 
        $arreglo =null;
        $flag = false;
 
        
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
				$flag = false;
			
				if (!is_null($categoria)) {
					# code...
					if (is_null($arreglo)) {

						$arreglo[] = $categoria;
						// var_dump($arreglo);
						// echo "paso x aqui <br>";

					}else{
					
					for ($i=0; $i < count($arreglo); $i++) { 
						# code...
						// echo "1 $arreglo[$i] <br>";
						// 	echo "2 $categoria<br>";
						if($arreglo[$i] == $categoria){
							$flag =false;
							break;
						}else {
							$flag = true;
						}
					}
					// echo "<p >end del for "  ;
					// echo $flag; 
					// var_dump($arreglo);
					// echo "</p>"  ;

					if($flag == true){
						$arreglo[] = $categoria;	

					}
							// echo "<p >end del for "  ;
							// var_dump($arreglo);
							// 	echo "</p>"  ;


					}

				}


			 ?>
			

              <?php endwhile; ?>
              </ul>

			<?php endif; ?>	
			<?php 
					
					echo "<ul>";
					echo "<li>";
				   			echo "All";
				   		echo "</li>";
				   for ($i=0; $i < count($arreglo); $i++) { 
				   	# code...
				   		echo "<li>";
				   			echo "$arreglo[$i]";
				   		echo "</li>";
				   }
				   

				   echo "<ul>";


			?>










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
