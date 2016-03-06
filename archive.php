

<?php

get_header();

if (have_posts()) :

	?>
	
	<h2> <?php 
	if (is_category()) {
		single_cat_title(); //get cat name
	}
	else if (is_tag()) {
		single_tag_title(); //no tags yet but useful
	}
	else if (is_author()) {
		the_post(); //LOADS POST
		echo 'Author Archive: ' . get_the_author();
		rewind_posts(); //allows loop to continue running
	}
	else if (is_day()) {
		echo 'Daily Archive: ' . get_the_date();
	}
	else if (is_month()) {
		echo 'Monthly Archives: ' . get_the_date('F Y');
	}
	else if (is_year()) {
		echo 'Monthly Archives: ' . get_the_date('Y');
	}
	else  {
		echo 'Archives';
	}



	?> </h2>

	<?php
	while (have_posts()) : the_post(); 
	
	get_template_part('content', get_post_format());

	endwhile;

	else : 
		echo '<p> No Content Found </p>';

	endif;

get_footer();
?>