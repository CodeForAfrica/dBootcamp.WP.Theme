<?php

// Change default theme colours

//function cfa_dbootcamp_customize_register( $wp_customize ) {
//	$wp_customize->get_setting( 'et_divi[font_color]' )->default = '#404042';
//	$wp_customize->get_setting( 'et_divi[link_color]' )->default = '#0873bb';
//	$wp_customize->get_setting( 'et_divi[accent_color]' )->default = '#0873bb';
//	$wp_customize->get_setting( 'et_divi[footer_bg]' )->default = '#404042';
//	$wp_customize->get_setting( 'et_divi[menu_link]' )->default = '#404042';
//	$wp_customize->get_setting( 'et_divi[menu_link_active]' )->default = '#0873bb';
//}
//add_action( 'customize_register', 'cfa_dbootcamp_customize_register' );

// Add footer setting
function dbootcamp_customize_register( $wp_customize )
{
	// Select footer page
	$args = array(
		'sort_order' => 'ASC',
		'sort_column' => 'post_title',
		'post_type' => 'page',
		'post_status' => 'publish'
	); 
	$pages = get_pages($args);
	$choose_pg = array();
	foreach ($pages as $page) {
		$choose_pg = array_merge($choose_pg, array("page-".$page->ID => (string)$page->post_title));
	}
	$wp_customize->add_setting( 'dbootcamp_footer_pg' , array(
	    'default'		=> '0',
	    'type'			=> 'option',
	    'capability'	=> 'edit_theme_options',
	    'transport'		=> 'refresh',
	) );
	$wp_customize->add_control(
		'dbootcamp_footer_pg',
		array(
			'label'		=> __( 'Footer Page', 'dBootcamp' ),
			'section'	=> 'et_divi_settings',
			'type'      => 'select',
			'choices'	=> $choose_pg,
			'priority'  => 56,
		)
	);
}
add_action( 'customize_register', 'dbootcamp_customize_register' );




