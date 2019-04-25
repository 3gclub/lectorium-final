<section class="home_section_5">
  <div class="container">
    <?php $title = get_sub_field('title'); ?>
    <?php $slider = get_sub_field('slider'); ?>

    <?php if (!empty($title)) : ?>
      <h2><?php print $title; ?></h2>
    <?php endif; ?>


    <?php if (!empty($slider)) : ?>
      <div class="home_slider owl-carousel">
        <?php $counter = 0; ?>

        <?php while (has_sub_field('slider')): ?>
          <?php $slideNum = $counter + 1; ?>
          <?php $slideImg = get_sub_field('image'); ?>
          <?php $slideTitle = get_sub_field('title'); ?>
          <?php $slideSubtitle = get_sub_field('subtitle'); ?>

          <div class="item slide-<?php print $slideNum++ ?>">
            <?php if (!empty($slideImg)) : ?>
              <div class="image">
                <img
                    src="<?php print wp_get_attachment_image_url($slideImg, "full_hd"); ?>"
                    alt="">
              </div>
            <?php endif; ?>

            <?php if (!empty($slideTitle)) : ?>
              <div class="title">
                <h4><?php print $slideTitle; ?></h4>
              </div>
            <?php endif; ?>

            <?php if (!empty($slideSubtitle)) : ?>
              <div class="subtitle">
                <?php print $slideSubtitle; ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
