<?php

add_action( 'customize_register', function ( $wp_customize ) {
	$wp_customize->remove_section( 'static_front_page' );
	$wp_customize->remove_section( 'title_tagline' );
	$wp_customize->remove_section( 'themes' );
	$wp_customize->remove_section( 'custom_css' );
	$wp_customize->remove_section( 'add_menu' );

	$wp_customize->add_section('null_theme_options', array(
		'title' => __('Redirect', 'null'),
		'description' => implode('', array(
			__('Where should your WP frontend redirect to?', 'null'),
			__('(Use fully qualified url: http://example.com/)', 'null'),
		)),
		'priority' => 10,
	));

	$wp_customize->add_setting('null_theme_redirect_uri', array(
		'capability' => 'edit_theme_options',
		'type' => 'option',
	));

	$wp_customize->add_control('null_theme_redirect_uri', array(
		'label' => __('Redirect', 'null'),
		'section' => 'null_theme_options',
		'settings' => 'null_theme_redirect_uri',
	));
}, 20);
