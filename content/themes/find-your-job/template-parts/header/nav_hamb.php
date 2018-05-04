


        <nav class="navbar navbar-expand-lg navbar-light">

            <div class="header_title_wrap">
                <div class="header_flex">
                    <h1 class="header_title">Find your job</h1>
                    <p class="header_text">L'emploi près de chez vous</p>
                </div>

                <div class="header_wrap_img">
                    <img class="header_img" src="<?php echo get_theme_file_uri() . '/images/loupefind.svg'?>" alt="Logo_site">
                </div>
            </div>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ml-auto" id="navbarNavAltMarkup">

       <?php if(is_user_logged_in()): ?>
           <div class="navbar-nav ml-auto link_color">
           <!-- <div class="menu_if_connected"> -->

               <?php
                   $menuParameters = [
                     'container'       => false,
                     'echo'            => false,
                     'depth'           => 0,
                     'items_wrap'      => '%3$s',
                     'theme_location'  => 'header_log_in'
                   ];

                   $menu = wp_nav_menu($menuParameters);

                   echo strip_tags($menu, '<a>');
               ?>
               <!-- <?php wp_loginout(home_url(), true); ?> -->
           </div>
       <?php else: ?>
           <!-- <div class="menu_not_connected"> -->
           <div class="navbar-nav ml-auto link_color">
               <?php
                   $menuParameters = [
                     'container'       => false,
                     'echo'            => false,
                     'depth'           => 0,
                     'items_wrap'      => '%3$s',
                     'theme_location'  => 'heade_log_out'
                   ];

                   $menu = wp_nav_menu($menuParameters);

                   echo strip_tags($menu, '<a>');
               ?>
           </div>
       <?php endif; ?>

   </div> <!--collapse-->

        </nav>
