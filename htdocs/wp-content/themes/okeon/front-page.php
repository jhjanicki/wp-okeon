<?php get_header(); ?>
<div class="row">

    
		<?php if (have_posts()): while (have_posts()): the_post(); ?>
			<?php the_content(); ?>		
		<?php endwhile; endif; ?>

    <div class="col-md-6">    
    <div id="main">
    	<div id="map-title">
    	</div>
    	
    	<div id="metadata">
        </div>
    
    	<div id="map">
   		</div>

    </div>
    </div> <!-- end col 6 -->

</div>　<!-- end row -->




	<section id="front-page-blog">
	 <div class="row">
		 <div class="col-md-9">
		 <hr class="page_main">
			 <div class="width-80-percent">
				<?php $temp_query = $wp_query; ?>
				<?php query_posts('showposts=3'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<hr>
					<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h4>
					<?php the_post_thumbnail('medium'); ?>  <?php the_excerpt(); ?>
				</div>
				<?php endwhile; ?>
			 </div><!-- end width80% -->
		  </div>

		<?php get_sidebar('front'); ?>
	  
	  </div>
	</section>
	
	
	<section>
		<div class="maxWidth">
		<hr class="cards">
		  <div class="card-deck-wrapper">
			<div class="card-deck">
			  <div class="card">
				<img class="card-img card-img-top img-responsive img-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/card1.jpg" alt="img1">
				<div class="card-block">
					<?php if (dynamic_sidebar('front-left')); ?>
				</div>
			  </div>

			  <div class="card">
				<img class="card-img card-img-top img-responsive img-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/card2.jpg" alt="img2">
				<div class="card-block">
					<?php if (dynamic_sidebar('front-center')); ?>
				</div>
			  </div>

			  <div class="card">
				<img class="card-img card-img-top img-responsive img-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/card3.jpg" alt="img3">
				<div class="card-block">
					<?php if (dynamic_sidebar('front-right')); ?>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	</section>

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
    
