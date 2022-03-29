<?php

// The Query
$query_credits = new WP_Query( array( 'page_id' => 32 ) );
 
// The Loop
if ( $query_credits->have_posts() ) {
    while ( $query_credits->have_posts() ) {
        $query_credits->the_post();
        $content_credits = apply_filters('the_content', get_the_content() );
        if (!empty($content_credits)) { ?>
            <div class="content">
                <?php echo $content_credits; ?>
            </div><?php
        }
    }
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();

?>