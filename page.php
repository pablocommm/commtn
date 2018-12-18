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

        <div class="container">
            <div class="row">
                <?php the_content();
                ?>
            </div>
        </div>
    </div>

        <?php endwhile; ?>

        <?php else : ?>



        <?php endif; ?>

    </div>
</div>
<?php get_footer(); ?>