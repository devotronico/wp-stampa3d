<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php bloginfo('description');?>">  
  <meta name="author" content="<?php bloginfo('author');?>">
  <!-- FAVICON -->
  <link rel="icon" href="<?php bloginfo('template_url');?>/image/favicon/cube.ico">
  <title><?php bloginfo('name'); echo ' | ';  bloginfo('description');?></title> 
  <!-- Bootstrap core CSS -->
  <link href="<?php bloginfo('template_url');?>/css/bootstrap.css" rel="stylesheet">
  <!-- Default styles for this template -->
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?php bloginfo('template_url');?>/css/frontpage.css" rel="stylesheet">
  <?php wp_head(); ?>
    <style> 
    .jumbotron { 
    background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/image/background/bg-0.png');?>) no-repeat center center; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    }
    .box-img-1 { 
      height:500px;
    background: url(<?php echo get_theme_mod('col-img-1',  get_bloginfo('template_directory').'/image/background/bg-2.jpg');?>) no-repeat center center; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    }

    .box-img-2 { 
      height:500px;
    background: url(<?php echo get_theme_mod('col-img-2',  get_bloginfo('template_directory').'/image/background/bg-2.jpg');?>) no-repeat center center; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    }
    </style>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-white bg-white" role="navigation">
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


    <div class="jumbotron jumbotron-fluid text-center">
      <div class="container">
        <h1 class="display-4"><?php echo get_theme_mod('showcase_heading', 'Stampa 3d');?></h1>
        <p class="lead"><?php echo get_theme_mod('showcase_description', 'Stampa il mondo e tutto quello che ti circonda');?></p>
        <p>
            <a href="<?php echo get_theme_mod('btn_url', 'https://www.danielemanzi.it/');?>" class="btn btn-primary my-2"><?php echo get_theme_mod('btn_text', 'Le nostre creazioni');?></a>
            <a href="#" class="btn btn-secondary my-2">Guarda il Video</a>
          </p>
      </div>
    </div>
      <!-- END JUMBOTRON -->
    <!-- THREE-COL -->
      <div class="container-fluid three-col py-5">
          <div class="row justify-content-around">
          <!-- COL-1 -->
          <div class="col-md-3 text-center shadow-sm">
            <i class="fab fa-wordpress"></i>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.
                This content is a little bit longer.</p>
              <div class="d-flex justify-content-center align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">view</button>
                </div>
                <small class="text-muted">&nbsp;10 €</small>
              </div>
            </div>
          </div>
          <!-- END COL-1 -->
          <!-- COL-2 -->
          <div class="col-md-3 text-center shadow-sm">
          <i class="fab fa-github-square"></i>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.
                This content is a little bit longer.</p>
              <div class="d-flex justify-content-center align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">view</button>
                </div>
                <small class="text-muted">&nbsp;10 €</small>
              </div>
            </div>
          </div>
          <!-- END COL-2 -->
          <!-- COL-3 -->
          <div class="col-md-3 text-center shadow-sm">
            <i class="fab fa-font-awesome"></i>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.
                This content is a little bit longer.</p>
              <div class="d-flex justify-content-center align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">view</button>
                </div>
                <small class="text-muted">&nbsp;10 €</small>
              </div>
            </div>
          </div>
          END COL-3
        </div>
      </div>
    <!-- END THREE-COL -->
    <!-- TWO-COLUMN -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 box-img-1"></div>
          <div class="col-md-6 box-text">
            <h1>Le Possibilità</h1>
            <p>
            Offrono la possibilità di stampare e assemblare parti composte da diversi materiali con diverse proprietà fisiche e meccaniche in un singolo processo di costruzione.
            Le tecnologie di stampa 3D avanzate creano modelli che emulano molto da vicino l'aspetto e le funzionalità dei prototipi</p>
            <a href="#" class="btn btn-primary btn-lg">Maggiori Info</a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 order-2 box-text">
            <h1>Processo di lavoro</h1>
            <p>Una stampante tridimensionale lavora prendendo un file 3D da un computer e utilizzandolo per fare una serie di porzioni in sezione trasversale.
               Ciascuna porzione è poi stampata l'una in cima all'altra per creare l'oggetto 3D.</p>
              <a href="#" class="btn btn-primary btn-lg">Ottieni Info</a>
            </div>
            <div class="col-md-6 order-1 box-img-2"></div>
        </div>
      </div>
    <!-- END TWO-COLUMN -->

        <!-- CARD -->
        <!-- <div class="album py-5 bg-light"> -->
        <div class="container cards py-5">
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="<?php bloginfo('template_url');?>/image/gallery/1.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Buy</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
              <img class="card-img-top" src="<?php bloginfo('template_url');?>/image/gallery/2.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Buy</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
              <img class="card-img-top" src="<?php bloginfo('template_url');?>/image/gallery/3.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Buy</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            </div>
            </div>




<!-- mmmmmmm -->
<div class="container-fluid blog-preview">
<h1 class="text-center">Ultime notizie dal blog</h1>
  <div class="row justify-content-around">
    <?php query_posts('showposts=2'); if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="col-md-4 shadow-sm col-post">
    <?php get_template_part('content', get_post_format());?>
    </div>
    <?php endwhile;?>
  </div>
  <?php else : ?>
  <h1>Not Found</h1>
  <p>Silly monkey.</p>
  <?php endif; wp_reset_query(); ?>
</div>



<?php get_footer(); ?>