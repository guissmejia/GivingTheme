<div class="Search">
  <h3>Search</h3>
  <form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" class="search-field" name="s" placeholder="Search"
      value="<?php echo get_search_query(); ?>">
    <button><i class="fas fa-search"></i></button>
  </form>
</div>