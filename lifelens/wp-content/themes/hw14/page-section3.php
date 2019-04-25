<?php
/*
Template Name: page-section3
Template Post Type: page
*/
?>

<!-- Здесь html/php код шаблона -->

<div class="section3">
	<div class="container">

		<div class="section3-wrap">

			<div class="section3-block1">
						<h4><?php echo get_field('section3_title'); ?></h4>
							<div class="section3-text">
							<p><?php echo get_field('section3_text'); ?></p>
							</div>
					</div>

					<div class="section3-block2">
						<?php 
						$image = get_field('section3_img');
						$size = 'full'; // (thumbnail, medium, large, full или ваш размер)

						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
					</div>
			
		</div>
	</div>
</div>