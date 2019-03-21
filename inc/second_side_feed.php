<?php

$args = array(
  'numberposts' => '1',
  'post_status' => 'publish',
  'category' => '44',
);

$recent_posts = wp_get_recent_posts($args);
foreach ($recent_posts as $recent) {
  echo '

    <div class="col s12">
      <div class="card z-depth-0">
        <div class="card-image">
          <img src="' . esc_url(get_the_post_thumbnail_url($recent["ID"], 'trends-grid')) . '">
          <span style="position: absolute;top: 5px;" class="new badge cyan darken-1" data-badge-caption="Moda"></span>
        </div>
        <div class="card-content" style="padding:5px">
        <span class="card-title">' . $recent["post_title"] . '</span>
          <p></p>
          
        </div>
        <a href="' . get_permalink($recent["ID"]) . '" class="view-more"></a>
       
      </div>
    </div>';
}
wp_reset_query();
?>


<div class="col s12">

<div class="col s12">
<?php 
            if ( is_front_page() && is_home() )  {
              // Default HOM
              echo'';
            } elseif ( in_category( '2006' )) {
              // TV
              echo'';
            } elseif ( in_category( '25' )) {
              // ENTRETENIMIENTO
              echo'';
            } elseif ( in_category( '4' )) {
              // VIRAL
              echo'';
            } elseif ( in_category( '44' )) {
              // MODA
              echo'';
            } elseif ( in_category( '4700' )) {
              // YOUTUBERS
              echo'';
            } elseif ( in_category( '4615' )) {
              // LO MEJOR Y LO PEOR
              echo'';
            } elseif ( in_category( '14' )) {
              // DEPORTES
              echo'';
            } else {
              //Síguenos
              echo'';
            }
?>

</div>

          </div>
