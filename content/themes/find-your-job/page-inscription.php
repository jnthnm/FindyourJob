<?php
/*
Template Name: Inscription
*/
?>
<?php get_header();?>

<!--==========main==========-->
<main>


    <section class="container-fluid radial-gradient align-items-center">
        <!-- <a class="btn-toggle croix" id="close_croix" href="#"> &#10060;</a> -->
        <section class="form-elegant">

            <!--Form without header-->
            <div class="card form_all">

                <div class="card-body mx-4 ">

                    <div class="cadre justify-content-center">
                        <!--Header-->
                        <div class="text-center mt-4">
                            <h3 class="mb-5"><i class="fa fa-graduation-cap book-icon"></i></h3>
                        </div>

    <?php
    while(have_posts()): the_post();
        echo the_content();
    endwhile;
    ?>


                </div>
            </div><!--/Form without header-->
        </div>
    </section> <!--form-elegant-->
</section> <!--contact-form-->
</main>

<?php get_footer();?>
