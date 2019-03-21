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

<div class="col s12">

        <!-- /21751214561/TMG_01000000 -->
        <div class="ad-container">
<div id='div-gpt-ad-1553125032556-0' class="ad center">
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1553125032556-0'); });
</script>
</div>
</div>
</div>

