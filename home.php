<?php get_header();?>
<section class="header-blog">
    <div class="left">
      <div class="wrapper-text">
        <h2 class="title-blog">Blogs with Sidebar</h2>
        <p class="subtitle-blog">Home > Blog > Blogs Grid</p> 
      </div>
    </div>
    <div class="right">
      <img src="<?php echo get_template_directory_uri()?>/img/blog/blog-header-title.png" alt="" class="img-blog">
    </div>
  </section>
  <section class="blog">
    <div class="heading-blog">
      <p class="subtitle-bloging">News and blogs</p>
      <h2 class="title-bloging">Read all our <span>Latest Articles</span></h2>
    </div>
    <div class="blog-items">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="item">
        <?php the_post_thumbnail( 'medium', array(
            'class' => 'iten-img',
            'alt' => get_the_title(),
        )) ?>
        <h2 class="item-header"><?php the_title(); ?></h2>
        <p class="item-date"><?php the_time('j F Y'); ?> / <span><?php the_author(); ?></span></p>
        <p class="item-subtitle"><?php the_excerpt(); ?></p>
        <div class="item-button-more">
          <a href="<?php echo get_the_permalink(); ?>" class="text-button-more">Read More</a>
          <img src="<?php echo get_template_directory_uri();?>/img/blog/arrow.png" alt="" class="arrow-more">
        </div>
      </div>
    <?php endwhile; else: ?>
        No posts.
    <?php endif; ?>
        <?php the_posts_pagination(); ?>
    </div>  
    <div class="sidebar">
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
        <h2 class="header-latest">Our Latest Posts</h2>
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
        <h2 class="header-tags">Related Tags</h2>
        <div class="tag1">
          <p class="tag">Decor <span></span> Furniture <span></span> Design</p>
          <p class="tag">Home <span></span> Build <span></span> Architecture</p>
        </div>
      </div>
      <div class="share">
        <h2 class="header-share">Share</h2>
        <p class="sh">FB <span class="line"></span> IN <span class="line"></span> TW <span class="line"></span> BE</p>
      </div>
    </div>
  </section>
<?php get_footer();?>