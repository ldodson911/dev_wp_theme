
<?php

	$footer_array = array(
			'post_type' => 'footer_section'
		);

		$footer_section = new wp_query($footer_array);
		if ($footer_section->have_posts()){
			while($footer_section -> have_posts()) {
				$footer_section->the_post();
				?>


	<!-- Footer -->
					<footer id="footer">
						<section>
							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?></p>
							<ul class="actions">
								<li><a href="<?php the_field('btn_lnk_foot'); ?>" class="button"><?php the_field('btn_txt'); ?></a></li>
							</ul>
						</section>
						<section>
							<h2><?php the_field('right_col'); ?></h2>
							<dl class="alt">
								<dt>Address</dt>
								<dd><?php the_field('address'); ?></dd>
								<dt>Phone</dt>
								<dd><?php the_field('phone'); ?></dd>
								<dt>Email</dt>
								<dd><a href="<?php the_field('email_link'); ?>"><?php the_field('email'); ?></a></dd>
							</dl>
							

							<ul class="icons">

							<?php 
								$social_media_icons = get_field('soc_icons');
									if(in_array ('twitter', $social_media_icons, TRUE ) ) {

									?>

										<li><a href="<?php the_field('twit_link'); ?>" class="icon fa-twitter alt"><span class="label">Twitter</span></a></li>

									<?php 
									}//endif


									if(in_array ('facebook', $social_media_icons, TRUE) ) {

									?>

										<li><a href="<?php the_field('fb_link'); ?>" class="icon fa-facebook alt"><span class="label">Facebook</span></a></li>
										
									<?php 
									}//endif


									if(in_array ('instagram', $social_media_icons, TRUE) ) {

									?>

										<li><a href="<?php the_field('insta_lnk'); ?>" class="icon fa-instagram alt"><span class="label">Instagram</span></a></li>
										
									<?php 
									}//endif


										if(in_array ('github', $social_media_icons, TRUE) ) {

									?>

										<li><a href="<?php the_field('github_link'); ?>" class="icon fa-github alt"><span class="label">GitHub</span></a></li>
										
									<?php 
									}//endif


										if(in_array ('dribbble', $social_media_icons, TRUE) ) {

									?>

									
										<li><a href="<?php the_field('drib_lnk'); ?>" class="icon fa-dribbble alt"><span class="label">Dribbble</span></a></li>
										
									<?php 
									}//endif


								?>						
								
								
							
							</ul>
						</section>
						<p class="copyright">&copy; <?php the_field('copy_name'); ?>. Website Design: <a href="<?php the_field('wd_link'); ?>"><?php the_field('wd_name'); ?></a>.</p>
					</footer>

<?php
				}
			}
		?>


		</div><!--this closers the div in the header.php file -->
	</body>
</html>