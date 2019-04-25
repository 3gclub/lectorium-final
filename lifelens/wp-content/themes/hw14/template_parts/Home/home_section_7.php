<section class="home_section_7">
  <div class="container">
    <?php $img = get_sub_field('image'); ?>
    <?php $title = get_sub_field('title'); ?>
    <?php $content = get_sub_field('content'); ?>
    <?php $link = get_sub_field('link1'); ?>
    <?php $link2 = get_sub_field('link2'); ?>

    <?php if (!empty($img) || !empty($title) || !empty($content)
      || !empty($link) || !empty($link2)) : ?>
    <div class="wrap flex">
      <?php if (!empty($img)) : ?>
        <div class="item item1">
          <img
              src="<?php print wp_get_attachment_image_url($img, "full_hd"); ?>"
              alt="">
        </div>
      <?php endif; ?>

      <div class="item item2">
        <?php if (!empty($title)) : ?>
          <h2><?php print $title; ?></h2>
        <?php endif; ?>

        <?php if (!empty($content)) : ?>
          <div class="text">
            <?php print $content; ?>
          </div>
        <?php endif; ?>
      </div>

      <?php if (!empty($link) || empty($link2)) : ?>
        <div class="item item3">
          <div class="but-wrap">
            <?php if (!empty($link)) : ?>
              <a class="button" href="<?php print $link['url']; ?>"
                <?php if (!empty($link['target'])) : ?> target="<?php print $link['target']; ?>" <?php endif; ?>><?php print $link['title']; ?></a>
            <?php endif; ?>

            <?php if (!empty($link2)) : ?>
              <a class="button" href="<?php print $link2['url']; ?>"
                <?php if (!empty($link2['target'])) : ?> target="<?php print $link2['target']; ?>" <?php endif; ?>><?php print $link2['title']; ?></a>
            <?php endif; ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
    <?php endif; ?>
  </div>
</section>