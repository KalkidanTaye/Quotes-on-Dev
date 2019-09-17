
<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    <div class="left-quote"><i class="fas fa-quote-left"></i></div>
        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', 'page' ); ?>

        <?php endwhile; // End of the loop. ?>
        <div class="right-quote"> <i class="fas fa-quote-right"></i></div>
    </main><!-- #main -->
    
</div><!-- #primary -->

<?php get_footer(); ?>
