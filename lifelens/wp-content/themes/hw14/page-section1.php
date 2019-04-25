<?php
/*
Template Name: page-section1
Template Post Type: page
*/
?>

<!-- Здесь html/php код шаблона -->

<div class="section1" style="background-image: url(<?php print wp_get_attachment_image_url(get_field('background'), 'full') ?>);">

			<div class="container">
				
				<div class="section1-wrap">
					<h2><?php echo get_field('section1-Title'); ?></h2>
				<p><?php echo get_field('section1-text'); ?></p>
					<div class="but-wrap">
						<a class="button link1" target href=""><?php echo get_field('buttom'); ?></a>
					</div>
				</div>
				
			</div>

</div>
	



