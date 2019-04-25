<?php
/*
Template Name: page-aboutus-section1
Template Post Type: page
*/
?>

<!-- Здесь html/php код шаблона -->


<div class="aboutus">
	<div class="container">
		<div class="aboutus-section1">
			<h2><?php echo get_field('title_aboutus_page'); ?></h2>
			<div class="about-flexbox">
				<div class="about-sect1-textwrap">
					<h3><?php echo get_field('aboutus_section1_title'); ?></h3>
					<p><?php echo get_field('aboutus_section1_text'); ?></p>
				</div>
					
						<div class="about-img-wrap">
							<div class="about-button">
								<a class="button link1" target href=""><?php echo get_field('aboutus_section1_button'); ?></a>
							</div>
							<div class="about-img">
							<?php 
							$image = get_field('aboutus_section1_img');
							$size = 'full'; // (thumbnail, medium, large, full или ваш размер)

							if( $image ) {
								echo wp_get_attachment_image( $image, $size );
							}
							?>
							</div>
							<div class="about-img-text">
								<p><?php echo get_field('aboutus_section1_text2'); ?></p>
							</div>

						</div>
			</div>
		</div>
	</div>
</div>