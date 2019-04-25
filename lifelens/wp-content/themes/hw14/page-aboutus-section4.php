<?php
/*
Template Name: page-aboutus-section4
Template Post Type: page
*/
?>

<!-- Здесь html/php код шаблона -->

<div class="aboutus4">

		<div class="aboutus-section4">

			<div class="about4-flexbox">
					<div class="about4-img">
						<?php 
						$image = get_field('section4_about_us_img');
						$size = 'full'; // (thumbnail, medium, large, full или ваш размер)

						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
					</div>

					<div class="about4-text-wrap">
						<div class="about4-title">
						<h3><?php echo get_field('section4_about_us_title'); ?>	
						</h3>
						</div>
						<div class="about4-text">
						<p><?php echo get_field('section4_about_us_text'); ?></p>
						</div>
						
					</div>
			</div>

		</div>

</div>