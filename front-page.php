
<!-- Header -->
<?php get_header(); ?>     

<!-- Intro Text -->
<div class="intro-text">
<h2> <strong> A Unique Training Experience </strong></h2>
<h3> Smooth roads, mountain trails, olympic size pools and performance nutrition. </h3>
<h3> Take control and develop a renewed and deep passion for your sport </h3>
</div>


<!-- Features -->

<div class="features">
  <h1 class="frontpage-subheading"> We Offer </h1>
  <div class="row">
  <?php

  $opinionPosts = new WP_Query('cat=4&posts_per_page=3&orderby=title&order=ASC'); // THIS RETURNS AN OBJECT WITH POSTS FROM OPINION CATEGORY
  //OTHER = orderby=rand - ranomd page
  // after loop 

  if ($opinionPosts -> have_posts()) :
    while ($opinionPosts -> have_posts()) : $opinionPosts -> the_post(); ?>
      <a href="<?php the_permalink() ?>">
      <div class="col-lg-4 col-md-4 col-xs-12 feature-single">
      <h2><?php the_title() ?></h2>
      <?php  //IMAGES
        the_post_thumbnail( 'medium' );
      ?>
      </div>
      </a>
    <?php endwhile;

    else : 
      echo '<p> No Content Found </p>';

    endif;
    wp_reset_postdata();
    ?>
  
  </div>
</div>

<!-- PhotoGallery -->
<div class="frontpage-photo-gallery">
<h1 class="frontpage-subheading"> Unique Experiences </h1>
<?php query_posts('p=35'); ?>
  <?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile;?>
</div>

<!-- Video -->
<div class="frontpage-video">
<h1 class="frontpage-subheading"> Excitement and Adventure </h1>
<iframe src="//www.youtube.com/v/Ji7-d1Z7xy8" 
frameborder="0" allowfullscreen class="video"></iframe>
</div>


<!-- Recent Posts/News -->

<div class="news">
  <h1 class="frontpage-subheading"> Recent News </h1>
  <div class="row">
  
  <?php

  $opinionPosts = new WP_Query('cat=5&posts_per_page=3&orderby=title&order=ASC'); // THIS RETURNS AN OBJECT WITH POSTS FROM OPINION CATEGORY
  //OTHER = orderby=rand - ranomd page
  // after loop 

  if ($opinionPosts -> have_posts()) :
    while ($opinionPosts -> have_posts()) : $opinionPosts -> the_post(); ?>
      <a href="<?php the_permalink() ?>">
      <div class="col-lg-4 col-md-4 col-xs-12">
      <h2><?php the_title() ?></h2>
      <?php  //IMAGES
        the_post_thumbnail( 'medium' );
      ?>
      </div>
      </a>
    <?php endwhile;

    else : 
      echo '<p> No Content Found </p>';

    endif;
    wp_reset_postdata();
    ?>
  
  </div>
</div>

<!--
<?php

if (have_posts()) :
  while (have_posts()) : the_post(); ?>
  
  <article class="post page">

  <?php the_content() ?>
  </article>


  <?php endwhile;

  else : 
    echo '<p> No Content Found </p>';

  endif; ?>

  -->

<!-- Footer Nav with Widgets -->

<!-- Footer -->

<?php
get_footer();
?>



<!--

<?php

$opinionPosts = new WP_Query('cat=5&posts_per_page=2&orderby=title&order=ASC'); // THIS RETURNS AN OBJECT WITH POSTS FROM OPINION CATEGORY
//OTHER = orderby=rand - ranomd page
// after loop 

if ($opinionPosts -> have_posts()) :
  while ($opinionPosts -> have_posts()) : $opinionPosts -> the_post(); ?>
    <h2><?php the_title() ?></h2>
  <?php endwhile;

  else : 
    echo '<p> No Content Found </p>';

  endif;
  wp_reset_postdata();
  ?>


<?php

$opinionPosts = new WP_Query('cat=4&posts_per_page=3&orderby=title&order=ASC'); // THIS RETURNS AN OBJECT WITH POSTS FROM OPINION CATEGORY
//OTHER = orderby=rand - ranomd page
// after loop 

if ($opinionPosts -> have_posts()) :
  while ($opinionPosts -> have_posts()) : $opinionPosts -> the_post(); ?>
    <h2><?php the_title() ?></h2>
  <?php endwhile;

  else : 
    echo '<p> No Content Found </p>';

  endif;
  wp_reset_postdata();
  ?>

-->

