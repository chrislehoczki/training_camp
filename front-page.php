
<!-- Header -->
<?php get_header(); ?>     

<!-- SLIDER WITH INFO -->



<div class="content-section flexslider-holder">
<?php get_template_part("slider") ?>
</div>




<!-- RUN BIKE SWIM -->


  <div class="features">


    <div class="row">
    <?php

    $featurePosts = new WP_Query('cat=4&posts_per_page=3&orderby=title&order=ASC'); // THIS RETURNS AN OBJECT WITH POSTS FROM OPINION CATEGORY
    //OTHER = orderby=rand - ranomd page
    // after loop 

    if ($featurePosts -> have_posts()) :
      while ($featurePosts -> have_posts()) : $featurePosts -> the_post(); ?>
        
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 feature-single">
        <div class="content-section">
        <a href="<?php the_permalink() ?>"><h2><?php the_title() ?></h2>
        <?php  //IMAGES
          the_post_thumbnail( 'medium' );
        ?>
        </a>
        <p>
        <?php  //IMAGES
          the_excerpt();
        ?>
        </p>
        <a href="<?php the_permalink() ?>"> Read More </a>
        </div>
        </div>
      <?php endwhile;

      else : 
        echo '<p> No Content Found </p>';

      endif;
      wp_reset_postdata();
      ?>
    
    </div>
  </div>


<!-- DESCRIPTION -->

<div class="content-section">
  <div class="row">
    <div class="col-md-9">
      <div class="frontpage-intro"> 
      <?php
        if (have_posts()) :
          while (have_posts()) : the_post(); ?>

          <div class="frontpage-content">
            <?php the_content() ?>
          </div>

      <?php endwhile;
      endif;
    ?>
      </div> 
    </div>
    <div class="col-md-3">
      <div class="frontpage-testimonials"> 
     <h1> Testimonials </h1> 

      <?php
      $new = new WP_Query('post_type=testimonial');
        while ($new->have_posts()) : $new->the_post(); ?>

        <p><?php the_title() ?></p>
        <p>
        <?php  //IMAGES
          the_content();
        ?>
        </p>

      <?php
        endwhile;

        ?>
      </div> 
    </div>
  </div>
</div>

<!-- News -->

<div class="content-section">
<div class="frontpage-news">
<h1> Recent News </h1>
<div class="row">
<?php

  $opinionPosts = new WP_Query('cat=5&posts_per_page=3&orderby=title&order=ASC'); // THIS RETURNS AN OBJECT WITH POSTS FROM OPINION CATEGORY
  //OTHER = orderby=rand - ranomd page
  // after loop 

  if ($opinionPosts -> have_posts()) :
    while ($opinionPosts -> have_posts()) : $opinionPosts -> the_post(); ?>
      <div class="news-item">
        <a href="<?php the_permalink() ?>">
          <div class="col-lg-4 col-md-4 col-xs-12">
          <h3><?php the_title() ?></h3>
          <?php  //IMAGES
            the_post_thumbnail( 'medium' );
          ?>
          </div>
        </a>
      </div>
    <?php endwhile;

    else : 
      echo '<p> No Content Found </p>';

    endif;
    wp_reset_postdata();
    ?>
</div>
</div>
</div>


<!-- FOOTER -->

<?php get_footer(); ?>  



    <!-- SAVE THIS QUERY FOR LATER BASED ON POST TYPE
     <?php

      $args = array(
      'post_type' => 'post',
      'tax_query' => array(
      'relation' => 'OR',
      array(
      'taxonomy' => 'category',
      'field'    => 'slug',
      'terms'    => array( 'quotes' ),
      ),
      array(
      'taxonomy' => 'post_format',
      'field'    => 'slug',
      'terms'    => array( 'post-format-quote' ),
      ),
      ),
      );


    
        

      $testimonials = new WP_Query( $args );
    //OTHER = orderby=rand - ranomd page
    // after loop 

    if ($testimonials -> have_posts()) :
      while ($testimonials -> have_posts()) : $testimonials -> the_post(); ?>
      
        <p><?php the_title() ?></p>
        <p>
        <?php  //IMAGES
          the_excerpt();
        ?>
        </p>

      <?php endwhile;

      else : 
        echo '<p> No Content Found </p>';

      endif;
      wp_reset_postdata();
      ?>
      -->