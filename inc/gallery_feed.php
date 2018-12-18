<div class="col s12 m6">
  <h3 style="font-weight:600;" class="white-text col">Lo mejor y peor<br>
    del 2018</h3>
</div>
<div class="col s12 m6 valign-wrapper">
 

</div>


  <div class="carousel theme-2" style="padding-bottom: 300px!important;">

  <?php

  $args = array(
    'numberposts' => '9',
    'post_status' => 'publish',
    'category' => '4615'

  );

  $recent_posts = wp_get_recent_posts($args);
  foreach ($recent_posts as $recent) {
    echo '

    <a class="carousel-item" href="' . get_permalink($recent["ID"]) . '">

    <div class="card">
        <div class="card-image">
        <img src="' . esc_url(get_the_post_thumbnail_url($recent["ID"], 'trends-grid')) . '">

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