
<?php
/*
Template Name: Contact
*/
?>
<?php get_header();?>
    <?php
    while(have_posts()): the_post();
        echo the_content();
    endwhile;
    ?>
<!--==========main==========-->
<main>
    <section class="container-fluid radial-gradient align-items-center">



<div class="card form_all">

    <!-- Card body -->
    <div class="card-body form_all_content ">

        <!-- Material form register -->
        <form class="cadre"  action="#" method="POST" >
            <p class="h4 text-center py-4"><i class="fa fa-book book-icon"></i></p>


            <!-- Material input text -->
                <div class="md-form text-center mt-4 place_prefix ">
                    <label for="materialFormCardEmailEx" class=""><i class="fa fa-user prefix"></i></label>
                    <input type="text" id="materialFormCardNameEx" class="form-control form_b" placeholder="Nom">
                </div>
    <!-- Material input text -->
                <div class="md-form text-center mt-4 place_prefix">
                    <label for="materialFormCardEmailEx"><i class="fa fa-user prefix"></i></label>
                    <input type="text" id="materialFormCardFirstNameEx" class="form-control form_b" placeholder="Prénom">
                </div>
            <!-- Material input email -->
                <div class="md-form text-center mt-4 place_prefix">
                    <label for="materialFormCardEmailEx" class="font-weight-light"><i class="fa fa-envelope prefix"></i></label>
                    <input type="email" id="materialFormCardEmailEx" class="form-control form_b" placeholder="Adresse Mail">
                </div>
                <div class="form-group md-form text-center mt-4 place_prefix">
                    <label for="exampleFormControlSelect1"><i class="fa fa-arrow-down prefix"></i></label>
                    <select class="form-control form_b " id="exampleFormControlSelect1">
                      <option>Particulier</option>
                      <option>Professionnel</option>
                      <option>Centre de formation</option>
                      <option>Membre</option>
                    </select>
                </div>
                <div class="md-form-mess text-center mt-4 place_prefix">
                    <label for="materialFormContactMessageEx"><i class="fa fa-pencil prefix"></i></label>
                    <textarea type="text" placeholder="Message" id="materialFormContactMessageEx" class="form-control md-textarea form_b" rows="6"></textarea>
                </div>
                <div class="text-center mt-4">
                    <button class="btn btn-outline-secondary btn_me" type="submit"><i class="fa fa-paper-plane-o ml-2"></i>  Envoyer</button>
                </div> <br><br>

            </form>    <!-- Material form register -->
        </div><!-- Card body -->
    </div><!-- Card -->

</section> <!--contact-form-->
</main>

<?php get_footer();?>
