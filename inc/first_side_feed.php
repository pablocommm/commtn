<?php

$args = array(
  'numberposts' => '1',
  'post_status' => 'publish',
  'category' => '680',
);

$recent_posts = wp_get_recent_posts($args);
foreach ($recent_posts as $recent) {
  echo '

    <div class="col s12">
      <div class="card z-depth-0">
        <div class="card-image">
          <img src="' . esc_url(get_the_post_thumbnail_url($recent["ID"], 'trends-grid')) . '">
          <span style="position: absolute;top: 5px;" class="new badge orange" data-badge-caption="Noticias"></span>
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


<?php 
            if ( is_front_page() && is_home() )  {
              // Default HOM
              do_action('TN_HOM_1');
            } elseif ( in_category( '2006' )) {
              // TV
              do_action('TN_HOM_3');
            } elseif ( in_category( '25' )) {
              // ENTRETENIMIENTO
              do_action('TN_HOM_3');
            } elseif ( in_category( '4' )) {
              // VIRAL
              do_action('TN_HOM_3');
            } elseif ( in_category( '44' )) {
              // MODA
              do_action('TN_HOM_3');
            } elseif ( in_category( '4700' )) {
              // YOUTUBERS
              do_action('TN_HOM_3');
            } elseif ( in_category( '4615' )) {
              // LO MEJOR Y LO PEOR
              do_action('TN_HOM_3');
            } elseif ( in_category( '14' )) {
              // DEPORTES
              do_action('TN_HOM_3');
            } else {
              //Síguenos
              do_action('TN_HOM_3');
            }
?>


</div>

<div class="col s12">

<ul class="collection no-border">
    <li class="collection-item grey darken-4 white-text">
    Últimas noticias
    </li>


                    <?php
					
				
					
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 4,
                    );

                    $the_query = new WP_Query( $args );

                    if ( $the_query->have_posts() ) {

                           while ( $the_query->have_posts() ) {
                            $the_query->the_post(); ?>

             <li class="collection-item avatar">
  <i class="material-icons circle grey-text white">play_circle_outline</i>
  <span class="title"><?php the_title();?></span><br>
  <small class="grey-text"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . '&nbsp;'; ?>  </small>
  <a href="<?php the_permalink();?>" class="view-more"></a>
</li>                      

                    <?php }

                    } 

                    wp_reset_postdata();

                ?>
  </ul>     


</div>


