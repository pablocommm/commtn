<?php

/**
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage Garitmatic
 * @since Garitmatic 1.0
 */

get_header(); ?>

<?php do_action('news_notify') ?>

<div class="row">



  <div id="content" role="main">

    <div class="col s12 no-padding">

        <div class="col s12 no-padding">
          <?php do_action('featured_feed') ?>
        </div>
        

      <div class="center">
        <?php do_action('home_after_feature_ads') ?>
      </div>

      <div class="col s12">
        <div class="col s12 l8">
         <?php do_action('first_feed') ?>
        </div>

        <div class="col s12 l4 no-padding">
          <?php do_action('first_side_feed') ?>
        </div>
      </div>

        <div class="col s12 theme-2 no-padding" style="margin-top:30px">
        <?php do_action('gallery_feed') ?>
      </div>


      <div class="col s12">
        <?php do_action('second_feed') ?>
      </div>

      <div class="col s12 theme no-padding" style="margin-top:30px">
        <?php do_action('video_gallery_feed') ?>
      </div>

       <div class="center">
          <?php do_action('home_after_video_gallery') ?>
      </div>

      <div class="col s12">







        <div class="col s12 l8">
          <div class="">

            

 <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post();
            ?>
          <?php endwhile; ?>
    

    <?php echo do_shortcode('[ajax_load_more post_type="post" css_classes="cards-container" posts_per_page="6" offset="12" scroll="false" button_label="Ver más" button_loading_label="Cargando..."]'); ?>



        <?php endif; ?>
          </div>
        </div>


        <div class="col s12 l4 no-padding">
          <?php do_action('second_side_feed') ?>
        </div>
      </div>
      


    </div>
  </div>
</div>
<?php get_footer(); ?>