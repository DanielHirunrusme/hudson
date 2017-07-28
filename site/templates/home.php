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


	<section id="studio">
		<article class="select-clients">
			<h2>Clients</h2>
			<?php snippet('clients') ?>
		</article>
		
		<article class="home-about">
			<h2><?php echo $page->about_title()->text() ?></h2>
			<?php echo $page->about()->kirbytext() ?>
		</article>
	
		<article class="home-careers">
			<h2><?php echo $page->careers_title()->text() ?></h2>
			<?php echo $page->careers()->kirbytext() ?>
		</article>
	</section>

  </main>
	
  
   	
<?php snippet('footer') ?>