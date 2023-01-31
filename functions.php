<?PHP
add_action( 'after_setup_theme', 'theme_register_nav_menu' );

function theme_register_nav_menu() {
    register_nav_menu( 'top', 'Main menu' );
}


add_action('wp_enqueue_scripts', 'LoadThemeScripts');

function LoadThemeScripts(){
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', [], time());

    // wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.2.1.min.js', [], time(), true);

    wp_enqueue_script('flexslider', get_template_directory_uri().'/assets/js/jquery.flexslider.js', [], '1', true);
    wp_enqueue_script('doubletaptogo', get_template_directory_uri().'/assets/js/doubletaptogo.js', ['flexslider'], '1', true);
    wp_enqueue_script('init', get_template_directory_uri().'/assets/js/init.js', ['doubletaptogo'], '1', true);


    wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/default.css', [], time());
    wp_enqueue_style('layout', get_template_directory_uri() . '/assets/css/layout.css', ['default'], time());
    wp_enqueue_style('media-queries', get_template_directory_uri() . '/assets/css/media-queries.css', ['layout'], time());
}

add_filter('the_excerpt_', 'customExcerpt', 20);

function customExcerpt($more){
    global $post;
    return $more .' <a href="' . get_permalink($post) . '">Читать далее ...</a>';
}

