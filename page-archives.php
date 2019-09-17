<?php
get_header(); ?>

<?php
$posts = (get_posts($args));
foreach($posts as $post):
    setup_postdata($post);
    // the_title();
    // the_category();
    // the_content();
endforeach;

// var_dump($blogs);
//Custom Loop using WP query
$blogs = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => -1, // -1 displays everything
    'order_by' => 'date',
    'order' => 'DSC',
));
?>


<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="left-quote"><i class="fas fa-quote-left"></i></div>
        <div class="archive-container">
        <h2>Archives</h2>
        <h3>Quote Authors</h3>
            <?php while ($blogs->have_posts() ) : 
            $blogs->the_post(); ?>
            <a href="<?php the_permalink();?>"> <?php echo the_title();?></a>
            
          <!-- <?php echo the_category();?> -->
            
                <?php endwhile; // End of the loop. ?>
        <h3>Categories</h3> 
        <?php 
            global $post;
            $args = array(
                'orderby'            => 'name',
                'order'              => 'ASC',
                'show_count'         => 0,
                'hide_empty'         => 1,
                'taxonomy'           => 'category'
            );
            $the_query = wp_list_categories( $args ); 
            // echo the_category();
            ?>

<h3>Tags</h3> 
<?php 
            global $post;
            $args = array(
                'orderby'            => 'name',
                'order'              => 'ASC',
                'show_count'         => 0,
                'hide_empty'         => 1,
                'taxonomy'           => 'tags'
            );
            $the_query = get_tags( $args ); 
            echo get_the_tag_list();
            ?>

            </div>      
        <div class="right-quote"> <i class="fas fa-quote-right"></i></div>
    </main>
    
</div><!-- #primary -->

<?php get_footer(); ?>
