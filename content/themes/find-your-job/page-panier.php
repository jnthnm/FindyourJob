<?php
/*
Template Name: Panier
*/
?>

            <div class="section_ebook_money">
                <div class="shopping"><i class="fa fa-shopping-cart"></i>Mon panier</div>
                 <?php echo do_shortcode('[woocommerce_cart]'); ?>

                <div class="section_ebook_info_pay">Votre panier est vide.</div>
            </div>
            <div class="section_ebook_wrap_input">

            <label class="section_ebook_label" for="">Abonnez-vous</label>
                <div id="ebook_input" class="section_ebook_input">
                    <input type="text" name="" value="" placeholder="Votre email">
                </div>
                <a class="btn btn-primary button_newsletter" href="#" role="button">Recevoir la newsletter</a>
            </div><!-- section_ebook_wrap_input -->

            <div class="section_ebook_img_aside"></div>
