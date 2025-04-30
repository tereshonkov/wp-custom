<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
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