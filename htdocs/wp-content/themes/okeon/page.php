<?php get_header(); ?>


    <div class="row below-nav">
    	<p class="current_page"> <?php the_title(); ?> <i class="fa fa-angle-double-right"></i></p>
    	<!-- <hr class="current_page_hr"> -->
    	
    </div>
    
    
    
    <div class="row width-90-percent">
      
      <div class="col-md-12">
      	
      		
      		<?php if (have_posts()): while (have_posts()):the_post(); ?>
      			<!-- 
<h2> <?php the_title(); ?></h2>
      			<hr class="page_main">
 -->
      			<?php the_post_thumbnail(''); ?>
      			<?php the_content(); ?>
      		<?php endwhile; else: ?>
      		
      		<?php endif; ?>
      		
      		
      		<!-- 
<?php
				$id = 27;
				$p = get_page($id);
				echo apply_filters('the_content', $p->post_content);
			?>
 -->
      	
      </div>
      
    
      
      <!-- <?php get_sidebar(); ?> -->
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

(function($){
		
		
		$("#universitiesClick").click(function (){
					$('html, body').animate({
							scrollTop: $("#universities").offset().top
					}, 1000);
		});
		$("#museumsClick").click(function (){
					$('html, body').animate({
							scrollTop: $("#museums").offset().top
					}, 1000);
		});
		$("#highschoolsClick").click(function (){
					$('html, body').animate({
							scrollTop: $("#highschools").offset().top
					}, 1000);
		});
		$("#othersClick").click(function (){
					$('html, body').animate({
							scrollTop: $("#others").offset().top
					}, 1000);
		});
})(jQuery);

</script>

<?php get_footer(); ?>   
    
