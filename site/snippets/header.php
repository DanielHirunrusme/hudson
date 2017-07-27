<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="//cloud.typography.com/6411154/613306/css/fonts.css">
  <?php echo css('assets/main.min.css') ?>

</head>
<body data-module-init="body" class="<?php echo $page->template(); ?>">

  <header class="header cf <?php if($page->uri() == 'home' || $page->template() == 'project'): echo 'hero-menu'; endif;?>" role="banner">
    <a class="logo home-link" href="<?php echo url() ?>">
      <?php echo $site->title()->html() ?>
    </a>
    <?php snippet('menu') ?>
  </header>
  
  <div id="barba-wrapper">
    <div class="barba-container">
     
   