<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header-content'); ?>
  <main>
    <h1 class="frontHeading">index.phpです</h1>
    <button class="btn">ボタンです</button>
    <div class="container mx-auto">
      <div class="grid grid-cols-3 gap-10">
        <picture>
          <source srcset="<?php echo get_theme_file_uri("/images/dog.webp"); ?>" type="image/webp">
          <source srcset="<?php echo get_theme_file_uri('/images/dog.webp'); ?>" media="(min-width: 765px)"
            type="image/webp">
          <img src="<?php echo get_theme_file_uri("/images/dog.jpg"); ?>" alt="">
        </picture>
        <picture>
          <source srcset="<?php echo get_theme_file_uri("/images/dog.webp"); ?>" type="image/webp">
          <source srcset="<?php echo get_theme_file_uri('/images/dog.webp'); ?>" media="(min-width: 765px)"
            type="image/webp">
          <img src="<?php echo get_theme_file_uri("/images/dog.jpg"); ?>" alt="">
        </picture>
        <picture>
          <source srcset="<?php echo get_theme_file_uri("/images/dog.webp"); ?>" type="image/webp">
          <source srcset="<?php echo get_theme_file_uri('/images/dog.webp'); ?>" media="(min-width: 765px)"
            type="image/webp">
          <img src="<?php echo get_theme_file_uri("/images/dog.jpg"); ?>" alt="">
        </picture>
      </div>
    </div>
  </main>
  <?php get_template_part('includes/footer-content'); ?>
  <?php get_footer(); ?>
</body>

</html>