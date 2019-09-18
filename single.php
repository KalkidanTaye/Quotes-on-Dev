<?php
/**
 * The template for displaying all single posts.
 * Template Name: Quotes
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="left-quote"><i class="fas fa-quote-left"></i></div>
		<div class="single-content">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php the_post_navigation(); ?>

		<?php endwhile; // End of the loop. ?>
</div>
		<div class="right-quote"> <i class="fas fa-quote-right"></i></div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
