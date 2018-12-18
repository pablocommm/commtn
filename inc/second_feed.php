<div class="col s12 m6">
  <h3 style="font-weight:600;" class="col">Lo último<br>
    en Youtubers</h3>
</div>

<div class="col s12" style="margin-top:30px;">
        <?php

        $args = array(
          'numberposts' => '3',
          'post_status' => 'publish',
          'category' => '4700',
        );

        $recent_posts = wp_get_recent_posts($args);
        foreach ($recent_posts as $recent) {
          echo '
    
    
          <div class="card z-depth-0 col s12 m4">
            <div class="card-image">
              <img src="' . esc_url(get_the_post_thumbnail_url($recent["ID"], 'trends-grid')) . '">
              <span style="position: absolute;top: 5px;" class="new badge red" data-badge-caption="Youtubers"></span>
            </div>
            <div class="card-content" style="padding:5px;">
            <span class="card-title">' . $recent["post_title"] . '</span>
            <small>' . get_the_date() . '</small>
              
            </div>
            <a href="' . get_permalink($recent["ID"]) . '" class="view-more"></a>
      


            
          </div>
          
          ';
        }
        wp_reset_query();
        ?>
    </div>