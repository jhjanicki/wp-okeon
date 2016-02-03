<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>

	<?php
			global $query_string;

			$query_args = explode("&", $query_string);
			$search_query = array();

			if( strlen($query_string) > 0 ) {
				foreach($query_args as $key => $string) {
					$query_split = explode("=", $string);
					$search_query[$query_split[0]] = urldecode($query_split[1]);
				} // foreach
			} //if

			$search = new WP_Query($search_query);
	?>
		
	<?php
			
		
			global $wp_query;
			$total_results = $wp_query->found_posts;
		?>
    <div class="row">
    	<p class="current_page"> Search Rersults <i class="fa fa-angle-double-right"></i></p>
    	<hr class="current_page_hr">
    </div>
    
    <div class="row">
    	<div class="width-90-percent" id="search-results">
    	<h2> Search Results </h2>
    	<?php get_search_form(); ?>
    	
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
      				<?php 
						if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							the_post_thumbnail('medium');
						} 
					?>
      				<?php the_excerpt(); ?>
      				<hr>
      			</article>
      			
      				
      			
      		<?php endwhile; else: ?>
      		
		<div class="entry" id="no-match"><h2><?php _e('Sorry, no posts matched your Search criteria.'); ?></h2></div>
		<?php endif; ?>
		There were: <strong><?php echo $total_results; ?></strong> search results.
 
    	
		
	
    	</div>
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



(function($){
$("#gallery-1 img").each(function( index ) {
  $(this).addClass("img-responsive");
});

})(jQuery);

</script>

<?php get_footer(); ?>   
    
