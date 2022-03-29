<?php

// The Query
$query_participate = new WP_Query( array( 'page_id' => 46 ) );
 
// The Loop
if ( $query_participate->have_posts() ) {
    while ( $query_participate->have_posts() ) {
        $query_participate->the_post();
        $content_participate = apply_filters('the_content', get_the_content() );
        if (!empty($content_participate)) { ?>
            <div class="content">
                <?php echo $content_participate; ?>
            </div><?php
        }
    }
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();

?>