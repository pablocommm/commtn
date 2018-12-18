<ul style="margin: 5px auto" class="row container blue not-movile-container ">
        <?php

        $args = array(
          'numberposts' => '1',
          'post_status' => 'publish',
        );

        $recent_posts = wp_get_recent_posts($args);
        foreach ($recent_posts as $recent) {
          echo '
<a href="' . get_permalink($recent["ID"]) . '">
<li style="margin: 0 10px" class="collection-item transparent valign-wrapper">
<div>
<span class="white-text" style="font-weight: 900;font-size: large;">¡Lo <br> último!</span>
</div>
<div>
    <img class="circle" style="max-height: 60px;" src="' . esc_url(get_the_post_thumbnail_url($recent["ID"], 'trends-square')) . '">
</div>
<div class="col s8">
    <small class="truncate white-text">' . $recent["post_title"] . '</small>
</div>
<div class="center">
    <span class="btn white black-text z-depth-0" >Léelo</span>
</div>
<li>
</a>
          
          ';
        }
        wp_reset_query();
        ?>
    </ul>