<section class="home_section_9">
  <div class="container container-wrapper clearfix">
    <?php $title = get_sub_field('title'); ?>
    <?php $img = get_sub_field('image'); ?>
    <?php $text = get_sub_field('text'); ?>

    <?php if (!empty($img)) : ?>
      <div class="image">
        <img
            src="<?php print wp_get_attachment_image_url($img, "full_hd"); ?>"
            alt="">
      </div>
    <?php endif; ?>

    <?php if (!empty($title)) : ?>
      <div class="text-wrapper text-wrapper--title">
        <h2><?php print $title; ?></h2>
      </div>
    <?php endif; ?>

    <?php if (!empty($text)) : ?>
      <div class="text-wrapper text">
        <?php print $text; ?>
      </div>
    <?php endif; ?>
  </div>
</section>