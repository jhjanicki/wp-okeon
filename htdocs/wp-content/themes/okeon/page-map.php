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
    <div id="">
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
					<h2> OKEON Site Map By Region</h2>
					<hr class="map-hr">
				</div>
		    </div>
            <div class="row">
               <div class="col-md-12 text-center">   
               		<p> Click on Region to retrieve list of sites and information about those sites </p>
                </div>
            </div>
        </div>
    </section>

   


<?php get_footer(); ?>   
    
