<?php get_header(); ?>

 

<div class="banner-top-homepage">
  <div class="date-banner">
    <h4>7ème édition</h4>
    <h3>du 5 au 8 Août 2017</h3>
  </div>
  <div class="banner-container primary-section">
    <h3>Parc Monceaux</h3>
    <h1>Festival des Films de Plein Air</h1>
    <a href="#festival" class="btn btn-custom">Commencez la visite</a>
  </div>
</div>

<section id="festival">
  <div class="container">
    <div class="row">
      <div class="col-md-5 text-container">
        <div class="section-title">
          <h2>Le festival</h2>
          <hr>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae elit condimentum, blandit ligula at, gravida elit. Ut at mi quis purus vulputate ornare egestas sit amet mauris.
          Curabitur dictum odio non finibus luctus. Quisque id quam pellentesque, tempor purus eget, bibendum nunc. In dapibus bibendum erat, vitae volutpat risus.
        </p>
        <div class="section-link">
          <a href="festival.html" class="btn btn-custom">Voir Plus</a>
          <p>Découvrez notre festival</p>
        </div>
      </div>

      <div class="col-md-5 col-md-offset-2 picture-container">
        <figure>
          <img src="<?php echo get_image_theme_path('festival-section.jpg'); ?>" alt="">
        </figure>
      </div>
    </div>
  </div>

</section>

<section id="actuality">
  
  <?php if (have_posts()) {  ?>

  <div class="container">
    <div class="row">

      <div class="section-title col-md-6">
        <h2>Les actualités du festival</h2>
        <hr>
      </div>

      <div class="col-md-6">
        <div class="section-link">
          <p>Retrouvez toute l'actualité du festival</p>
          <a href="actuality.html" class="btn btn-custom">Voir Plus</a>
        </div>
      </div>
    </div>

    <div class="row">

    <?php while (have_posts()) {
      the_post();
    ?>

    
      <div class="col-md-4">
        <figure class="figure-1">
          <img src="<?php echo get_image_theme_path('actualite2.jpg'); ?>" alt="">
          <figcaption class="caption">
            <div class="blur"></div>
            <div class="caption-text">
              <a href="template-article.html">
                <h4><?php the_title(); ?></h4>
                <p><?php the_excerpt(); ?></p>
              </a>
            </div>
          </figcaption>
        </figure>
      </div>
    
    <?php } ?> <!--endwhile-->
    </div>
  </div>
  <?php } ?>  <!--endif-->
     
  
</section>

<section id="contact">
  <div class="container">
    <div class="row contact-content">

      <div class="col-md-8">
        <div class="section-title">
          <h2>contact: <span>vous avez une question ?</span></h2>
          <hr>
        </div>
      </div>

      <div class="col-md-4 action-button-container">
        <a href="contact.html" class="btn btn-custom">Contactez-nous</a>
      </div>

    </div>
  </div>

</section>

<section id="day-projections">
  <div class="container">
    <div class="row">

      <div class="col-md-5"> <!-- colonne de gauche-->

        <div class="cf-margin-bottom">
          <div class="text-container">
            <div class="section-title">
              <h2>les projections du jour</h2>
              <hr>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum, erat ut hendrerit tincidunt, tortor diam vestibulum nunc, in vestibulum augue erat quis nibh.
              Proin a tortor blandit nisi finibus pulvinar. Sed dictum diam id elit porttitor, sit amet pretium metus interdum. In in molestie velit. Aenean sed diam faucibus.</p>
            </div>
          </div>

          <div class="cf-margin-bottom">
            <figure class="figure-2">
              <img src="<?php echo get_image_theme_path('phenomenes.jpg'); ?>" alt="">
              <figcaption class="caption">
                <div class="blur"></div>
                <div class="action-button-container">
                  <a href="template-film.html" class="btn btn-custom">Plus de détails</a>
                </div>
              </figcaption>
            </figure>
          </div>

          <div class="section-link">
            <a href="programmation.html" class="btn btn-custom">Voir Plus</a>
            <p>Retrouvez tous les films du festival</p>
          </div>

        </div>


        <div class="col-md-5 col-md-offset-2"> <!-- colonne de doite-->

          <div class="cf-margin-bottom">
            <figure class="figure-2">
              <img src="<?php echo get_image_theme_path('interstellar2.jpg'); ?>" alt="">
              <figcaption class="caption">
                <div class="blur"></div>
                <div class="action-button-container">
                  <a href="template-film.html" class="btn btn-custom">Plus de détails</a>
                </div>
              </figcaption>
            </figure>
          </div>


            <figure class="figure-2">
              <img src="<?php echo get_image_theme_path('requiem.jpg'); ?>" alt="">
              <figcaption class="caption">
                <div class="blur"></div>
                <div class="action-button-container">
                  <a href="template-film.html" class="btn btn-custom">Plus de détails</a>
                </div>
              </figcaption>
            </figure>

        </div>
      </div>
    </div>
  </section>

  <section id="partners">
    <div class="container">
      <div class="row">
        <div class="section-title">
          <h2>Nos partenaires</h2>
          <hr>
        </div>

        <ul class="partners-container list-inline">
          <li><img src="<?php echo get_image_theme_path('partner1.png'); ?>" alt=""></li>
          <li><img src="<?php echo get_image_theme_path('partner2.png'); ?>" alt=""></li>
          <li><img src="<?php echo get_image_theme_path('partner3.png'); ?>" alt=""></li>
          <li><img src="<?php echo get_image_theme_path('partner4.png'); ?>" alt=""></li>
          <li><img src="<?php echo get_image_theme_path('partner5.png'); ?>" alt=""></li>
          <li><img src="<?php echo get_image_theme_path('partner6.png'); ?>" alt=""></li>
          <li><img src="<?php echo get_image_theme_path('partner7.png'); ?>" alt=""></li>
          <li><img src="<?php echo get_image_theme_path('partner8.png'); ?>" alt=""></li>
          <li><img src="<?php echo get_image_theme_path('partner9.png'); ?>" alt=""></li>
        </ul>
      </div>

    </div>
  </section>

  <?php get_footer(); ?>
