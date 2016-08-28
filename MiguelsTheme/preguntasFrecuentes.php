<?php /* Template Name: Preguntas Frecuentes Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
	<script type="text/javascript">
	function prueba(element, myvar) {
		console.log(myvar);
		document.getElementById("demo").innerHTML = myvar;
		jQuery('.lista-preguntas').removeClass('active');
		jQuery(element).addClass('active');
	}
	
	function cargarvalue(){
		var ul_id = document.getElementById('ul_id');
		var lis = ul_id.getElementsByTagName('li');
		document.getElementById("demo").innerHTML = lis[0].id;
		  // this.lis.add('active');
		// lis.addClass("active");
		// var d = document.getElementById("div1");
		lis[0].className += " active";
	}
	

	</script>

<div class="container">

  <div class="row">
  	<h1>Preguntas Frecuentes</h1>
  </div>
  <div class="row">
  		  
  		  <div class="row">
  		  	<h3>Respuesta</h3>
  		  </div>	
  		  <div class="row">
  		  	<div class="col-md-9">
      		<p id="demo" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    		</div>
    		<div class="col-md-3">
			<?php if( have_rows('PREGUNTAS') ): ?>

						<ul class="list-group" id="ul_id">

						<?php while( have_rows('PREGUNTAS') ): the_row(); 
						$pregunta = get_sub_field('pregunta');
						$respuesta = get_sub_field('respuesta');
						?>
						
						<li id="<?php echo $respuesta;?>" 
						class="lista-preguntas list-group-item list-group-item-success" 
						data-respuesta="<?php echo $respuesta;?>" 
						onclick="prueba(this,'<?php echo $respuesta;?>')"><?php echo $pregunta; ?> </li>
					
					<?php endwhile; ?>

					</ul>
						<?php 
							echo "<script>";
							echo "cargarvalue();";
							echo "</script>";
						 ?>
				<?php endif; ?>
		</div><!-- /colmd3 -->
  		  	
		  </div>
    	
					




		</section>
		<!-- /section -->
	</main>
	



<?php get_footer(); ?>
