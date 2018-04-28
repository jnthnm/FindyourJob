    <div class="wrap_wrap">
        <div class="wrap_list_text">Paiement 100% sécurisé</div>
        <div class="wrap_list_text">1 mois satisfait ou rembourser</div>
        <div class="wrap_list_text">a votre service depuis 10 ans!</div>

        <div class="wrap_list_text">

        <?php

        $menuParameters = [
            'container'       => false,
            'echo'            => false,
            'depth'           => 0,
            'items_wrap'      => '%3$s',
            'theme_location'  => 'connexion',

        ];

        $menu = wp_nav_menu($menuParameters);

        echo strip_tags($menu, '<a>');

        ?>
    </div>
</div>






<!-- // if (  is_user_logged_in() ) {
//
//
//         $menuParameters = [
//             'container'       => false,
//             'echo'            => false,
//             'depth'           => 0,
//             'items_wrap'      => '%3$s',
//             'theme_location'  => 'connexion',
//
//         ];
//
//         $menu = wp_nav_menu($menuParameters);
//
//         echo strip_tags($menu, '<a>');




// }else{
//
//     echo '<a href="' . wp_logout_url( site_url( '/' ) ) .'">Se déconnecter</a>';
//
// }


// wp_nav_menu( array(
//     'theme_location' => is_user_logged_in() ? 'logged-in-menu' : 'logged-out-menu'
// ) );
//
// 	echo '<a href="' . admin_url( 'user-edit.php?user_id='. get_current_user_id() ) .'">Accès au profil</a>';

?> -->
    <!-- <div class="wrap_list_text connect">créer / se connecter</div> -->



<!-- <?php if ( is_user_logged_in() ) { ?>

    <a href="<?php echo wp_logout_url(get_permalink()) ?>">Déconnexion</a>



<?php } else { ?>

    <form id="login" method="post" action="<?php echo wp_login_url( get_permalink() ) ?>">

        <fieldset>

            <label>Login :</label>

            <input type="text" value="" name="log" />

            <label>Mot de passe : </label>

            <input type="password" value="" name="pwd"  />

            <input type="submit" value="Connexion" />

        </fieldset>

    </form>


    <?php } ?> -->
