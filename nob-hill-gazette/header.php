<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> 
	
	<title> <?php wp_title("|", true, "right"); ?> <?php bloginfo('name'); ?></title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
	
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/unsemantic-grid-responsive-tablet.css" >
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />

	<?php wp_head(); ?>

</head>
<body>

	<!-- Header -->
	<div id='header'>
		<h1><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></h1>
    	<p><?php bloginfo('description'); ?></p>
        <?php wp_nav_menu( array('theme_location' => 'main-menu') ); ?>
    </div>
    
    
    <!-- main content -->
    <div id='content'>
    
    
    
    
    
    