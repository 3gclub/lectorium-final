<?php
/*
Template Name: page-aboutus-section2
Template Post Type: page
*/
?>

<!-- Здесь html/php код шаблона -->

<div class="aboutus2">
	<div class="container">
		<div class="aboutus-section2">

			<div class="about2-flexbox">
					<div class="about2-img">
						<?php 
						$image = get_field('section2_about_us_img');
						$size = 'full'; // (thumbnail, medium, large, full или ваш размер)

						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
					</div>

					<div class="about2-text-wrap">
						<div class="about2-title">
						<h3><?php echo get_field('section2_about_us_title'); ?>	
						</h3>
						</div>
						<div class="about2-text">
						<p><?php echo get_field('section2_about_us_text'); ?></p>
						</div>
						
					</div>
			</div>

		</div>
	</div>
</div>