<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>
<main class="main">
   <section class="page__home" style='--bg: url(<?php bloginfo('template_url'); ?>/assets/img/home/bg.webp)'>
      <div class="home__container _container">
         <div class="home__content">
            <h1 class="home__title">
               <?php the_field('main_title') ?>
            </h1>
            <h2 class="home__subtitle">
               <?php the_field('main_subtitle') ?>
            </h2>
            <p class="home__icon">
               <img src="<?php the_field('main_icon') ?>" alt="" class="image">
            </p>
         </div>
      </div>
   </section>
   <section class="page__about" id="about">
      <div class="about__container _container">
         <div class="about__content">
            <div class="about__title">
               <h3 class="title">
                  <?php the_field('about_title') ?>
               </h3>
            </div>
            <div class="about__grid">
               <?php the_field('about_content') ?>
            </div>
         </div>
      </div>
   </section>
   <section class="page__advantages" id="advantages">
      <div class="advantages__container _container">
         <div class="advantages__content">
            <div class="advantages__title">
               <h3 class="title">
                  <?php the_field('advantages_title') ?>
               </h3>
            </div>
            <div class="advantages__grid">
               <?php
               global $post;

               $myposts = get_posts([
                  'numberposts' => -1,
                  'category' => 6
               ]);

               if ($myposts) {
                  foreach ($myposts as $post) {
                     setup_postdata($post);
                     ?>
                     <!-- Вывод постов, функции цикла: the_title() и т.д. -->
                     <article class="advantages__item">
                        <div class="advItem__title">
                           <?php the_post_thumbnail() ?>
                           <h6 class="advItem__subTitle">
                              <?php the_title() ?>
                           </h6>
                        </div>
                        <div class="advItem__about">
                           <?php the_content() ?>
                        </div>
                     </article>
                     <?php
                  }
               } else {
                  // Постов не найдено
               }

               wp_reset_postdata(); // Сбрасываем $post
               ?>
            </div>
            <div class="advantages__methods">
               <div class="advantages__stats">
                  <article class="advStats__item">
                     <div class="advStats__stats">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/advantages/4.svg" alt=""
                           class="advStats__img image">
                        <div class="advStats__text">Приехали второй раз</div>
                     </div>
                     <div class="advStats__perсent">85%</div>
                  </article>
                  <article class="advStats__item">
                     <div class="advStats__stats">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/advantages/5.svg" alt=""
                           class="advStats__img image">
                        <div class="advStats__text">Научились кататься</div>
                     </div>
                     <div class="advStats__perсent">95%</div>
                  </article>
                  <article class="advStats__item">
                     <div class="advStats__stats">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/advantages/6.svg" alt=""
                           class="advStats__img image">
                        <div class="advStats__text">Довольных клиентов</div>
                     </div>
                     <div class="advStats__perсent">99%</div>
                  </article>
               </div>
               <div class="advantages__text">
                  <?php the_field('advantages_content') ?>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="page__trainers">
      <div class="trainers__content">
         <div class="trainers__container _container">
            <div class="trainers__text">
               <div class="trainers__title">
                  <h3 class="title">
                     <?php the_field('trainers_title') ?>
                  </h3>
               </div>
               <div class="trainers__about">
                  <?php the_field('trainers_content') ?>
               </div>
            </div>
         </div>
         <div class="trainers__img">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/trainers/1.webp" alt="" class="image">
         </div>
      </div>
   </section>
   <section class="page__gallery">
      <div class="gallery__container _container">
         <div class="gallery__content">
            <div class="gallery__title">
               <h3 class="title">ГАЛЕРЕЯ</h3>
            </div>
            <ul class="gallery__nav">
               <li class="gallery__group" data-gallery__id="1">ВСЕ</li>
               <li class="gallery__group" data-gallery__id="2">ТУРИСТЫ</li>
               <li class="gallery__group" data-gallery__id="3">ПРИРОДА</li>
               <li class="gallery__group" data-gallery__id="4">ПРОФИ</li>
            </ul>
            <div class="gallery__grid">
               <?php
               global $post;

               $myposts = get_posts([
                  'numberposts' => -1,
                  'category' => 5
               ]);

               if ($myposts) {
                  foreach ($myposts as $post) {
                     setup_postdata($post);
                     ?>
                     <!-- Вывод постов, функции цикла: the_title() и т.д. -->
                     <article class="gallery__item" data-id='<?php the_title_attribute() ?>'
                        style='--bg: url(<?php the_post_thumbnail_url() ?>)'>
                     </article>
                     <?php
                  }
               } else {
                  // Постов не найдено
               }

               wp_reset_postdata(); // Сбрасываем $post
               ?>
            </div>
            <button class="gallery__button">ПОКАЗАТЬ ЕЩЁ</button>
         </div>
      </div>
   </section>
   <section class="page__quote">
      <div class="quote__container _container">
         <div class="quote__content">
            <h3 class="quote__text">
               <?php the_field('quote_text') ?>
            </h3>
            <h5 class="quote__author">
               <?php the_field('quote_author') ?>
            </h5>
         </div>
      </div>
   </section>
   <section class="page__video">
      <div class="video__container _container">
         <div class="video__content">
            <video src=<?php the_field('video_url') ?> width='100%' controls="controls" class="video__video image">
            </video>
            <ul class="video__list">
               <?php
               global $post;

               $myposts = get_posts([
                  'numberposts' => -1,
                  'category' => 7
               ]);

               if ($myposts) {
                  foreach ($myposts as $post) {
                     setup_postdata($post);
                     ?>
                     <!-- Вывод постов, функции цикла: the_title() и т.д. -->
                     <li class="video__item">
                        <p class="video__number">
                           <?php the_title() ?>
                        </p>
                        <p class="video__desc">
                           <?php the_content() ?>
                        </p>
                     </li>
                     <?php
                  }
               } else {
                  // Постов не найдено
               }

               wp_reset_postdata(); // Сбрасываем $post
               ?>
            </ul>
         </div>
      </div>
   </section>
   <section class="page__blog" id="blog">
      <div class="blog__container _container">
         <div class="blog__content">
            <div class="blog__title">
               <h3 class="title">БЛОГ</h3>
            </div>
         </div>
      </div>
      <div class="slider__wrapper swiper">
         <div class="swiper-wrapper">
            <?php
            global $post;

            $myposts = get_posts([
               'numberposts' => -1,
               'category' => 3
            ]);

            if ($myposts) {
               foreach ($myposts as $post) {
                  setup_postdata($post);
                  ?>
                  <article class="slider__item swiper-slide" style="--bg:url(' <?php the_post_thumbnail_url() ?>')">
                     <div class="slider__text">
                        <div class="slider__title">
                           <?php the_title() ?>
                        </div>
                        <div class="slider__desc">
                           <?php the_content() ?>
                        </div>
                     </div>
                  </article>
                  <?php
               }
            } else {
               // Постов не найдено
            }

            wp_reset_postdata(); // Сбрасываем $post
            ?>

         </div>
         <div class="swiper-pagination"></div>
      </div>

   </section>
   <section class="page__team" id="team">
      <div class="team__container _container">
         <div class='team__content'>
            <div class="team__title">
               <h3 class="title">НАША КОМАНДА</h3>
            </div>
            <div class="team__grid">
               <?php
               global $post;

               $myposts = get_posts([
                  'numberposts' => -1,
                  'category' => 4
               ]);

               if ($myposts) {
                  foreach ($myposts as $post) {
                     setup_postdata($post);
                     ?>
                     <!-- Вывод постов, функции цикла: the_title() и т.д. -->
                     <article class="team__item">
                        <?php the_post_thumbnail(
                           array(330, 450),
                           array(
                              'class' => 'team__img'
                           )
                        ) ?>
                        <p class="team__name">
                           <?php the_title() ?>
                        </p>
                        <p class="team__desc">
                           <?php the_content() ?>
                        </p>
                     </article>
                     <?php
                  }
               } else {
                  // Постов не найдено
               }

               wp_reset_postdata(); // Сбрасываем $post
               ?>
            </div>
         </div>
      </div>
   </section>
   <section class="page__packages" id="packages">
      <div class="packages__container _container">
         <div class="packages__content">
            <div class="packages__title">
               <h3 class="title">ПАКЕТЫ УСЛУГ</h3>
            </div>
            <div class="packages__grid">
               <article class="packages__item">
                  <p class="packages__name">
                     <?php the_field('first_package_title') ?>
                  </p>
                  <ul class="packages__list">
                     <?php the_field('first_package_content') ?>
                  </ul>
                  <p class="packages__price">
                     <?php the_field('first_package_price') ?>
                  </p>
               </article>
               <article class="packages__item">
                  <p class="packages__name">
                     <?php the_field('second_package_title') ?>
                  </p>
                  <ul class="packages__list">
                     <?php the_field('second_package_content') ?>
                  </ul>
                  <p class="packages__price">
                     <?php the_field('second_package_price') ?>
                  </p>
               </article>
               <article class="packages__item">
                  <p class="packages__name">
                     <?php the_field('third_package_title') ?>
                  </p>
                  <ul class="packages__list">
                     <?php the_field('third_package_content') ?>
                  </ul>
                  <p class="packages__price">
                     <?php the_field('third_package_price') ?>
                  </p>
               </article>
            </div>
         </div>
      </div>
   </section>
   <section class="page__map">
      <div class="map__container _container">
         <div class="map__content">
            <img src="<?php the_field('map_img') ?>" alt="" class="map__image image">
         </div>
      </div>
   </section>
   <section class="page__form">
      <div class="form__container _container">
         <div class="form__title">
            <h3 class="title">ОСТАВИТЬ ЗАЯВКУ</h3>
         </div>
         <div class="form__content">
            <form action="" class="form__form">
               <?php echo do_shortcode('[contact-form-7 id="19" title="Контактная форма 1"]') ?>
            </form>
            <div class="form__contacts">
               <p class="form__contact">Есть вопрос?<br>
                  Вы можете связаться с нами:
               </p>
               <p class="form__contact">WhatsApp, Viber, Telegram <br>

                  <a href="tel:<?php the_field('phone_number') ?>" class="form__link">
                     <?php the_field('phone_text') ?></a>
               </p>
               <p class="form__contact">
                  <?php the_field('adress') ?>
               </p>
            </div>
         </div>

      </div>
   </section>
   <section class="page__contacts" id="contacts">
      <div class="contacts__container _container">
         <div class="contacts__content">
            <div class="contacts__flex">
               <div class="contacts__item">
                  <a href="<?php the_field('inst') ?>" class="contacts__link">INSTAGRAM</a>
               </div>
               <div class="contacts__item">
                  <a href="<?php the_field('facebook') ?>" class="contacts__link">FACEBOOK</a>
               </div>
               <div class="contacts__item">
                  <a href="<?php the_field('youtuve') ?>" class="contacts__link">YOUTUBE</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <div class="top__button" data-nav-anchor="header">
      &#5169;
   </div>
</main>

<?php get_footer(); ?>