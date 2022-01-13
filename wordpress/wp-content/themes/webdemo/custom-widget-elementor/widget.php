<?php
namespace Elementor;

class My_Widget_Post extends Widget_Base {

    public function get_name() {
        return 'title-subtitle';
    }

    public function get_title() {
        return 'Custom Widget';
    }

    public function get_icon() {
        return 'fa fa-list-all';
    }

    public function get_categories() {
        return [ 'basic' ];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'post_section',
            [
                'label' => __( 'Post', 'elementor' ),
                'tab' =>\Elementor\Controls_Manager::TAB_CONTENT
            ]
        );

        $taxonomies = get_categories(array(
            'taxonomy' => 'teacher',
        ));

        $options = [];
        foreach ( $taxonomies as $taxonomy ) {
            $options[$taxonomy->name] = $taxonomy->name;
        }

        $this->add_control(
            'category_teacher',
            [
                'label' => __( 'Category Teacher', 'elementor' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => $options,
                'classes' => 'category',
            ]
        );
        $author =
        $this->end_controls_section();
    }
    protected function render() {
        $settings = $this->get_settings_for_display();
        $course = array(
            'post_type' =>'courses',
        );
        $query = new \WP_Query($course);
        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
            <div class="container">
                <?php echo the_content(); ?>
                <?php the_taxonomies(); ?>
            </div>

        <?php endwhile;endif;
    }

    protected function content_template() {

    }


}