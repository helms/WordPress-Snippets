/* ------------------------------------------------------
Simplified code to registering and displaying widget 
areas 1-5 in a theme.
Replace 'GenStarter' with your themes text-domain
--------------------------------------------------------- */

// Register front-page widget areas 1-5
for ( $i = 1; $i <= 5; $i++ ) {
    genesis_register_widget_area(
        array(
		'id'	=> "front_page_widget_{$i}",
		'name'	=> __( "Front Page Widget {$i}", 'GenStarter' ),
		'description' => __( "This is the front page widget {$i} section.", 'GenStarter' ),
        )
    );
}

// Display Front Page Widget Areas 1-5
for ( $i = 1; $i <= 5; $i++ ) {
    genesis_widget_area( "front_page_widget_{$i}", array(
        'before' => '<div class="front_page_widget widget_'.$i.'"><div class="widget-area"><div class="wrap">',
        'after'  => '</div></div></div>',
    ) );
}
