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
//Добавить миниатюру к посту блога
add_theme_support('post-thumbnails');

//Добавление sidebar
function custom_sidebar() {
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'theme-custom'),
        'id' => 'sidebar-blog',
        'description' => __('Sidebar for blog posts', 'theme-custom'),
        'before_widget' => '<div class="sidebar %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="header-categories">',
        'after_title' => '</h2>',
    ) );
    register_sidebar(array(
        'name' => esc_html__('Второй сайтбар', 'theme-custom'),
        'id' => 'sidebar-second',
        'description' => __('Sidebar for blog posts', 'theme-custom'),
        'before_widget' => '<div class="sidebar %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="header-categories">',
        'after_title' => '</h2>',
    ) );
};
add_action('widgets_init', 'custom_sidebar');

//Ренистрация нового типа ЗАПИСИ
add_action( 'init', 'register_post_types' );

function register_post_types(){

	register_post_type( 'services', [
		'taxonomies' => [], // post related taxonomies
		'label'  => null,
		'labels' => [
			'name'               => 'Услуги', // Тут можно указать любое имя записей.
			'singular_name'      => 'Услуга', // Тут указывается имя одной записи!.
			'add_new'            => 'Добавить новую', // to add a new post.
			'add_new_item'       => 'Добавить новую услугу', // title for a newly created post in the admin panel.
			'edit_item'          => 'Редактировать услугу', // for editing post type.
			'new_item'           => 'Новая услуга', // new post's text.
			'view_item'          => 'Посмотреть услугу', // for viewing this post type.
			'search_items'       => 'Найти услугу', // search for these post types.
			'not_found'          => 'Услуг не найдено', // if search has not found anything.
			'parent_item_colon'  => '', // for parents (for hierarchical post types).
			'menu_name'          => 'Услуги', // Имя меню.
		],
		'description'         => '',
		'public'              => true,
		//'publicly_queryable'  => null, // depends on public
		//'exclude_from_search' => null, // depends on public
		'show_ui'             => true, // depends on public
		//'show_in_nav_menus'   => null, // depends on public
		'show_in_menu'        => true, // whether to in admin panel menu
		//'show_in_admin_bar'   => null, // depends on show_in_menu.
		'show_in_rest'        => null, // Add to REST API. WP 4.7.
		'rest_base'           => null, // $post_type. WP 4.7.
		'menu_position'       => null,
		'menu_icon'           => null, // Добавить иконку (опционально).
		'capability_type'   => 'post',
		//'capabilities'      => 'post', // Array of additional rights for this post type.
		//'map_meta_cap'      => null, // Set to true to enable the default handler for meta caps.
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor' ], // [ 'title', 'editor', 'author',
														//   'thumbnail', 'excerpt', 'trackbacks',
														//   'custom-fields', 'comments', 'revisions',
														//   'page-attributes', 'post-formats' ]
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	] );

}