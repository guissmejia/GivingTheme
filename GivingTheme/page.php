<?php
/*
Template Name: Page
*/
?>

<?php get_header(); ?>

<section class="Article__page">
  <h1 style="text-align:center;">The Post</h1>
  <div class="Article__page__content">
    <figure class="Article__page-thumbnail">
      <?php the_post_thumbnail('full'); ?>
    </figure>
    <div class="Article__page--title">
      <h1><?php the_title() ?></h1>
      <i class="far fa-clock"></i> <span><?php the_time('j F, Y') ?></span>
    </div>
    <?php if (have_posts()) {
      while (have_posts()) {
        the_post(); ?>
    <article>
      <?php the_content(); ?>
    </article>
    <?php
      }
    }
    ?>
  </div>
</section>
<?php get_footer(); ?>