<?php
/*
Template Name: Paiement
*/
?>
<?php get_header();
echo do_shortcode( '[woocommerce_checkout]' ); ?>

      <!-- <main class="wrap_paiement">

      <div class="paiement_gauche_wrap">
        <div class="logo_panier_gauche">
        <i class="fa fa-cart-arrow-down panier"></i>
      </div>
        <div class="paiement_gauche">
          <h4>Votre panier</h4>
        </div>
        <div class="paiement_gauche">
              <p>Commande :</p>
          </div>
          <div class="paiement_gauche">
                <p>Article :</p>
            </div>
            <div class="paiement_gauche">
                  <p>Montant :</p>
            </div>
      </div>



        <div class="paiement_middle">
          <div class="loupe">
          <img class="logo_loupe" src="images/loupefind.png" alt="loupe">
        </div>

        <h5>Selectionner un mode de paiement</h5>
        <div class="mode_paiment">



              <div class="form-inline">

              <i class="fa fa-cc-visa"></i>
              <input type="radio" id="visa"
                 name="visacard" value="visa">
              </div>

                <div class="form-inline">

                <i class="fa fa-cc-mastercard"></i>
                <input type="radio" id="mastercard"
                   name="mastercard" value="mastercard">
                </div>

                  <div class="form-inline">

                  <i class="fa fa-cc-amex"></i>
                  <input type="radio" id="cb"
                     name="creditcard" value="creditcard">
                  </div>

                    <div class="form-inline">

                    <i class="fa fa-cc-paypal"></i>
                    <input type="radio" id="paypal"
                       name="paypal" value="paypal">
                    </div>


          </div>

          <div class="mode_de_paiement">
          <label for="">Numéro de la carte</label>
              <div class="">
                <input class="input_custom_paiement" type="text">
              </div>

          <label for="" class="loggins">Titulaire de la carte</label>
              <div class="">
                <input class="input_custom_paiement" type="text">
              </div>

          <label for="" class="loggins">Date d'expiration</label>
              <div class="">
                <input class="input_custom_paiement_crypto" type="date">
              </div>

          <label for="" class="loggins">Cryptogramme</label>
              <div class="">
                <input class="input_custom_paiement_crypto" type="text">
              </div>
          </div>

          <div class="paiement_button_confirm">
          <input class="button_paiement" type="submit" name="envoyer" value="Confirmer">
        </div>

          <div class="checkbox_paiement">
          <input type="checkbox" id="infos" name="save" value="saveinfos">Se souvenir de mes informations bancaires?
        </div>
        </div>

      </main> -->


<?php get_footer();?>
