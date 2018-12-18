<div class="cards-container">
        <?php

        $args = array(
          'numberposts' => '4',
          'offset' => 5,
          'post_status' => 'publish',
        );

        $recent_posts = wp_get_recent_posts($args);
        foreach ($recent_posts as $recent) {
          echo '
    
    
          <div class="card z-depth-0">
            <div class="card-image">
              <img src="' . esc_url(get_the_post_thumbnail_url($recent["ID"], 'trends-grid')) . '">
              <span style="position: absolute;top: 5px;" class="new badge purple" data-badge-caption="Lo más viral"></span>
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