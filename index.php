<?php
	get_header(); 
?>


<div id="main">

<?php
		$introduction_array = array(
			'post_type' => 'introduction'
		);

		$introduction_section = new wp_query($introduction_array);
		if ($introduction_section->have_posts()){
			while($introduction_section -> have_posts()) {
				$introduction_section->the_post();
				?>

					<!-- Introduction -->
				<section id="intro" class="main">
				<div class="spotlight">
							<div class="content">
										<header id="m1" class="major">
											<h2><?php the_title(); ?></h2>
										</header>
										<p><?php the_content(); ?></p>
										<ul class="actions">
											<li><a href="<?php the_field('button_link'); ?>" class="button"><?php the_field('button_text'); ?></a></li>
										</ul>
								</div>
							
								<span class="image">	<?php the_post_thumbnail(array(299,299)); ?>	
								</span><!--By using array(299,299) I have change the image size from 318x318 to 299x299, this changed it from an oval shape to more circular-->
					</div>
					</section>

				<?php 

			}//end while
		}//end if

?>

<!--Beginning PHP code for 'First Section' starts on next line  -->
<?php

	$first_array = array(
			'post_type' => 'first_section'
		);

		$first_section = new wp_query($first_array);
		if ($first_section->have_posts()){
			while($first_section -> have_posts()) {
				$first_section->the_post();
				?>


				<!-- First Section -->
							<section id="first" class="main special">
								<header id="m2" class="major">
									<h2><?php the_title(); ?></h2>
								</header>
								
							
								<ul class="features">
										<?php 
									if (have_rows('repeat') ):
										while (have_rows('repeat')): the_row();
											$row_title = get_sub_field('row');
											$row_text = get_sub_field('r_txt');
											$row_image = get_sub_field('r_img');
											?>
	

									<li>
										<?php echo $row_image; ?>
										<h3><?php echo $row_title; ?></h3>
										<p><?php echo $row_text; ?></p>
									</li>
									<?php
										endwhile;
									endif;
									?>
									
								</ul>
								
								<footer class="major">
									<ul class="actions">
										<li><a href="<?php the_field('btn_link'); ?>" class="button">
											<?php the_field('btn'); ?></a></li>
									</ul>
								</footer>
							</section>
	

				<?php
				}//endwhile
			}//endif
		?>

<!--End of First Section code -->

<!-- Beginning of PHP code for Second Section starts on next line  -->

<?php

	$second_array = array(
			'post_type' => 'second_section'
		);

		$second_section = new wp_query($second_array);
		if ($second_section->have_posts()){
			while($second_section -> have_posts()) {
				$second_section->the_post();
				?>

					<!-- Second Section -->
							<section id="second" class="main special">
								<header id="m3" class="major">
									<h2><?php the_title(); ?></h2>
									<p><?php the_content(); ?></p>
								</header>
								<ul class="statistics">

									<?php 
									if (have_rows('rep_sec') ):
										while (have_rows('rep_sec')): the_row();
											$row_title_2 = get_sub_field('title');
											$row_number_2 = get_sub_field('nbr');
											$row_image_2 = get_sub_field('img');
											$bkg_color = get_sub_field('bkg_color');
											
									?>
	 								<!--Start checking for background colors -->
	 									<?php 
	 										if(in_array('Pink', $bkg_color)){
	 											?>

											<li class="style1">

	 											<?php
	 										}

	 										elseif(in_array('Purple', $bkg_color)){
	 											?>

	 										<li class="style2">
	 											<?php
	 										}


	 										elseif(in_array('Dark Blue', $bkg_color)){
	 											?>

	 										<li class="style3">
	 											<?php
	 										}	

	 										elseif(in_array('Med Blue', $bkg_color)){
	 											?>

	 										<li class="style4">
	 											<?php
	 										}

	 										elseif(in_array('Lt Blue', $bkg_color)){
	 											?>

	 										<li class="style5">
	 											<?php
	 										}


	 									?>
	 									<!--End checking for background colors -->
											

										<?php echo $row_image_2; ?>
										<strong><?php echo $row_number_2; ?></strong>
										<?php echo $row_title_2; ?>
									</li>

									<?php
										endwhile;
									endif;
									?>
									
								</ul>
								<p class="content">
								<?php echo the_field('content_1'); ?>						
																			
								</p>

								<footer class="major">
									<ul class="actions">
										<li><a href="<?php the_field('btn_link'); ?>" class="button"><?php echo the_field('btn'); ?></a></li>
									</ul>
								</footer>
							</section>

		<?php
				}
			}
		?>

<!--End of Section Two -->

<!--Begin Section Three -->


<?php

	$third_array = array(
			'post_type' => 'third_section'
		);

		$third_section = new wp_query($third_array);
		if ($third_section->have_posts()){
			while($third_section -> have_posts()) {
				$third_section->the_post();
				?>

<!-- Get Started -->
							<section id="cta" class="main special">
								<header id="m4" class="major">
									<h2><?php the_title(); ?></h2>
									<p><?php the_content(); ?></p>
								</header>
								<footer class="major">
									<ul class="actions">
										<li><a href="<?php the_field('btn_lnk1'); ?>" class="button special"><?php the_field('btn_one'); ?></a></li>
										
										<li><a href="<?php the_field('btn_lnk2'); ?>" class="button"><?php the_field('btn_two'); ?></a></li>
									</ul>
								</footer>
							</section>


<?php
				}
			}
		?>

<!--End of Section Three -->

</div>
<?php
	get_footer();
?>