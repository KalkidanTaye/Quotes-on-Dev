<?php
/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">
         <div class="left-quote"><i class="fas fa-quote-left"></i></div>
            <?php
            // the query
            $args = array(
               'orderby' => 'rand',
               'posts_per_page' => '1'
            );

            $the_first_quote = new WP_Query( $args ); ?>

            <?php if ( $the_first_quote->have_posts() ) : ?>

            <!-- pagination here -->

            <!-- the loop -->
            <?php while ( $the_first_quote->have_posts() ) : $the_first_quote->the_post(); ?>
            <div class="quote"><h2><?php the_content(); ?></h2></div>
            <div class="author"><?php the_title(); ?></div>


            <?php endwhile; ?>
            <!-- end of the loop -->

            <!-- pagination here -->

            <!-- <?php wp_reset_postdata(); ?> -->
         <!-- 
         <?php endif; ?> -->
         <div class="right-quote"> <i class="fas fa-quote-right"></i></div>
		      </main><!-- #main -->
	      </div><!-- #primary -->
		          <button type="button" class="show-button">Show me Another</button>
           
     
      

   
   

<?php get_footer(); ?>