<?php
/**
 * The template for displaying search results pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>
<div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">
         <div class="left-quote"><i class="fas fa-quote-left"></i></div>
	
		<?php if ( have_posts() ) : ?>
		<div class="search-result">
			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			<hr>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'search' ); ?>

			<?php endwhile; ?>

			<?php qod_numbered_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		</div>
		
		<div class="right-quote"> <i class="fas fa-quote-right"></i></div>
		      </main><!-- #main -->
	      </div><!-- #primary -->

<?php get_footer(); ?>
