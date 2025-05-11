<?php get_header()?>
<main class="main-blog">
    <div class="title-full-blog">
      <h2>Bachelor of <span>Architecture</span></h2>
      <p>12-03-2020 / <span>by Kevin Johnson</span></p>
    </div>
    <div class="image-blog-wrapper">
      <img src="<?php echo get_template_directory_uri()?>/img/blog/single/blog-full1.png" alt="img">
    </div>
    <?php 
    while ( have_posts() ) : the_post();

    get_template_part( 'template-parts/content', get_post_type() );

    // the_post_navigation( array(
    //     'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous', 'textdomain' ) . '</span><span class="nav-title">%title</span>',
    //     'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next', 'textdomain' ) . '</span><span class="nav-title">%title</span>',
    // ) );

    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;
    endwhile; // End of the loop.
    ?>
    <div class="second-sidebar">
    <?php if( ! dynamic_sidebar('sidebar-blog') ) : dynamic_sidebar('sidebar-blog');  endif; ?>
     </div>
    </div>
</main>

  <?php get_footer()?>