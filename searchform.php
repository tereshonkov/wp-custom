<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" class="search-sidebar">
        <h2 class="header-categories">Search Page</h2>
        <input value="<?php get_search_query() ?>"  name="s" id="s" type="text" class="serach-input">
        <img class="input-logo" src="<?php echo get_template_directory_uri()?>/img/blog/search.png" alt="search">
</form>