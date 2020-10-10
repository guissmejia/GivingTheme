<?php
/*
Template Name: Single Post
*/
?>

<?php get_header(); ?>

<section class="Single__post">
  <h1 style="text-align:center;">Single Post</h1>
  <section class="Single__post__article">
    <div class="Single__post__content--filters">
      <?php get_search_form(); ?>
      <div class="Single__recent__posts">
        <h3>Recent Posts</h3>
        <ul>
          <?php
						$args = array(
							'category_name' => 'latests-posts',
							'order' => 'DESC',
							'orderby' => 'date',
							'posts_per_page' => 3
						);
						$latests_posts = get_posts( $args );
            ?>
          <?php
            foreach($latests_posts as $post ) :
              setup_postdata( $post ); 
          ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('medium'); ?>
              <div class="Article__description">
                <h4><?php the_title(); ?></h4>
              </div>
            </a>
          </li>
          <?php
            endforeach;
            wp_reset_postdata();
          ?>
        </ul>
      </div>
    </div>

    <div class="Single__post__content">
      <figure class="Single__post-thumbnail">
        <?php the_post_thumbnail('full'); ?>
      </figure>
      <div class="Single__post--title">
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
  <section class="Single__post--comments">
    <?php
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		?>
  </section>
</section>
<?php get_footer(); ?>