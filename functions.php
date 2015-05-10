<?php

// Enables featured image for posts.
add_theme_support( 'post-thumbnails' );

if (!is_admin()) {
    // Bootstrap JavaScript files.
    wp_register_script( 'bootstrap',
                        get_template_directory_uri() . '/js/bootstrap.min.js',
                        array('jquery'),
                        '',
                        true
    );
    wp_enqueue_script( 'bootstrap' );

    // Twitter Widget files.
    // This needs to be updated...
    // https://dev.twitter.com/docs/tfw-javascript

    // wp_register_script( 'twitter-widget',
    //                     get_template_directory_uri() . '/js/widget.js',
    //                     array(),
    //                     '',
    //                     true
    // );
    // wp_enqueue_script( 'twitter-widget' );

    wp_register_style( 'lop-sp',
                        get_template_directory_uri() . '/style.css',
                        array(),
                        '',
                        'all'
    );
    wp_enqueue_style( 'lop-sp' );
}

# The following is based on:
# http://codex.wordpress.org/Customizing_the_Login_Form
function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/lop_sp_logo_small_wplogin.png);
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return "Liga Pokémon de São Paulo";
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

function my_login_stylesheet() { ?>
    <link rel="stylesheet" id="custom_wp_admin_css"  href="<?php echo get_bloginfo( 'stylesheet_directory' ) . '/style-login.css'; ?>" type="text/css" media="all" />
<?php }
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );
?>
