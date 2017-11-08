<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  
  <!-- CSS -->
  <!--
  <link rel="stylesheet" type="text/css" href="//cloud.typography.com/6411154/613306/css/fonts.css">
	  -->
  
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <?= css('assets/plugins/embed/css/embed.css') ?>
  <?php echo css('assets/main.min.css') ?>
  
  <?php if (c::get('plg_masonry.enable')) : $width = c::get('plg_masonry.width'); ?>
    <style>
      #masonry {margin: 0 auto;}
        .masonryitem { width: <?php echo $width ?>px; margin-bottom: 10px;}
        .masonryitem.w2 { width: 40%; }
    </style>
  <?php endif; ?>

</head>
<body data-module-init="body" class="<?php echo $page->template(); ?>">

  <header class="header cf <?php if($page->uri() == 'home' || $page->template() == 'project'): echo 'hero-menu'; endif;?>" role="banner">
    <a class="logo home-link" href="<?php echo url() ?>">
      <?php echo $site->title()->html() ?> &mdash;
    </a>
    <?php snippet('menu') ?>
  </header>

   