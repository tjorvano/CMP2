<?php

    /* In dit bestand komen onze theme specifieke functies */
/* menu */




function register_menu_locations() {
    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}
add_action( 'init', 'register_menu_locations' );

function register_sidebar_locations() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary-sidebar',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}
add_action( 'widgets_init', 'register_sidebar_locations' );


the_excerpt_max_charlength(140);

function the_excerpt_max_charlength($charlength) {
    $excerpt = get_the_excerpt();
    $charlength++;

    if ( mb_strlen( $excerpt ) > $charlength ) {
        $subex = mb_substr( $excerpt, 0, $charlength - 5 );
        $exwords = explode( ' ', $subex );
        $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
        if ( $excut < 0 ) {
            echo mb_substr( $subex, 0, $excut );
        } else {
            echo $subex;
        }
        echo '[...]';
    } else {
        echo $excerpt;
    }
}

function my_bbp_verify_nonce_request_url( $requested_url ){
    return 'http://localhost:8080' . $_SERVER['REQUEST_URI'];
}
add_filter( 'bbp_verify_nonce_request_url', 'my_bbp_verify_nonce_request_url', 999, 1 );

function my_wp_nav_menu_args( $args = '' ) {
    if( is_user_logged_in() ) {
        $args['menu'] = 'logged-in';
    } else {
        $args['menu'] = 'logged-out';
    }
    return $args;
}
add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );

function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

// Our custom post type function
function create_posttype() {
    register_post_type( 'acties',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Acties' ),
                'singular_name' => __( 'Actie' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'acties'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );


/*function custom_posts_per_page($query) {
    if (is_page( $page = '23' )) {
        $query->set('posts_per_page', 5);

    }
} 

//this adds the function above to the 'pre_get_posts' action     
add_action('pre_get_posts', 'custom_posts_per_page');
*/