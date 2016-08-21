			<footer class="site__footer">
				<!-- footer -->
				<nav class="navbar">
				  <div class="container text-center">
						<a class="logo__tmc" href="#"></a>

							<?php
							 wp_nav_menu( array(
								 'menu'              => 'nav-footer',
								 'menu_id'           => 'nav-footer',
								 'theme_location'    => 'nav-footer',
								 'depth'             => 1,
								 'container'				 => 'ul',
								 'menu_class'        => 'nav navbar-nav',
								 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
								 'walker'            => new wp_bootstrap_navwalker())
							 );
						 ?>

						 <a class="logo__438" href="http://www.438marketing.com"></a>
				  </div>
				</nav>
				<!-- /footer -->
			</footer>

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<?php if ( is_page_template('templates/home.php') ) { ?>
			<script type="text/javascript">
			$(window).load(function() {
			    $('#slider').nivoSlider({
						effect: 'fold',
				    animSpeed: 500,
				    pauseTime: 6000,
				    startSlide: 0,
				    directionNav: false,
				    controlNav: false,
				    controlNavThumbs: false,
				    pauseOnHover: false,
				    randomStart: false,
					});
			});
			</script>

			<script>
			$(document).ready(function(){
				$("#scroll-clients").endlessRiver({
					speed: 60,
					pause: false,
					buttons: false,
				});
			});
			</script>
		<?php } else {} ?>

	</body>
</html>
