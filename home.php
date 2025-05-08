<?php get_header();?>
<section class="header-blog">
    <div class="left-blog">
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
      <?php get_sidebar(); ?>
  </section>
<?php get_footer();?>