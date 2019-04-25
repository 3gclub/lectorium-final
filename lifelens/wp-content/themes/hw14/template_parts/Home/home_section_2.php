<section class="home_section_2">
  <div class="container">
    <?php $text = get_sub_field('text'); ?>
    <?php $video = get_sub_field('video_href'); ?>
    <?php $linkText = get_sub_field('link_text'); ?>

      <div class="wrap flex space-between-flex">
        <?php if (!empty($text)) : ?>
          <div class="text">
            <?php print $text; ?>
          </div>
        <?php endif; ?>

        <div class="but-wrap">
          <?php if (!empty($video)) : ?>
            <a data-fancybox href="<?php print $video; ?>" class="button">
              <?php if (!empty($linkText)) : ?>
                <?php print $linkText; ?>
              <?php endif; ?>
            </a>
          <?php endif; ?>
        </div>
      </div>
  </div>
</section>