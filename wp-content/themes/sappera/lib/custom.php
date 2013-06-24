<?php
  // clean up parent styles and scripts
  // re-register child theme styles and scripts

  wp_deregister_style('roots_app');
  wp_deregister_script('roots_plugins');
  wp_deregister_script('roots_main');
  
  wp_register_style('roots_app', get_stylesheet_directory_uri() . '/assets/css/app.css', array('roots_bootstrap','roots_bootstrap_responsive','roots_child'), null);
  wp_register_script('roots_plugins', get_stylesheet_directory_uri() . '/assets/js/plugins.js', array('jquery'), null, true);
  wp_register_script('roots_main', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery','roots_plugins'), null, true);
  
  wp_enqueue_style('roots_app');
  wp_enqueue_script('roots_plugins');
  wp_enqueue_script('roots_main');
  
  // register font-awsome from their CDN
  wp_register_style('font_awsome', '//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.css', array('roots_bootstrap'), null);
  wp_enqueue_style('font_awsome');
  
  // register Source Sans Pro font from Google Fonts
  wp_register_style('source_sans_pro', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic');
  wp_enqueue_style('source_sans_pro');
?>
