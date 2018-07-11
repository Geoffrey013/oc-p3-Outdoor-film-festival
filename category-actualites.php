<?php get_header(); ?>

<div class="banner-top actuality-banner">
  <div class="banner-container primary-section">
    <h1>Actualités</h1>
  </div>
</div>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8">

        <?php if (have_posts()) {
          while (have_posts()) {
            the_post();
            ?>

            <div class="row article-preview">
              <div class="col-sm-3 article-picture-preview">
                <figure>
                 <a href="<?php the_permalink(); ?>" alt="article-thumbnail"><?php the_post_thumbnail( 'full' ); ?></a>
               </figure>
             </div>

             <div class="col-sm-8 article-text-preview">
              <div class="article-title">
                <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
              </div>

              <div class="article-excerpt">
               <?php the_excerpt(); ?>
               <a href="<?php the_permalink(); ?>" style="display: inline;">Lire la suite</a>
             </div>

             <div class="article-publication-details">
              <ul class="list-inline">
                <li>par <a href="#"><?php the_author(); ?></a></li>
                <li class="separate-bar"><?php echo get_the_date(); ?></li>
              </ul>
            </div>
          </div>
        </div>

        <?php
      } 
    }
    ?>

  </div>


  <aside class="col-md-4 sidebar">

    <h3>Diffusions du jour</h3>

    <figure class="figure-2">
      <img src="<?php echo get_image_theme_path('interstellar2.jpg'); ?>" alt="">
      <figcaption class="caption">
        <div class="blur"></div>
        <div class="action-button-container">
          <a href="http://localhost/festival/film/" class="btn btn-custom">Plus de détails</a>
        </div>
      </figcaption>
    </figure>

    <figure class="figure-2">
      <img src="<?php echo get_image_theme_path('phenomenes.jpg'); ?>" alt="">
      <figcaption class="caption">
        <div class="blur"></div>
        <div class="action-button-container">
          <a href="http://localhost/festival/film/" class="btn btn-custom">Plus de détails</a>
        </div>
      </figcaption>
    </figure>

    <figure class="figure-2">
      <img src="<?php echo get_image_theme_path('requiem.jpg'); ?>" alt="">
      <figcaption class="caption">
        <div class="blur"></div>
        <div class="action-button-container">
          <a href="http://localhost/festival/film/" class="btn btn-custom">Plus de détails</a>
        </div>
      </figcaption>
    </figure>
  </aside>
</div>


</div>

</section>

<?php get_footer(); ?>