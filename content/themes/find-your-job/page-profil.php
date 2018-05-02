
<?php
/*
Template Name: Profil
*/
?>
<?php get_header();?>

<main class="main_profil">

  
           <?php echo do_shortcode('[ultimatemember form_id=201"]'); ?>
  <div class="wrap_content">


<div class="gauche">

  <div class="background_brown">
    <h2 class="profil_title_div">Identifiants</h2>
  </div>

      <div class="wrap_iden">

            <div class="wrap_label">
              <label for="">Adresse mail</label>
                <div class="wrap_input">
                  <input type="text" name="" value="">
                </div>
            </div>

            <div class="wrap_label">
              <label for="">Password</label>
                <div class="wrap_input">
                  <input type="text" name="" value="">
                </div>
            </div>
          </div>

  <div class="background_brown brown">
    <h2 class="profil_title_div">Information personneles</h2>
  </div>

      <div class="wrap_info_perso">

            <div class="wrap_logo"><i class="fa fa-user user"></i>
            </div>

            <div class="wrap_info_milieu">
                    <div class="test">

                    <label class="loggins" for="">Civilité</label>
                  <div class="radio">
                    <input type="radio" name="civi1" value="Mme" /> M.
                    <input type="radio" name="civi2" value="Mlle" /> Mme
                  </div>
                </div>

                  <label for="" class="loggins">Nom</label>
                <div class="">
                  <input type="text">
                </div>

                <label for="" class="loggins">Prénom</label>
                <div class="">
                  <input type="text">
                </div>
              </div> <!-- wrap_info_milieu -->

              <div class="wrap_info_droite">

                  <label for="" class="loggins">Date de naissance</label>
                      <div class="">
                        <input class="input_custom" type="date">
                      </div>

                      <label for="" class="loggins">Téléphone</label>
                      <div class="">
                        <input class="input_custom" type="text">
                      </div>

              </div><!-- wrap_info_droite -->
      </div>


      <div class="background_brown brown">
        <h2 class="profil_title_div">Information sur la société</h2>
      </div>
            <div class="wrap_info_societe">

                  <label for="" class="wrap_societe">Raison social</label>
                      <div class="">
                        <input class="input_custom" type="text">
                      </div>

                  <label for="" class="wrap_societe">N°TVA</label>
                      <div class="">
                        <input class="input_custom" type="text">
                      </div>

                  <label for="" class="wrap_societe">Numéro Siret</label>
                      <div class="">
                        <input class="input_custom" type="text">
                      </div>


          </div>


        <div class="background_brown brown">
          <h2 class="profil_title_div">Coordonées</h2>
        </div>
            <div class="wrap_info_coordonees">
              <div class="button_coordonees">

                <label for="" class="wrap_coordonees">Adresse(n° et rue)</label>
                    <div class="">
                      <input class="input_custom_coordonnees" type="text">
                    </div>

                <label for="" class="wrap_coordonees">Complément d'adresse</label>
                    <div class="">
                      <input class="input_custom_coordonnees" type="text">
                    </div>

                <label for="" class="wrap_coordonees">Code postal</label>
                    <div class="">
                      <input class="input_custom" type="text">
                    </div>

                <label for="" class="wrap_coordonees">Ville</label>
                    <div class="">
                      <input class="input_custom" type="text">
                    </div>



              <div class="checkbox_profil">
                <input class="checkbox_profil" type="checkbox">Je souhaite m'inscrire à la newsletter et recevoir par e-mail les promotions et les réductions exclusives !
              </div>

              <div class="button_send_profil">
                <input class="button_envoyer_profil" type="submit" value="Envoyer">
              </div>


          </div>
        </div>

      </div>


<?php get_template_part('template-parts/sidebar/sidebar_paie'); // sidebar?>


</div>
    </main>

<?php get_footer();?>
