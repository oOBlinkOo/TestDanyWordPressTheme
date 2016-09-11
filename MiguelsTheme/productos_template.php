<?php /* Template Name: Productos Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
<script type="text/javascript">
	function changeimages(element , myvar) {
	// alert ("pasa x la funcion"  + myvar);

		jQuery('.listaCategorias').removeClass('active');
		jQuery(element).addClass('active');
		// jQuery('.productborder').hide();
		
		if(myvar=='ALL')		
			jQuery('.productborder').show()
		else
		{
			jQuery('.productborder').hide()
			jQuery('.'+myvar).show();
		}




	}
	
	function cargarvalueInit(){
		var ul_id = document.getElementById('ul_id');
		var lis = ul_id.getElementsByTagName('li');
		lis[0].className += " active";
	}
	

	</script>

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
		$nombre1 = get_field('nombre1');
		$precio1 = get_field('precio1');	
		$imgventa1 = get_field('imgventa1');
		$descripcion1 = get_field('descripcion1');

		$nombre2 = get_field('nombre2');
		$precio2 = get_field('precio2');	
		$imgventa2 = get_field('imgventa2');
		$descripcion2 = get_field('descripcion2');
?>

			<div class="col-xs-6 col-md-9">
			<div  id="carousel-example-generic"class="carousel slide" data-interval="false">
				<div class="row ">
					 <div class="carousel-inner" role="listbox">
					 	   <div class="item active">
							        <div class="col-md-6">
										<div class="row componenteProductoEstandart">
											<div class="row name"><?php echo $nombre1; ?></div>
											<div class="row description"><?php echo $descripcion1; ?></div>
											<div class="row price"><?php echo $precio1; ?></div>
										</div>

									</div>	
									<div class="col-md-3">
										 <img height="200" width="200" class="img-thumbnail" src="<?php echo $imgventa1['url']; ?>">
									</div>	
					      </div>
					         <div class="item">
							        <div class="col-md-6">
										<div class="row componenteProductoEstandart">
											<div class="row name"><?php echo $nombre2; ?></div>
											<div class="row description"><?php echo $descripcion2; ?></div>
											<div class="row price"><?php echo $precio2; ?></div>
										</div>

									</div>	
									<div class="col-md-3">
										 <img class="img-thumbnail" src="<?php echo $imgventa2['url']; ?>">
									</div>	
					      </div>



					 </div>


					



				</div>
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="icon-prev" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="icon-next" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
			</div>
			</div>
			<br>
<!-- 
  <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img_chania.jpg" alt="Chania" width="460" height="345">
      </div>

      <div class="item">
        <img src="img_chania2.jpg" alt="Chania" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="img_flower.jpg" alt="Flower" width="460" height="345">
      </div>

      <div class="item">
        <img src="img_flower2.jpg" alt="Flower" width="460" height="345">
      </div>
    </div>
 -->


			<div class="col-xs-6 col-md-3">
				

			
			<?php 	echo "<ul class='list-group' id='ul_id'>"; ?>
				<li class="list-group-item list-group-item-success listaCategorias" onclick="changeimages(this,'ALL')" >
				   		ALL
				 </li>

					<?php 


				   for ($i=0; $i < count($arreglo); $i++) { 
				   	# code...
				   	?>
				   	

				   	<li class="list-group-item list-group-item-success listaCategorias" onclick="changeimages(this,'<?php echo "data-".str_replace(" ","-",$arreglo[$i]); ?>')">
				   			<?php echo "$arreglo[$i]"; ?>
				   	</li>
				   	<?php	
				   }
				   

				   echo "<ul>";
			?>
			</div>

			<?php 
				echo "<script>";
				echo "cargarvalueInit();";
				echo "</script>";
			 ?>










</div>



		<div class="container">
			
<div class="row divscrollproductos">


			<?php if( have_rows('producto') ): ?>
				<?php while( have_rows('producto') ): the_row(); 
		            $categoria = get_sub_field('categoria');
		            $nombre = get_sub_field('nombre');
		            $description = get_sub_field('description');
		            $image = get_sub_field('image');
		            $precio = get_sub_field('precio');
            		// echo "paso" + var_dump($categoria);
            	?>
         
            			<div class="bg-warning col-xs-6 col-md-3 data-<?php echo str_replace(' ','-',$categoria);?> productborder " >
            	<!-- <div class="thumbnail"> -->
            		<div class="col-md-6 bg-success" ><div class="row"><p class="nombre"> <?php echo "$nombre";?></p></div>
            			<div class="row"> <img height="100" width="100" class="img-thumbnail productImage" src="<?php echo $image['url']; ?>" alt="Chania"></div>
            		</div>
            		<div class="col-md-6   descripcion"><p class="descripciontext"> <?php echo "$description";?></p></div>
            	<!-- </div> -->
            	<br>
				</div>


            	
            

             	<?php endwhile; ?>
			<?php endif; ?>	
 	

</div><!-- /row de las filas principales -->


		</div><!-- /container -->
		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
