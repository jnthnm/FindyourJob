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
