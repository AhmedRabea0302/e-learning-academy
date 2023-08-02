<?php

    // Load your css files, fonts and scripts
    add_action('wp_enqueue_scripts', 'academy_files');
    function academy_files() {
        wp_enqueue_script('main_academy_javascript', get_theme_file_uri('/build/index.js'), array('jquery'), 1.0, true);
        wp_enqueue_style('custom_googlefont', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
        wp_enqueue_style('font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('academy_main_styles', get_theme_file_uri('/build/style-index.css'));
        wp_enqueue_style('academy_extra_styles', get_theme_file_uri('/build/index.css'));
    }


    add_action('after_setup_theme', 'academy_features');
    function academy_features() {
        add_theme_support('title-tag');
        register_nav_menu('header_menu_location', 'Header Menu Location');
    }

    add_action('pre_get_posts', 'academy_adjust_query');
    function academy_adjust_query($query) {
        if(!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()) {
            $today = date('Y-m-d');
            $query->set('meta_key', 'event_date');
            $query->set('orderby', 'meta_value_num');
            $query->set('order', 'ASC');
            $query->set('meta_query',  array(
                array(
                  'key' => 'event_date',
                  'compare' => '>=',
                  'value' => $today,
                ))
            );
        }

        if(!is_admin() AND is_post_type_archive('program') AND $query->is_main_query()) {
            $query->set('posts_per_page', -1);
            $query->set('orderby', 'title');
            $query->set('order', 'ASC');
        }
    }

    
