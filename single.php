<?php
/*
Template Name: Single Post
*/
?>

<?php get_header(); ?>

<section class="Main__container">

  <?php if (have_posts()) {
      while (have_posts()) {
        the_post(); 
    ?>
  <figure class="post-thumbnail">
    <?php the_post_thumbnail('full'); ?>
  </figure>
    <section class="entry-title">
      <h1><?php the_title() ?></h1>
      <article class="post-content">
        <?php the_content(); ?>
      </article>
    <?php
      }
    }
    ?>
  </section>

  <?php get_footer(); ?>