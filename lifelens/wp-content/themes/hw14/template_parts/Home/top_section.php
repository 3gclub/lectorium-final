<section class="top_section_home back-img"
         style="background-image: url(<?php print wp_get_attachment_image_url(get_sub_field('image'), 'top_section') ?>);">
  <?php $title = get_sub_field('title'); ?>
  <?php $sublitile = get_sub_field('sublitile'); ?>
  <?php $link = get_sub_field('link'); ?>

  <div class="container">
    <div class="wrap">
      <?php if (!empty($title) || !empty($sublitile) || !empty($link)) : ?>
        <?php if (!empty($title)) : ?>
          <h2><?php print $title; ?></h2>
        <?php endif; ?>

        <?php if (!empty($sublitile)) : ?>
          <div class="sublitle">
            <?php print $sublitile; ?>
          </div>
        <?php endif; ?>

        <?php if ($link) : ?>
          <div class="but-wrap">
            <a class="button link1" target="<?php echo $link['target']; ?>"
               href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
          </div>
        <?php endif; ?>
      <?php endif; ?>
    </div>
  </div>
</section>