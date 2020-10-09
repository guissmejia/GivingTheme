<?php
/*
Template Name: Giving Home
*/
?>

<?php get_header(); ?>

<section class="Home">
  <section class="Home__latest__publications">
		<article class="Latests__publications--title">
			<h2>Latests Posts</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</article>
    <ul>
      <?php
					query_posts('category_name=latests-posts&posts_per_page=3');
					if (have_posts()) : while (have_posts()) : the_post();
					?>
      <li>
        <a href="<?= get_permalink(); ?>" title="<?php the_title(); ?>">
          <?php the_post_thumbnail('medium'); ?>
          <article class="Article__description">
            <h3><?php the_title(); ?></h3>
            <span><?php the_time('j F, Y') ?></span>
            <?php the_excerpt(); ?>
          </article>
          <div class="Article--actions">
            <div>
              <span class="icons"><i class="fas fa-sync-alt"></i></span>
              <span class="icons"><i class="far fa-comments"></i></span>
              <span class="icons"><i class="far fa-heart"></i></span>
            </div>
            <p>Read more</p>
          </div>
        </a>
      </li>
      <?php
					endwhile;
				else :
					?>
      <article>
        <p>No hay contenido a mostrar </p>
      </article>
      <?php endif; ?>
    </ul>
  </section>
</section>

<?php get_footer(); ?>