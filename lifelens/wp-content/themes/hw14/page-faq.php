<?php
/*
Template Name: page-faq
Template Post Type: page
*/
?>

<!-- Здесь html/php код шаблона -->


<?php get_header(); ?>

<div class="page-faq">
	<div class="faq-title">
		<h2><?php echo get_field('faq_title'); ?></h2>
	</div>
		<div class="container">
			<div class="faq-popup-wrap">
					
				<ul>
				<?php 
				    
				if( have_rows('faq') ):

				    while( have_rows('faq') ) : the_row();
				        
				        $value = get_sub_field('q&a');

				        foreach ($value as $value) {

				        	$questions = $value['question'];
				        	$answer = $value['answer'];

				        	?>
				        		<li>
				        			<div class="questons-wrapper">
				        				<h3><?php echo $questions; ?></h3>
				        			</div>

				        			<div class="answer-wrapper">
				        				<?php echo $answer; ?>
				        			</div>
				        		</li>
				        	<?php
				        }
				   endwhile;

				endif;

				?>
				</ul>
</div>
</div>
</div>


<?php get_footer(); ?>