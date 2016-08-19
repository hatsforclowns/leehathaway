<?php
/*
Template Name: Event
*/
?>

<?php get_header(); ?>

  <?php include TEMPLATEPATH . '/modules/title-block.php' ?>

  <div class="container">
		<div class="row">
      <aside class="col-md-4">

          <?php wp_nav_menu( array(
            'theme_location' => 'nav-services',
            'container_class' => 'aside__nav' )
          );
          ?>

      </aside>
      <main role="main">
        <div class="container-fluid">
          <!-- section -->
          <section>

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
        </div>
      </main>

		</div>
	</div>

<?php get_footer(); ?>
