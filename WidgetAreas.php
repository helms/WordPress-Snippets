/* ------------------------------------------------------
Simplified code to registering and displaying widget 
areas 1-5 in a theme using a for loop.
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

	
/* -------------------------------------------------------------------------
The above code to display the widget areas is the same as writing:
-------------------------------------------------------------------------- */
/*	
// Front Page 1 Widget Area
add_action( 'after_setup_theme', function () {
	
	//* Register after post widget area
	genesis_register_sidebar( array(
		'id' => 'front_page_widget_1',
		'name' => __( 'Front Page Widget Area 1', 'GenStarter' ),
		'description' => __( 'This is a widget area that is placed after the Header Feature', 'GenStarter' ),
	) );

} );

// Front Page Widget Area 2
add_action( 'after_setup_theme', function () {
	
	//* Register after post widget area
	genesis_register_sidebar( array(
		'id' => 'front_page_widget_2',
		'name' => __( 'Front Page Widget Area 2', 'GenStarter' ),
		'description' => __( 'This is a widget area that is placed after the Website Features widgets', 'GenStarter' ),
		'before_title'  => '<h2 class="widgettitle pupu">',
		'after_title'   => '</h2>',
	) );

} );

// Front Page Widget Area 3
add_action( 'after_setup_theme', function () {
	
	//* Register after post widget area
	genesis_register_sidebar( array(
		'id' => 'front_page_widget_3',
		'name' => __( 'Front Page Widget Area 3', 'GenStarter' ),
		'description' => __( 'This is a widget area that is placed after the Website Features widgets', 'GenStarter' ),
	) );

} );

// Front Page Widget Area 4
add_action( 'after_setup_theme', function () {
	
	//* Register after post widget area
	genesis_register_sidebar( array(
		'id' => 'front_page_widget_4',
		'name' => __( 'Front Page Widget Area 4', 'GenStarter' ),
		'description' => __( 'This is a widget area that is placed after the Website Features widgets', 'GenStarter' ),
	) );

} );

// Front Page Widget Area 5
add_action( 'after_setup_theme', function () {
	
	//* Register after post widget area
	genesis_register_sidebar( array(
		'id' => 'front_page_widget_5',
		'name' => __( 'Front Page Widget Area 5', 'GenStarter' ),
		'description' => __( 'This is a widget area that is placed after the Website Features widgets', 'GenStarter' ),
	) );

} );
*/
	
	
/* -------------------------------------------------------------------------
The above code to display the widget areas is the same as writing:
-------------------------------------------------------------------------- */

/*
// Display Front Page Widget Area 1
genesis_widget_area( 'front_page_widget_1', array(
		'before'	=> '<div class="front_page_widget widget_1 widget-area"><div class="wrap">',
		'after'		=> '</div></div>',
) );

// Display Front Page Widget Area 2
genesis_widget_area( 'front_page_widget_2', array(
		'before'	=> '<div class="front_page_widget widget_2 widget-area"><div class="wrap">',
		'after'		=> '</div></div>',
) );

// Display Front Page Widget Area 3
genesis_widget_area( 'front_page_widget_3', array(
		'before'	=> '<div class="front_page_widget widget_3 widget-area"><div class="wrap">',
		'after'		=> '</div></div>',
) );

// Display Front Page Widget Area 4
genesis_widget_area( 'front_page_widget_4', array(
		'before'	=> '<div class="front_page_widget widget_4 widget-area"><div class="wrap">',
		'after'		=> '</div></div>',
) );

// Display Front Page Widget Area 5
genesis_widget_area( 'front_page_widget_5', array(
		'before'	=> '<div class="front_page_widget widget_5 widget-area"><div class="wrap">',
		'after'		=> '</div></div>',
) );
*/
