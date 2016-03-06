<article class="post <?php if ( has_post_thumbnail() ) { ?>has-thumbnail<?php }?>">
	<div class="post-thumbnail">
		<a href="<?php the_permalink(); ?>">
		<?php  //IMAGES
			the_post_thumbnail('small-thumbnail');
		?>
		</div>
	</a>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
	<p class="post-info"><?php the_time('F jS, Y'); ?> | <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Posted in 

	<?php 
	$categories = get_the_category();
	$separator = ", ";
	$output = '';

	if ($categories) {
		foreach ($categories as $category) {
			//.= is +=
			$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator ;
		}
		//GETS RID OF SEPARATOR FROM END
		echo trim($output, $separator);
	}
	?>

	</p> 
		
	<!-- If searchpage or archive- show excerpt only, else if homepage, if excerpt, show excerpt, else show full content -->

	<?php if ( is_search() OR is_archive() ) { ?>
		<p>
		<?php /*the_content('Continue reading &raquo;')*/ //ADDS CUSTOM READ MORE TEXt 
		echo get_the_excerpt();?>
		<a href="<?php the_permalink() ?>"> Read more &raquo; </a>
		</p>
	
	<?php } else {

	  //IF POST HAS DEFINED EXCERPT FROM DASHBOARD - use it - otherwise do not
	if ($post->post_excerpt) { ?>
		<p>
		<?php /*the_content('Continue reading &raquo;')*/ //ADDS CUSTOM READ MORE TEXt 
		echo get_the_excerpt();?>
		<a href="<?php the_permalink() ?>"> Read more &raquo; </a>
		</p>

		<?php
	} else {
		the_content();
	} 
	}

	?>


	

	</article>