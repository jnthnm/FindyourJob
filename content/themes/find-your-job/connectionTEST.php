
/*
Template Name: test
*/


<?php
// Formulaire de connexion
if ( ! is_user_logged_in() ) {
	wp_login_form( array(
        'redirect'       => site_url( '/' ), // par défaut renvoie vers la page courante
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




// Formulaire d'inscription
function register_user_form() {
	echo '<form action="' . admin_url( 'admin-post.php?action=nouvel_utilisateur' ) . '" method="post" id="register-user">';

	// Les champs requis
	echo '<p><label for="nom-user">Nom</label><input type="text" name="username" id="nom-user" required></p>';
	echo '<p><label for="email-user">Email</label><input type="email" name="email" id="email-user" required></p>';
	echo '<p><label for="pass-user">Mot de passe</label><input type="password" name="pass" id="pass-user" required><br>';
	echo '<input type="checkbox" id="show-password"><label for="show-password">Voir le mot de passe</label></p>';

	// Nonce (pour vérifier plus tard que l'action a bien été initié par l'utilisateur)
	wp_nonce_field( 'create-' . $_SERVER['REMOTE_ADDR'], 'user-front', false );

	//Validation
	echo '<input type="submit" value="Créer mon compte">';
	echo '</form>';

	// Enqueue de scripts qui vont nous permettre de vérifier les champs
	wp_enqueue_script( 'inscription-front' );
}

// Enregistrement de l'utilisateur
add_action( 'admin_post_nopriv_nouvel_utilisateur', 'ajouter_utilisateur' );
function ajouter_utilisateur() {
	// Vérifier le nonce (et n'exécuter l'action que s'il est valide)
	if( isset( $_POST['user-front'] ) && wp_verify_nonce( $_POST['user-front'], 'create-' . $_SERVER['REMOTE_ADDR'] ) ) {

		// Vérifier les champs requis
		if ( ! isset( $_POST['username'] ) || ! isset( $_POST['email'] ) || ! isset( $_POST['pass'] ) ) {
			wp_redirect( site_url( '/inscription/?message=not-user' ) );
			exit();
		}

		$nom = $_POST['username'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];

		// Vérifier que l'user (email ou nom) n'existe pas
		if ( is_email( $email ) && ! username_exists( $nom )  && ! email_exists( $email ) ) {
			// Création de l'utilisateur
	        $user_id = wp_create_user( $nom, $pass, $email );
	        $user = new WP_User( $user_id );
	        // On lui attribue un rôle
	        $user->set_role( 'subscriber' );
	        // Envoie un mail de notification au nouvel utilisateur
	        wp_new_user_notification( $user_id, $pass );
	    } else {
	    	wp_redirect( site_url( '/inscription/?message=already-registered' ) );
			exit();
	    }

		// Connecter automatiquement le nouvel utilisateur
	    $creds = array();
		$creds['user_login'] = $nom;
		$creds['user_password'] = $pass;
		$creds['remember'] = false;
		$user = wp_signon( $creds, false );

		// Redirection
		wp_redirect( site_url( '/?message=welcome' ) );
		exit();
	}
}
