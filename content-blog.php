<?php

// The Query
$query_blog = new WP_Query( array( 'page_id' => 54 ) );
 
// The Loop
if ( $query_blog->have_posts() ) {
    while ( $query_blog->have_posts() ) {
        $query_blog->the_post();
        $content_blog = apply_filters('the_content', get_the_content() );
        if (!empty($content_blog)) { ?>
            <div class="content">
                <?php echo $content_blog; ?>
            </div><?php
        }
    }
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();

?>