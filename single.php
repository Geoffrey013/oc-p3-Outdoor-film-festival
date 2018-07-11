<?php get_header(); ?>

<?php if (have_posts()) {
  while (have_posts()) {
    the_post();
    the_post_thumbnail_url( 'full' );

    ?>

    <?php if ($thumbnail_html = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full')) {
      $thumbnail_src = $thumbnail_html['0']; ?>

      <div class="article-presse-banner banner-top" style="<?php echo 'background:url('.$thumbnail_src.') no-repeat bottom center; background-size: cover;'?> ");">
        <div class="blur"></div>
      </div>  
      <div class="article-presse-heading">

        <div class="article-title">
          <h1><?php the_title(); ?></h1>
        </div>

        <div class="article-infos">
          <p><?php the_author(); ?> - <?php the_date(); ?> - Actualités</p>
        </div>

      </div>

      <?php 
    } ?>

    

    <section id="article-presse">
     <div class="article-container container">


      <div class="row">
        <article class="col-sm-8 col-xs-12 article-news">

          <div class="article-presse-content">

            <?php the_content(); ?>

            <?php
          } 
        }
        ?>      

        <div class="article-presse-footer">
          <div class="comments">
          <?php echo get_post_meta($post->ID, 'movie_thumbnail', true); ?> 
          </div>


          <div class="socials-share">
            <h4>partagez sur les réseaux sociaux</h4>
            <ul class="list-inline">
              <li>
                <a href="#" class="btn btn-info"><i class="fa fa-twitter" aria-hidden="true"></i>Partager</a>
              </li>

              <li>
                <a href="#" class="btn btn-primary"><i class="fa fa-facebook" aria-hidden="true"></i>Partager</a>
              </li>

              <li>
                <a href="#" class="btn btn-danger"><i class="fa fa-google-plus" aria-hidden="true"></i>Partager</a>
              </li>
            </ul>
          </div>

          <ul class="machin-pager list-inline">

          <?php 
            $prev = get_permalink(get_adjacent_post(false,'',true));
            $next = get_permalink(get_adjacent_post(false,'',false));

            if ($prev != get_permalink()) { ?>
              <li class="pull-left"><a class="btn-custom" href="<?php echo $prev; ?>">Article précédent</a></li>
            <?php } ?>

            <?php if ($next != get_permalink()) { ?>
              <li class="pull-right"><a class="btn-custom" href="<?php echo $next; ?>">Article suivant</a></li>
            <?php } ?>

          </ul>


       </div>  
     </article>

     <aside class="sidebar col-sm-4 col-xs-12">

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
