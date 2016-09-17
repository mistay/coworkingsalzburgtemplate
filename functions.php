<?php
/*
function example_customizer_menu() {
	add_theme_page( 'aaCustomize', 'aaCustomize', 'edit_theme_options', 'customize.php' );
}
add_action( 'admin_menu', 'example_customizer_menu' );
*/

function themeslug_customize_register( $wp_customize ) {
	$wp_customize->add_panel( 'menus', array(
	  'title' => "Custom Coworkingsalzburg Fields",
	  'description' => "",
	) );
	$wp_customize->add_section( "prices" , array(
	  'title' => __('Prices'),
	  'panel' => 'menus',
	) );

	$wp_customize->add_setting('price_ticket_day', 		array('type' => 'option'));
	$wp_customize->add_setting('price_ticket_month', 	array('type' => 'option'));
	$wp_customize->add_setting('price_ticket_10', 		array('type' => 'option'));
	
	$wp_customize->add_setting('price_club', 		array('type' => 'option'));
	$wp_customize->add_setting('price_eventroom', 		array('type' => 'option'));
	$wp_customize->add_setting('price_meetingroom', 	array('type' => 'option'));

	$wp_customize->add_control('1', array('section' => 'prices', 'settings' => 'price_ticket_day',	'description' => __( 'Price for dayticket.')));
	$wp_customize->add_control('2', array('section' => 'prices', 'settings' => 'price_ticket_month',	'description' => __( 'Price for monthly ticket.')));
	$wp_customize->add_control('3', array('section' => 'prices', 'settings' => 'price_ticket_10',	'description' => __( 'Price for 10 visits.')));

	$wp_customize->add_control('4', array('section' => 'prices', 'settings' => 'price_club', 		'description' => 'Price club'));
	$wp_customize->add_control('5', array('section' => 'prices', 'settings' => 'price_eventroom',	'description' => 'Price eventroom'));
	$wp_customize->add_control('6', array('section' => 'prices', 'settings' => 'price_meetingroom',	'description' => 'Price meetingroom'));


	$wp_customize->add_section("about" , array(
          'title' => __('About'),
          'panel' => 'menus',
        ) );

        $wp_customize->add_setting('aboutus1',          array('type' => 'option'));
        $wp_customize->add_setting('aboutus2',          array('type' => 'option'));
        $wp_customize->add_setting('aboutus3',          array('type' => 'option'));
        $wp_customize->add_control('7', array('type' => 'textarea', 'section' => 'about', 'settings' => 'aboutus1',  'description' => __( 'About Headline')));
        $wp_customize->add_control('8', array('type' => 'textarea', 'section' => 'about', 'settings' => 'aboutus2',  'description' => __( 'About Left')));
        $wp_customize->add_control('9', array('type' => 'textarea', 'section' => 'about', 'settings' => 'aboutus3',  'description' => __( 'About Right')));


}
add_action( 'customize_register', 'themeslug_customize_register' );
?>
