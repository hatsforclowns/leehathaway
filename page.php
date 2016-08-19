<?php get_header(); ?>

	<div class="container">
		<div class="row">

				<main role="main">
					<!-- section -->
					<section>

						<h1><?php the_title(); ?></h1>

						<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<?php the_content(); ?>

							<?php comments_template( '', true ); // Remove if you don't want comments ?>

						</article>
						<!-- /article -->

					<?php endwhile; ?>

					<?php else: ?>

						<!-- article -->
						<article>

							<h2><?php _e( 'Sorry, nothing to display.', 'bootpress' ); ?></h2>

						</article>
						<!-- /article -->

					<?php endif; ?>

					</section>
					<!-- /section -->
				</main>

				<?php get_sidebar('sidebar'); ?>

		</div>
	</div>

<?php get_footer(); ?>
