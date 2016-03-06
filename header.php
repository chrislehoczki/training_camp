<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name') ?></title>
		<?php wp_head(); ?> <!-- adds header code -->
	</head>
	

	<body <?php body_class() ?>>  <!-- easy access for css file -->
	<img class="placeholder-img" src="<?php bloginfo('template_url'); ?>/images/slide1.jpg" alt="my photo!" >
<?php 
get_template_part('slider');
?>

	<div class="container">
		<!-- site-header -->
		<header class="site-header site-nav">
			
			<!-- SEARCH FORM -->
			<!--
			<div class="hd-search">
				<?php get_search_form(); ?>
			</div>
			-->
	


			<h1><a href="<?php echo home_url() ?>"><?php bloginfo('name'); ?></a></h1>
			<h5><?php bloginfo('description') ?> 
			
			<!-- Conditional logic based on page -->
			<?php if (is_page("about-us")) {?>
				Test
			<?php }?>
			
			</h5>
			<nav class="site-header"> 
				<?php
				$args = array(
					'theme_location' => 'primary'
				);
				?> 
				<?php wp_nav_menu( $args ); ?>
			</nav>


		</header>

		<!-- /site-header -->