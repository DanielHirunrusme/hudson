<?php snippet('header') ?>

  <main class="main page-template" data-template="home" role="main">

    <div class="text home-hero">
      <?php echo $page->text()->kirbytext() ?>
	  <?php snippet('home-slideshow') ?>
    </div>
	
	<section class="latest-projects projects-container">
		<h2 class="section-header">Latest Projects</h2>
    	<?php snippet('projects') ?>
		
		<div class="btn-section-container"><a href="<?php echo page('projects')->url() ?>" class="btn-section">All Projects →</a></div>
	</section>
	
	<!--
	<section class="home-about">
		<?php snippet('about') ?>
	</section>
	-->
	<hr/>
	
	<section class="select-clients">
		<?php snippet('clients') ?>
	</section>

  </main>
	
  
   	
<?php snippet('footer') ?>