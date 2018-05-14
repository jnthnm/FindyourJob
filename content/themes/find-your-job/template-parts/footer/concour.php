<div class="wrap_concour">
    <div class="wrap_size">

        <a class="ico ui-button" href="#"><i class="fa fa-times"></i></a>

        <div class="form_wrap">
            <img class="form_img" src="<?php echo get_theme_file_uri() . '/images/label.svg'?>" alt="">
            <p form_p>Pour participez, merci de remplir les informations</p>
            <form class="form_form" method="post">
                <div class="form_name">
                    <label for="name_c"></label>
                    <input id="name_c" class="input" type="text" name="lastname_c" placeholder="Nom" required="required" />
                    <label for="firstname_c"></label>
                    <input id="firstname_c" class="input" type="text" name="firstname_c" placeholder="Prénom" required="required" />

                </div>

                <div class="form_mid">
                    <label for="adress_c"></label>
                    <input id="adress_c" class="input" type="text" name="adress_c" placeholder="Adresse" required="required" />
                </div>

                <div class="form_name">
                    <label for="ville"></label>
                    <input id="ville" class="input" type="text" name="ville" placeholder="Ville" required="required" />
                    <label for="postal"></label>
                    <input id="postal" class="input" type="text" name="postal" placeholder="Code Postal" required="required" />
                </div>

                <div class="form_mid">
                    <label for="email_c"></label>
                    <input id="email_c" class="input" type="email" name="email_c" placeholder="email" required="required" />
                </div>
            </form>

            <div class="form_abo_wrap">
                <label for="newsletter_c"></label>
                <input class="form_abo" type="checkbox" name="newsletter_c" value="">   Je veux m'abonner à la newsletter
            </div>
            <div class="form_abo_wrap">
                <label for="checkbox_c"></label>
                <input class="form_abo" type="checkbox" name="checkbox_c" value=""><a class="form_abo_a" href="#">   J'ai lu et j'accepte le règlement du jeu</a>
            </div>
            <label for="submit_c"></label>
            <button type="submit" name="submit_c" class="btn btn_game">Participez</button>

        </div>
    </div>
</div>
