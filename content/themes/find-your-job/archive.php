

<?php get_header();?>



    <main class="main_actu_only">

        <img class="img_header" src="images/office.jpeg" alt="">

        <div class="main_actu_only_flex">

            <section class="section_post_only">
                
            <?php get_template_part('template-parts/post/post'); // Post?>


                <div class="pagination pag_actu">
                  <a href="#">&laquo;</a>
                  <a href="#">1</a>
                  <a href="#" class="active">2</a>
                  <a href="#">3</a>
                  <a href="#">4</a>
                  <a href="#">&raquo;</a>
                </div>

            </section>



<?php get_template_part('template-parts/sidebar/sidebar_post'); // Sidebar?>


</div>

<section class="section_footer_price">

    <img class="section_footer_img" src="images/book.svg" alt="">
    <!-- <div class="section_footer_img"></div> -->

    <div class="section_footer_wrap">
        <h4 class="section_footer_title">Vous souhaitez recevoir nos offres promo!</h4>
        <div class="section_footer_letter">

                <div class="section_footer_input">
                    <input type="text" name="" value="" placeholder="Votre adresse email">
                </div>
                <a class="btn button_offre" href="#" role="button">Recevoir nos offres</a>

        </div>
    </div>

</section>
</main>
<?php get_footer();?>
