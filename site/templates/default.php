<?php snippet('header') ?>

  <main class="main" role="main" data-template="page">

    <section class="text <?php if($page->uri() == 'about'): ?> about-text-section<?php endif; ?>">
      <?php echo $page->text()->kirbytext() ?>
   
	
	<?php if($page->uri() == 'about'): ?>
	<?php foreach($page->children()->visible() as $p):?>
	<?php if($p->uri() != 'about/clients'): ?>
		<div class="about-text">
			<?php echo $p->text()->kt(); ?>
		</div>
	<?php endif; ?>
	
	
	<?php endforeach; ?>
	 </section>
	<hr />
	<section class="select-clients">
		<?php snippet('clients') ?>
	</section>
	
	<?php endif; ?>

  </main>

<?php snippet('footer') ?>