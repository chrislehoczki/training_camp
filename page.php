

<?php

get_header();
?>



<?php


if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
	<article class="">

	<div class="content-section">
		<div class="row post-header">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="post-header-img">
					<?php the_post_thumbnail('post-header'); ?>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<h1 class="post-title"><?php the_title() ?></h1>
			</div>
		</div>
	</div>
	
	<div class="content-section">
		<div class="post-content">
			<?php the_content() ?>
		</div>
	</div>
	
	</article>


	<?php endwhile;

	else : 
		echo '<p> No Content Found </p>';

	endif;
?>


<?php
get_footer();
?>