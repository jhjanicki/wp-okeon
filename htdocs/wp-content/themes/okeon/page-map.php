<?php
/*
	Template Name: Map
*/
?>
<?php get_header(); ?>

<section id="map-page">
    <div class="row">
    	<p class="current_page"> <?php the_title(); ?> <i class="fa fa-angle-double-right"></i></p>
    	<hr class="current_page_hr">
    </div>
    
    
    
   
    <div class="row">
    <div class="col-md-12">    
    <div id="main">
    	<div id="side">
    			<div id="open_text">
    				<h3> Field Network </h3>
    				<hr>
    			</div>
    			<div id="buttons">
    				<h4  class="button" id="fieldsites-button">Field Sites View</h4>  <!-- style="float:left" -->
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

<div class="row ">
	<!-- <img id="top" src="img/top.png"> -->
    <div class="col-md-12">   
    <table id="table">
      				<thead></thead>
      				<tbody></tbody>
   	</table>	
    </div>
</div>


</section>
	<section id="map-page-s2">
		<div class="container">
		    <div class="row text-center">
		    	<div class="col-lg-12 text-center">
					<h2> Map Explained</h2>
					<hr class="map-hr">
				</div>
		    </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-users wow bounceIn text-primary"></i>
                        <h4>Field Network</h4>
                        <p class="text-muted">Our templates are updated regularly so they don't break.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h4>Sample Processing</h4>
                        <p class="text-muted">You can use this theme as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-flask wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h4>Ecological Genomics</h4>
                        <p class="text-muted">We update dependencies to keep things fresh.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-area-chart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h4>Environmental Informatics</h4>
                        <p class="text-muted">You have to make your websites with love these days!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

   


<?php get_footer(); ?>   
    
