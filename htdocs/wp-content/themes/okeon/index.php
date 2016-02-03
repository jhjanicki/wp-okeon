<?php get_header(); ?>


    <div class="row">
    	<p class="current_page"> <?php the_title(); ?> <i class="fa fa-angle-double-right"></i></p>
    	<hr class="current_page_hr">
    </div>
    
    
    
    <div class="row width-90-percent">
      
      <div class="col-md-9">
      	
      		
      		<?php if (have_posts()): while (have_posts()):the_post(); ?>
      			<h2> <?php the_title(); ?></h2>
      			<hr class="page_main">
      			<?php the_post_thumbnail(''); ?>
      			<?php the_content(); ?>
      		<?php endwhile; else: ?>
      		
      		<?php endif; ?>
      	
      </div>
      
    
      
      <?php get_sidebar(); ?>
    </div>
      



   




<?php get_footer(); ?>   
    
