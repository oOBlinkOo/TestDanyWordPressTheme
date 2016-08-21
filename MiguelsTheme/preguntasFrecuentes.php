<?php /* Template Name: Preguntas Frecuentes Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
	<script type="text/javascript">
	function function() {
    // document.getElementById("demo").innerHTML = myvar;
    alert("I am an alert box!");
	// document.getElementById("demo").innerHTML ="algo";
	}
	</script>

<div class="container">
  <h3>Vertical Pills</h3>
  <div class="row">
    <div class="col-md-9">
      <p id="demo" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    
 <div class="col-md-3">
	<?php if( have_rows('PREGUNTAS') ): ?>

						<ul class="nav nav-pills nav-stacked">

						<?php while( have_rows('PREGUNTAS') ): the_row(); 
						$pregunta = get_sub_field('pregunta');
						$respuesta = get_sub_field('respuesta');
						?>
						<form>
							<input type="button" value="Touch me" onclick="function()">
						</form>
						<li class=""  onclick="function()"><?php echo $pregunta; ?> <button onclick="function()">Click me</button></li>
					
					<?php endwhile; ?>

					</ul>

				<?php endif; ?>
				</div><!-- /colmd3 -->
					




		</section>
		<!-- /section -->
	</main>
	



<?php get_footer(); ?>
