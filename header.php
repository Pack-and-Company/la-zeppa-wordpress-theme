<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title>
    <?php
      bloginfo( 'name' );
      if( ! is_home() ):
        wp_title( '|', true, 'left' );
      endif;
    ?>
  </title>
  <meta name="verify-v1" content="Nwq9KZmKC6BRThnw0RrGrWYo9mshW9M6FCkM9hbObaQ=" />
  <meta name="description" content="La Zeppa - the ultimate meeting place where you decide how you want your night to go. 33 Drake Street Freemans Bay Auckland." />
  <meta name="keywords" content="La Zeppa, La Zeppa Restaurant, Restaurant, Drake Street Auckland, Auckland, Freemans Bay Street, Tapas, DJ's, Music, Women, Functions, Fine dining, Fine Wine, Industrial,  Cold Tapas, Hot Tapas, Cocktails" />
  
  <link href="<?=get_template_directory_uri();?>/css/screen.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="<?=get_template_directory_uri();?>/css/print.css" rel="stylesheet" type="text/css" media="print" />
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- wrapper -->
<div id="wrapper">

  <!-- content wraper -->
  <div id="content_wrapper">
  
    <!-- header -->
    <div id="header"></div>
    <!-- end of header -->
  
    <!-- navigation menu -->
    <div id="nav">
      <?php
        $defaults = array(
          'theme_location' => 'primary',
          'fallback_cb' => 'wp_page_menu',
          'container' => false
        );
        wp_nav_menu( $defaults );
      ?>
    </div>
    <!-- end of nav menu -->

    <!-- content -->
    <div id="content">
    