<aside class="sidebar">
      <?php if( ! dynamic_sidebar('sidebar-blog') ) : dynamic_sidebar('sidebar-blog');  endif; ?>
      <div class="search-sidebar">
        <label for="input-search" class="text-input">Search Page</label>
        <input id="input-search" type="text" class="serach-input">
        <img class="input-logo" src="<?php echo get_template_directory_uri()?>/img/blog/search.png" alt="search">
      </div>
      <ul class="categories-sidebar">
        <h2 class="header-categories">All Categories</h2>
        <li class="categories-item">Design</li>
        <li class="categories-item">Furniture</li>
        <li class="categories-item">Home</li>
      </ul>
      <div class="latest">
        <h2 class="header-categories">Our Latest Posts</h2>
        <div class="item-latest">
          <img class="latest-img" src="<?php echo get_template_directory_uri()?>/img/blog/latest.png" alt="latest"> 
          <h2 class="item-header">Bachelor of Architecture</h2>
          <p class="item-date">12-03-2020 / <span>by Kevin Johnson</span></p>
          <p class="item-subtitle">Lorem ipsum dolor sit amet, consectetr adipiscing elit. Adipiscing</p>
          <div class="item-button-more">
            <a href="#" class="text-button-more">Read More</a>
            <img src="<?php echo get_template_directory_uri()?>/img/blog/arrow.png" alt="" class="arrow-more">
          </div>
        </div>
      </div>
      <div class="tags">
        <h2 class="header-categories">Related Tags</h2>
        <div class="tag1">
          <p class="tag">Decor <span></span> Furniture <span></span> Design</p>
          <p class="tag">Home <span></span> Build <span></span> Architecture</p>
        </div>
      </div>
      <div class="share">
        <h2 class="header-categories">Share</h2>
        <p class="sh">FB <span class="line"></span> IN <span class="line"></span> TW <span class="line"></span> BE</p>
      </div>
</aside>