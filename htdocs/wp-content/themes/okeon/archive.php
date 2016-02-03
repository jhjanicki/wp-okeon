<?php get_header(); ?>


    <div class="row">
    	<p class="current_page"> <?php wp_title(''); ?> <i class="fa fa-angle-double-right"></i></p>
    	<hr class="current_page_hr">
    </div>
    
    
    
    <div class="row width-90-percent">
      
      <div class="col-md-9">
      	
      		
      		<?php if (have_posts()): while (have_posts()):the_post(); ?>
      			<article class="width-80-percent post">
      				<h2> <a class="title" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
      				<hr class="page_blog">
      				<p><em> 
      				By <span class="bold"><?php the_author(); ?></span> 
      				on <span class="date"><?php echo the_time('l,F jS, Y'); ?> </span>
      				in <span class="category"><?php the_category(', '); ?></span>, 
      				<a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
      				</em></p>
      				
      				<?php the_excerpt(); ?>
      				<hr>
      			</article>
      			
      				
      			
      		<?php endwhile; else: ?>
      		
      		<?php endif; ?>
      	
      </div>
      
    
      
      <?php get_sidebar('blog'); ?>
    </div>
      



   


<?php get_footer(); ?>   
    
