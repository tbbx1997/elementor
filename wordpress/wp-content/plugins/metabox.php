<?php

/*
Plugin Name: Test Meta Box
Author : mrthree
Description: This is plugin test meta box
*/

function course_date_meta_box(){
    add_meta_box('course_date','Course Date','course_date_output','courses');
}
add_action('add_meta_boxes','course_date_meta_box');

function course_date_output($post){
    $course_date = get_post_meta($post->ID,'course_date',true);
    echo('<label for ="course_date">Course Date: </label>');
    echo('<input type="date" id="course_date" name ="course_date" value="'.$course_date.'"/>');
}
function course_date_save($post_id){

    $course_date = $_POST['course_date'];
    update_post_meta($post_id,'course_date',$course_date);
}
add_action('save_post','course_date_save');
