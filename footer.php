	<footer>
		<?php wp_nav_menu(array("theme_location"=>"menu_foot","container"=>false)); ?>
		<small><ul><li>&#169; 2015 <?php bloginfo('name'); ?></li><li>Design by <a href="https://twitter.com/Belleinator">Caleb</a></li><li>Theme by <a href="http://juju2143.ca/">Juju</a></li><li>Powered by <a href="http://wordpress.org/">WordPress</a></li></ul></small>
	</footer>
	<script type="text/javascript">
		jQuery("#sandwich").click(function(){
			jQuery("nav").toggle("slow");
		});
	</script>
</body>
</html>
