<?php get_header() ?>
<section class="hero">
    <div class="left">
      <div class="media">
        <span class="meadia-item">FB</span>
        <span class="line-media"></span>
        <span class="meadia-item">IN</span>
        <span class="line-media"></span>
        <span class="meadia-item">TW</span>
        <span class="line-media"></span>
        <span class="meadia-item">BE</span>
      </div>
      <div class="hero-text">
        <div class="header-hero">
          <!-- Сдесь мы мдаем возможность менять весь контент через функции the_content() -->
          <h3 class="subtitle"><?php the_content() ?></h3>
          <h1 class="title"><?php echo get_post_meta($post->ID, 'title', true); ?></h1>
        </div>
        <p class="description"><?php echo get_post_meta($post->ID, 'description', true); ?></p>
        <button class="explore">Explore</button>
      </div>
    </div>
    <div class="right">
      <img src="<?php echo get_template_directory_uri()?>/img/hero/hero.png" alt="hero" class="hero-image">
      <div class="text">
        <div class="text-right">
          <p class="description-right">Residential</p>
          <h3 class="subtitle">One Square</h3>
        </div>
        <div class="numbers">
          <span class="line"></span>
          <span class="number">01</span>
          <span class="number">02</span>
          <span class="number">03</span>
          <span class="number">04</span>
        </div>
      </div>
    </div>
  </section>
  <section class="about">
    <div class="about-header">
      <p class="about-subtitle">The process</p>
      <h2 class="about-title">How We <span>Work?</span></h2>
    </div>


    <div class="cards">
      <div class="item1">
      <img class="card-image" src="<?php echo get_template_directory_uri();?>/img/about/card1.png" alt="card 1">
        <div class="hover">
          <h3 class="card-title">Project Plan</h3>
          <p class="card-subtitle">Curabitur ullamcorper ultricies, tellus
            rhoncus tempus eget condimentum,
            sem quam semper libero</p>
          <h3 class="card-title">Project Plan</h3>
          <div class="line-card"></div>
          <div class="icon-card">
          <img src="<?php echo get_template_directory_uri();?>/img/about/arrow-card.png" alt="arrow">
          </div>
        </div>
      </div>
      <div class="item2">
      <img class="card-image" src="<?php echo get_template_directory_uri();?>/img/about/card2.png" alt="card 1">
        <div class="hover">
          <h3 class="card-title">Project Plan</h3>
          <p class="card-subtitle">Curabitur ullamcorper ultricies, tellus
            rhoncus tempus eget condimentum,
            sem quam semper libero</p>
          <h3 class="card-title">Project Plan</h3>
          <div class="line-card"></div>
          <div class="icon-card">
            <img src="<?php echo get_template_directory_uri();?>/img/about/arrow-card.png" alt="arrow">
          </div>
        </div>
      </div>
      <div class="item3">
      <img class="card-image" src="<?php echo get_template_directory_uri();?>/img/about/card3.png" alt="card 1">
        <div class="hover">
          <h3 class="card-title">Project Plan</h3>
          <p class="card-subtitle">Curabitur ullamcorper ultricies, tellus
            rhoncus tempus eget condimentum,
            sem quam semper libero</p>
          <h3 class="card-title">Project Plan</h3>
          <div class="line-card"></div>
          <div class="icon-card">
          <img src="<?php echo get_template_directory_uri();?>/img/about/arrow-card.png" alt="arrow">
          </div>
        </div>
      </div>
    </div>
    <img class="logo-about" src="<?php echo get_template_directory_uri()?>/img/about/logo-about.png" alt="logo">
    <img src="<?php echo get_template_directory_uri()?>/img/about/plan-about.png" alt="plan" class="plan-about">
  </section>
<?php get_footer() ?>