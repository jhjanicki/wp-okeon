<?php get_header(); ?>


    <div class="row below-nav">
    	<p class="current_page"> <?php wp_title(''); ?> <i class="fa fa-angle-double-right"></i></p>
    	<!-- <hr class="current_page_hr"> -->
    </div>
    
    
    
    
    <div class="row width-90-percent">
      
      <div class="col-md-9">
      
      		<article class="width-80-percent">
      		<?php if (have_posts()): while (have_posts()):the_post(); ?>
      			<h2> <?php the_title(); ?></h2>
      			<hr class="page_blog">
      			<p><em> 
      				By <span class="bold"><?php the_author(); ?></span> 
      				on <span class="date"><?php echo the_time('l,F jS, Y'); ?> </span>
      				in <span class="category"><?php the_category(', '); ?></span>, 
      				<a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
      			</em></p>
      			
      			<?php the_content(); ?>
      			<hr>
      			<?php comments_template(); ?>
      		<?php endwhile; else: ?>
      		
      		<?php endif; ?>
      	
      		<div class="navigation">
      				<div class="alignright">
					<?php next_post_link(); ?>
					</div>
					<div class="alignleft">
					<?php previous_post_link(); ?>	
					</div>
			</div> <!-- end navigation -->
      		</article>
      		
      		
      </div>
      		
      
    
      
      <?php get_sidebar('blog'); ?>
    </div>
      



   
<script>

(function($) {

  $.fn.menumaker = function(options) {
      
      var cssmenu = $(this), settings = $.extend({
        title: "Menu",
        format: "dropdown",
        sticky: false
      }, options);

      return this.each(function() {
      
        cssmenu.prepend('<div id="menu-button">' + settings.title + '</div>');
        $(this).find("#menu-button").on('click', function(){
          $(this).toggleClass('menu-opened');
          var mainmenu = $(this).next('ul');
          
          if (mainmenu.hasClass('open')) { 
            mainmenu.hide().removeClass('open');
          }
          else {
            mainmenu.show().addClass('open');
            if (settings.format === "dropdown") {
              mainmenu.find('ul').show();
            }
          }
        });

        cssmenu.find('li ul').parent().addClass('has-sub');

        multiTg = function() {
          cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
          cssmenu.find('.submenu-button').on('click', function() {
            $(this).toggleClass('submenu-opened');
            if ($(this).siblings('ul').hasClass('open')) {
              $(this).siblings('ul').removeClass('open').hide();
            }
            else {
              $(this).siblings('ul').addClass('open').show();
            }
          });
        };

        if (settings.format === 'multitoggle') multiTg();
        else cssmenu.addClass('dropdown');

        if (settings.sticky === true) cssmenu.css('position', 'fixed');

        resizeFix = function() {
          if ($( window ).width() > 1024) {
            cssmenu.find('ul').show();
          }

          if ($(window).width() <= 768) {
            cssmenu.find('ul').hide().removeClass('open');
          }
        };
        resizeFix();
        return $(window).on('resize', resizeFix);

      });
  };
})(jQuery);



(function($){
$(document).ready(function(){

$("#cssmenu").menumaker({
   title: "Menu",
   format: "multitoggle"
});

});
})(jQuery);


</script>

<?php get_footer(); ?>   
    
