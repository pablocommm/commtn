<?php

/**
 * Page Name: Blog
 *
 * @package WordPress
 * @subpackage Trends News
 * @since Trends News 1.0
 */

get_header(); ?>


<div class="">
    <div class="row">


            <div class="col s12 l8">
                <h1><?php printf(__('Resultados para: %s', 'trends'), get_search_query()); ?></h1>

          
            <?php if (have_posts()) : ?>
            <div class="cards-container">
            <?php while (have_posts()) : the_post();
            ?>

                <?php do_action('third_feed') ?>

            <?php endwhile; ?>
            </div>

           <div class="row no-margin">
            <div class="col s12">
            <?php wpbeginner_numeric_posts_nav(); ?>
            </div>
             </div>

        <?php else : ?>

<div>


<p>No se han encontrado resultados para tu búsqueda </p>
<div class="col s12">
<?php get_search_form() ?>
</div>
</div>





     
        <?php endif; ?>
    </div>

    
    <div class="col s12 l4">
                 <?php do_action('first_side_feed') ?>
        </div>

    </div>
</div>
<?php get_footer(); ?>