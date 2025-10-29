<?php
/**
 * HPC Church Theme Functions
 *
 * @package HPC_Church
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Theme version
define( 'HPC_CHURCH_VERSION', '1.0.0' );

/**
 * Setup Theme
 */
function hpc_church_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 800, 600, true );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => __( 'Menu Principal', 'hpc-church' ),
        'footer'  => __( 'Menu do Rodapé', 'hpc-church' ),
    ) );

    // Switch default core markup to output valid HTML5
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Add theme support for selective refresh for widgets
    add_theme_support( 'customize-selective-refresh-widgets' );

    // Add support for WooCommerce
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

    // Add support for custom logo
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Load text domain for translations
    load_theme_textdomain( 'hpc-church', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'hpc_church_setup' );

/**
 * Enqueue scripts and styles
 */
function hpc_church_scripts() {
    // Google Fonts
    wp_enqueue_style( 
        'hpc-church-fonts', 
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700;800&display=swap',
        array(),
        null
    );

    // Theme stylesheet
    wp_enqueue_style( 'hpc-church-style', get_stylesheet_uri(), array(), HPC_CHURCH_VERSION );

    // Main JS
    wp_enqueue_script( 'hpc-church-main', get_template_directory_uri() . '/assets/js/main.js', array(), HPC_CHURCH_VERSION, true );

    // Localize script for AJAX
    wp_localize_script( 'hpc-church-main', 'hpcAjax', array(
        'ajax_url' => admin_url( 'admin-ajax.php' ),
        'nonce'    => wp_create_nonce( 'hpc_church_nonce' ),
    ) );
}
add_action( 'wp_enqueue_scripts', 'hpc_church_scripts' );

/**
 * Register Custom Post Type: Eventos
 */
function hpc_church_register_eventos() {
    $labels = array(
        'name'               => 'Eventos',
        'singular_name'      => 'Evento',
        'menu_name'          => 'Eventos',
        'add_new'            => 'Adicionar Novo',
        'add_new_item'       => 'Adicionar Novo Evento',
        'edit_item'          => 'Editar Evento',
        'new_item'           => 'Novo Evento',
        'view_item'          => 'Ver Evento',
        'search_items'       => 'Buscar Eventos',
        'not_found'          => 'Nenhum evento encontrado',
        'not_found_in_trash' => 'Nenhum evento na lixeira',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'evento' ),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-calendar-alt',
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    );

    register_post_type( 'evento', $args );
}
add_action( 'init', 'hpc_church_register_eventos' );

/**
 * Add custom fields for eventos (data, horário, local)
 */
function hpc_church_evento_meta_boxes() {
    add_meta_box(
        'evento_details',
        'Detalhes do Evento',
        'hpc_church_evento_meta_box_callback',
        'evento',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'hpc_church_evento_meta_boxes' );

function hpc_church_evento_meta_box_callback( $post ) {
    wp_nonce_field( 'hpc_church_evento_nonce', 'hpc_church_evento_nonce_field' );
    
    $data = get_post_meta( $post->ID, '_evento_data', true );
    $horario = get_post_meta( $post->ID, '_evento_horario', true );
    $local = get_post_meta( $post->ID, '_evento_local', true );
    $tipo = get_post_meta( $post->ID, '_evento_tipo', true );
    ?>
    <p>
        <label for="evento_data">Data do Evento:</label><br>
        <input type="date" id="evento_data" name="evento_data" value="<?php echo esc_attr( $data ); ?>" style="width: 100%;">
    </p>
    <p>
        <label for="evento_horario">Horário:</label><br>
        <input type="text" id="evento_horario" name="evento_horario" value="<?php echo esc_attr( $horario ); ?>" placeholder="Ex: 19:00" style="width: 100%;">
    </p>
    <p>
        <label for="evento_local">Local:</label><br>
        <input type="text" id="evento_local" name="evento_local" value="<?php echo esc_attr( $local ); ?>" placeholder="Ex: Igreja HPC" style="width: 100%;">
    </p>
    <p>
        <label for="evento_tipo">Tipo de Evento:</label><br>
        <select id="evento_tipo" name="evento_tipo" style="width: 100%;">
            <option value="culto" <?php selected( $tipo, 'culto' ); ?>>Culto</option>
            <option value="grupo" <?php selected( $tipo, 'grupo' ); ?>>Grupo</option>
            <option value="acao" <?php selected( $tipo, 'acao' ); ?>>Ação Social</option>
            <option value="especial" <?php selected( $tipo, 'especial' ); ?>>Evento Especial</option>
        </select>
    </p>
    <?php
}

function hpc_church_save_evento_meta( $post_id ) {
    if ( ! isset( $_POST['hpc_church_evento_nonce_field'] ) ) {
        return;
    }
    
    if ( ! wp_verify_nonce( $_POST['hpc_church_evento_nonce_field'], 'hpc_church_evento_nonce' ) ) {
        return;
    }
    
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    
    if ( isset( $_POST['evento_data'] ) ) {
        update_post_meta( $post_id, '_evento_data', sanitize_text_field( $_POST['evento_data'] ) );
    }
    
    if ( isset( $_POST['evento_horario'] ) ) {
        update_post_meta( $post_id, '_evento_horario', sanitize_text_field( $_POST['evento_horario'] ) );
    }
    
    if ( isset( $_POST['evento_local'] ) ) {
        update_post_meta( $post_id, '_evento_local', sanitize_text_field( $_POST['evento_local'] ) );
    }
    
    if ( isset( $_POST['evento_tipo'] ) ) {
        update_post_meta( $post_id, '_evento_tipo', sanitize_text_field( $_POST['evento_tipo'] ) );
    }
}
add_action( 'save_post_evento', 'hpc_church_save_evento_meta' );

/**
 * AJAX Handler for Contact Forms
 */
function hpc_church_submit_form() {
    check_ajax_referer( 'hpc_church_nonce', 'nonce' );
    
    $form_type = sanitize_text_field( $_POST['form_type'] );
    $name = sanitize_text_field( $_POST['name'] );
    $email = sanitize_email( $_POST['email'] );
    
    // Email configuration
    $to = get_option( 'admin_email' ); // or 'contato@hpcchurch.com'
    $subject = 'Novo formulário: ' . $form_type;
    $message = "Nome: $name\nEmail: $email\n\n";
    
    // Add other form fields
    foreach ( $_POST as $key => $value ) {
        if ( ! in_array( $key, array( 'action', 'nonce', 'form_type' ) ) ) {
            $message .= ucfirst( $key ) . ": " . sanitize_text_field( $value ) . "\n";
        }
    }
    
    $headers = array( 'Content-Type: text/html; charset=UTF-8' );
    
    if ( wp_mail( $to, $subject, nl2br( $message ), $headers ) ) {
        wp_send_json_success( array( 'message' => 'Formulário enviado com sucesso!' ) );
    } else {
        wp_send_json_error( array( 'message' => 'Erro ao enviar formulário.' ) );
    }
}
add_action( 'wp_ajax_hpc_submit_form', 'hpc_church_submit_form' );
add_action( 'wp_ajax_nopriv_hpc_submit_form', 'hpc_church_submit_form' );

/**
 * Customizer Settings
 */
function hpc_church_customize_register( $wp_customize ) {
    // Church Info Section
    $wp_customize->add_section( 'hpc_church_info', array(
        'title'    => 'Informações da Igreja',
        'priority' => 30,
    ) );
    
    // Address
    $wp_customize->add_setting( 'hpc_address', array(
        'default'           => '3379 Canton Rd, Marietta, GA 30066',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'hpc_address', array(
        'label'   => 'Endereço',
        'section' => 'hpc_church_info',
        'type'    => 'text',
    ) );
    
    // Phone
    $wp_customize->add_setting( 'hpc_phone', array(
        'default'           => '+1 770-862-0756',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'hpc_phone', array(
        'label'   => 'Telefone',
        'section' => 'hpc_church_info',
        'type'    => 'text',
    ) );
    
    // Email
    $wp_customize->add_setting( 'hpc_email', array(
        'default'           => 'contato@hpcchurch.com',
        'sanitize_callback' => 'sanitize_email',
    ) );
    
    $wp_customize->add_control( 'hpc_email', array(
        'label'   => 'Email',
        'section' => 'hpc_church_info',
        'type'    => 'email',
    ) );
    
    // Instagram
    $wp_customize->add_setting( 'hpc_instagram', array(
        'default'           => '@hpcatlanta',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'hpc_instagram', array(
        'label'   => 'Instagram',
        'section' => 'hpc_church_info',
        'type'    => 'text',
    ) );
}
add_action( 'customize_register', 'hpc_church_customize_register' );

/**
 * Widget Areas
 */
function hpc_church_widgets_init() {
    register_sidebar( array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar-1',
        'description'   => 'Adicione widgets aqui.',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    
    register_sidebar( array(
        'name'          => 'Footer',
        'id'            => 'footer-1',
        'description'   => 'Área do rodapé.',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'hpc_church_widgets_init' );
