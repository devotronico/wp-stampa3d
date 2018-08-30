<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php bloginfo('description');?>">  
  <meta name="author" content="<?php bloginfo('author');?>">
  <!-- FAVICON -->
  <link rel="icon" href="<?php bloginfo('template_url');?>/image/favicon/cube.ico">
  <title><?php bloginfo('name'); echo ' | '; wp_title();?></title> 
  <!-- Bootstrap core CSS -->
  <link href="<?php bloginfo('template_url');?>/css/bootstrap.css" rel="stylesheet">
  <!-- Default styles for this template -->
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?php bloginfo('template_url');?>/css/posts.css" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php">
        <img src="<?php echo get_theme_mod( 'showcase-logo',  get_bloginfo('template_directory').'/image/logo/cube.svg' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        <strong>&nbsp;Stampa 3D</strong>
        </a>
        <?php
        wp_nav_menu( array(
        'theme_location'    => 'primary',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
        'menu_class'        => 'nav navbar-nav',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
      </div>
    </nav>
  </header>

  <main role="main">
    <!-- JUMBOTRON -->
    <div class="container text-center">
      <div class="jumbotron">
        <div class="container">
          <h1 class="jumbotron-heading"><?php echo get_theme_mod('showcase_heading', 'Stampa 3d');?></h1>
          <p class="lead"><?php echo get_theme_mod('showcase_description', 'Stampa il mondo e tutto quello che ti circonda');?></p>
          <p class="lead">
          <a href="<?php echo get_theme_mod('showcase_description', 'https://www.danielemanzi.it/');?>" class="btn btn-primary my-2"><?php echo get_theme_mod('btn_text', 'cliccami');?></a>
          </p>
        </div>
      </div>
    </div>

 

     
      