<?php

/*-----------------------------------------------------------------------------------*/
/* ads
/*-----------------------------------------------------------------------------------*/

function head_ads()
{
    include get_parent_theme_file_path('/ads/head_ads.php');
}
add_action('head_ads', 'head_ads');

function sticky_left_ad()
{
    include get_parent_theme_file_path('/ads/sticky_left_ad.php');
}
add_action('head_ads', 'sticky_left_ad');


function styky_right_ad()
{
    include get_parent_theme_file_path('/ads/styky_right_ad.php');
}
add_action('head_ads', 'styky_right_ad');


function first_side_ad()
{
    include get_parent_theme_file_path('/ads/first_side_ad.php');
}
add_action('first_side_ad', 'first_side_ad');

function home_after_feature_ads()
{
    include get_parent_theme_file_path('/ads/home_after_feature_ads.php');
}
add_action('home_after_feature_ads', 'home_after_feature_ads');

function home_after_video_gallery()
{
    include get_parent_theme_file_path('/ads/home_after_video_gallery.php');
}
add_action('home_after_video_gallery', 'home_after_video_gallery');


function second_side_ad()
{
    include get_parent_theme_file_path('/ads/second_side_ad.php');
}
add_action('second_side_ad', 'second_side_ad');



?>