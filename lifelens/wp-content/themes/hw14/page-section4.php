<?php
/*
Template Name: page-section4
Template Post Type: page
*/
?>

<!-- Здесь html/php код шаблона -->



<div class="section4">
	<div class="container">
		<div class="sect4-title">
			<h2>
			<?php echo get_field('section4_title'); ?>
			</h2>
		</div>
	</div>
	
	<div class="content4-wrap">

		<div class="item">
		
				<div class="item-img">
					<?php 
					$image = get_field('section4_img1');
					$size = 'full'; // (thumbnail, medium, large, full или ваш размер)

					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
					?>		
				</div>
					<div class="item-description">
										<div class="item-title">
					<h4><?php echo get_field('section4_title1'); ?></h4>
				</div>
					<div class="item-text">
						<p><?php echo get_field('section4_text1'); ?></p>
					</div>
					</div>		
		</div>
		
		<div class="item">
		
				<div class="item-img">
					<?php 
					$image = get_field('section4_img2');
					$size = 'full'; // (thumbnail, medium, large, full или ваш размер)

					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
					?>		
				</div>
					<div class="item-description">
										<div class="item-title">
					<h4><?php echo get_field('section4_title2'); ?></h4>
				</div>
					<div class="item-text">
						<p><?php echo get_field('section4_text2'); ?></p>
					</div>
					</div>		
		</div>

		<div class="item">
		
				<div class="item-img">
					<?php 
					$image = get_field('section4_img3');
					$size = 'full'; // (thumbnail, medium, large, full или ваш размер)

					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
					?>		
				</div>
					<div class="item-description">
										<div class="item-title">
					<h4><?php echo get_field('section4_title3'); ?></h4>
				</div>
					<div class="item-text">
						<p><?php echo get_field('section4_text3'); ?></p>
					</div>
					</div>		
		</div>

		<div class="item">
		
				<div class="item-img">
					<?php 
					$image = get_field('section4_img4');
					$size = 'full'; // (thumbnail, medium, large, full или ваш размер)

					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
					?>		
				</div>
					<div class="item-description">
										<div class="item-title">
					<h4><?php echo get_field('section4_title4'); ?></h4>
				</div>
					<div class="item-text">
						<p><?php echo get_field('section4_text4'); ?></p>
					</div>
					</div>		
		</div>

		<div class="item">
		
				<div class="item-img">
					<?php 
					$image = get_field('section4_img5');
					$size = 'full'; // (thumbnail, medium, large, full или ваш размер)

					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
					?>		
				</div>
					<div class="item-description">
										<div class="item-title">
					<h4><?php echo get_field('section4_title5'); ?></h4>
				</div>
					<div class="item-text">
						<p><?php echo get_field('section4_text5'); ?></p>
					</div>
					</div>		
		</div>

		<div class="item">
		
				<div class="item-img">
					<?php 
					$image = get_field('section4_img6');
					$size = 'full'; // (thumbnail, medium, large, full или ваш размер)

					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
					?>		
				</div>
					<div class="item-description">
										<div class="item-title">
					<h4><?php echo get_field('section4_title6'); ?></h4>
				</div>
					<div class="item-text">
						<p><?php echo get_field('section4_text6'); ?></p>
					</div>
					</div>		
		</div>

		<div class="item">
		
				<div class="item-img">
					<?php 
					$image = get_field('section4_img7');
					$size = 'full'; // (thumbnail, medium, large, full или ваш размер)

					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
					?>		
				</div>
					<div class="item-description">
										<div class="item-title">
					<h4><?php echo get_field('section4_title7'); ?></h4>
				</div>
					<div class="item-text">
						<p><?php echo get_field('section4_text7'); ?></p>
					</div>
					</div>		
		</div>

		<div class="item">
		
				<div class="item-img">
					<?php 
					$image = get_field('section4_img8');
					$size = 'full'; // (thumbnail, medium, large, full или ваш размер)

					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
					?>		
				</div>
					<div class="item-description">
										<div class="item-title">
					<h4><?php echo get_field('section4_title8'); ?></h4>
				</div>
					<div class="item-text">
						<p><?php echo get_field('section4_text8'); ?></p>
					</div>
					</div>		
		</div>

	</div>

</div>