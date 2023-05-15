<?php

//Crear formato de post personalizado

function gvy_registrar_video()
{
	$singular_name = apply_filters('gvy_label_singular', 'Video');
	$plural_name = apply_filters('gvy_label_plural', 'Videos');


	$labels = array(
		'name'                 => $plural_name,
		'singular_name'        => $singular_name,
		'add_new'              => 'Ajouter Nouveau',
		'add_new_item'	       => 'Ajouter Nouveau ' . $singular_name,
		'edit'                 => 'Modifier',
		'edit_item'            => 'Modifier' . $singular_name,
		'new_item'             => 'Nouveau ' . $singular_name,
		'view'                 => 'Regarder',
		'view_item'            => 'Regarder ' . $singular_name,
		'search_items'         => 'Chercher ' . $plural_name,
		'not_found'            => 'Non ' . $plural_name . ' Trouvé',
		'not_found_in_trash'   => 'Non ' . $plural_name . ' Trouvé',
		'menu_name'            => $plural_name

	);

	$args = apply_filters('gvy_video_args', array(
		'labels'               => $labels,
		'description'          => 'Vidéos par catégorie',
		'taxonomies'           => array('category'),
		'public'	           => true,
		'show_in_menu'         => true,
		'menu_position'        => 5,
		'menu_icon'            => 'dashicons-video-alt',
		'show_in_nav_menus'    => true,
		'capability_type'      => 'post',
		'supports'             => array('title')
	));

	//Registrar tipo de post
	register_post_type('video', $args);
}


//Agregar action, necesario para ejecutar-
add_action('init', 'gvy_registrar_video');
