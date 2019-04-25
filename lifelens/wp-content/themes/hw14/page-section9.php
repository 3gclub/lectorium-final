<?php
/*
Template Name: page-section9
Template Post Type: page
*/
?>

<div class="section9">
	<div class="container">

		<div class="section9-wrap">

					<div class="section9-block1">
						<?php 
						$image = get_field('section9_img');
						$size = 'full'; // (thumbnail, medium, large, full или ваш размер)

						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
					</div>

					<div class="section9-block2">
						<h4><?php echo get_field('section9_title'); ?></h4>
							<div class="section7-text">
							<p><?php echo get_field('section9_text'); ?></p>
							</div>
					</div>
			
		</div>
	
	


	</div>
</div>