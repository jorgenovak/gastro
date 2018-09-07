<?php
  /* Disable WordPress Admin Bar for all users but admins. */
  show_admin_bar(false);

  // Remove from Sidebar Admin
  add_action('admin_menu', 'my_remove_menu_pages');
	function my_remove_menu_pages() {
    remove_menu_page('edit.php'); // Entradas
    remove_menu_page('edit-comments.php'); // Comentarios
	}

  // Async load ----------------------------------
  function ikreativ_async_scripts($url) {
      if ( strpos( $url, '#asyncload') === false )
          return $url;
      else if ( is_admin() )
          return str_replace( '#asyncload', '', $url );
      else
  	return str_replace( '#asyncload', '', $url )."' async='async";
      }
  add_filter( 'clean_url', 'ikreativ_async_scripts', 11, 1 );

  // LOAD CSS ----------------------------------
  function areaStyle() {
    wp_enqueue_style('global_css',get_template_directory_uri() . '/css/output/global.css');
    wp_enqueue_style('awesome_css',get_template_directory_uri() . '/css/input/fonts/awesome/brands.css');
    wp_enqueue_style('header_css',get_template_directory_uri() . '/css/output/header.css');
    wp_enqueue_style('index_css',get_template_directory_uri() . '/css/output/sections/index.css');
    wp_enqueue_style('footer_css',get_template_directory_uri() . '/css/output/footer.css');
    if(is_front_page()){
      //
    }else{
      //
    }

  }
  add_action ('wp_enqueue_scripts','areaStyle');

  // LOAD SCRIPTS ----------------------------------
  function areaScripts() {
    if ( !is_admin() ) {
      wp_deregister_script('jquery');
      wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', '2.2.4', false);
      wp_enqueue_script('jquery');
    }
    wp_enqueue_script('global_js',get_template_directory_uri() . '/js/global.js', array('jquery'), '', true);
    wp_enqueue_script('ui_js',get_template_directory_uri() . '/js/plugins/ui/jquery-ui.min.js', array('jquery'), '', true);
    if(is_front_page()){
      wp_enqueue_script('index_js',get_template_directory_uri() . '/js/index.js', array('jquery'), '', true);
      wp_enqueue_script('ui_js',get_template_directory_uri() . '/js/plugins/ui/jquery-ui.min.js', array('jquery'), '', true);
    } else if (is_page('nacional')){
      wp_enqueue_script('nacional_js',get_template_directory_uri() . '/js/nacional.js', array('jquery'), '', true);
    } else if (is_page('gallo')){
      wp_enqueue_script('gallo_js',get_template_directory_uri() . '/js/gallo.js', array('jquery'), '', true);
    } else if (is_page('mercurio')){
      wp_enqueue_script('mercurio_js',get_template_directory_uri() . '/js/mercurio.js', array('jquery'), '', true);
    }  else if (is_page('skin_joint')){
      wp_enqueue_script('skinjoint_js',get_template_directory_uri() . '/js/skinjoint.js', array('jquery'), '', true);
    } else{
      // Else
    }
  }
  add_action('wp_enqueue_scripts','areaScripts');


  // ADD THUMBNAIL SUPPORT TO ALL POST ----------------------------------
  add_theme_support('post-thumbnails');


  // HEADER ----------------------------------
  function header_post() {
      // Set UI labels for Custom Post Type
      $labels = array(
          'name'                => _x( 'Header', 'Post Type General Name', 'twentythirteen' ),
          'singular_name'       => _x( 'Header', 'Post Type Singular Name', 'twentythirteen' ),
          'menu_name'           => __( 'Header', 'twentythirteen' ),
          'parent_item_colon'   => __( 'Parent Header', 'twentythirteen' ),
          'all_items'           => __( 'Todos los Links', 'twentythirteen' ),
          'view_item'           => __( 'Ver Header', 'twentythirteen' ),
          'add_new_item'        => __( 'Nombre del Header', 'twentythirteen' ),
          'add_new'             => __( 'Agregar Header', 'twentythirteen' ),
          'edit_item'           => __( 'Editar Header', 'twentythirteen' ),
          'update_item'         => __( 'Actualizar Header', 'twentythirteen' ),
          'search_items'        => __( 'Buscar Header', 'twentythirteen' ),
          'not_found'           => __( 'No se encontro', 'twentythirteen' ),
          'not_found_in_trash'  => __( 'No se encontro en Eliminados', 'twentythirteen' ),
          'parent' => ''
      );

      // Set other options for Custom Post Type
      $args = array(
          'label'               => __( 'header', 'twentythirteen' ),
          'description'         => __( 'Lista de links', 'twentythirteen' ),
          'labels'              => $labels,
          // Features this CPT supports in Post Editor
          'supports'            => array( 'title' ),
          // You can associate this CPT with a taxonomy or custom taxonomy.
          'taxonomies'          => array( 'category' ),
          /* A hierarchical CPT is like Pages and can have
          * Parent and child items. A non-hierarchical CPT
          * is like Posts.
          */
          'hierarchical'        => false,
          'public'              => true,
          'show_ui'             => true,
          'show_in_menu'        => true,
          'show_in_nav_menus'   => true,
          'show_in_admin_bar'   => true,
          'menu_position'       => 3,
          'can_export'          => true,
          'has_archive'         => true,
          'exclude_from_search' => false,
          'publicly_queryable'  => true,
          'capability_type'     => 'page',
      );

      // Registering your Custom Post Type
      register_post_type( 'header', $args );

  }
  add_action( 'init', 'header_post', 0 );
  add_action( 'init', 'create_posttype' );

  // LA NACIONAL ----------------------------------
  function nacional_post() {
      // Set UI labels for Custom Post Type
      $labels = array(
          'name'                => _x( 'Nacional', 'Post Type General Name', 'twentythirteen' ),
          'singular_name'       => _x( 'Nacional', 'Post Type Singular Name', 'twentythirteen' ),
          'menu_name'           => __( 'Nacional', 'twentythirteen' ),
          'parent_item_colon'   => __( 'Parent Nacional', 'twentythirteen' ),
          'all_items'           => __( 'Todos los Links', 'twentythirteen' ),
          'view_item'           => __( 'Ver Nacional', 'twentythirteen' ),
          'add_new_item'        => __( 'Nombre del Nacional', 'twentythirteen' ),
          'add_new'             => __( 'Agregar Nacional', 'twentythirteen' ),
          'edit_item'           => __( 'Editar Nacional', 'twentythirteen' ),
          'update_item'         => __( 'Actualizar Nacional', 'twentythirteen' ),
          'search_items'        => __( 'Buscar Nacional', 'twentythirteen' ),
          'not_found'           => __( 'No se encontro', 'twentythirteen' ),
          'not_found_in_trash'  => __( 'No se encontro en Eliminados', 'twentythirteen' ),
          'parent' => ''
      );

      // Set other options for Custom Post Type
      $args = array(
          'label'               => __( 'nacional', 'twentythirteen' ),
          'description'         => __( 'Lista de links', 'twentythirteen' ),
          'labels'              => $labels,
          // Features this CPT supports in Post Editor
          'supports'            => array( 'title', 'thumbnail' ),
          // You can associate this CPT with a taxonomy or custom taxonomy.
          'taxonomies'          => array( 'category' ),
          /* A hierarchical CPT is like Pages and can have
          * Parent and child items. A non-hierarchical CPT
          * is like Posts.
          */
          'hierarchical'        => false,
          'public'              => true,
          'show_ui'             => true,
          'show_in_menu'        => true,
          'show_in_nav_menus'   => true,
          'show_in_admin_bar'   => true,
          'menu_position'       => 3,
          'can_export'          => true,
          'has_archive'         => true,
          'exclude_from_search' => false,
          'publicly_queryable'  => true,
          'capability_type'     => 'page',
      );

      // Registering your Custom Post Type
      register_post_type( 'nacional', $args );

  }
  add_action( 'init', 'nacional_post', 0 );
  add_action( 'init', 'create_posttype' );

  // GALLO 71 ----------------------------------
  function gallo_post() {
      // Set UI labels for Custom Post Type
      $labels = array(
          'name'                => _x( 'Gallo 71', 'Post Type General Name', 'twentythirteen' ),
          'singular_name'       => _x( 'Gallo 71', 'Post Type Singular Name', 'twentythirteen' ),
          'menu_name'           => __( 'Gallo 71', 'twentythirteen' ),
          'parent_item_colon'   => __( 'Parent Gallo 71', 'twentythirteen' ),
          'all_items'           => __( 'Todos los Links', 'twentythirteen' ),
          'view_item'           => __( 'Ver Gallo 71', 'twentythirteen' ),
          'add_new_item'        => __( 'Nombre del Gallo 71', 'twentythirteen' ),
          'add_new'             => __( 'Agregar Gallo 71', 'twentythirteen' ),
          'edit_item'           => __( 'Editar Gallo 71', 'twentythirteen' ),
          'update_item'         => __( 'Actualizar Gallo 71', 'twentythirteen' ),
          'search_items'        => __( 'Buscar Gallo 71', 'twentythirteen' ),
          'not_found'           => __( 'No se encontro', 'twentythirteen' ),
          'not_found_in_trash'  => __( 'No se encontro en Eliminados', 'twentythirteen' ),
          'parent' => ''
      );

      // Set other options for Custom Post Type
      $args = array(
          'label'               => __( 'gallo', 'twentythirteen' ),
          'description'         => __( 'Lista de links', 'twentythirteen' ),
          'labels'              => $labels,
          // Features this CPT supports in Post Editor
          'supports'            => array( 'title', 'thumbnail' ),
          // You can associate this CPT with a taxonomy or custom taxonomy.
          'taxonomies'          => array( 'category' ),
          /* A hierarchical CPT is like Pages and can have
          * Parent and child items. A non-hierarchical CPT
          * is like Posts.
          */
          'hierarchical'        => false,
          'public'              => true,
          'show_ui'             => true,
          'show_in_menu'        => true,
          'show_in_nav_menus'   => true,
          'show_in_admin_bar'   => true,
          'menu_position'       => 3,
          'can_export'          => true,
          'has_archive'         => true,
          'exclude_from_search' => false,
          'publicly_queryable'  => true,
          'capability_type'     => 'page',
      );

      // Registering your Custom Post Type
      register_post_type( 'gallo', $args );

  }
  add_action( 'init', 'gallo_post', 0 );
  add_action( 'init', 'create_posttype' );

  // MERCURIO ----------------------------------
  function mercurio_post() {
      // Set UI labels for Custom Post Type
      $labels = array(
          'name'                => _x( 'Mercurio', 'Post Type General Name', 'twentythirteen' ),
          'singular_name'       => _x( 'Mercurio', 'Post Type Singular Name', 'twentythirteen' ),
          'menu_name'           => __( 'Mercurio', 'twentythirteen' ),
          'parent_item_colon'   => __( 'Parent Mercurio', 'twentythirteen' ),
          'all_items'           => __( 'Todos las imagenes', 'twentythirteen' ),
          'view_item'           => __( 'Ver Mercurio', 'twentythirteen' ),
          'add_new_item'        => __( 'Nombre del Mercurio', 'twentythirteen' ),
          'add_new'             => __( 'Agregar Mercurio', 'twentythirteen' ),
          'edit_item'           => __( 'Editar Mercurio', 'twentythirteen' ),
          'update_item'         => __( 'Actualizar Mercurio', 'twentythirteen' ),
          'search_items'        => __( 'Buscar Mercurio', 'twentythirteen' ),
          'not_found'           => __( 'No se encontro', 'twentythirteen' ),
          'not_found_in_trash'  => __( 'No se encontro en Eliminados', 'twentythirteen' ),
          'parent' => ''
      );

      // Set other options for Custom Post Type
      $args = array(
          'label'               => __( 'mercurio', 'twentythirteen' ),
          'description'         => __( 'Lista de links', 'twentythirteen' ),
          'labels'              => $labels,
          // Features this CPT supports in Post Editor
          'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
          // You can associate this CPT with a taxonomy or custom taxonomy.
          // 'taxonomies'          => array( 'category' ),
          /* A hierarchical CPT is like Pages and can have
          * Parent and child items. A non-hierarchical CPT
          * is like Posts.
          */
          'hierarchical'        => false,
          'public'              => true,
          'show_ui'             => true,
          'show_in_menu'        => true,
          'show_in_nav_menus'   => true,
          'show_in_admin_bar'   => true,
          'menu_position'       => 3,
          'can_export'          => true,
          'has_archive'         => true,
          'exclude_from_search' => false,
          'publicly_queryable'  => true,
          'capability_type'     => 'post',
      );

      // Registering your Custom Post Type
      register_post_type( 'mercurio', $args );

  }
  add_action( 'init', 'mercurio_post', 0 );
  add_action( 'init', 'create_posttype' );

  // SKINJOINT ----------------------------------
  function skinjoint_post() {
      // Set UI labels for Custom Post Type
      $labels = array(
          'name'                => _x( 'Skinjoint', 'Post Type General Name', 'twentythirteen' ),
          'singular_name'       => _x( 'Skinjoint', 'Post Type Singular Name', 'twentythirteen' ),
          'menu_name'           => __( 'Skinjoint', 'twentythirteen' ),
          'parent_item_colon'   => __( 'Parent Skinjoint', 'twentythirteen' ),
          'all_items'           => __( 'Todos los Links', 'twentythirteen' ),
          'view_item'           => __( 'Ver Skinjoint', 'twentythirteen' ),
          'add_new_item'        => __( 'Nombre del Skinjoint', 'twentythirteen' ),
          'add_new'             => __( 'Agregar Skinjoint', 'twentythirteen' ),
          'edit_item'           => __( 'Editar Skinjoint', 'twentythirteen' ),
          'update_item'         => __( 'Actualizar Skinjoint', 'twentythirteen' ),
          'search_items'        => __( 'Buscar Skinjoint', 'twentythirteen' ),
          'not_found'           => __( 'No se encontro', 'twentythirteen' ),
          'not_found_in_trash'  => __( 'No se encontro en Eliminados', 'twentythirteen' ),
          'parent' => ''
      );

      // Set other options for Custom Post Type
      $args = array(
          'label'               => __( 'skinjoint', 'twentythirteen' ),
          'description'         => __( 'Lista de Imagenes', 'twentythirteen' ),
          'labels'              => $labels,
          // Features this CPT supports in Post Editor
          'supports'            => array( 'title', 'thumbnail'),
          // You can associate this CPT with a taxonomy or custom taxonomy.
          // 'taxonomies'          => array( 'category' ),
          /* A hierarchical CPT is like Pages and can have
          * Parent and child items. A non-hierarchical CPT
          * is like Posts.
          */
          'hierarchical'        => false,
          'public'              => true,
          'show_ui'             => true,
          'show_in_menu'        => true,
          'show_in_nav_menus'   => true,
          'show_in_admin_bar'   => true,
          'menu_position'       => 3,
          'can_export'          => true,
          'has_archive'         => true,
          'exclude_from_search' => false,
          'publicly_queryable'  => true,
          'capability_type'     => 'post',
      );

      // Registering your Custom Post Type
      register_post_type( 'skinjoint', $args );

  }
  add_action( 'init', 'skinjoint_post', 0 );
  add_action( 'init', 'create_posttype' );


  // FOOTER ------------------------------
  function footer_post() {
      // Set UI labels for Custom Post Type
      $labels = array(
          'name'                => _x( 'Footer', 'Post Type General Name', 'twentythirteen' ),
          'singular_name'       => _x( 'Footer', 'Post Type Singular Name', 'twentythirteen' ),
          'menu_name'           => __( 'Footer', 'twentythirteen' ),
          'parent_item_colon'   => __( 'Parent Footer', 'twentythirteen' ),
          'all_items'           => __( 'Todos los Links', 'twentythirteen' ),
          'view_item'           => __( 'Ver Footer', 'twentythirteen' ),
          'add_new_item'        => __( 'Nombre del Footer', 'twentythirteen' ),
          'add_new'             => __( 'Agregar Footer', 'twentythirteen' ),
          'edit_item'           => __( 'Editar Footer', 'twentythirteen' ),
          'update_item'         => __( 'Actualizar Footer', 'twentythirteen' ),
          'search_items'        => __( 'Buscar Footer', 'twentythirteen' ),
          'not_found'           => __( 'No se encontro', 'twentythirteen' ),
          'not_found_in_trash'  => __( 'No se encontro en Eliminados', 'twentythirteen' ),
          'parent' => ''
      );

      // Set other options for Custom Post Type
      $args = array(
          'label'               => __( 'footer', 'twentythirteen' ),
          'description'         => __( 'Lista de links', 'twentythirteen' ),
          'labels'              => $labels,
          // Features this CPT supports in Post Editor
          'supports'            => array( 'title' ),
          // You can associate this CPT with a taxonomy or custom taxonomy.
          'taxonomies'          => array( 'category' ),
          /* A hierarchical CPT is like Pages and can have
          * Parent and child items. A non-hierarchical CPT
          * is like Posts.
          */
          'hierarchical'        => false,
          'public'              => true,
          'show_ui'             => true,
          'show_in_menu'        => true,
          'show_in_nav_menus'   => true,
          'show_in_admin_bar'   => true,
          'menu_position'       => 3,
          'can_export'          => true,
          'has_archive'         => true,
          'exclude_from_search' => false,
          'publicly_queryable'  => true,
          'capability_type'     => 'page',
      );

      // Registering your Custom Post Type
      register_post_type( 'footer', $args );


  }
  add_action( 'init', 'footer_post', 0 );
  add_action( 'init', 'create_posttype' );




  // Eliminar Textarea de Pages
  add_action('admin_init', 'remove_textarea');
  function remove_textarea() {
    remove_post_type_support( 'page', 'editor' );
  }


  //  Line Break Shortcode --------------------------
  function line_break_shortcode() {
  	return '<br />';
  }
  add_shortcode( 'br', 'line_break_shortcode' );

  // Disabilitate Add More Button on Admin ----------------------------------
  function disable_new_posts() {
    // Hide sidebar link
    global $submenu;
    unset($submenu['edit.php?post_type=header'][10]);

    // Hide link on listing page
    if (isset($_GET['post_type']) && $_GET['post_type'] == 'CUSTOM_POST_TYPE') {
        echo '<style type="text/css">
        #favorite-actions, .add-new-h2, .tablenav { display:none; }
        </style>';
    }
  }
  add_action('admin_menu', 'disable_new_posts');


  // Eliminar opciones de la barra del administrador ---------------------
  function change_toolbar($wp_toolbar) {
    global $current_user;
    $instrucciones = get_admin_url() . '/admin.php?page=instrucciones';


    $wp_toolbar->remove_node('comments');
    $wp_toolbar->remove_node('new-content');

    $wp_toolbar->add_node(array(
      'id' => 'comming_soon',
      'title' => '*Activar Coming soon <input type="checkbox" style="height: 14px !important;margin-left: 6px;font-size: 3px;">',
      'href' => $volver,
      'meta' => array('target' => 'volver')
    ));
  }
  add_action('admin_bar_menu', 'change_toolbar', 999);


  // Customizar admin  ---------
  /**
* allows you to add custom styles for WordPress admin panel
*/

  add_action( 'admin_head', 'admin_css' );
    function admin_css()
  {
    echo '<link rel="stylesheet" type="text/css" href="admin-custom.css">';
  }



?>
