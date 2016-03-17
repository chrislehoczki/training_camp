<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title><?php bloginfo('name') ?></title>
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?> <!-- adds header code -->
	</head>
	

	<body <?php body_class() ?>>  <!-- easy access for css file -->


			<!-- social -->
	<div class="full-width">
		<ul class="social-links">
			<li><img src="<?php bloginfo('template_url'); ?>/images/social/facebook.png" alt="my photo!" /></li>
			<li><img src="<?php bloginfo('template_url'); ?>/images/social/twitter.png" alt="my photo!" /></li>
			<li><img class="brighten" src="<?php bloginfo('template_url'); ?>/images/social/Instagram.png" alt="my photo!" /></li>
			<li><img src="<?php bloginfo('template_url'); ?>/images/social/youtube.png" alt="my photo!" /></li>
	 	</ul>
 	</div>


	
		<!-- site-header -->


	<div class="container">
	<div class="content-section">
		<header class="site-header">	

			<div class="row">

				<div class="col-md-8 col-sm-12 col-xs-12">
					<div class="logo">
					
					<a href="<?php echo home_url() ?>"><img src="<?php bloginfo('template_url'); ?>/images/icon.png" 
					alt="logo for fitness camp" />
					<h1><?php bloginfo('name'); ?></h1>
					<h4> Training camp in the heart of Northern Thailand. </h4>
					</a>

					</div>

				</div>
					

				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="header-buttons">
						<button class="btn btn-primary btn-header"> Book Now </button>
						<button class="btn btn-primary btn-header"> Contact Us </button>
					</div>
				</div>
			</div>

<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand brand visible-xs-inline" href="#">
                Menu
            </a>
     </div>

        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        		'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div>
</nav>
			<!--
			<nav class="navbar site-nav">


			
			<?php
			$args = array(
			'theme_location' => 'primary'
			);
			?> 
			<?php wp_nav_menu( $args ); ?>
			</nav>

			-->



		</header>		
	</div>


	<!-- For overlay -->
	<!-- /site-header -->
