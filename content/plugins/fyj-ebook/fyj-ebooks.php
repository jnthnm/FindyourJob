<?php
/*
Plugin Name: FYJ Books
Description:Affin d'ajouter le contenu en vente
Version: 1.0.0
*/
// Je vérifie que mon fichier est bien executé dans un contexte de WordPress
if (!defined('WPINC')) {
  die('');
}
// Récuperation de la class Recipe_cpt
require plugin_dir_path(__FILE__) . 'inc/ebook_cpt.php';
$ebook_cpt = new ebook_cpt();
// A l'activation
register_activation_hook(__FILE__, [$ebook_cpt, 'activation']);
// A la désactivation
register_deactivation_hook(__FILE__, [$ebook_cpt, 'deactivation']);
