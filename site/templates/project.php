<?php snippet('header') ?>

  <main class="main page-template project-template" data-template="project" role="main">

    
	<div class="hero-image" style="background-image:url(<?php echo $page->images()->sortBy('sort', 'asc')->first()->url(); ?>)">
		
	</div>

    

    <section>
      
	  <div class="text">
      <div class="project-header">
	  	  <p><?php echo $page->title()->html() ?></p>
        <h3><?php echo $page->subtitle()->html() ?></h3>
      </div>
	  	
		<div class="description">
	  		<?php echo $page->text()->kirbytext() ?>
	      <span class="credits"><?php echo $page->credits()->kt() ?></span>
		</div>
  	</div>
    
    </section>
    
  <?php foreach($page->builder()->toStructure() as $section): ?>
    
    <?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
  <?php endforeach ?>

  
  <section id="project-footer">
    
      <?php if($prev = $page->prevVisible()): ?>
        <a href="<?= $prev->url()?>" class="footer-nav"><span class="line"></span><span class="footer-text">Prev Project</span></a>
      <?php else: ?>
        <a href="<?= $pages->find('work')->url()?>" class="footer-nav"><span class="line"></span><span class="footer-text">Work</span></a>
      <?php endif ?>
    
    
     <?php if($next = $page->nextVisible()): ?>
    <a href="<?php echo $next->url() ?>" class="footer-nav"><span class="footer-text">Next Project</span><span class="line"></span></a>
    <?php endif; ?>
    
  </section>
  
  </main>
  
  <script type="text/javascript">
   
    var tag = document.createElement('script');
      tag.src = "https://www.youtube.com/player_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    
    function onYouTubeIframeAPIReady() {
      console.log('youtube player ready')
      
      $('iframe').each(function(){
        var index = $(this).closest('section').index();
        $(this).attr('id', 'video-player-' + index);
        var id = $(this).attr('id');
        var player;
        player = new YT.Player('video-player-'+index, {
            events: {
              'onReady': function(){
                console.log('mute player')
                player.mute();
                player.playVideo();
              },
              'onStateChange': 
                  function(e){
                      if (e.data === YT.PlayerState.ENDED) {
                          player.playVideo(); 
                      }
                  }
            }
        });
        
      });
      
        
    }

    function onPlayerReady(event) {
        player.mute();
        player.playVideo();
    }
      
  </script>

<?php snippet('footer') ?>