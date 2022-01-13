<?php

if(!function_exists('func_demo_action')){
    function func_demo_action(){
        
        echo '<h1>Demo action - Hook </h1>';
    }
}
add_action('demo_action','func_demo_action');

add_action('wp_head',function(){
//     echo "<script>alert('Chào mừng quý khách');</script>";
});

function custom_post_type()
{
    /*
     * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
     */
    $label = array(
        'name' => 'All Course', //Tên post type dạng số nhiều
        'singular_name' => 'Course' //Tên post type dạng số ít
    );


    /*
     * Biến $args là những tham số quan trọng trong Post Type
     */
    $args = array(
        'post_type' => 'course',
        'posts_per_page'=> 20,
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Post type đăng khóa học', //Mô tả của post type
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
        ), //Các tính năng được hỗ trợ trong post type
        // 'taxonomies' => array( 'category', 'post_tag' ), //Các taxonomy được phép sử dụng để phân loại nội dung
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' => 'dashicons-welcome-learn-more', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive'=> true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post' //
    );


    register_post_type('course', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên


}
/* Kích hoạt hàm tạo custom post type */
add_action('init', 'custom_post_type');
/* Restore original Post Data */
///
function my_first_taxonomy_teacher(){

    $args = array(
        'labels' => array(

                'name' => 'Teacher Course',
                'singular_name' => 'teacher',
        ),
         'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comment', 'revision', 'custom-fields', ),
        // // You can associate this CPT with a taxonomy or custom taxonomy. 
        // 'taxonomies'          => array( 'genres' ),
        // /* A hierarchical CPT is like Pages and can have
        // * Parent and child items. A non-hierarchical CPT
        // * is like Posts.
        // */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
        'public' => true,
     
        );

    register_taxonomy('teacher', array('course'), $args );

}
add_action('init', 'my_first_taxonomy_teacher');
function my_first_taxonomy_type(){

    $args = array(
        'labels' => array(

                'name' => 'Type Course',
        ),
         'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comment', 'revision', 'custom-fields', ),
        // // You can associate this CPT with a taxonomy or custom taxonomy. 
        // 'taxonomies'          => array( 'genres' ),
        // /* A hierarchical CPT is like Pages and can have
        // * Parent and child items. A non-hierarchical CPT
        // * is like Posts.
        // */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rét' => true,
        'public' => true,
     
        );

    register_taxonomy('course_type', array('course'), $args );

}
add_action('init', 'my_first_taxonomy_type');
///meta_box-course-time

