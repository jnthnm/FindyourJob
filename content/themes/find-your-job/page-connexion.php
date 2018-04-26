<?php
/*
Template Name: Connexion
*/
?>
<?php get_header();?>

<!--==========main==========-->
<main>
    <section class="container-fluid radial-gradient blur align-items-center">
        <a class="btn-toggle croix" id="close_croix" href="#"> &#10060;</a>

        <section class="form-elegant">

            <!--Form without header-->
            <div class="card form_all">

                <div class="card-body mx-4 ">

                    <div class="cadre justify-content-center">
                        <!--Header-->
                        <div class="text-center mt-4">
                            <h3 class="mb-5"><i class="fa fa-graduation-cap book-icon"></i></h3>
                        </div>

                        <!--Body-->
                        <div class="md-form text-center mt-4 place_prefix">
                            <label for="Form-email1"><i class="fa fa-envelope prefix "></i></label>
                            <input type="text" id="Form-email1" class="form-control form_b" placeholder="Email">
                        </div>

                        <div class="md-form text-center mt-4 place_prefix">
                                <label for="Form-pass1"><i class="fa fa-lock prefix"></i></label>
                            <input type="password" id="Form-pass1" class="form-control form_b" placeholder="*********">
                        </div>
                        <p class="font-small text-center"><a href="#" class="font-small ml-1"> Mot de passe oublié? </a></p>
                        <div class="text-center mt-4 ">
                            <button class="btn btn-outline-secondary btn_me" type="submit"><i class="fa fa-paper-plane-o ml-2"></i>  Envoyer</button>
                            <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> ou avec :</p>

                                <div class="row my-3 d-flex justify-content-center">
                                    <!--Facebook-->
                                    <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fa fa-facebook blue-text text-center"></i></button>
                                    <!--Twitter-->
                                    <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fa fa-twitter blue-text"></i></button>
                                    <!--Google +-->
                                    <button type="button" class="btn btn-white btn-rounded z-depth-1a"><i class="fa fa-google-plus blue-text"></i></button>
                                </div>
                                <h5 class="font-small">Nouveau Membres ?</h5>
                                <button class="btn btn-outline-secondary btn_me" type="submit"><i class="fa fa-arrow-circle-down"></i></button>


                                <div class="md-form text-center mt-4 place_prefix">
                                    <label for="Form-email1"><i class="fa fa-envelope prefix "></i></label>
                                    <input type="text"  class="form-control form_b" placeholder="Email">
                                </div>
                                <div class="md-form mt-4 place_prefix">
                                        <label for="Form-pass1"><i class="fa fa-lock prefix"></i></label>
                                    <input type="password" class="form-control form_b" placeholder="*********" >
                                </div>
                                <div class="md-form mt-4 place_prefix">
                                        <label for="Form-pass1"><i class="fa fa-lock prefix"></i></label>
                                    <input type="password" class="form-control form_b" placeholder="*********" >
                                </div>  <br>
                                <button class="btn btn-outline-secondary btn_me" type="submit"><i class="fa fa-paper-plane-o ml-2"></i>  Envoyer</button>
                                <br> <br>

                        </div> <!--text-center-->
                </div> <!--cadre-->
            </div>
        </div><!--/Form without header-->
    </section> <!--form-elegant-->
</section> <!--contact-form-->
</main>

<?php get_footer();?>
