<section class="home_section_4">
  <div class="container">
    <?php $title = get_sub_field('title'); ?>
    <?php $repeater = get_sub_field('repeater'); ?>

    <?php if (!empty($title)) : ?>
      <h2><?php print $title; ?></h2>
    <?php endif; ?>
  </div>

  <?php if (!empty($repeater)): ?>
    <div class="grid flex">
      <?php while (has_sub_field('repeater')) : ?>
        <div class="item" onclick="">
          <?php $titleRepeater = get_sub_field('title'); ?>
          <?php $descriptionRepeater = get_sub_field('description'); ?>
          <?php $img = get_sub_field('image') ?>

          <?php if (!empty($img)) : ?>
            <div class="image back-img">
              <img
                  src="<?php print wp_get_attachment_image_url($img, 'home_sec4'); ?>"
                  alt="">
            </div>
          <?php endif; ?>

          <div class="text-wrapper">
            <?php if (!empty($titleRepeater)) : ?>
              <div class="title">
                <h4><?php print $titleRepeater; ?></h4>
              </div>
            <?php endif; ?>

            <?php if (!empty($descriptionRepeater)) : ?>
              <div class="description">
                <p><?php print $descriptionRepeater; ?></p>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>
</section>
