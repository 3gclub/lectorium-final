<!DOCTYPE html>
<html lang="en">
<head>

  <meta <?php bloginfo('charset'); ?>>
  <!-- тег, генерирующий кодировку страницы -->

  <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
  <!-- Первая часть этого кода отвечает за название вашего сайта/блога,
  а вторая - за название раздела/страницы, на которой находится посетитель.
  В итоге это будет выглядеть следующим образом: Название сайта » Раздел обо мне -->


	<?php wp_head(); ?>

</head>

<!-----------------General container------------------------------>
<div class="container">
  <!----------HEADER------------------->
  <div class="header">
    
    <div class="logo">
      <?php $logoImage = get_field('header_logo', 'option') ?>
      
      <?php if (!empty($logoImage)) : ?>
        <img src="<?php echo $logoImage['url']; ?>" alt="<?php echo $logoImage['alt']; ?>">
      <?php endif; ?>
    </div>

        <div class="nav-menu">
          <?php 
            wp_nav_menu( array(
              'menu_class'=>'menu',
                'theme_location'=>'top',
                'after'=>'',
                'container'=>''
          ) );
          ?>
        </div>




  </div>
</div>

