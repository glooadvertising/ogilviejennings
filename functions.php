<?php

function add_theme_scripts_and_stylesheets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.min.css', array(), '1.1', 'all' );
    wp_enqueue_style( 'aos', "https://unpkg.com/aos@2.3.1/dist/aos.css", array(), '1.1', 'all' );
	
	wp_enqueue_script( 'aos-js', "https://unpkg.com/aos@2.3.1/dist/aos.js", array(), '1.0.0', true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), 1.1, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts_and_stylesheets' );


add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

// CLASIC EDITOR
add_filter('gutenberg_can_edit_post', '__return_false');
add_filter('use_block_editor_for_post', '__return_false');


// TAXONOMIES FOR PAGES

add_action( 'init', 'pages_tax' );
function pages_tax() {
    register_taxonomy(
        'roles',
        'page',
        array(
            'label' => __( 'Roles' ),
            'rewrite' => array( 'slug' => 'roles' ),
            'hierarchical' => true,
        )
    );
}




function is_child($pageID) { 
	global $post; 
	if( is_page() && ($post->post_parent==$pageID) ) {
               return true;
	} else { 
               return false; 
	}
}


function mobile_submenu($submenu_title = 'submenu-title', $submenu_name = 'submenu-name') {
    echo "<div id=\"open\" class=\"floating-btn\">$submenu_title</div>";
    echo "<div id=\"show\" class=\"submenu-container\">";
    echo "<div id=\"close\" class=\"close\">";
    echo "X";
    echo "</div>";
    wp_nav_menu(["menu" => $submenu_name]);    
    echo "</div>";      
}
