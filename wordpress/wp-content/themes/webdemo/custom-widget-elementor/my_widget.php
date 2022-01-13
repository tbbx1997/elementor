<?php
/*
 * Custom Elementor
 *
 * */

class My_Element_Widget {
    protected  static  $instance = null;
    public static  function get_instance(){
        if (!isset(static::$instance)){
            static ::$instance = new static();
        }
        return static ::$instance;
    }
    protected function __construct(){
        require_once('widget.php');
        add_action('elementor/widgets/widgets_registered',[$this, 'register_widgets']);

    }
    public function register_widgets(){
        \Elementor\Plugin::$instance->widgets_manager->register_widget_type(new \Elementor\My_Widget_Post);
    }
}
add_action('init', 'my_custom_elementor');
function my_custom_elementor(){
    My_Element_Widget::get_instance();
}
function my_query_by_post_types( $query ) {
    $query->set( 'post_type', [ 'courses'] );
}
add_action( 'elementor/query/{$query_id}', 'my_query_by_post_types' );