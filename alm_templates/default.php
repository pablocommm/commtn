<div class="card z-depth-0">
            <div class="card-image">
              <img src="<?php the_post_thumbnail_url('trends-grid'); ?>">
              <span style="position: absolute;top: 5px;"></span>
            </div>
            <div class="card-content" style="padding:5px;">
            <span class="card-title"><?php the_title(); ?></span>
            <small><?php the_author(); ?> -  <?php the_time('M d, Y'); ?></small>
              
            </div>
            <a href="<?php the_permalink();?>" class="view-more"></a>
            


            
          </div>