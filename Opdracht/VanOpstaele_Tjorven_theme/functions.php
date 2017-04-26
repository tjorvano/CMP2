<?php

//SCRIPTS EN CSS TOEVOEGEN
function add_theme_scripts() {
 
 //EERST BOOTSTRAP / FONTAWESOME CSS BINNEHALEN MET GET_TEMPLATE_URL
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '1.1', 'all');
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.css', array(), '1.1', 'all');
  //TWEDES MIJN EIGEN STYLE.CSS BINNENHALEN
  wp_enqueue_style( 'style', get_stylesheet_uri() );
 
 //SCRIPT JS TOEVOEGEN, EERST JQUERY DAN DE BOOTSTRAP.JS DIE WERKT MET JQUERY-LIBRARY
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
 
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


//CUSTOM POSTTYPE FEATURES AANMAKEN
function add_my_custom_posttype_features(){
  //LABELS DIFINIËREN
    $labels = array(
        'add_new' => 'Voeg nieuw toe',
        'add_new_item' => 'Voeg nieuwe feature toe',
        'name' => 'Features',
        'singular_name' => 'Feature',
    );
  //ARGUMENTEN DIFINIËREN
	$args = array(
		'labels' => $labels, // de array labels van hier boven linken aan het argument labels
		'Description' => 'Features van het thema',
		'public' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-admin-generic', //Een icoon kiezen
		'supports' => array('title'), // Toon enkel de titel als invoermogelijkheid. Tekst (editor) is voor de feature niet nodig.
        'has_archive' => true, //Maak een archief aan (opsomming van alle elementen), anders gaan we archive-features.php nooit kunnen aanspreken.
        'capabilities' => array(
            'edit_post'          => 'edit_feature', 
            'read_post'          => 'read_feature', 
            'delete_post'        => 'delete_feature',  
            'edit_posts'         => 'edit_features', 
            'edit_others_posts'  => 'edit_others_features', 
            'publish_posts'      => 'publish_features',       
            'read_private_posts' => 'read_private_features', 
            'create_posts'       => 'edit_features', 
            ),
        
	);
	register_post_type( 'features', $args ); 
}
add_action( 'init', 'add_my_custom_posttype_features' );

//CUSTOM POSTTYPE FUNCTIES AANMAKEN
function add_my_custom_posttype_functies(){
  //LABELS DIFINIËREN
    $labels = array(
        'add_new' => 'Voeg nieuw toe',
        'add_new_item' => 'Voeg nieuwe functie toe',
        'name' => 'Functies',
        'singular_name' => 'Functie',
    );
  //ARGUMENTEN DIFINIËREN
	$args = array(
		'labels' => $labels, // de array labels van hier boven linken aan het argument labels
		'Description' => 'Functies van het bedrijf',
		'public' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-admin-generic', //Een icoon kiezen
		'supports' => array('title', 'editor'), // Toon enkel de titel als invoermogelijkheid. Tekst (editor) is voor de feature niet nodig.
    'has_archive' => true, //Maak een archief aan (opsomming van alle elementen), anders gaan we archive-features.php nooit kunnen aanspreken.
	);
	register_post_type( 'functies', $args ); 
}
add_action( 'init', 'add_my_custom_posttype_functies' );


//Metabox aanmaken
function icon_functies_metabox(){
    add_meta_box( 'icon_meta_functies', 'Icoon', 'icon_metabox_add_content', 'functies', 'side', 'high');
}
add_action('add_meta_boxes', 'icon_functies_metabox' );

function icon_metabox_add_content($post){
  // Indien de metadata reeds bestaat, haal de post_meta op uit de databank
	$icon   = get_post_meta( $post->ID, '_icon', true );

    //Controle als de aanvraag komt van dit scherm - Save Post kan van een andere pagina komen
	wp_nonce_field(plugin_basename(__FILE__), 'icon_functies_metabox_nonce' );

	//Content aanmaken met behulp van echo
	echo '<label for="icon">Icoon (Fontawesome) <label>';
	echo "<input type='text' id='icon' name='_icon' value='{$icon}'/>";
}

function icon_metabox_fucnties_save($post_id){
      // We hebben de toestemming aanpassingen te doen
    //Haal de data uit het formulier
    $icon = $_POST['_icon'];

    // Sla de data op in een veld
    update_post_meta($post_id, '_icon', $icon); 

    }
//Controle dat enkel deze functie zal worden uitgevoerd indien het input-veld afkorting bestaat.
if(isset($_POST['_icon'])){
    add_action('save_post', 'icon_metabox_fucnties_save');
}

//Menu registreren
function register_menu_locations() {
    register_nav_menus(
      array(
        'primary-menu' => __( 'Primary menu')
      )
    );
  }
  add_action( 'init', 'register_menu_locations' );

//custom logo
function evelien_custom_logo_added() {
    $args = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $args );
}
add_action( 'after_setup_theme', 'evelien_custom_logo_added' );

//custom header
function evelien_custom_header_setup() {
    $args = array(
        'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
        'default-text-color' => '000',
        'width'              => 1000,
        'height'             => 250,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'evelien_custom_header_setup' );


 

 ?>
