<footer class="site-footer">

	<div class="footer-widgets clearfix">

	<?php if (is_active_sidebar('footer1')) : ?>
		<div class="footer-widget-area footer1">
		<ul>
		<?php dynamic_sidebar('footer1'); ?>
		</ul>
		</div>
	<?php endif; ?>

	<?php if (is_active_sidebar('footer2')) : ?>
		<div class="footer-widget-area">
		<ul>
		<?php dynamic_sidebar('footer2'); ?>
		</ul>
		</div>
	<?php endif; ?>

	<?php if (is_active_sidebar('footer3')) : ?>
		<div class="footer-widget-area">
		<ul>
		<?php dynamic_sidebar('footer3'); ?>
		</ul>
		</div>
	<?php endif; ?>



	</div>

	<nav class="site-nav"> 
	<?php
	$args = array(
		'theme_location' => 'footer'
	);
	?> 
	<?php wp_nav_menu( $args ); ?>
	</nav>


	<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y') ?></p>
</footer>

</div>

<?php wp_footer(); ?><!-- for plugins in the future will overwrite--> 
</body>
</html>