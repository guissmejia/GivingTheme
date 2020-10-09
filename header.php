<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head() ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>

<body <?php body_class(); ?>>
  <header>
    <section class="Header">
      <div class="Header__title">
        <h1>Adam</h1>
      </div>
      <div class="Header__icon--menu">
        <i class="fas fa-bars"></i>
    </section>
    </div>
    <figure class="Header__main--image">
      <img src="<?php echo get_template_directory_uri()?>/assets/main-image.jpg" alt="Main image Home" />
    </figure>
    <div>
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'header_menu',
          'container_class' => 'header-nav-menu',
          'container' => 'nav'
        ));
        ?>
    </div>
  </header>