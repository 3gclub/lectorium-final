<?php
/*
Template Name: page-section6
Template Post Type: page
*/
?>

<div class="section6">

  <div class="container">

    <div class="section6-wrap">
      <h2><?php echo get_field('section6_title1'); ?></h2>
      <div class="text-content">
        <?php echo get_field('section6_text1'); ?>
      </div>

      <div class="section6-img-butt-wrap">
        <div class="section6-but-left">
          <div class="section6-but">
            <a href="#tab0" data-image="tab0" aria-controls="tab0"
               role="tab" data-toggle="tab">
              <?php echo get_field('section6_but_left1'); ?>
            </a>
          </div>
          <div class="section6-but">
            <a href="#tab1" data-image="tab1" aria-controls="tab1"
               role="tab" data-toggle="tab">
              <?php echo get_field('section6_but_left2'); ?>
            </a>
          </div>
        </div>

        <div class="section6-img">
          <?php

          $images = [
            get_field('section6_img1'),
            get_field('section6_img2'),
            get_field('section6_img3'),
            get_field('section6_img4'),
          ];

          $size = 'full'; // (thumbnail, medium, large, full или ваш размер)
          ?>

          <div class="image">
            <?php foreach ($images as $key => $image) : ?>
              <?php $activeClass = $key === 0 ? 'active' : false; ?>

              <img
                  src="<?php echo wp_get_attachment_image_url($image, $size) ?>"
                  alt=""
                  class="<?php echo $activeClass ?> tab<?php echo $key; ?>">
            <?php endforeach; ?>
          </div>
        </div>

        <div class="section6-but-right">
          <div class="section6-but">
            <a href="#tab2" data-image="tab2" aria-controls="tab2"
               role="tab" data-toggle="tab">
              <?php echo get_field('section6_but_right1'); ?>
            </a>
          </div>
          <div class="section6-but">
            <a href="#tab3" data-image="tab3" aria-controls="tab3"
               role="tab" data-toggle="tab">
              <?php echo get_field('section6_but_right2'); ?>
            </a>
          </div>
        </div>
      </div>

      <div class="section6-textblock2-wrap">
        <div class="section6-title2">
          <?php
          $titles = [
            get_field('section6_title2_1'),
            get_field('section6_title2_2'),
            get_field('section6_title2_3'),
            get_field('section6_title2_4'),
          ];
          ?>

          <?php foreach ($titles as $key => $title) : ?>
            <?php $activeClass = $key === 0 ? 'active' : ''; ?>

            <h4 class="tab<?php echo $key; ?> <?php print $activeClass; ?>">
              <?php echo $title; ?>
            </h4>
          <?php endforeach; ?>
          <div class="section6-text2">
            <?php
            $texts = [
              get_field('section6_text2_1'),
              get_field('section6_text2_2'),
              get_field('section6_text2_3'),
              get_field('section6_text2_4'),
            ];
            ?>
            <?php foreach ($texts as $key => $text) : ?>
              <?php $activeClass = $key === 0 ? 'active' : ''; ?>

              <div class="text tab<?php echo $key; ?> <?php print $activeClass; ?>">
                <?php echo $text; ?>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

      </div>

      <div class="but6-wrap">
        <a class="section6-but-buttom" target href="">
          <?php echo get_field('section6_but_buttom'); ?>
        </a>
      </div>
    </div>
  </div>

</div>
