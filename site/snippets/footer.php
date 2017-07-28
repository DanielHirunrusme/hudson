    </div>
  </div><!-- barba-container -->
  
  
  <footer class="footer cf" role="contentinfo">

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
	
  </footer>
  
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <?php echo js('assets/main.min.js'); ?>

</body>
</html>