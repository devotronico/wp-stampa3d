<?php
//====================================================================================================
// # CUSTOMIZER
// ## https://codex.wordpress.org/Theme_Customization_API

function stampa3d_customize_register($wp_customize) {

    // ### JUMBTRON
    $wp_customize->add_section('showcase', array( // in Dashboard->Aspetto->Personalizza: aggiunge una nuova sezione per la personalizzazione del tema 
        'title' => __('Showcase', 'stampa3d'), // arg1: il titolo di questa sezione che verrà mostrato nella DASHBOARD.  arg2: il nome del tema che vogliamo personalizzare
        'description' => sprintf(__('Opzioni per lo Showcase', 'stampa3d')),
        'priority' => 130
    ));

    

    // ### IMMAGINE DI SFONDO ----------------------------------------------------------------------------------------------------
    $wp_customize->add_setting('showcase_image', array(
        'default' => get_bloginfo('template_directory').'/image/background/bg-0.png', // è il valore di default nel campo input
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
        'label' => __('Showcase image', 'stampa3d'), // è il titolo dell' opzione
        'section' => 'showcase',
        'settings' => 'showcase_image',
        'priority' => 1 // definisce l'altezza/priorità di questo campo (es. 1 mette questo campo in cima)
    )));

    // ### TITOLO ----------------------------------------------------------------------------------------------------
    // #### il valore di questa impostazione è richiamabile con echo get_theme_mod('showcase_heading');
    $wp_customize->add_setting('showcase_heading', array(  
        'default' => _x('stampa 3d', 'stampa3d'), // è il valore di default nel campo input
    ));

    $wp_customize->add_control('showcase_heading', array(
        'label' => __('Titolo', 'stampa3d'), // è il titolo dell' opzione
        'section' => 'showcase', // identifica la sezione in cui devono trovarsi questi controlli (es. in questo caso si troverà nella sezione Showcase)
        'priority' => 2 // definisce l'altezza/priorità di questo campo (es. 1 mette questo campo in cima)
    ));

    // ### DESCRIZIONE ----------------------------------------------------------------------------------------------------
    $wp_customize->add_setting('showcase_description', array(
        'default' => _x('Stampa il mondo e tutto quello che NON ti circonda', 'stampa3d'),
    ));

    $wp_customize->add_control('showcase_description', array(
        'label' => __('Sottotitolo', 'stampa3d'),
        'section' => 'showcase',
        'priority' => 3
    ));

    // ### BOTTONE TEXT ----------------------------------------------------------------------------------------------------
    $wp_customize->add_setting('btn_text', array(
        'default' => _x('cliccami', 'stampa3d'),
    ));

    $wp_customize->add_control('btn_text', array(
        'label' => __('Bottone descrizione', 'stampa3d'),
        'section' => 'showcase',
        'priority' => 4
    ));

    // ### BOTTONE URL ----------------------------------------------------------------------------------------------------
    $wp_customize->add_setting('btn_url', array(
        'default' => _x('https://www.danielemanzi.it/', 'stampa3d'),
    ));

    $wp_customize->add_control('btn_url', array(
        'label' => __('Bottone url', 'stampa3d'),
        'section' => 'showcase',
        'priority' => 5
    ));

    // ### LOGO ----------------------------------------------------------------------------------------------------
    $wp_customize->add_setting('showcase-logo', array(
        'default' => get_bloginfo('template_directory').'/image/logo/paper.png', // è il valore di default nel campo input
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase-logo', array(
        'label' => __('Logo', 'stampa3d'), // è il titolo dell' opzione
        'section' => 'showcase',
        'settings' => 'showcase-logo',
        'priority' => 6 // definisce l'altezza/priorità di questo campo (es. 1 mette questo campo in cima)
    )));

    // ### IMAGE COL 1----------------------------------------------------------------------------------------------------
    $wp_customize->add_setting('col-img-1', array(
        'default' => get_bloginfo('template_directory').'/image/background/bg-4.jpg', // è il valore di default nel campo input
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'col-img-1', array(
        'label' => __('Column', 'stampa3d'), // è il titolo dell' opzione
        'section' => 'showcase',
        'settings' => 'col-img-1',
        'priority' => 7 // definisce l'altezza/priorità di questo campo (es. 1 mette questo campo in cima)
    )));

    // ### IMAGE COL 2----------------------------------------------------------------------------------------------------
    $wp_customize->add_setting('col-img-2', array(
        'default' => get_bloginfo('template_directory').'/image/background/bg-4.jpg', // è il valore di default nel campo input
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'col-img-2', array(
        'label' => __('Column', 'stampa3d'), // è il titolo dell' opzione
        'section' => 'showcase',
        'settings' => 'col-img-2',
        'priority' => 8 // definisce l'altezza/priorità di questo campo (es. 1 mette questo campo in cima)
    )));
}
add_action( 'customize_register', 'stampa3d_customize_register' );