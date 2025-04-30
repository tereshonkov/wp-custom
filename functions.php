<?php
// Проверка на существования функции и хук для добавления логотипа
if (!function_exists('logo_add')) {
    function logo_add() {
        // Добавляем поддержку кастомного логотипа в меню
        add_theme_support('custom-logo', array(
            'height' => 100,
            'width' => 100,
            'flex-height' => true,
            'flex-width' => true,
        ));
    }
    // Хук для добавления логотипа
    add_action('after_setup_theme', 'logo_add');
    // Добавления динамического заголовка
    add_theme_support('title-tag');
}

// Используем хук wp_enqueue_scripts для подключения стилей
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');
// Функция для подключения стилей
function enqueue_custom_styles() {
    // Подключаем стили (style.css) по умолчанию
    wp_enqueue_style('style', get_stylesheet_uri());

    // Подключаем reset.css
    wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css');
}

//Регистрация меню
function register_menus() {
    // Переменная с расположением меню
    $locations = array(
        'header-menu' => __('Header Menu', 'theme-custom'),
        'footer-menu' => __('Footer Menu', 'theme-custom'),
    );
    // Регистрация меню
    register_nav_menus($locations);
}
// Хук для регистрации меню
add_action('init', 'register_menus');

// Получаем список всех классов
add_filter('nav_menu_css_class', 'add_custom_class', 10, 2);
//Добавить свой класс к меню items
function add_custom_class($classes) {
    //Добавляем класс к элементу меню
    $classes[] = 'custom-item';
    // Возвращаем массив классов
    return $classes;
}

// Добавим класс к ссылкам меню
add_filter('nav_menu_link_attributes', 'add_custom_link_class', 10, 3);
// Добавить свой класс к ссылкам
function add_custom_link_class($atts) {
    // Добавляем класс к ссылке
    $atts['class'] = 'custom-link';
    // Возвращаем массив атрибутов
    return $atts;
}