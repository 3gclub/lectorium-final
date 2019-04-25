<?php
/*
Template Name: page-section8
Template Post Type: page
*/
?>

<div class="section8">
	
	<div class="section8-wrap">
		<div class="section8-text-wrap">
			<div class="section8-title">
				<h2><?php echo get_field('section8_title'); ?></h2>
			</div>
			<div class="section8-text">
				<p><?php echo get_field('section8_text'); ?></p>
			</div>
		</div>

		<div class="section8-img">
						<?php 
						$image = get_field('section8_img');
						$size = 'full'; // (thumbnail, medium, large, full или ваш размер)

						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
		</div>
	</div>

</div>