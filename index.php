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
			<h2> Category: <?php echo the_category(); ?></h2> 
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<hr>
				<?php the_content(); ?>
				<?php the_title(); ?>
				
				
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
