<?php get_header(); ?>

 <?php if (have_posts()) {
        while (have_posts()) {
          the_post();
        ?>

        <div class="banner-top">
          <div class="blur"></div>
          <div class="banner-container primary-section">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>

        <section>
          <div class="container">
            <div class="row">
                
             <?php the_content(); ?>

            </div>
          </div>
        </section>

 <?php
       } 
      }
 ?>

<?php get_footer(); ?>
