<?php
/*
Template Name: Title Block
*/
?>

<?php get_header(); ?>

  <?php include TEMPLATEPATH . '/modules/title-block.php' ?>

  <div class="container">
		<div class="row">

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

				<?php get_sidebar('sidebar'); ?>

		</div>
	</div>

  <?php include TEMPLATEPATH . '/modules/enquire.php' ?>

<?php get_footer(); ?>
