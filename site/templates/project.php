<?php snippet('header') ?>

  <main class="main page-template project-template" data-template="project" role="main">

    
	<div class="hero-image" style="background-image:url(<?php echo $page->images()->sortBy('sort', 'asc')->first()->url(); ?>)">
		
	</div>

    

    <section>
      
	  <div class="text">
	  	<h1 class="section-header"><?php echo $page->title()->html() ?></h1>
	  	
		<div class="description">
	  		<?php echo $page->text()->kirbytext() ?>
	        <ul class="meta cf">
	          <li><b>Tags:</b> <?php echo $page->tags() ?></li>
	        </ul>
		</div>
  	  </div>
	  
	  
      <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
      <figure>
        <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
      </figure>
      <?php endforeach ?>
	  
	  
	  
      
	  
    </section>
	
    
	
	<hr/>
	
	<section class="next-projects">
    <nav class="other-projects cf" role="navigation">
      <?php if($prev = $page->prevVisible()): ?>
	  <div class="prev other-project-container">
	      <?php if($image = $prev->images()->sortBy('sort', 'asc')->first()): ?>
	      <a class="image-link" href="<?php echo $prev->url() ?>">
	        <img src="<?php echo $image->url() ?>" alt="<?php echo $prev->title()->html() ?>" >
	      </a>
	      <?php endif; ?>

	      <h3><a href="<?php echo $prev->url() ?>"><?php echo $prev->title()->html() ?></a></h3>
	      <p><?php echo $prev->text()->excerpt(100) ?> <a href="<?php echo $prev->url() ?>" class="read-more">View Project&nbsp;&nbsp;→</a></p>
		  
  	  </div>
      <?php endif ?>
      <?php if($next = $page->nextVisible()): ?>
		  <div class="next other-project-container">
		      <?php if($image = $next->images()->sortBy('sort', 'asc')->first()): ?>
		      <a class="image-link" href="<?php echo $next->url() ?>">
		        <img src="<?php echo $image->url() ?>" alt="<?php echo $next->title()->html() ?>" >
		      </a>
		      <?php endif; ?>
	
		      <h3><a href="<?php echo $next->url() ?>"><?php echo $next->title()->html() ?></a></h3>
		      <p><?php echo $next->text()->excerpt(100) ?> <a href="<?php echo $next->url() ?>" class="read-more">View Project&nbsp;&nbsp;→</a></p>
    		  
	  	  </div>
      <?php endif ?>
    </nav>
	</section>
	
  </main>

<?php snippet('footer') ?>