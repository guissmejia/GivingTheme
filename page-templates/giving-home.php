<?php
/*
Template Name: Giving Home
*/
?>

<?php get_header(); ?>

<section class="Home">
  <div>
    <figure class="Header__main--image">
      <img src="<?php echo get_template_directory_uri()?>/assets/main-image.jpg" alt="Main image Home" />
    </figure>
  </div>
  <section class="Home__custom__posts">
    <?php
      wp_nav_menu(
				array(
					'theme_location' => 'header_secondary_menu',
					'container_class' => 'Home__custom__posts--nav',
        ));
				?>
    <ul class="Home__custom__posts--items">
      <?php
        $args = array(
            'post_type' => 'portfolio',
            'post_per_page' => -1, 
            'order'         => 'ASC',
            'orderby'       => 'title'
        );

        $portfolios = new WP_Query($args);

        if($portfolios->have_posts()){
            while($portfolios->have_posts()){
                $portfolios->the_post();
                ?>

      <li>
        <a href="<?php the_permalink(); ?>">
          <figure>
            <?php the_post_thumbnail('large'); ?>
          </figure>
          <article class="Custom__post--title">
            <h2>
              <?php the_title();?>
            </h2>
          </article>
        </a>
      </li>
      <?php }
			}
    	?>
    </ul>
  </section>
  <section class="Home__latest__publications">
    <article class="Latests__publications--title">
      <h2>Latests Posts</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua.</p>
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