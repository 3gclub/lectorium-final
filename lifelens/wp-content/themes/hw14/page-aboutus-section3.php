<?php
/*
Template Name: page-aboutus-section3
Template Post Type: page
*/
?>

<!-- Здесь html/php код шаблона -->


	<div class="container">
		<div class="aboutus-section3">

			<h2><?php echo get_field('section3_aboutus_title'); ?></h2>

			<div class="about3-flexbox">
				<!-- Block1 -->
				<div class="about3-flex1">
					<div class="about3-flex1-title">
						<h3><?php echo get_field('section3_aboutus_title1_1'); ?></h3>
					</div>

					<div class="about3-count1">
					30
					</div>
					
					<div class="about3-flex1-title2">
						<h3><?php echo get_field('section3_aboutus_title1_2'); ?></h3>
					</div>
					<!-- Block2 -->
					<div class="about3-flex1-text">
						<?php echo get_field('section3_aboutus_text_2'); ?>
					</div>
				</div>
				<!-- Block2 -->
				<div class="about3-flex1">
					<div class="about3-flex1-title">
						<h3><?php echo get_field('section3_aboutus_title2_1'); ?></h3>
					</div>

					<div class="about3-count1">
					27,000
					</div>
					<div class="about3-flex1-title2">
						<h3><?php echo get_field('section3_aboutus_title2_2'); ?></h3>
					</div>
					<div class="about3-flex1-text">
						<?php echo get_field('section3_aboutus_text_2'); ?>
					</div>
				</div>
				<!-- Block3 -->
				<div class="about3-flex1">
					<div class="about3-flex1-title">
						<h3><?php echo get_field('section3_aboutus_title3_1'); ?></h3>
					</div>

					<div class="about3-count1">
					450
					</div>
					<div class="about3-flex1-title2">
						<h3><?php echo get_field('section3_aboutus_title3_2'); ?></h3>
					</div>
					<div class="about3-flex1-text">
						<?php echo get_field('section3_aboutus_text_3'); ?>
					</div>
				</div>
					
					
			</div>
		</div>
	</div>
