<?php

/**
 *
 *  Trends News Materialize functions and definitions
 *
 *  Set up the theme and provides some helper functions, which are used in the
 *  theme. Others are attached to action and filter hooks in WordPress to change core functionality.
 *
 *
 *  @package WordPress
 *  @subpackage Trends News Materialize
 *  @since Trends News Materialize 1.0
 */

/*-----------------------------------------------------------------------------------*/
/*  Libraris
/*  
/*-----------------------------------------------------------------------------------*/

require_once(get_template_directory() . '/lib/main.php');
define('DISALLOW_FILE_EDIT', true);


/*-----------------------------------------------------------------------------------*/
/* Compress IMG
/*-----------------------------------------------------------------------------------*/

add_filter('jpeg_quality', create_function('', 'return 70;'));
add_image_size('trends-default', 800, 400, true);
add_image_size('trends-grid', 300, 200, true);
add_image_size('trends-square', 400, 400, true);

/*-----------------------------------------------------------------------------------*/
/* Add Supports section
/*-----------------------------------------------------------------------------------*/
add_theme_support('automatic-feed-links');
add_theme_support('post-thumbnails');

/*-----------------------------------------------------------------------------------*/
/* Add body class/featured image support
/*-----------------------------------------------------------------------------------*/

add_filter('body_class', function ($classes) {
    return array_merge($classes, array(''));
});

/*-----------------------------------------------------------------------------------*/
/* Custom admin
/*-----------------------------------------------------------------------------------*/

add_action('init', 'wp_snippet_author_base');
function wp_snippet_author_base()
{
    global $wp_rewrite;
    $author_slug = 'autor'; // the new slug name
    $wp_rewrite->author_base = $author_slug;
}

/*-----------------------------------------------------------------------------------*/
/* Custom admin
/*-----------------------------------------------------------------------------------*/

function my_admin_head()
{
    echo '<link rel="stylesheet" type="text/css" href="' . get_stylesheet_directory_uri() . '/css/admin-escritorio.css">';
}

add_action('admin_head', 'my_admin_head');

/*-----------------------------------------------------------------------------------*/
/* Flex videos
/*-----------------------------------------------------------------------------------*/

// Videos responsive autómaticos
if(!function_exists('video_content_filter')) {
    function video_content_filter($content) {
    
           // busca algún iFrame en la página
    $pattern = '/<iframe.*?src=".*?(vimeo|youtu\.?be).*?".*?<\/iframe>/';
    preg_match_all($pattern, $content, $matches);
    
    foreach ($matches[0] as $match) {
    // iFrame encontrado, ahora lo envolvemos en un DIV ...
    $wrappedframe = '<div class="video-container">' . $match . '</div>';
    
    // Intercambia el original con el video, ahora encerrado
    $content = str_replace($match, $wrappedframe, $content);
    }
    return $content;
    }
    // Aplicar a areas de contenido de la página o entrada 
    add_filter( 'the_content', 'video_content_filter' );
    
    // Aplicar a los widgets si se quiere
    add_filter( 'widget_text', 'video_content_filter' );
   }


/*-----------------------------------------------------------------------------------*/
/* Custom Login
/*-----------------------------------------------------------------------------------*/
function my_login_logo_url()
{
    return home_url();
}
add_filter('login_headerurl', 'my_login_logo_url');
function my_login_logo_url_title()
{
    return 'Nombre del sitio web';
}
add_filter('login_headertitle', 'my_login_logo_url_title');
function my_login_logo()
{ ?>
    
<?php 
}
add_action('login_enqueue_scripts', 'my_login_logo');
function my_login_stylesheet()
{
    wp_enqueue_style('custom-login', get_stylesheet_directory_uri() . '/css/style-login.css');
}
add_action('login_enqueue_scripts', 'my_login_stylesheet');