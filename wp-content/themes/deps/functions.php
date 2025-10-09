<?php
 

 // Registro CSS
function styleMain_style() {
   wp_enqueue_style( 
    'stylePlugin', 
     get_template_directory_uri() . '/css/style.css' ,
     '',
     null,
     'screen'
     );
 }
 add_action( 'wp_enqueue_scripts', 'styleMain_style' );


// Registro support----------------------------------------
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'post-formats', array(
    'aside',
    'image',
    'video',
    'quote',
    'link',
    'gallery',
    'status',
    'audio',
    'chat',
  ) );



// Limitar cantidad de palabras Excerpt
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
  array_pop($excerpt);
  $excerpt = implode(" ",$excerpt).'...';
  }
  else {
  $excerpt = implode(" ",$excerpt);
  }
  
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}

// Registro de post
add_action('init', 'microaprendizaje');
function microaprendizaje() {
  register_post_type( 'microaprendizaje', array(
  'labels' => array(
  'name' => __('Entradas microaprendizaje'),
  'singular_name' => __('Crear call to action')
  ),
  'public' => true,
  'show_ui' => true,
  'rewrite' => array(
  'slug' => 'microaprendizaje',
  'with_front' => false
  ),
  'supports' => array('title','editor','author','thumbnail','excerpt','comments','custom-fields'),
  'has_archive' => true,
  'taxonomies' => array('category', 'post_tag'),
  'exclude_from_search' => false,
  ) );
}

// Registro de post
add_action('init', 'gestionDirectiva');
function gestionDirectiva() {
  register_post_type( 'gestionDirectiva', array(
  'labels' => array(
  'name' => __('Entradas Gestion Directiva'),
  'singular_name' => __('Crear call to action')
  ),
  'public' => true,
  'show_ui' => true,
  'rewrite' => array(
  'slug' => 'gestionDirectiva',
  'with_front' => false
  ),
  'supports' => array('title','editor','author','thumbnail','excerpt','comments','custom-fields'),
  'has_archive' => true,
  'taxonomies' => array('category', 'post_tag'),
  'exclude_from_search' => false,
  ) );
}


// Registro de post
add_action('init', 'catMaestro');
function catMaestro() {
  register_post_type( 'catMaestro', array(
  'labels' => array(
  'name' => __('Catálogo maestro de documentos en salud'),
  'singular_name' => __('Crear call to action')
  ),
  'public' => true,
  'show_ui' => true,
  'rewrite' => array(
  'slug' => 'catMaestro',
  'with_front' => false
  ),
  'supports' => array('title','editor','author','thumbnail','excerpt','comments','custom-fields'),
  'has_archive' => true,
  'taxonomies' => array('category', 'post_tag'),
  'exclude_from_search' => false,
  ) );
}

// Registro de post
add_action('init', 'colaboradores');
function colaboradores() {
  register_post_type( 'colaboradores', array(
  'labels' => array(
  'name' => __('Colaboradores'),
  'singular_name' => __('Crear colaborador')
  ),
  'public' => true,
  'show_ui' => true,
  'rewrite' => array(
  'slug' => 'colaboradores',
  'with_front' => false
  ),
  'supports' => array('title','editor','author','thumbnail','excerpt','comments','custom-fields'),
  'has_archive' => true,
  'taxonomies' => array('category', 'post_tag'),
  'exclude_from_search' => false,
  ) );
}

// post-thumbnails
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
 }

?>
