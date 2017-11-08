<?php snippet('header') ?>

  <main class="main page-template" data-template="home" role="main">

    <div class="text home-hero">
      
  	  <?php snippet('home-slideshow') ?>
    
      <div class="home-callout" data-module-init="callout">
        <div class="text">
          <?php echo $page->text()->kirbytext() ?>
        </div>
      </div>
      <!-- /home-callout -->
    
    </div>
    <!-- /home-hero -->
    
    
	
	<section class="latest-projects projects-container page-container">

    	<?php snippet('masonry') ?>
		
		<div class="btn-section-container"><a href="<?php echo page('work')->url() ?>" class="btn-section">See More &mdash; Work</a></div>
	</section>
  
  <a href="<?= $pages->find('about')->url() ?>">
  <section id="studio-callout" class="page-callout">
    <div class="inner-container">
      <h1 class="line-header hero"><span>Our</span><span class="underline"></span><span>Studio</span></h1>
    </div>
  </section>
  </a>

	<section id="studio">
		<article class="select-clients">
			<h2 class="line-header"><span>Our</span><span class="underline"></span><span>Clients</span></h2>
			<?php snippet('clients') ?>
		</article>
		
    <!--
		<article class="home-about">
			<h2><?php echo $page->about_title()->text() ?></h2>
			<?php echo $page->about()->kirbytext() ?>
		</article>
	
		<article class="home-careers">
			<h2><?php echo $page->careers_title()->text() ?></h2>
			<?php echo $page->careers()->kirbytext() ?>
		</article>
      -->
	</section>
  
  
  
  

  </main>
	
  
   	
<?php snippet('footer') ?>