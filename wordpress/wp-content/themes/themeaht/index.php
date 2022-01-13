<?php get_header(); ?>

<div id="main-content">
    <div class="container">
        <div class="posts">
            <?php
                $posts = array(
                    'post_type' => 'post',
                    'order' => 'DESC',
                    // 'category_name' => '',
                    // // 'category_name' => 'laptop',
                    // // 'tag' => 'iphone',
                    // 'tag' => '',
                    'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comment', 'revision', 'custom-fields' )
                    
                );  
            ?>
        <?php 
        // the query
            $the_query = new WP_Query( $posts ); ?>
             <?php if($the_query->have_posts()) : while($the_query->have_posts()): $the_query->the_post(); ?>
                    <div class="post-item">
                        <div class="title-post"><h2> Title: <?php the_title(); ?></h2></div>
                        <div class="content-post"> 
                            <?php the_content(); ?>
                        </div>
                        <div class="categories"><span>category:</span><p><?php the_category(); ?></p></div>
                        <div class="tags"> <p><?php the_tags(); ?></p></div>
                    </div>

                <?php endwhile; endif ?>


                <!-- end of the loop -->
            
                <!-- pagination here -->
            
                <?php wp_reset_postdata(); ?>
        </div>
        <div class="course">
            <div class="title"> <h2 style="text-align: center;"> Course </h2></div>
            <?php
                 $course =  array( 
                 'post_type' => 'course', // Tell WordPress which post type we want
                 'meta_key' => '_course_time',
                 'orderby' => 'meta_value',  // Grab the "start date" field created via "More Fields" plugin (stored in YYYY-MM-DD format)
                 'order' => 'ASC', // ASC is the other option    
                //  'posts_per_page' => '-1', // Let's show them all.

                    )
            ?>
        <?php 
        // the query
            $the_course = new WP_Query( $course );
            ?>

            <?php if($the_course->have_posts()) : while($the_course->have_posts()): $the_course->the_post(); ?>
           
                    <div class="post-item">
                        <div class="title-post"><h2> Course name: <?php the_title(); ?></h2></div>
                        <div class="content-post"> 
                           <strong><?php the_content(); ?><strong>
                        </div>
                        <div class="categories"><p><?php the_taxonomies(); ?></p></div>
                        <div class="date-course"><?php $date = get_post_meta($post->ID,'_course_time',true);
                   
                           
                            if($date){
                                $orgDate = $date;  
                                $newDate = date("d-m-Y", strtotime($orgDate));  
                                // echo "New date format is: ".$newDate. " (MM-DD-YYYY)";  
                               echo "Date start:".($newDate);
                            }
                          
                        ?> 
               
                    
                        </div>
                    </div>

                <?php endwhile; endif ?>


                <!-- end of the loop -->
            
                <!-- pagination here -->
            
                <?php wp_reset_postdata(); ?>
        </div>
    </div>
</div>
<?php the_content(); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>