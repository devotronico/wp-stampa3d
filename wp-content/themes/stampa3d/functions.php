<?php
// VIDEO TUTORIAL
// https://www.youtube.com/watch?v=VHonOemUNqA&index=1&list=PLL5sFZfVAcvdUm3i8b9WPcCgdjpnNU_P8
// https://www.youtube.com/watch?v=ViZLtFIcSfo&list=PLriKzYyLb28kpEnFFi9_vJWPf5-_7d3rX

// THEME Support
function stampa3d_theme_setup() {

    add_theme_support('post-thumbnails'); // permette di inserire le immagini thumbnail nelle anteprime dei post dalla Dashboard->Articolo->Aggiungi articolo

    register_nav_menus( array(  // permette di aggiunge un menu dalla Dashboard->Aspetto->Menu
        'primary' => __( 'Primary Menu' ),
	) );
	
	// # Post Formats
	// ## aggiunge l'opzione 'Formato' (Standard,Digressione,Galleria) in Dashboard->Articoli->Aggiungi articolo
	//### https://codex.wordpress.org/Post_Formats
	add_theme_support('post-formats', array('aside', 'gallery'));
}

add_action('after_setup_theme', 'stampa3d_theme_setup');



//====================================================================================================
// # BARRA DI NAVIGAZIONE BOOTSTRAP
// ## Register Custom Navigation Walker
// ##carica il file class-wp-bootstrap-navwalker.php che attiva il menù di navigazione di bootstrap
// ##require_once 'class-wp-bootstrap-navwalker.php';
require_once get_template_directory().'/class-wp-bootstrap-navwalker.php';




//====================================================================================================
// # BLOG
// ## Setta la lunghezza del testo per l 'anteprima dei post
function set_excerpt_length() {
    return 40; // ritorna il numero delle parole visualizzate nell' anteprima del post
}
add_filter( 'excerpt_length', 'set_excerpt_length' );



//====================================================================================================
// # WIDGET
// ## Widget Locations
// ### Attiva i Widgets nella Dashboard di Worpress: Dashboard->Aspetto->Widgets
// ### https://codex.wordpress.org/Widgetizing_Themes
// #### https://codex.wordpress.org/Function_Reference/register_sidebar
// #### Register our sidebars and widgetized areas.

function stampa3d_widgets_init() {

	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'stampa3d_widgets_init' );





//====================================================================================================
// # FONTAWESOME
//enqueues our external font awesome stylesheet
add_action( 'wp_enqueue_scripts', 'stampa3d_add_custom_fa_css' );

function stampa3d_add_custom_fa_css() {
wp_enqueue_style( 'custom-fa', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css' );
}


//====================================================================================================
// # CUSTOMIZER
// ## https://codex.wordpress.org/Theme_Customization_API
require get_template_directory() .'/inc/customizer.php';