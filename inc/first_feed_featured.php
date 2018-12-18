<?php

$args = array(
  'numberposts' => '1',
  'post_status' => 'publish',
  'category' => '4314',
  'offset' => '1'
);

$recent_posts = wp_get_recent_posts($args);
foreach ($recent_posts as $recent) {
  echo '
          <div class="card no-margin">
            <div class="card-image"> 
              <img class="overlay-3" src="' . esc_url(get_the_post_thumbnail_url($recent["ID"], 'trends-default')) . '">
              <span style="position: absolute;top: 20px;background-color:#ff0045" class="new badge blue" data-badge-caption="Súper trending"></span>
               <span class="card-title col s12 m9">' . $recent["post_title"] . '</span>
               <a href="' . get_permalink($recent["ID"]) . '" class="view-more"></a>
            </div>
            </div>
';
}
wp_reset_query();
?>