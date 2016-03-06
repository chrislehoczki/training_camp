

<?php get_header(); ?>     


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

<!-- WP QUERY TEST -->

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

  <!-- WP QUERY TEST 2 -->

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

<?php
get_footer();
?>

