<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
</head>
<body>
    <header class="header">
       <div class="logo-wrapper">
         <?php
         if ( has_custom_logo()) {
            the_custom_logo();
         }
          ?>
       </div>
       <nav>
        <?php wp_nav_menu([
            'theme_location' => 'header-menu', // Указываем расположение меню
            'container' => false, // Убираем контейнер
            'menu_class' => 'menu', // Используем кастомный класс для меню
            'items_wrap' => '<ul class="%2$s">%3$s</ul>', // Используем кастомный класс для элементов меню
            'depth' => 0,  //Вложенность меню
        ]); ?>
       </nav>
       <div class="search-wrapper">
        <img src="<?php echo get_template_directory_uri()?>/img/search.png" alt="search">
        <div class="menu-right">
            <span class="first"></span>
            <span class="second"></span>
        </div>
       </div>
    </header>