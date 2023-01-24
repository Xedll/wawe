<!DOCTYPE html>
<html <?php bloginfo('language'); ?>>

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <link rel="shortcut icon" href="<?php // получаем ссылку на логотип
   $custom_logo__url = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full');
   // выводим
   echo $custom_logo__url[0]; ?>" type="image/svg+xml">
   <?php wp_head(); ?>
   <title>Wawe</title>
</head>

<body>
   <header class="header" id='header' style='--bg: url(<?php bloginfo('template_url'); ?>/assets/img/home/bg.webp)'>
      <div class="header__content _container">
         <?php the_custom_logo(); ?>
         <nav class="header__nav">
            <ul class="header__list">
               <li class="header__item"><a href="" data-nav-anchor="about" class="header__link">О нас</a></li>
               <li class="header__item"><a href="" data-nav-anchor="advantages" class="header__link">Услуги</a></li>
               <li class="header__item"><a href="" data-nav-anchor="packages" class="header__link">Стоимость</a></li>
               <li class="header__item"><a href="" data-nav-anchor="blog" class="header__link">Блог</a></li>
               <li class="header__item"><a href="" data-nav-anchor="team" class="header__link">Команда</a></li>
               <li class="header__item"><a href="" data-nav-anchor="contacts" class="header__link">Контакты</a></li>
            </ul>
         </nav>
      </div>
   </header>