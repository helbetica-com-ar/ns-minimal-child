<?php

// The Query
$query_project = new WP_Query( array( 'page_id' => 103 ) );
 
// The Loop
if ( $query_project->have_posts() ) {
    while ( $query_project->have_posts() ) {
        $query_project->the_post();
        $content_project = apply_filters('the_content', get_the_content() );
        if (!empty($content_project)) { ?>
            <div class="content">
                <?php echo $content_project; ?>
            </div><?php
        }
    }
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();

?>