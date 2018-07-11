<?php get_header() ?>

<div class="banner-top contact-banner">
  <div class="blur"></div>
  <div class="banner-container primary-section">
    <h1>Contact</h1>
  </div>
</div>

<section id="contact-info-container">
  <div class="container">
    <div class="row">
      <div class="col-md-4 info-contact">
        <div class="section-title">
          <h3>contact info</h3>
        </div>

        <div class="row">
          <ul class="col-md-12">
            <li><a href="callto:0142273956"><i class="fa fa-phone fa-2x" aria-hidden="true"></i>01 42 27 39 56</a></li>
            <li><a href="mailto:?&body=https://www.parisinfo.com/musee-monument-paris/71356/Parc-Monceau&subject=Parc%20Monceau"><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i>lesfilmsdepleinair@gmail.com</a></li>
            <li><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i><p>35 Boulevard de Courcelles,</p><p>75008 Paris</p></li>
          </ul>
        </div>
      </div>

      <div class="col-md-8 form-contact">
        <div class="row">
          <div class="col-md-12">
            <div class="section-title">
              <h3>contactez nous</h3>
            </div>
          </div>
        </div>

        <form>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="sr-only" for="exampleInputEmail3">Nom</label>
                <input type="text" class="form-control input-lg" id="exampleInputEmail3" placeholder="Nom">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label class="sr-only" for="exampleInputPassword3">Mail</label>
                <input type="email" class="form-control input-lg" id="exampleInputPassword3" placeholder="Mail">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <textarea class="form-control input-lg" rows="6" placeholder="Message"></textarea>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <button type="submit" class="btn btn-default btn-custom">envoyer</button>
              </div>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
</section>

<section id="practical-informations">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="road access-container">
          <h3>accès par la route</h3>

          <div>
            <p><strong>Paris 445 km</strong> – A10 sortie Poitiers-sud</p>
            <p><strong>Bordeaux 120 km</strong> – RN 10 direction Paris</p>
            <p><strong>La Rochelle 140 km</strong> – RN 141</p>
            <p><strong>Cognac 40 km</strong> – RN 141</p>
          </div>
        </div>

        <div class="train access-container">
          <h3>accès par le train</h3>

          <div>
            <p><strong>Paris-Gare Montparnasse</strong> – 2h20</p>
            <p><strong>Bordeaux-St Jean</strong> – 0h50</p>
            <a href="www.voyages-sncf.com" class="btn btn-custom">Site Sncf</a>
          </div>
        </div>
      </div>


      <div class="col-md-6 bordered-container">
        <div class="flight access-container">
          <h3>accès par avion</h3>

          <div>
            <p><strong>Angoulême - Cognac - International</strong></br>+33 (0)5 45 69 88 09 www.aeroport-angouleme-cognac.com</p>
            <p><strong>Bordeaux – Merignac – Aéroport international</strong></br>+33 (0)5 56 34 50 50 www.bordeaux.aeroport.fr</p>
          </div>
        </div>

        <div class="restaurants access-container">
          <h3>restaurants partenaires</h3>

          <p><strong>Angoulême - Cognac - International</strong></br>+33 (0)5 45 69 88 09 www.aeroport-angouleme-cognac.com</p>
          <p><strong>Bordeaux – Merignac – Aéroport international</strong></br>+33 (0)5 56 34 50 50 www.bordeaux.aeroport.fr</p>

        </div>
      </div>


    </div>
  </section>

  <section id="contact-map-container">
    <div class="container">
      <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.8735531366538!2d2.306766315834598!3d48.87968700716073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fbe98f714c3%3A0xe62425fddeddc402!2sParc+Monceau!5e0!3m2!1sfr!2sfr!4v1497653175400" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </section>

<?php get_footer() ?>
