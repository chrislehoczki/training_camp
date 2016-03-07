
<!-- Header -->
<?php get_header(); ?>     

<!-- Intro Text -->
<div class="intro-text">
<h2> Unique Cultural Experience </h2>
<h2> This is around four lines of custom intro text that we shall create later. </h2>
<h2> This is around four lines of custom intro text that we shall create later. </h2>
<h2> This is around four lines of custom intro text that we shall create later. </h2>
</div>


<!-- Features -->

<div class="features">

  <div class="row">
  
  <?php

  $opinionPosts = new WP_Query('cat=4&posts_per_page=3&orderby=title&order=ASC'); // THIS RETURNS AN OBJECT WITH POSTS FROM OPINION CATEGORY
  //OTHER = orderby=rand - ranomd page
  // after loop 

  if ($opinionPosts -> have_posts()) :
    while ($opinionPosts -> have_posts()) : $opinionPosts -> the_post(); ?>
      <div class="col-lg-4 col-md-4 col-xs-12">
      <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
      <?php  //IMAGES
        the_post_thumbnail( 'medium' );
      ?>
      </div>
    <?php endwhile;

    else : 
      echo '<p> No Content Found </p>';

    endif;
    wp_reset_postdata();
    ?>
  
  </div>
</div>

<!-- PhotoGallery -->
<?php query_posts('p=35'); ?>
  <?php while (have_posts()) : the_post(); ?>
    <h4><?php the_title(); ?></h4>
    <?php the_content(); ?>
  <?php endwhile;?>

<!-- Video -->

<iframe src="//www.youtube.com/embed/Ji7-d1Z7xy8" 
frameborder="0" allowfullscreen class="video"></iframe>



<!-- Recent Posts/News -->

<div class="news">

  <div class="row">
  
  <?php

  $opinionPosts = new WP_Query('cat=5&posts_per_page=3&orderby=title&order=ASC'); // THIS RETURNS AN OBJECT WITH POSTS FROM OPINION CATEGORY
  //OTHER = orderby=rand - ranomd page
  // after loop 

  if ($opinionPosts -> have_posts()) :
    while ($opinionPosts -> have_posts()) : $opinionPosts -> the_post(); ?>
      <div class="col-lg-4 col-md-4 col-xs-12">
      <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
      <?php  //IMAGES
        the_post_thumbnail( 'medium' );
      ?>
      </div>
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

