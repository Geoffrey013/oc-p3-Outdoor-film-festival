<?php get_header(); ?>


<div class="banner-top film-banner">
  <div class="blur"></div>
  <div class="banner-container primary-section">
    <h1>interstellar</h1>
  </div>

</div>

<div id="reservation" class="film-reservation-container">

  <form  class="film-reservation" action="index.html" method="post">
    <h3>Inscrivez-vous pour ce film</h3>

    <div class="form-group">
      <label class="sr-only" for="name-reservation">Prénom</label>
      <input type="text" class="form-control" id="name-reservation" placeholder="Prénom">
    </div>

    <div class="form-group">
      <label class="sr-only" for="familyname-reservation">Nom</label>
      <input type="text" class="form-control" id="familyname-reservation" placeholder="Nom">
    </div>

    <div class="form-group">
      <label class="sr-only" for="email-reservation">Adresse email</label>
      <input type="email" class="form-control" id="email-reservation" placeholder="Email">
    </div>

    <div class="form-group">
      <label class="sr-only" for="phone-reservation">Numéro de téléphone</label>
      <input type="phone" class="form-control" id="phone-reservation" placeholder="Numéro de téléphone">
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-default btn-custom">Réserver</button>
    </div>
  </form>

</div>

<section id="film-date">
  <div class="container">
    <div class="row">
      <div class="col-md-6">

        <div class="section-title">
          <h2>date</h2>
          <hr>
        </div>

        <div class="text-container">
          <p>Votre film sera diffusé le:</p>
          <p>05/08 à 18h00</p>
        </div>

      </div>
    </div>
  </div>
</section>

<section id="film-synopsis">
  <div class="container">
    <div class="row">
      

      <div class="col-md-5 col-xs-12">
        <figure>
          <div>
            <img src="<?php echo get_image_theme_path('interstellar2.jpg') ?>" alt="">
          </div>
        </figure>
      </div>
      <div class="col-md-5 col-md-offset-2 col-xs-12">

        <div class="section-title">
          <h2>Synopsis</h2>
          <hr>
        </div>

        <div class="text-container">
          <p>La planète Terre se meurt par trop de pollution et de gaspillage des ressources naturelles. Cooper est un ancien de la Nasa. Veuf et soucieux de l'environnement, il essaie de mener une vie normale auprès de ses enfants à la campagne. Pendant ce temps, les autorités ont découvert un tunnel cosmique qui permettrait de trouver une nouvelle planète, susceptible d'accueillir les humains. Cooper doit laisser sa famille et prendre les commandes d'une navette. Dans ce voyage périlleux en dehors de la galaxie, il est accompagné par deux autres explorateurs, Brand et Doyle. Conscients de l'importance de leur mission, ils ne sont pas sûrs de rentrer vivants...</p>
        </div>
      </div>
    </div>

  </section>

  <section id="film-actors">
    <div class="container">

      <div class="row">
        <div class="col-xs-12">
          <div class="section-title">
            <h2>Acteurs principaux</h2>
            <hr>
          </div>
        </div>
      </div>

      <div class="row">

        <div class="col-md-3 col-xs-6">
          <figure>
            <div class="overflow-container">
              <img src="<?php echo get_image_theme_path('acteur1.jpg') ?>" alt="">
            </div>
            <figcaption>
              <h4>Matthew McConaughey</h4>
              <p>Joseph Cooper</p>
            </figcaption>
          </figure>
        </div>

        <div class="col-md-3 col-xs-6">
          <figure>
            <div class="overflow-container">
              <img src="<?php echo get_image_theme_path('acteur2.jpg') ?>" alt="">
            </div>

            <figcaption>
              <h4>Anne Hathaway</h4>
              <p>Amélia Brand</p>
            </figcaption>
          </figure>
        </div>

        <div class="col-md-3 col-xs-6">

          <figure>
            <div class="overflow-container">
              <img src="<?php echo get_image_theme_path('acteur3.jpg') ?>" alt="">
            </div>
            <figcaption>
              <h4>Jessica Chastain</h4>
              <p>Murphy Cooper</p>
            </figcaption>
          </figure>
        </div>

        <div class="col-md-3 col-xs-6">
          <figure>
            <div class="overflow-container">
              <img src="<?php echo get_image_theme_path('acteur4.jpg') ?>" alt="">
            </div>
            <figcaption>
              <h4>Matt Damon</h4>
              <p>Dr Mann</p>
            </figcaption>
          </figure>
        </div>
      </div>
    </section>

    <section id="film-details">


      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="section-title">
              <h2>Détails</h2>
              <hr>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <table class="table table-condensed">
              <tr>
                <th>Réalisation</th>
                <td>Christopher Nolan</td>
              </tr>

              <tr>
                <th>Date de sortie</th>
                <td>5 Novembre 2014 (France)</td>
              </tr>

              <tr>
                <th>Genre</th>
                <td>Science fiction, Drame</td>
              </tr>

              <tr>
                <th>Nationnalité</th>
                <td>Américaine</td>
              </tr>

              <tr>
                <th>Durée</th>
                <td>2h49</td>
              </tr>
            </table>
          </div>


          <div class="col-sm-6">
            <div class="section-link">
              <p>Inscrivez vous dès maintenant pour ce film</p>
              <a href="#reservation" class="btn btn-custom">S'inscrire</a>
            </div>
          </div>

        </div>

      </div>
    </section>


    <?php get_footer() ?>