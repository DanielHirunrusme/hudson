    </div>
  </div><!-- barba-container -->
  
  
  <footer class="footer cf" role="contentinfo">

	<div class="instagram-module">
		<?php snippet('instagram-module'); ?>
	</div>
	
	<div class="address">
		<div><h1><?php echo $site->title(); ?></h1> <h2><?php echo $site->subtitle(); ?></h2></div>
		<div><?php echo $site->address(); ?></div>
		<div><p><a href="tel:<?php echo $site->phone(); ?>"><?php echo $site->phone(); ?></a> &mdash; <a href="<?php echo $site->email(); ?>"><?php echo $site->email(); ?></p></div>
	</div>
	
	<p class="copright">&copy; Gates 2017</p>

  </footer>
  
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <?php echo js('assets/main.min.js'); ?>

</body>
</html>