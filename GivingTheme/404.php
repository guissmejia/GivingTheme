<?php
/*
Template Name: Page Not Found
*/
?>

<?php get_header() ?>

<main class="Main__container">
  <div class="Page--error">
    <h1>Error 404 Page Not Found</h1>
    <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Click here</a> to return to the main page</h2>
  </div>
</main>

<?php get_footer() ?>