<section class="home_section_6">
  <div class="container">
    <?php $titleSection = get_sub_field('title_section'); ?>
    <?php $textContent = get_sub_field('text_content'); ?>

    <?php if (!empty($titleSection)) : ?>
      <h2><?php echo $titleSection; ?></h2>
    <?php endif; ?>

    <?php if (!empty($textContent)) : ?>
      <div class="text-content">
        <?php echo $textContent; ?>
      </div>
    <?php endif; ?>

    <?php $tabs = [
      get_sub_field('tab_title_1'),
      get_sub_field('tab_title_2'),
      get_sub_field('tab_title_3'),
      get_sub_field('tab_title_4'),
    ]; ?>

    <div class="top-taps">
      <div class="tabs-wrapper flex">
        <?php if (!empty($tabs[0]) || !empty($tabs[1])) : ?>
          <div class="tab nav-tabs-left">
            <ul class="nav" role="tablist">
              <?php if (!empty($tabs[0])) : ?>
                <li role="presentation" class="active">
                  <a href="#tab0" data-image="tab0" aria-controls="tab0"
                     role="tab" data-toggle="tab">
                    <?php echo $tabs[0]; ?>
                  </a>
                </li>
              <?php endif; ?>

              <?php if (!empty($tabs[1])) : ?>
                <li role="presentation">
                  <a href="#tab1" data-image="tab1" aria-controls="tab1"
                     role="tab" data-toggle="tab">
                    <?php echo $tabs[1]; ?>
                  </a>
                </li>
              <?php endif; ?>
            </ul>
          </div>
        <?php endif; ?>

        <?php $images = [
          get_sub_field('image_1'),
          get_sub_field('image_2'),
          get_sub_field('image_3'),
          get_sub_field('image_4'),
        ]; ?>

        <div class="image">
          <?php foreach ($images as $key => $image) : ?>
            <?php $activeClass = $key === 0 ? 'active' : ''; ?>

            <img
                src="<?php echo wp_get_attachment_image_url($image, 'full_hd') ?>"
                alt=""
                class="<?php echo $activeClass ?> tab<?php echo $key; ?>">
          <?php endforeach; ?>
        </div>

        <?php if (!empty($tabs[2]) || !empty($tabs[3])) : ?>
          <div class="tab nav-tabs-right">
            <ul class="nav" role="tablist">
              <?php if (!empty($tabs[2])) : ?>
                <li role="presentation">
                  <a href="#tab2" data-image="tab2" aria-controls="tab2"
                     role="tab" data-toggle="tab">
                    <?php echo $tabs[2]; ?>
                  </a>
                </li>
              <?php endif; ?>

              <?php if (!empty($tabs[3])) : ?>
                <li role="presentation">
                  <a href="#tab3" data-image="tab3" aria-controls="tab3"
                     role="tab" data-toggle="tab">
                    <?php echo $tabs[3]; ?>
                  </a>
                </li>
              <?php endif; ?>
            </ul>
          </div>
        <?php endif; ?>
      </div>

      <?php $tabsContent = [
        get_sub_field('tab_1_content'),
        get_sub_field('tab_2_content'),
        get_sub_field('tab_3_content'),
        get_sub_field('tab_4_content'),
      ]; ?>

      <div class="bottom-content flex">
        <div class="tab-content">
          <?php foreach ($tabsContent as $key => $tabContent) : ?>
            <?php $activeClass = $key === 0 ? 'active' : ''; ?>

            <div role="tabpanel"
                 class="tab-pane <?php print $activeClass; ?>"
                 id="tab<?php print $key; ?>">
              <div class="heading-wrapper">
                <h4><?php print $tabs[$key]; ?></h4>
              </div>

              <div class="content-wrapper">
                <?php print $tabsContent[$key]; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <?php $link = get_sub_field('link'); ?>

    <?php if ($link) : ?>
      <div class="but-wrap">
        <a class="button" target="<?php echo $link['target']; ?>"
           href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?>
        </a>
      </div>
    <?php endif; ?>
  </div>
</section>
