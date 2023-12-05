<?php

// adding of style

function woocommerce_custom_theme() {
  /* css  */
  wp_register_style('custom_animate', get_template_directory_uri() . '/css/animate.css', false, '1.0.0');
  wp_register_style('custom_bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', false, '1.0.0');
  wp_register_style('custom_font_awesome', get_template_directory_uri() . '/css/font-awesome.min.css', false, '1.0.0');
  wp_register_style('custom_main', get_template_directory_uri() . '/css/main.css', false, '1.0.0');
  wp_register_style('custom_pretty_photo', get_template_directory_uri() . '/css/prettyPhoto.css', false, '1.0.0');
  wp_register_style('custom_price_range', get_template_directory_uri() . '/css/price-range.css', false, '1.0.0');
  wp_register_style('custom_responsive', get_template_directory_uri() . '/css/responsive.css', false, '1.0.0');

  /* fonts  */
  wp_register_style('custom_font_awesome_webfont', get_template_directory_uri() . '/fonts/fontawesome-webfont.woff', false, '1.0.0');
  wp_register_style('custom_font_awesome', get_template_directory_uri() . '/fonts/fontAwesome.otf', false, '1.0.0');
  wp_register_style('custom_glypicons_halflings', get_template_directory_uri() . '/fonts/glyphicons-halflings-regular.woff', false, '1.0.0');

  wp_enqueue_style( 'custom_animate' );
  wp_enqueue_style( 'custom_bootstrap' );
  wp_enqueue_style( 'custom_font_awesome' );
  wp_enqueue_style( 'custom_main' );
  wp_enqueue_style( 'custom_pretty_photo' );
  wp_enqueue_style( 'custom_price_range' );
  wp_enqueue_style( 'custom_responsive' );
  wp_enqueue_style( 'custom_font_awesome_webfont' );
  wp_enqueue_style( 'custom_font_awesome' );
  wp_enqueue_style( 'custom_glypicons_halflings' );
};

add_action( 'wp_enqueue_scripts', 'woocommerce_custom_theme' );

/* creating custom menu*/

function woocommerce_custom_menu () {
  register_nav_menu( 'top-menu', __('WooCommerce Custom Menu', 'woocommercecustommenu'));
};
add_action( 'init', 'woocommerce_custom_menu' );

/* woocommerce */
if (class_exists('WooCommerce')) {
  
  /* WooCommerce Support */
  function woocommerceshop_add_woocommerce_support () {
    add_theme_support('woocommerce');
  };

  add_filter( 'woocommerce_show_page_title', '__return_false' );

  add_action( 'after_setup_theme', 'woocommerceshop_add_woocommerce_support' );

  add_theme_support( 'wc-product-gallery-zoom' );
  add_theme_support( 'wc-product-gallery-lightbox' );
  add_theme_support( 'wc-product-gallery-slider' );
};