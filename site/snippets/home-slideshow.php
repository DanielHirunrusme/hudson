<div class="home-slideshow" data-module-init="home-slideshow">
	
	<?php
		
	echo page('home')->hasImages(); //returns the number of images in the folder

	if(page('home')->hasImages()) {
	  $images = page('home')->images();
	}
	$count = 0;
	foreach($images as $image):
	
	//for($i=0; $i<count($images); $i++):
	?>
	
	<div class="home-slideshow-image <?php if($count ==0): echo 'active'; endif;?>" style="background-image:url(<?php echo $image->url(); ?>)"></div>
	<?php $count++; ?>
	<?php endforeach; ?>

	
	
</div>