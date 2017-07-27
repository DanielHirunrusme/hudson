<h2 class="section-header header-no-margin">Selected Clients</h2>

<ul class="teaser cf client-list">
	<?php
	if(page('about/clients')->hasImages()):
		$images = page('about/clients')->images();
	  
  		$count = 0;
  		foreach($images as $image):
	
	//for($i=0; $i<count($images); $i++):
	?>
	<li class="client-image <?php if($count ==0): echo 'active'; endif;?>"><img src="<?php echo $image->url(); ?>" /></li>
	<?php 
		$count++;
		endforeach;
	endif;
	 ?>


</ul>