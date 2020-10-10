<?php
/*
Template Name: Search
*/
?>

<?php get_header(); ?>

<section class="Main__container">
  <div class="Search__results">
    <h1>Results of your search</h1>
    <ul class="Search__results--cards">
      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <li>
        <a href="<?= get_permalink(); ?>" title="<?php the_title(); ?>">
          <?php the_post_thumbnail('full'); ?>
          <div class="Search__results--cards__content">
            <h2><?php the_title(); ?></h2>
            <article class="Search__results--cards__extract">
              <?php the_excerpt(); ?>
            </article>
          </div>
        </a>
      </li>
      <?php
				endwhile;
				else :
			  ?>
      <article>
        <p>We have not found results for your search, please try with different words </p>
      </article>
      <?php endif; ?>
    </ul>
  </div>
</section>

<?php get_footer(); ?>