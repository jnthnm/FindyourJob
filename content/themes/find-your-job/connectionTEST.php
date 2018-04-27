~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

// Page de connextion

<?php

var_dump(admin_url());
if ( ! is_user_logged_in() ) {
	wp_login_form( array(
        'redirect'       => site_url( '/boutique' ), // par défaut renvoie vers la page courante
        'label_username' => 'Login',
        'label_password' => 'Mot de passe',
        'label_remember' => 'Se souvenir de moi',
        'label_log_in'   => 'Se connecter',
        'form_id'        => 'login-form',
        'id_username'    => 'user-login',
        'id_password'    => 'user-pass',
        'id_remember'    => 'rememberme',
        'id_submit'      => 'wp-submit',
        'remember'       => true, //afficher l'option se ouvenir de moi
        'value_remember' => false //se souvenir par défaut ?
	) );
} else {
	echo '<a href="' . admin_url( 'user-edit.php?user_id='. get_current_user_id() ) .'">Accès au profil</a>';
	echo '<a href="' . wp_logout_url( site_url( '/' ) ) .'">Se déconnecter</a>';

}

// Ajouter le lien pour récupérer le mot de passe, si l'utilisateur ne s'en souvient plus
add_filter( 'login_form_bottom', 'lien_mot_de_passe_perdu' );
function lien_mot_de_passe_perdu( $formbottom ) {
	$formbottom .= '<a href="' . wp_lostpassword_url() . '">Mot de passe perdu ?</a>';
	return $formbottom;
}
?>

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

// Fonction qui permet de dire bienvenue à l'utilisateur et qui lui permet de se déconnecter si il le souhaite

<?php  if (is_user_logged_in()) { ?>

    <?php $user=wp_get_current_user(); ?>

    BIENVENUE <?php echo $user->user_login; ?>

 <a href="<?php echo wp_logout_url();?>">Se deconnecter</a>

<?php }else{  ?>
    <?php wp_loginform(); ?>
<?php } ?>

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
