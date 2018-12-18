
<?php
/*-----------------------------------------------------------------------------------*/
/* hook
/*-----------------------------------------------------------------------------------*/

// Feed



function first_feed()
{
    include get_parent_theme_file_path('/inc/first_feed.php');
}
add_action('first_feed', 'first_feed');

function first_feed_featured()
{
    include get_parent_theme_file_path('/inc/first_feed_featured.php');
}
add_action('first_feed', 'first_feed_featured');

function second_feed()
{
    include get_parent_theme_file_path('/inc/second_feed.php');
}
add_action('second_feed', 'second_feed');

function third_feed()
{
    include get_parent_theme_file_path('/inc/third_feed.php');
}
add_action('third_feed', 'third_feed');


function first_side_feed()
{
    include get_parent_theme_file_path('/inc/first_side_feed.php');
}
add_action('first_side_feed', 'first_side_feed');

function second_side_feed()
{
    include get_parent_theme_file_path('/inc/second_side_feed.php');
}
add_action('second_side_feed', 'second_side_feed');

function featured_feed()
{
    include get_parent_theme_file_path('/inc/featured_feed.php');
}
add_action('featured_feed', 'featured_feed');

function news_notify()
{
    include get_parent_theme_file_path('/inc/news_notify.php');
}
add_action('news_notify', 'news_notify');

function video_gallery_feed()
{
    include get_parent_theme_file_path('/inc/video_gallery_feed.php');
}
add_action('video_gallery_feed', 'video_gallery_feed');

function gallery_feed()
{
    include get_parent_theme_file_path('/inc/gallery_feed.php');
}
add_action('gallery_feed', 'gallery_feed');

function share()
{
    include get_parent_theme_file_path('/inc/share.php');
}
add_action('share', 'share');

function related_post()
{
    include get_parent_theme_file_path('/inc/related_post.php');
}
add_action('related_post', 'related_post');


?>