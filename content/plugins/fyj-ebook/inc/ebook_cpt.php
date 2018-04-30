<?php
class ebook_cpt
{
  public function __construct()
  {
    add_action('init', [$this, 'create_cpt']);
//    add_action('init', [$this, 'create_taxonomies']);
  }
  public function create_cpt()
  {
    $labels = [
      'name'                  => 'Ebooks',
      'singular_name'         => 'Ebooks',
      'menu_name'             => 'Ebooks',
      'name_admin_bar'        => 'Ebooks',
      'archives'              => 'Ebooks Disponible',
      'attributes'            => 'Attributs des Ebooks',
      'parent_item_colon'     => 'Element parent',
      'all_items'             => 'Touts les Ebooks',
      'add_new_item'          => 'Ajouter un nouveaux Ebooks',
      'add_new'               => 'Ajouter un nouveaux Ebooks',
      'new_item'              => 'Nouveaux Ebooks',
      'edit_item'             => 'Editer un Ebooks',
      'update_item'           => 'Mettre à jour du Ebooks',
      'view_item'             => 'Extrait du contenu',
      'view_items'            => 'Extrait',
      'search_items'          => 'Rechercher votre Ebook',
      'not_found'             => 'Aucun Ebooks trouvé',
      'not_found_in_trash'    => 'Aucun Ebooks trouvé dans la corbeille',
      'featured_image'        => 'Image Ebook',
      'set_featured_image'    => 'Ajouter une image ',
      'remove_featured_image' => 'Supprimer l\'image',
      'use_featured_image'    => 'Utiliser une image du ebook',
      'insert_into_item'      => 'Inserer dans le ebook',
      'uploaded_to_this_item' => 'Ajouter au panier l\'ebook',
      'items_list'            => 'Liste des ebooks',
      'items_list_navigation' => 'Liste des ebooks',
      'filter_items_list'     => 'Filtrer la liste des Ebooks',
    ];
    $args = [
      'label'                 => 'Ebooks',
      'description'           => 'Un ebook fait pour vous!',
      'labels'                => $labels,
      'supports'              => [
        'title',
        'editor',
        'author',
        'thumbnail',
        'excerpt',
      ],
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'menu_icon'             => 'dashicons-cart'
    ];
    register_post_type( 'ebook', $args );
  }
  // public function create_taxonomies()
  // {
  //   $labels = [
  //     'name'                       => 'Prix',
  //     'singular_name'              => 'Prix',
  //     'menu_name'                  => 'Prix',
  //     'all_items'                  => 'Tous les tarifs',
  //     'new_item_name'              => 'Nouveaux tarifs',
  //     'add_new_item'               => 'Ajouter un tarif',
  //     'update_item'                => 'Mettre à jour le prix',
  //     'edit_item'                  => 'Editer le  tarif',
  //     'view_item'                  => 'Voir tous les tarifs',
  //     'add_or_remove_items'        => 'Ajouter ou supprimer un prix',
  //     'choose_from_most_used'      => 'Choisir parmis tarifs les plus utilisées sur le site',
  //     'popular_items'              => 'Prix les plus populaires',
  //     'search_items'               => 'Rechercher un prix',
  //     'not_found'                  => 'Aucun tarifs trouvé',
  //     'items_list'                 => 'Liste des prix',
  //     'items_list_navigation'      => 'Trier par prix',
  //   ];
  //   $args = [
  //     'labels'                     => $labels,
  //     'hierarchical'               => false,
  //     'public'                     => true,
  //     'show_ui'                    => true,
  //     'show_admin_column'          => true,
  //     'show_in_nav_menus'          => true,
  //     'show_tagcloud'              => true,
  //   ];
  //   register_taxonomy( 'Prix', 'Ebook', $args );

// }
  public function activation()
  {
    // Je créé mon CPT Ebook
    $this->create_cpt();
    // Je créé mes taxonomies
//    // $this->create_taxonomies();
    // Je refresh les permaliens
    flush_rewrite_rules();
  }
  public function deactivation()
  {
    // Je refresh les permaliens
    flush_rewrite_rules();
  }
}
