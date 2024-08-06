<?php

function add_theme_scripts_and_stylesheets()
{
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.min.css', array(), '1.1', 'all');
    wp_enqueue_style('aos', "https://unpkg.com/aos@2.3.1/dist/aos.css", array(), '1.1', 'all');

    wp_enqueue_script('aos-js', "https://unpkg.com/aos@2.3.1/dist/aos.js", array(), '1.0.0', true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), 1.1, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'add_theme_scripts_and_stylesheets');


add_theme_support('menus');
add_theme_support('post-thumbnails');

// CLASIC EDITOR
add_filter('gutenberg_can_edit_post', '__return_false');
add_filter('use_block_editor_for_post', '__return_false');


// TAXONOMIES FOR PAGES

add_action('init', 'pages_tax');
function pages_tax()
{
    register_taxonomy(
        'roles',
        'page',
        array(
            'label' => __('Roles'),
            'rewrite' => array('slug' => 'roles'),
            'hierarchical' => true,
        )
    );
}




function is_child($pageID)
{
    global $post;
    if (is_page() && ($post->post_parent == $pageID)) {
        return true;
    } else {
        return false;
    }
}


function mobile_submenu($submenu_title = 'submenu-title', $submenu_name = 'submenu-name')
{
    echo "<div id=\"open\" class=\"floating-btn\">$submenu_title</div>";
    echo "<div id=\"show\" class=\"submenu-container\">";
    echo "<div id=\"close\" class=\"close\">";
    echo "<svg xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 50 50\">
    <path d=\"M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z\"></path>
    </svg>";
    echo "</div>";
    wp_nav_menu(["menu" => $submenu_name]);
    echo "</div>";
}


// CPT HOME BLOCKS

function create_home_blocks_cpt()
{
    $labels = array(
        'name' => _x('Home Blocks', 'Post Type General Name', 'textdomain'),
        'singular_name' => _x('Home Block', 'Post Type Singular Name', 'textdomain'),
        'menu_name' => _x('Home Blocks', 'Admin Menu text', 'textdomain'),
        'name_admin_bar' => _x('Home Block', 'Add New on Toolbar', 'textdomain'),
        'archives' => __('Home Block Archives', 'textdomain'),
        'attributes' => __('Home Block Attributes', 'textdomain'),
        'parent_item_colon' => __('Parent Home Block:', 'textdomain'),
        'all_items' => __('All Home Blocks', 'textdomain'),
        'add_new_item' => __('Add New Home Block', 'textdomain'),
        'add_new' => __('Add New', 'textdomain'),
        'new_item' => __('New Home Block', 'textdomain'),
        'edit_item' => __('Edit Home Block', 'textdomain'),
        'update_item' => __('Update Home Block', 'textdomain'),
        'view_item' => __('View Home Block', 'textdomain'),
        'view_items' => __('View Home Blocks', 'textdomain'),
        'search_items' => __('Search Home Block', 'textdomain'),
        'not_found' => __('Not found', 'textdomain'),
        'not_found_in_trash' => __('Not found in Trash', 'textdomain'),
        'featured_image' => __('Featured Image', 'textdomain'),
        'set_featured_image' => __('Set featured image', 'textdomain'),
        'remove_featured_image' => __('Remove featured image', 'textdomain'),
        'use_featured_image' => __('Use as featured image', 'textdomain'),
        'insert_into_item' => __('Insert into Home Block', 'textdomain'),
        'uploaded_to_this_item' => __('Uploaded to this Home Block', 'textdomain'),
        'items_list' => __('Home Blocks list', 'textdomain'),
        'items_list_navigation' => __('Home Blocks list navigation', 'textdomain'),
        'filter_items_list' => __('Filter Home Blocks list', 'textdomain'),
    );
    $args = array(
        'label' => __('Home Block', 'textdomain'),
        'description' => __('Custom post type for home page blocks', 'textdomain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
        'taxonomies' => array(),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-home',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true, // Enable the Gutenberg editor
    );
    register_post_type('home_block', $args);
}

add_action('init', 'create_home_blocks_cpt', 0);

// HIDING LAWYERS SINGLE PAGES

add_filter('pre_get_posts', function ($query) {
    if (!$query->is_admin && $query->is_search) {
        $post_id = 13;
        $query->set('post_type', array('post', 'page', 'other-post-type1')); //this line to specify post types as it is already in your question
        $query->set('post_parent__not_in', array($post_id));
        $query->set('post__not_in', array($post_id));
    }
    return $query;
});
