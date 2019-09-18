<?php
/**
 * The main template file.
 * Template Name: Quotes
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="left-quote"><i class="fas fa-quote-left"></i></div>
		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"> <?php single_post_title(); ?></h1>
				
				</header>
			<?php endif; ?>
		
			<div class="category-content">
			<h3> Category: <?php echo the_category(); ?></h3> 
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<hr>
				<h3><?php the_content(); ?></h3>
				<p>- <?php the_title(); ?></p>
				
				
			<?php endwhile; ?>
		
			<?php the_posts_navigation(); ?>
			</div>
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		
		<?php endif; ?>
		<div class="right-quote"> <i class="fas fa-quote-right"></i></div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
