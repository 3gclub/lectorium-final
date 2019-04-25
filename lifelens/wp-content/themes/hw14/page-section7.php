<?php
/*
Template Name: page-section7
Template Post Type: page
*/
?>

<div class="section7">
	<div class="container">

		<div class="section7-wrap">

					<div class="section7-block1">
						<?php 
						$image = get_field('secttion7_img');
						$size = 'full'; // (thumbnail, medium, large, full или ваш размер)

						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
					</div>

					<div class="section7-block2">
						<h4><?php echo get_field('section7_title'); ?></h4>
							<div class="section7-text">
							<p><?php echo get_field('section7_text'); ?></p>
							</div>
					</div>

					<div class="section7-block3">
						<div class="section7-button1">
							<?php echo get_field('secttion7_button1'); ?>
						</div>
						<div class="section7-button2">
							<?php echo get_field('secttion7_button2'); ?>
						</div>
					</div>
			
		</div>
	
	


	</div>
</div>
