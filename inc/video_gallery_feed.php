<div class="col s12 m6">
  <h3 style="font-weight:600;" class="white-text col">trend<br>
    news TV</h3>
</div>
<div class="col s12 m6 valign-wrapper">
  <div class="col s12 m6">
    <h3 class="light flow-text white-text" style="text-transform: uppercase;">Todos los jueves 8PM Colombia</h3>
  </div>
  <div class="col s12 m6">
  <img src="<?php echo get_template_directory_uri(); ?>/media/yt_logo_mono_dark.png">
  </div>
  </div>

</div>


  <div class="carousel theme" style="padding-bottom: 300px!important;">

  <?php

  $args = array(
    'numberposts' => '9',
    'post_status' => 'publish',
    'category' => '2006'

  );

  $recent_posts = wp_get_recent_posts($args);
  foreach ($recent_posts as $recent) {
    echo '

    <a class="carousel-item" href="' . get_permalink($recent["ID"]) . '">

    <div class="card">
        <div class="card-image">
        <img src="' . esc_url(get_the_post_thumbnail_url($recent["ID"], 'trends-grid')) . '">
        <span class="card-title"><i style="opacity:0.7" class="material-icons large fluid center">play_circle_outline</i></span>
        </div>
        <div class="card-content grey-text text-darken-4">
          <p>' . $recent["post_title"] . '</p>
        </div>
        </div>
 
    

    </a>';
  }
  wp_reset_query();
  ?>
</div>