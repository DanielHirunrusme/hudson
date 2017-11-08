
  
  <footer class="footer cf" role="contentinfo">
    
    <p><a href="http://instagram.com/gatescreative" target="_blank">@gatescreative <i class="fa fa-instagram" aria-hidden="true"></i></a>&emsp;&emsp;17 W 17th Suite 705 New York/NY 10011&emsp;&emsp;646/580/1751&emsp;&emsp;<a href="mailto:info@gatescreative.com">info@gatescreative.com</a></p>
    
  <?php
  /*
	<div class="instagram-module footer-block">
		<?php snippet('instagram-module'); ?>
	</div>
	
	<div class="address footer-block">
		<div><h1><?php echo $site->title(); ?></h1> <h2><?php echo $site->subtitle(); ?></h2></div>
		<div><?php echo $site->address(); ?></div>
		<div><p><a href="tel:<?php echo $site->phone(); ?>"><?php echo $site->phone(); ?></a> &mdash; <a href="<?php echo $site->email(); ?>"><?php echo $site->email(); ?></p></div>
	</div>
	
	<div class="copyright-block footer-block">
		<p class="copright">&copy; Gates 2017</p>
	</div>
	*/
  ?>
  </footer>
  

  
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <?php if (c::get('plg_masonry.enable')) : ?>
    <meta name="column_width" data-width="<?php echo c::get('plg_masonry.width') ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.4/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
  <?php endif; ?>
  
  
  
  
  <?php echo js('assets/main.min.js'); ?>
  <?= js('assets/plugins/embed/js/embed.js') ?>
  


</body>
</html>