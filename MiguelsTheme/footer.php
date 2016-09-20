			<!-- footer -->
			<footer class="footer_bg" role="contentinfo" >

		
					 <div class="container">
					 		<div class="row">
						 		<div class="col-sm-3"> 
						 			<a href="<?php echo home_url(); ?>">
						 			<?php 
									  $custom_logo_id = get_theme_mod( 'custom_logo' );
										$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
										

									   ?>
									  <img width="200" height="130" src="<?php echo $image[0]; ?>" alt="Logo" class="logo-img">
									  </a>
						 		</div>
						 		
								<div class="col-sm-2m" ><b>Radio Alarma</b></div>
								<div class="col-sm-2m"><b>Paquetes</b></div>
								<div class="col-sm-2m"><b>Artigulos de interes</b></div>
					 		</div><!-- row -->


					 		<?php
							$descriptionfooter = get_field('descriptionfooter','option');
							$telefonosfooter = get_field('telefonosfooter','option');
							$correo1footer = get_field('correo1footer','option');
							$correo2footer = get_field('correo2footer','option');
							$correo3footer = get_field('correo3footer','option');


						 	 ?>


					 		<div class="row">
					 			<div class="col-sm-4">
					 				<div class="row">
					 				<?php echo $descriptionfooter; ?>
					 				</div>
					 				<div class="row">
					 					<div class="row">
						 					<div class="col-sm-2">
						 					<small>Phone:</small> </div>
						 					<div class="col-sm-9">
						 					<small>
												<?php echo $telefonosfooter; ?>
						 					</small> </div>
					 					</div>
					 					<div class="row">
						 					<div class="col-sm-1">
						 					<small>email:</small> </div>
						 					<div class="col-sm-1">
						 					<ul>
							                  <li><small> <?php echo $correo1footer; ?></small> </li>
							                  <li><small> <?php echo $correo2footer; ?></small> </li>
							                  <li><small> <?php echo $correo3footer; ?></small> </li>
							                </ul>
						 					</div>
					 					</div>
					 				</div>
					 			
					 			</div>
					 			<div class="col-sm-2">
					 			<?php if( have_rows('repeatermenu','option') ): ?>
									<ul>
								      	  <?php    
								        	while( have_rows('repeatermenu','option') ): the_row(); 
								                $menuname = get_sub_field('menuname');
								              ?>
													<li ><?php echo "$menuname"; ?></li>
								              <?php endwhile; ?>
								      </ul>

								<?php endif; ?>	

					 			</div><!-- fin del colsm2deinicio -->
					 			<div class="col-sm-2">

						<?php if( have_rows('repeaterpaquetes','option') ): ?>
								<ul>
							      	  <?php    
							        	while( have_rows('repeaterpaquetes','option') ): the_row(); 
							                $paquete = get_sub_field('paquete');
							              ?>
												<li ><?php echo "$paquete"; ?></li>
							              <?php endwhile; ?>
							      </ul>

						<?php endif; ?>	


					 			</div><!-- fin del colsm2deinicio2 -->
					 			<div class="col-sm-4">
					 					<div class="row">

		<?php if( have_rows('repeaterarticulosinteres','option') ): ?>
								<ul>
							      	  <?php    
							        	while( have_rows('repeaterarticulosinteres','option') ): the_row(); 
							                $imgart = get_sub_field('imgart');
							                $dateart = get_sub_field('fechaarticulo');
							                $descriptionart = get_sub_field('descriptionart');
							              ?>
										<div class="row">
					 							<div class="col-sm-6">
					 									<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/logo3.png" alt="imag1" class="img-rounded"> -->
					 								<img  height="130" width="130" src="<?php echo $imgart['url']; ?>" alt="imag1" class="img-rounded">
					 							</div>
					 							<div class="col-sm-6">
					 								<small> <?php echo "$descriptionart"; ?></small>
					 							</div>
					 							<div class="col-sm-1">
					 								<small> <?php echo "$dateart"; ?> </small>
					 							</div>
					 					</div>
											
							              <?php endwhile; ?>
							      </ul>

						<?php endif; ?>	



<!-- 					 						<div class="col-sm-6">
					 								<img src="<?php echo get_template_directory_uri(); ?>/img/logo3.png" alt="imag1" class="img-rounded">
					 						</div>
					 						<div class="col-sm-6">
					 								<small>lorem ipsum dolor sit amet, consctur adisplcing elit</small>
					 						</div>
					 						<div class="col-sm-1">
					 								<small>26/sept/1992</small>
					 						</div>
					 					</div>
 -->					 		<!-- 			<div class="row">
					 							<div class="col-sm-6">
					 									<img src="<?php echo get_template_directory_uri(); ?>/img/logo3.png" alt="imag1" class="img-rounded">
					 							</div>
					 							<div class="col-sm-6">
					 								<small>lorem ipsum dolor sit amet, consctur adisplcing elit</small>
					 							</div>
					 							<div class="col-sm-1">
					 								<small>26/sept/1991</small>
					 							</div>
					 					</div> -->
									
					                  
					                  
					               
					 			</div>
					 			
					 		</div><!-- row -->
					 	
					 </div><!-- container -->

					<div class="bannerbot">
					<br>
						<div class="row">

						  <?php   
						  $facebookheader= get_field('facebookheader','option');


						   ?>
							<div class="col-sm-3"> </div>
							<div class="col-sm-4">Aviso de Privacidad </div>
							<div class="col-sm-3">Copyright 2014 Radio Alarmas </div>
							<div >
							<!-- <i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i> -->
							<a href="<?php echo $facebookheader; ?>"> <i class="fa fa-facebook-official fa-2x" aria-hidden="true" href="www.facebook.com"></i></a>
							 </div>

							
							
						</div>
					</div>


				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>