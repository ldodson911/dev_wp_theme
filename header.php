<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?>
<!DOCTYPE HTML>

<html <?php language_attributes(); ?>>
	<head>
		<title><?php bloginfo ('name'); ?></title>
		<meta <?php bloginfo('charset') ?> />
		<meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- used for responsive website  -->
		<!--<link rel="stylesheet" href="assets/css/main.css" />  -->

		<?php wp_head(); ?>
		</head>
		
<body>
<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				

				<?php
						$header_section_post_type = array(
							'post_type' => 'header_section'	
					);
					$header_section = new wp_query($header_section_post_type);
			
					//create the loop for the post
						if($header_section -> have_posts()) {
						while ($header_section -> have_posts()){

						$header_section ->the_post();
				?>



				
					

						<header id="header" class="alt">
							<span class="logo">

								<?php the_post_thumbnail('thumbnail'); ?>	

							</span>
							<h1><?php the_title(); ?></h1>
							<p><?php the_content(); ?></p>
						</header>


				<?php	
						}//end while
					}//end if
					//$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); //
				?>			


				<!-- Nav -->
					<?php 
						wp_nav_menu (array(
							'menu'=>'primary',
							'theme_location'=>'primary',
							'container'=>'nav',
							'container_id'=>'nav',
							'container_class'=>'none',
							'menu_id'=>'none',
							'menu_class'=>'none'
							));
					?>	

