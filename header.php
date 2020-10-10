<!DOCTYPE html>
<html lang="en">

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
        <a href="<?php echo home_url(); ?>"><h1>Adam</h1></a>
      </div>
      <div class="Header__menu">
        <span class="Header__icon--menu" id="menuMobile"><i class="fas fa-bars"></i></span>
        <?php
         wp_nav_menu(
          array(
            'theme_location' => 'header_menu',
            'container_class' => 'header-nav-menu',
            'container' => 'nav'
          ));
        ?>
      </div>
    </section>
  </header>