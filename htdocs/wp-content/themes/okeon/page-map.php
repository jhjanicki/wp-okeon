<?php
/*
	Template Name: Map
*/
?>
<?php get_header(); ?>

<section id="map-page">
    <div class="row below-nav">
    	<p class="current_page"> <?php the_title(); ?> <i class="fa fa-angle-double-right"></i></p>
    	<!-- <hr class="current_page_hr"> -->
    </div>
    
    
    
   
    <div class="row">
    <div class="col-md-12">    
    <div id="">
    	<div id="side">
    			<div id="open_text">
    				<h3 id='second-map-title'> Field Network </h3>
    				<hr>
    			</div>
    			<div id="buttons">
    				<h4  class="button active-button" id="fieldsites-button">Field Sites View</h4>  <!-- style="float:left" -->
					<h4 class="button" id="collaborators-button">Collaborators</h4> <!-- style="float:left" -->
				</div>
			
			
			<div id="site_view">
	
			</div>
    	</div>
    
    	<div id="mapContainer">
   		</div>

    </div>
    </div>
</div>
</section>
	<section>
		<div class="container">
            <div class="row">
               <div class="col-md-12 text-center site-details">   
               		<div id="site-overview"></div> <!-- id, name, number, lat/lon, host -->
               		<div id="site-description"></div>
               		<div id="site-history"></div>
               		<div id="site-vegetation"></div>
               		<div id="site-soil"></div>
               		<div id="site-weather"></div> <!-- weather station -->
                </div>
            </div>
        </div>
    </section>

   


<?php get_footer(); ?>   
    
