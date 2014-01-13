<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php the_title(); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" type="text/css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/unsemantic-grid-responsive.css" type="text/css">
  <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
  <?php wp_head(); ?>
</head>
<body>
  <div class="wrap">
    <header>
      <h1><a><?php bloginfo('name'); ?></a></h1>
      <h2><?php bloginfo('description'); ?></h2>
    </header>