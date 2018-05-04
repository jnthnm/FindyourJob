


    <div class="wrap_wrap">
        <div class="wrap_list_text">Paiement 100% sécurisé</div>
        <div class="wrap_list_text">1 mois satisfait ou rembourser</div>
        <div class="wrap_list_text">a votre service depuis 10 ans!</div>

       <?php if(is_user_logged_in()): ?>
           <div class="wrap_list_text">
           <!-- <div class="menu_if_connected"> -->

               <?php
                   $menuParameters = [
                     'container'       => false,
                     'echo'            => false,
                     'depth'           => 0,
                     'items_wrap'      => '%3$s',
                     'theme_location'  => 'deconnexion'
                   ];

                   $menu = wp_nav_menu($menuParameters);

                   echo strip_tags($menu, '<a>');
               ?>
               <?php wp_loginout(home_url(), true); ?>
           </div>
       <?php else: ?>
           <!-- <div class="menu_not_connected"> -->
           <div class="wrap_list_text">
               <?php
                   $menuParameters = [
                     'container'       => false,
                     'echo'            => false,
                     'depth'           => 0,
                     'items_wrap'      => '%3$s',
                     'theme_location'  => 'connexion'
                   ];

                   $menu = wp_nav_menu($menuParameters);

                   echo strip_tags($menu, '<a>');
               ?>
           </div> <!--wrap-list-->
       <?php endif; ?>
        </div>
