

<footer class="site-footer">
	

		<div class="row">
		
			<div class="col-lg-4 col-md-4">
			<div class="content-section">
			<div class="footer-widget">
			<img class="footer-icon" src="<?php bloginfo('template_url'); ?>/images/social/Instagram.png" alt="my photo!" />
				<?php if (is_active_sidebar('footer1')) : ?>
					<div class="footer-widget-area footer1">
					<ul>
					<?php dynamic_sidebar('footer1'); ?>
					</ul>
					</div>
				<?php endif; ?>
			</div>
			</div>
			</div>

			<div class="col-lg-4 col-md-4 col-xs-12">
			<div class="content-section">
				<div class="footer-widget">
				<img class="footer-icon" src="<?php bloginfo('template_url'); ?>/images/social/facebook.png" alt="my photo!" />
				<?php if (is_active_sidebar('footer2')) : ?>
					<div class="footer-widget-area">
					<ul>
					<?php dynamic_sidebar('footer2'); ?>
					</ul>
					</div>
				<?php endif; ?>
				</div>
			</div>
			</div>
			
			<div class="col-lg-4 col-md-4 col-xs-12 footer-widget">
			<div class="content-section">
			<div class="footer-widget">
			<img class="footer-icon" src="<?php bloginfo('template_url'); ?>/images/social/twitter.png" alt="my photo!" />
				<?php if (is_active_sidebar('footer3')) : ?>
					<div class="footer-widget-area">
					<ul>
					<?php dynamic_sidebar('footer3'); ?>
					</ul>
					</div>
				<?php endif; ?>
				</div>
			</div>
			</div>


	</div>	


	<div class="content-section" id="bottom-footer">
		<ul>
		<li> <p> Created by Chris Phillips @chrispwebdev </p></li>
		<li> <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y') ?></p></li>

		</ul>
	</div>
</footer>
</div>
<!-- end of container -->


<?php wp_footer(); ?><!-- for plugins in the future will overwrite--> 
</body>
</html>