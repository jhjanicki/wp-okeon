<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
    <!-- or bloginfo('template_directory;)-->
    
    
    <!-- Google Fonts Dosis -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Dosis">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    
    <title>
    	<?php wp_title( '|',true,'right'); ?>
    	<?php bloginfo('name'); ?>
    </title>
    
    
    <?php wp_head(); ?>
    
    <style>
    html{
		/* margin-top:0px !important; */
		overflow-x: hidden;
	}	
    </style>
    <!-- echoes out functions.php code -->
</head>

<body> 
<!-- 
<div class="row">
	<div id="title">OKEON <span id="subtitle">～美ら森プロジェクト～</span></div>
</div>
 -->

<div id="header">
    <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/okeon2.png" alt="Logo" class="inline" id="brand"/> -->
    <h1 id="brand-title" class="inline">OKEON&nbsp;&nbsp;</h1>
    <span id="subtitle" class="inline shadow">～美ら森プロジェクト～</span>
    <span class="inline" id="search"><?php if (dynamic_sidebar('front-nav')); ?></span>
</div> 


<div id='cssmenu'>

 <?php 
            $args = array(
              'menu'        => 'header-menu',
              'container'   => 'true',
              'container_id'   =>'cssmenu'
            );
            wp_nav_menu( $args );
 ?>





  <!-- 
  <ul>
   <li class='active'><a href="<?php bloginfo('url'); ?>">Home</a></li>
   <li><a href='#'>About</a>
   		<ul>
   			<li><a href='#'>History</a></li>
   			<li><a href='#'>Staff</a></li>
   			<li><a href='#'>Timeline</a></li>
   		</ul>
   </li>	
   <li><a href='#'>Project</a>
   		<ul>
   			<li><a href='#'>Field Network</a></li>
   			<li><a href='#'>Sample Processing</a></li>
   			<li><a href='#'>Ecological Genomics</a></li>
   			<li><a href='#'>Environmental Informatics</a></li>
   		</ul>
   </li>	
   <li><a href='#'>Data</a></li>
   <li><a href='#'>Interactive Map</a></li>
   <li><a href='#'>Resources</a>
   <ul>
   			<li><a href='#'>Tutorials</a></li>
   			<li><a href='#'>Videos</a></li>
   			<li><a href='#'>Activity Reports</a></li>
   		</ul>
   </li>	
   <li><a href='#'>Blog</a></li>
   </ul>
 -->


</div> 


