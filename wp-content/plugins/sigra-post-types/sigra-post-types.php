<?php
/*
    Plugin Name: Sigra - Post Types
    Plugin URI: https://codigoaccesibleconleo.com
    Description: Ajouter des types de publication au site Sigra
    Version: 1.0.0
    Author: Leonel Lopez 
    Author URI: https://codigoaccesibleconleo.com
    Text Domain: sigra
*/

if (!defined('ABSPATH')) die();


// Subsides

function sigra_subsides_post_type()
{
    $labels = array(
        'name'                  => _x('Subsides', 'Post Type General Name', 'sigra'),
        'singular_name'         => _x('Subside', 'Post Type Singular Name', 'sigra'),
        'menu_name'             => __('Subsides', 'sigra'),
        'name_admin_bar'        => __('Subside', 'sigra'),
        'archives'              => __('Archive', 'sigra'),
        'attributes'            => __('Les attributs', 'sigra'),
        'parent_item_colon'     => __('Subside Père', 'sigra'),
        'all_items'             => __('Toutes les Subsides', 'sigra'),
        'add_new_item'          => __('Ajouté Subside', 'sigra'),
        'add_new'               => __('Ajouté Subside', 'sigra'),
        'new_item'              => __('Nouveau Subside', 'sigra'),
        'edit_item'             => __('Modifier Subside', 'sigra'),
        'update_item'           => __('Mise à jour Subside', 'sigra'),
        'view_item'             => __('Regarder Subside', 'sigra'),
        'view_items'            => __('Regarder Subsides', 'sigra'),
        'search_items'          => __('Chercher Subside', 'sigra'),
        'not_found'             => __('Pas trouvé', 'sigra'),
        'not_found_in_trash'    => __('Introuvable dans la corbeille', 'sigra'),
        'featured_image'        => __('Image exceptionnelle', 'sigra'),
        'set_featured_image'    => __('Enregistrer image sélectionnée', 'sigra'),
        'remove_featured_image' => __('Supprimer image sélectionnée', 'sigra'),
        'use_featured_image'    => __('Utiliser comme image vedette', 'sigra'),
        'insert_into_item'      => __('Insérer dans Subside', 'sigra'),
        'uploaded_to_this_item' => __('Ajouté dans Subside', 'sigra'),
        'items_list'            => __('Liste de Subsides', 'sigra'),
        'items_list_navigation' => __('Navigation de Subsides', 'sigra'),
        'filter_items_list'     => __('Filtrer Subsides', 'sigra'),
    );
    $args = array(
        'label'                 => __('Subsides', 'sigra'),
        'description'           => __('Subsides pour le site Web', 'sigra'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 8,
        'menu_icon'             => 'dashicons-money',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('subsides', $args);
}
add_action('init', 'sigra_subsides_post_type', 0);


// Age

function sigra_age_post_type()
{
    $labels = array(
        'name'                  => _x('Ages', 'Post Type General Name', 'sigra'),
        'singular_name'         => _x('Age', 'Post Type Singular Name', 'sigra'),
        'menu_name'             => __('Ages', 'sigra'),
        'name_admin_bar'        => __('Age', 'sigra'),
        'archives'              => __('Archive', 'sigra'),
        'attributes'            => __('Les attributs', 'sigra'),
        'parent_item_colon'     => __('Age Père', 'sigra'),
        'all_items'             => __('Toutes les Ages', 'sigra'),
        'add_new_item'          => __('Ajouté Age', 'sigra'),
        'add_new'               => __('Ajouté Age', 'sigra'),
        'new_item'              => __('Nouveau Age', 'sigra'),
        'edit_item'             => __('Modifier Age', 'sigra'),
        'update_item'           => __('Mise à jour Age', 'sigra'),
        'view_item'             => __('Regarder Age', 'sigra'),
        'view_items'            => __('Regarder Ages', 'sigra'),
        'search_items'          => __('Chercher Age', 'sigra'),
        'not_found'             => __('Pas trouvé', 'sigra'),
        'not_found_in_trash'    => __('Introuvable dans la corbeille', 'sigra'),
        'featured_image'        => __('Image exceptionnelle', 'sigra'),
        'set_featured_image'    => __('Enregistrer image sélectionnée', 'sigra'),
        'remove_featured_image' => __('Supprimer image sélectionnée', 'sigra'),
        'use_featured_image'    => __('Utiliser comme image vedette', 'sigra'),
        'insert_into_item'      => __('Insérer dans Age', 'sigra'),
        'uploaded_to_this_item' => __('Ajouté dans Age', 'sigra'),
        'items_list'            => __('Liste de Ages', 'sigra'),
        'items_list_navigation' => __('Navigation de Ages', 'sigra'),
        'filter_items_list'     => __('Filtrer Ages', 'sigra'),
    );
    $args = array(
        'label'                 => __('Ages', 'sigra'),
        'description'           => __('Ages pour le site Web', 'sigra'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 8,
        'menu_icon'             => 'dashicons-buddicons-buddypress-logo',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('age', $args);
}
add_action('init', 'sigra_age_post_type', 0);


// Catégories

function sigra_categories_post_type()
{
    $labels = array(
        'name'                  => _x('Catégories', 'Post Type General Name', 'sigra'),
        'singular_name'         => _x('Catégorie', 'Post Type Singular Name', 'sigra'),
        'menu_name'             => __('Catégories', 'sigra'),
        'name_admin_bar'        => __('Catégorie', 'sigra'),
        'archives'              => __('Archive', 'sigra'),
        'attributes'            => __('Les attributs', 'sigra'),
        'parent_item_colon'     => __('Catégorie Père', 'sigra'),
        'all_items'             => __('Toutes les Catégories', 'sigra'),
        'add_new_item'          => __('Ajouté Catégorie', 'sigra'),
        'add_new'               => __('Ajouté Catégorie', 'sigra'),
        'new_item'              => __('Nouveau Catégorie', 'sigra'),
        'edit_item'             => __('Modifier Catégorie', 'sigra'),
        'update_item'           => __('Mise à jour Catégorie', 'sigra'),
        'view_item'             => __('Regarder Catégorie', 'sigra'),
        'view_items'            => __('Regarder Catégories', 'sigra'),
        'search_items'          => __('Chercher Catégorie', 'sigra'),
        'not_found'             => __('Pas trouvé', 'sigra'),
        'not_found_in_trash'    => __('Introuvable dans la corbeille', 'sigra'),
        'featured_image'        => __('Image exceptionnelle', 'sigra'),
        'set_featured_image'    => __('Enregistrer image sélectionnée', 'sigra'),
        'remove_featured_image' => __('Supprimer image sélectionnée', 'sigra'),
        'use_featured_image'    => __('Utiliser comme image vedette', 'sigra'),
        'insert_into_item'      => __('Insérer dans Catégorie', 'sigra'),
        'uploaded_to_this_item' => __('Ajouté dans Catégorie', 'sigra'),
        'items_list'            => __('Liste de Catégories', 'sigra'),
        'items_list_navigation' => __('Navigation de Catégories', 'sigra'),
        'filter_items_list'     => __('Filtrer Catégories', 'sigra'),
    );
    $args = array(
        'label'                 => __('Catégories', 'sigra'),
        'description'           => __('Catégories pour le site Web', 'sigra'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 8,
        'menu_icon'             => 'dashicons-category',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('categorie', $args);
}
add_action('init', 'sigra_categories_post_type', 0);


// Catégories

function sigra_abonnements_post_type()
{
    $labels = array(
        'name'                  => _x('Abonnements', 'Post Type General Name', 'sigra'),
        'singular_name'         => _x('Abonnement', 'Post Type Singular Name', 'sigra'),
        'menu_name'             => __('Abonnements', 'sigra'),
        'name_admin_bar'        => __('Abonnement', 'sigra'),
        'archives'              => __('Archive', 'sigra'),
        'attributes'            => __('Les attributs', 'sigra'),
        'parent_item_colon'     => __('Abonnement Père', 'sigra'),
        'all_items'             => __('Toutes les Abonnements', 'sigra'),
        'add_new_item'          => __('Ajouté Abonnement', 'sigra'),
        'add_new'               => __('Ajouté Abonnement', 'sigra'),
        'new_item'              => __('Nouveau Abonnement', 'sigra'),
        'edit_item'             => __('Modifier Abonnement', 'sigra'),
        'update_item'           => __('Mise à jour Abonnement', 'sigra'),
        'view_item'             => __('Regarder Abonnement', 'sigra'),
        'view_items'            => __('Regarder Abonnements', 'sigra'),
        'search_items'          => __('Chercher Abonnement', 'sigra'),
        'not_found'             => __('Pas trouvé', 'sigra'),
        'not_found_in_trash'    => __('Introuvable dans la corbeille', 'sigra'),
        'featured_image'        => __('Image exceptionnelle', 'sigra'),
        'set_featured_image'    => __('Enregistrer image sélectionnée', 'sigra'),
        'remove_featured_image' => __('Supprimer image sélectionnée', 'sigra'),
        'use_featured_image'    => __('Utiliser comme image vedette', 'sigra'),
        'insert_into_item'      => __('Insérer dans Abonnement', 'sigra'),
        'uploaded_to_this_item' => __('Ajouté dans Abonnement', 'sigra'),
        'items_list'            => __('Liste de Abonnements', 'sigra'),
        'items_list_navigation' => __('Navigation de Abonnements', 'sigra'),
        'filter_items_list'     => __('Filtrer Abonnements', 'sigra'),
    );
    $args = array(
        'label'                 => __('Abonnements', 'sigra'),
        'description'           => __('Abonnements pour le site Web', 'sigra'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 8,
        'menu_icon'             => 'dashicons-category',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('abonnements', $args);
}
add_action('init', 'sigra_abonnements_post_type', 0);
