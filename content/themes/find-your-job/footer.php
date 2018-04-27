
 <!--Footer-->
      <footer class="page-footer stylish-color-dark pt-4 mt-4">
          <!--Footer Links-->
          <div class="container text-center text-md-left">
              <!-- Footer links -->
              <div class="row text-center text-md-left mt-4 pb-4">
                  <!--First column-->
                  <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
                      <h6 class="text-uppercase mb-4 font-weight-bold">Texte  </h6>
                      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                  </div>
                  <!--/.First column-->
                  <hr class="w-100 clearfix d-md-none">
                  <!--Second column-->
                  <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                      <h6 class="text-uppercase mb-4 font-weight-bold">Coordonées</h6>
                          <!--Info-->
                <p>
                    <i class="fa fa-home mr-3"></i> 10 rue de la paie,<br> 75000 Paris </p>
                <p>
                    <i class="fa fa-envelope mr-3"></i> findjob@sitename.com</p>
                <p>
                    <i class="fa fa-phone mr-3"></i> +33 234 567 88 - Office</p>
                <p>
                    <i class="fa fa-print mr-3"></i> + 33 234 567 89 - Fax</p>
                  </div>
                  <!--/.Second column-->
                  <hr class="w-100 clearfix d-md-none">
                  <!--Third column-->
                  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                      <h6 class="text-uppercase mb-4 font-weight-bold">Réseau Sociaux</h6>
                              <!--Social buttons-->
                              <div class="social_text">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. .</p>
                                  <ul class="list-unstyled list-inline">
                                      <li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1"><i class="fa fa-facebook"></i></a></li>
                                      <li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1"><i class="fa fa-twitter"></i></a></li>
                                      <li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1"><i class="fa fa-google-plus"></i></a></li>
                                      <li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1"><i class="fa fa-linkedin"></i></a></li>
                                  </ul>
                              </div>
                              <!--/.Social buttons-->
                          </div><!--.Third column-->
              </div> <!-- Footer links -->
                    </div> <!-- container-footer-->
                </footer>
                <!--/.Footer-->
        <div class="footer_black text-align-center">
                  <!--Copyright-->
                      <p class="footer_black_copy"> © Copyright 2018</p>
                  </div><!--/.Copyright-->
    </div> <!--wrapper-->




<div class="wrap_concour">
    <div class="wrap_size">

        <a class="ico ui-button" href="#"><i class="fa fa-times"></i></a>

        <div class="form_wrap">
            <img class="form_img" src="<?php echo get_theme_file_uri() . '/images/label.svg'?>" alt="">
            <p form_p>Pour participez, merci de remplir les informations</p>
            <form class="form_form" method="post">
                <div class="form_name">
                    <input class="input" type="text" name="" placeholder="Nom" required="required" />
                    <input class="input" type="text" name="" placeholder="Prénom" required="required" />
                </div>

                <div class="form_mid">

                    <input class="input" type="text" name="" placeholder="Adresse" required="required" />
                </div>

                <div class="form_name">
                    <input class="input" type="text" name="" placeholder="Ville" required="required" />
                    <input class="input" type="text" name="" placeholder="Code Postal" required="required" />
                </div>

                <div class="form_mid">

                    <input class="input" type="email" name="" placeholder="email" required="required" />
                </div>
            </form>

            <div class="form_abo_wrap">

                <input class="form_abo" type="checkbox" name="" value="">   Je veux m'abonner à la newsletter
            </div>
            <div class="form_abo_wrap">

                <input class="form_abo" type="checkbox" name="" value=""><a class="form_abo_a" href="#">   J'ai lu et j'accepte le règlement du jeu</a>
            </div>
            <button type="submit" class="btn btn_game">Participez</button>

        </div>
    </div>
</div>





<?php wp_footer(); ?>


</body>
</html>
