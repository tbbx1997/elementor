<?php
/**
 * Table of Contents
 */

// create header block
if (!function_exists('header_block')){
    function header_block(){
        wp_nav_menu( array(
                'theme_location' => 'my-custom-menu',
                'container_class' => 'custom-menu-class' )
        );
    }
}

//create footer block
if (!function_exists('footer_block')){
    function footer_block(){
    }
}

//include and register style
function wp_register_styles(){
    wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.min.css', array(), '4.0','all');
    wp_enqueue_style('main-style', get_template_directory_uri().'/style.css', array(), '1.0','all');
    wp_enqueue_style('main-style-reponsive-desk', get_template_directory_uri().'/css/style-reponsive-desk.css', array(), '1.0','all');
    wp_enqueue_style('main-style-reponsive-tablet', get_template_directory_uri().'/css/style-reponsive-tablet.css', array(), '1.0','all');
    wp_enqueue_style('main-style-reponsive-mobile', get_template_directory_uri().'/css/style-reponsive-mobile.css', array(), '1.0','all');
}
add_action('wp_enqueue_scripts', 'wp_register_styles');

////include and register js
function wp_register_js()
{
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'wp_register_js');

// register custom post type
function course_custom_post_type()
{
    $label = array(
        'name' => 'Courses',
        'singular_name' => 'Course'
    );
    $args = array(
        'post_type' => 'courses',
        'posts_per_page'=> 20,
        'labels' => $label,
        'description' => 'Custom post type for course',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            'comments',
            'trackbacks',
            'revisions',
            'custom-fields',
        ),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'can_export' => true,
        'has_archive'=> true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post'
    );


    register_post_type('courses', $args);
}
add_action('init', 'course_custom_post_type');

function create_taxonomy_course_teacher(){

    $args = array(
        'labels' => array(
            'name' => 'CourseTeacher ',
            'singular_name' => 'teacher',
        ),
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comment', 'revision', 'custom-fields', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'show_admin_column' => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    );

    register_taxonomy('teacher', array('courses'), $args );

}
add_action('init', 'create_taxonomy_course_teacher');
function create_taxonomy_course_type(){

    $args = array(
        'labels' => array(
            'name' => 'CourseType ',
            'singular_name' => 'course type',
        ),
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comment', 'revision', 'custom-fields', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'show_admin_column' => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rét' => true,

    );

    register_taxonomy('course_type', array('courses'), $args );

}
add_action('init', 'create_taxonomy_course_type');

// Add menus to Appearance
function wp_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wp_custom_new_menu' );

function webdemo_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'test' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'test' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'webdemo_widgets_init' );

require get_template_directory().'/custom-widget-elementor/my_widget.php';
