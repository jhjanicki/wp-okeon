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
    
    
    <!-- echoes out functions.php code -->
</head>

<body> 
<div id="wrapper">

	<div id="header">
		<div class="row">
			<div class="col-lg-12 text-center">
				
				<h2 id="brand-title" class="">OKEON 美ら森プロジェクト</h2>
				<img id="main-icon" src="<?php echo get_template_directory_uri(); ?>/images/oist-logo.png" />
				<h3 id="sub-brand-title"><b>OK</b>inawa <b>E</b>nvironmental <b>O</b>bservation <b>N</b>etwork</h3>  
				<!-- <span class="inline" id="search"><?php if (dynamic_sidebar('front-nav')); ?></span> -->
			</div>
		</div>
	</div> 


	<div id='cssmenu' class='align-center'>

	 <?php 
				$args = array(
				  'menu'        => 'header-menu',
				  'container'   => 'true',
				  'container_id'   =>'cssmenu'
				);
				wp_nav_menu( $args );
	 ?>



	</div> 

	<div id="content">

