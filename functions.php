<?php

add_filter('show_admin_bar', '__return_false');

//add options page
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Общие блоки',
        'menu_title'	=> 'Общие блоки',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

    /*acf_add_options_sub_page(array(
        'page_title'     => 'Архив вакансий',
        'menu_title'    => 'Архив вакансий',
        'parent_slug'    => 'edit.php?post_type=vacancies',
    ));*/

}

//разрешаем загрузку svg в админку
function my_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml';
    $mime_types['webp'] = 'image/webp';
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);

## Удаление виджетов из Консоли WordPress
add_action( 'wp_dashboard_setup', 'clear_wp_dash' );
function clear_wp_dash(){
    $dash_side   = & $GLOBALS['wp_meta_boxes']['dashboard']['side']['core'];
    $dash_normal = & $GLOBALS['wp_meta_boxes']['dashboard']['normal']['core'];

    unset( $dash_side['dashboard_quick_press'] );       // Быстрая публикация
    unset( $dash_side['dashboard_recent_drafts'] );     // Последние черновики
    unset( $dash_side['dashboard_primary'] );           // Блог WordPress
    unset( $dash_side['dashboard_secondary'] );         // Другие Новости WordPress

    unset( $dash_normal['dashboard_incoming_links'] );  // Входящие ссылки
    unset( $dash_normal['dashboard_right_now'] );       // Прямо сейчас
    //unset( $dash_normal['dashboard_recent_comments'] ); // Последние комментарии
    unset( $dash_normal['dashboard_plugins'] );         // Последние Плагины

    unset( $dash_normal['dashboard_activity'] );        // Активность
}

## Удаление виджета "Добро пожаловать"
remove_action( 'welcome_panel', 'wp_welcome_panel' );


function remove_page_fields() {
    remove_meta_box( 'postexcerpt' , 'post' , 'normal' ); //removes comments status
    //remove_meta_box( 'commentstatusdiv' , 'post' , 'normal' ); //removes comments status
    //remove_meta_box( 'commentsdiv' , 'post' , 'normal' ); //removes comments
    remove_meta_box( 'authordiv' , 'post' , 'normal' ); //removes author
    remove_meta_box( 'categorydiv' , 'post' , 'normal' ); //removes author
    remove_meta_box( 'tagsdiv-post_tag' , 'post' , 'normal' ); //removes author
    //remove_meta_box( 'slugdiv' , 'page' , 'normal' ); //removes slug
}
add_action( 'admin_menu' , 'remove_page_fields' );


//add thumbnail
add_theme_support( 'post-thumbnails', array( 'projects' ) );

## Удаляет "Рубрика: ", "Метка: " и т.д. из заголовка архива
add_filter( 'get_the_archive_title', function( $title ){
    return preg_replace('~^[^:]+: ~', '', $title );
});

//custom excerpt
function new_excerpt_more( $more ) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

// register styles and scripts
add_action( 'wp_enqueue_scripts', 'register_styles' );

// add styles and scripts
function register_styles() {

    wp_register_style( 'libs', get_template_directory_uri() . ( '/css/libs.css' ) );
    wp_enqueue_style( 'libs' );

	wp_register_style( 'index', get_template_directory_uri() . ( '/css/index.css' ) );
	wp_enqueue_style( 'index' );


    wp_register_script('libs', get_template_directory_uri() . '/js/libs.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('libs');

	wp_register_script('index', get_template_directory_uri() . '/js/index.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('index');
}

// navigation
add_action('after_setup_theme', function(){
    register_nav_menus(array(
        'menu_header' => 'Header menu',
    ));
});

// add or delete admin menu
add_action('admin_menu', 'xelly_remove_menu_items');
function xelly_remove_menu_items()
{
    //remove_menu_page('edit-comments.php');
    remove_menu_page('edit.php');
}

function my_admin_bar_render()
{
    global $wp_admin_bar;
    //$wp_admin_bar->remove_menu('comments');
    $wp_admin_bar->remove_menu('new-content');
    //$wp_admin_bar->remove_menu('customize');
}

add_action('wp_before_admin_bar_render', 'my_admin_bar_render');

/************ Отключает новый редактор блоков в WordPress (Гутенберг). *************/
if( 'disable_gutenberg' ){
    add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );

    // отключим подключение базовых css стилей для блоков
    // ВАЖНО! когда выйдут виджеты на блоках или что-то еще, эту строку нужно будет комментировать
    remove_action( 'wp_enqueue_scripts', 'wp_common_block_scripts_and_styles' );

    // Move the Privacy Policy help notice back under the title field.
    add_action( 'admin_init', function(){
        remove_action( 'admin_notices', [ 'WP_Privacy_Policy_Content', 'notice' ] );
        add_action( 'edit_form_after_title', [ 'WP_Privacy_Policy_Content', 'notice' ] );
    } );
}
