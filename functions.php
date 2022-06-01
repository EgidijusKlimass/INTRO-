
<?php

function egidijus_register_styles()
{
    wp_enqueue_style('egidijus-styles', get_template_directory_uri() . '/assets/css/style.css?v=' . time(), array(), false, 'all');
}

add_action('wp_enqueue_scripts', 'egidijus_register_styles');


function egidijus_register_scripts()
{
    wp_enqueue_script('egidijus-mainjs', get_template_directory_uri() . '/assets/js/main.js' , null, false, true);
}

add_action('wp_enqueue_scripts', 'egidijus_register_scripts');

