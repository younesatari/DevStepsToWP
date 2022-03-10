<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
   <div class="search-bar d-flex justify-content-between align-items-center p-2">
      <input class="control-form text-secondary border-0" type="search" placeholder="Search.." value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
      <button type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>">
         <i class="fas fa-search text-secondary"></i>
      </button>
   </div>
</form>