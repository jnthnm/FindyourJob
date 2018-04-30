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
