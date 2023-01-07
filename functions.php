<?php
//a

function soma_theme_support(){
    //adds dynamic title tag support if <title> removed from header.php and we have wp_head() in header.php INDEX IS FROM GENERAL SETTINGS WP
add_theme_support("title-tag");
add_theme_support("custom-logo"); //upload logo in theme customizer > site identity
add_theme_support("post-thumbnails"); //adds featured image support to post

}

add_action('after_setup_theme', 'soma_theme_support');

function soma_menus(){
    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'soma_menus');

function soma_register_styles(){

    $version = wp_get_theme()->get( 'Version' ); //graps version from style.css

    wp_enqueue_style('soma-style', get_template_directory_uri() . '/style.css', array(), $version, 'all'); // all = what kind of stylesheet its for

    wp_enqueue_style('soma-font', get_template_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all'); // all = what kind of stylesheet its for
}

function enqueue_bootstrap_styles(){ 
    wp_enqueue_style('bootstrap_css', '//stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css');
}
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap_styles',1 );

function enqueue_bootstrap_scripts() {  
    wp_enqueue_script( 'bootstrap_jquery', '//code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.3.1', true );
    wp_enqueue_script( 'bootstrap_popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js', array(), '1.14.7', true );
    wp_enqueue_script( 'bootstrap_javascript', '//stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js', array(), '4.3.1', true );
    wp_enqueue_script( 'soma_javascript', get_template_directory_uri()."/assets/js/main.js", array(), '1.0', true );


}
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap_scripts',1 ); //true = load in footer


add_action('wp_enqueue_scripts', 'soma_register_styles',); //when WP runs wp_enqueue_scripts, run soma_register_styles

function soma_widget_areas(){

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
    );



    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>',
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area'
        )
    );


}





add_action('widgets_init', 'soma_widget_areas');

?>