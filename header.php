<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
    <?php bloginfo('name'); ?> | 
    <?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" type="text/css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/unsemantic-grid-responsive.css" type="text/css">
  <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
  <?php wp_head(); ?>
</head>
<body>
  <!--[if lt IE 7]>
  <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <div class="wrapper">
    <header class="grid-container" role="banner">
      <div class="grid-100">
        <h1>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
        </h1>
        <h2><?php bloginfo('description'); ?></h2>
        <nav role="navigation" class="site-navigation main-navigation">
          <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </nav>
      </div>
    </header>