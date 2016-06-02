<?php get_header(); ?>
	
 
 <!-- 
<div id="myCarousel" class="carousel slide" data-ride="carousel"> 
  <!~~ Indicators ~~>
  
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active"> <img src="<?php echo get_template_directory_uri(); ?>/images/slider2.jpg" style="width:100%" alt="First slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>About</h1>
          <p class="slider-text">OKEON is a network to monitor the terrestrial environment of Okinawa, involving researchers at OIST, collaborators a various institutions, museums and high schools across Okinawa, and the local community.</p>
          
        </div>
      </div>
    </div>
    <div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/images/slider3.jpg" style="width:100%" data-src="" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Research</h1>
          <p class="slider-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae egestas purus. </p>
          
        </div>
      </div>
    </div>
    <div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/images/slider4.jpg" style="width:100%" data-src="" alt="Third slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Outreach</h1>
          <p class="slider-text">Donec sit amet mi imperdiet mauris viverra accumsan ut at libero.</p>
          
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> </div>
  
 -->
 
 <div id="myCarousel" class="carousel slide" data-ride="carousel"> 

  
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
			<?php if (have_posts()): while (have_posts()): the_post(); ?>
					<?php the_content(); ?>		
			<?php endwhile; endif; ?>
  </div>
<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> 
 </div>
	
	
<div id="wrapper" class="width-80-percent">


	<section id="front-page-blog forth-pane" >
		 <div class="row margin-top50">
		 
			 <div class="col-lg-9">
				 <div class='width-90-percent'>
				
						<?php $temp_query = $wp_query; ?>
						<?php query_posts('showposts=3'); ?>
						<?php while (have_posts()) : the_post(); ?>
						<div class="post" id="post-<?php the_ID(); ?>">
							<hr>
							<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h4>
							<?php the_post_thumbnail('medium'); ?>  <?php the_excerpt(); ?>
						</div>
						<?php endwhile; ?>
		
				  </div>
			  </div>

			<?php get_sidebar('front'); ?>
	  
		  </div>
	</section>
	
	

	
	
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
    
