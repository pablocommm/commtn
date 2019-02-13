<div class="carousel slider-carousel">

<?php
$args = array(
  'numberposts' => '5',
  'post_status' => 'publish',
  'category' => '4314'
);
$recent_posts = wp_get_recent_posts($args);
foreach ($recent_posts as $recent) {
  echo '
  <a class="carousel-item" href="' . get_permalink($recent["ID"]) . '">

  <img src="' . esc_url(get_the_post_thumbnail_url($recent["ID"], 'trends-default')) . '">
  <span class="title-carousel">' . $recent["post_title"] . '</span>
  </a>
';
}
wp_reset_query();
?>



</div>