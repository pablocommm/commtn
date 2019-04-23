<?php

/**
 * Page Name: Page
 *
 * @package WordPress
 * @subpackage Trends News
 * @since Trends News 1.0
 */

get_header(); ?>


<div>

    <div>
        <?php if (have_posts()) :
        ?>

        <?php while (have_posts()) : the_post();
        ?>


    <div class="content">

       
      <div class="center" style="margin-bottom:30px">
      

      </div>


      
        <div class="">
            <div class="row">
                <div class="col s12 l8">
                    <div class="col s12" style="margin-bottom:30px">
                <?php echo get_the_post_thumbnail() ?>
                </div>

                    <div class="col s6">
                    <a class="btn blue darken-3 fluid" href="javascript:fbshareCurrentPage()">Facebook</a>
                    </div>
                    <div class="col s6">
                    <a class="btn blue fluid" href="javascript:twshareCurrentPage()">Twitter</a>
                    </div>
                <div class="col s12">
                <h1 class="title"><?php the_title(); ?></h1>
                </div>
                <div class="col s12">
                <span class="entry-date"><?php echo get_the_date(); ?> -  <?php the_author(); ?> </span>
                </div>
                
                <div class="col s12">
                <?php do_action('TN_HOM_8'); ?>
                </div>

                <div class="col s12">
                
                <?php the_content();
                ?>
                </div>
                <div class="row">
                        <div class="col s6">
                            <a class="btn blue darken-3 fluid" href="javascript:fbshareCurrentPage()">Facebook</a>
                            </div>
                            <div class="col s6">
                            <a class="btn blue fluid" href="javascript:twshareCurrentPage()">Twitter</a>
                        </div>
                    </div>

                </div>
                
                <div class="col s12 l4 no-padding">
                 <?php do_action('first_side_feed') ?>
        </div>


<div class="col s12 white">
<div class="col s12 grey darken-4">
<h4 class="white-text">Más Tendencias</h4>
</div>
        <?php do_action('related_post') ?>
      </div>


            </div>

 

        </div>
    </div>

        <?php endwhile; ?>

        <?php else : ?>



        <?php endif; ?>

    </div>
</div>

<script>
$('iframe').wrapInner('<div class="video-container"></div>');
</script>
<?php get_footer(); ?>