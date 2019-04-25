<?php
/*
Template Name: page-section5
Template Post Type: page
*/
?>

<!-- Здесь html/php код шаблона -->

<div class="section5">
	<div class="container">
		<div class="section5-title">
			<h2><?php echo get_field('section5_title'); ?></h2>
		</div>
		
<div class="home_slider owl-carousel">

		<div class="item-c">

			<div class="section5-carousel-img">
				
				<?php 
					$image = get_field('section5_carousel_img1');
					$size = 'full'; // (thumbnail, medium, large, full или ваш размер)

					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
				?>
				

			</div>

			<div class="section5-carousel-title">
				<h4><?php echo get_field('section5_carousel_title1'); ?></h4>
			</div>

			<div class="section5-carousel-text">
				<?php echo get_field('section5_carousel_text1'); ?>
			</div>
		</div>

		<div class="item-c">

			<div class="section5-carousel-img">
				<?php 
					$image = get_field('section5_carousel_img2');
					$size = 'full'; // (thumbnail, medium, large, full или ваш размер)

					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
				?>
			</div>

			<div class="section5-carousel-title">
				<h4><?php echo get_field('section5_carousel_title2'); ?></h4>
			</div>

			<div class="section5-carousel-text">
				<?php echo get_field('section5_carousel_text2'); ?>
			</div>
		</div>

		<div class="item-c">

			<div class="section5-carousel-img">
				<?php 
					$image = get_field('section5_carousel_img3');
					$size = 'full'; // (thumbnail, medium, large, full или ваш размер)

					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
				?>
			</div>

			<div class="section5-carousel-title">
				<h4><?php echo get_field('section5_carousel_title3'); ?></h4>
			</div>

			<div class="section5-carousel-text">
				<?php echo get_field('section5_carousel_text3'); ?>
			</div>
		</div>

		<div class="item-c">

			<div class="section5-carousel-img">
				<?php 
					$image = get_field('section5_carousel_img4');
					$size = 'full'; // (thumbnail, medium, large, full или ваш размер)

					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
				?>
			</div>

			<div class="section5-carousel-title">
				<h4><?php echo get_field('section5_carousel_title4'); ?></h4>
			</div>

			<div class="section5-carousel-text">
				<?php echo get_field('section5_carousel_text4'); ?>
			</div>
		</div>

		<div class="item-c">

			<div class="section5-carousel-img">
				<?php 
					$image = get_field('section5_carousel_img5');
					$size = 'full'; // (thumbnail, medium, large, full или ваш размер)

					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
				?>
			</div>

			<div class="section5-carousel-title">
				<h4><?php echo get_field('section5_carousel_title5'); ?></h4>
			</div>

			<div class="section5-carousel-text">
				<?php echo get_field('section5_carousel_text5'); ?>
			</div>
		</div>

		<div class="item-c">

			<div class="section5-carousel-img">
				<?php 
					$image = get_field('section5_carousel_img6');
					$size = 'full'; // (thumbnail, medium, large, full или ваш размер)

					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
				?>
			</div>

			<div class="section5-carousel-title">
				<h4><?php echo get_field('section5_carousel_title6'); ?></h4>
			</div>

			<div class="section5-carousel-text">
				<?php echo get_field('section5_carousel_text6'); ?>
			</div>
		</div>

		<div class="item-c">

			<div class="section5-carousel-img">
				<?php 
					$image = get_field('section5_carousel_img7');
					$size = 'full'; // (thumbnail, medium, large, full или ваш размер)

					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
				?>
			</div>

			<div class="section5-carousel-title">
				<h4><?php echo get_field('section5_carousel_title7'); ?></h4>
			</div>

			<div class="section5-carousel-text">
				<?php echo get_field('section5_carousel_text7'); ?>
			</div>
		</div>

	</div>
	</div>
	
</div>
