<?php
/**
 * Medilar functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Medilar
 */
require_once get_template_directory() . '/inc/tgmpa/medilar-tgmpa-conf.php';

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

if (!function_exists('medilar_setup')):
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function medilar_setup()
{
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Medilar, use a find and replace
         * to change 'medilar' to the name of your theme in all the template files.
         */
        load_theme_textdomain('medilar', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'menu-1' => esc_html__('Primary', 'medilar'),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'medilar_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height' => 250,
                'width' => 250,
                'flex-width' => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action('after_setup_theme', 'medilar_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function medilar_content_width()
{
    $GLOBALS['content_width'] = apply_filters('medilar_content_width', 640);
}
add_action('after_setup_theme', 'medilar_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function medilar_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'medilar'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'medilar'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}
add_action('widgets_init', 'medilar_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function medilar_scripts()
{
    wp_enqueue_style('medilar-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('medilar-style', 'rtl', 'replace');

    wp_enqueue_script('medilar-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'medilar_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}
// Adding Bootstrap to the Theme - Start

wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.min.js', array('jquery'));

// Adding Bootstrap to the Theme - Start

function ocdi_import_files()
{
    return [
        [
            'import_file_name' => 'Medilar Main Demo',
            'local_import_file' => trailingslashit(get_template_directory()) . 'ocdi/medilar-demo.xml',
            'import_preview_image_url' => 'https://medilar.atakansaracoglu.com/wp-content/uploads/2022/01/screenshot.png',
            'preview_url' => 'https://medilar.atakansaracoglu.com',
        ],
    ];
}
add_filter('ocdi/import_files', 'ocdi_import_files');

function ocdi_plugin_intro_text($default_text)
{
    $default_text .= '<div class="ocdi__intro-text"><p>Thank you for choosing Medilar. In order to install the demo content, please be sure you have installed and activated all required plugins.</p></div>';

    return $default_text;
}
add_filter('ocdi/plugin_intro_text', 'ocdi_plugin_intro_text');

function ocdi_after_import_setup()
{
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title('Home v1');
    update_option('show_on_front', 'page');
    update_option('page_on_front', $front_page_id->ID);

}
add_action('ocdi/after_import', 'ocdi_after_import_setup');

function cptui_register_my_cpts_services()
{

    /**
     * Post Type: Services.
     */

    $labels = [
        "name" => __("Services", "medilar"),
        "singular_name" => __("Service", "medilar"),
        "menu_name" => __("My Services", "medilar"),
        "all_items" => __("All Services", "medilar"),
        "add_new" => __("Add new", "medilar"),
        "add_new_item" => __("Add new Service", "medilar"),
        "edit_item" => __("Edit Service", "medilar"),
        "new_item" => __("New Service", "medilar"),
        "view_item" => __("View Service", "medilar"),
        "view_items" => __("View Services", "medilar"),
        "search_items" => __("Search Services", "medilar"),
        "not_found" => __("No Services found", "medilar"),
        "not_found_in_trash" => __("No Services found in trash", "medilar"),
        "parent" => __("Parent Service:", "medilar"),
        "featured_image" => __("Featured image for this Service", "medilar"),
        "set_featured_image" => __("Set featured image for this Service", "medilar"),
        "remove_featured_image" => __("Remove featured image for this Service", "medilar"),
        "use_featured_image" => __("Use as featured image for this Service", "medilar"),
        "archives" => __("Service archives", "medilar"),
        "insert_into_item" => __("Insert into Service", "medilar"),
        "uploaded_to_this_item" => __("Upload to this Service", "medilar"),
        "filter_items_list" => __("Filter Services list", "medilar"),
        "items_list_navigation" => __("Services list navigation", "medilar"),
        "items_list" => __("Services list", "medilar"),
        "attributes" => __("Services attributes", "medilar"),
        "name_admin_bar" => __("Service", "medilar"),
        "item_published" => __("Service published", "medilar"),
        "item_published_privately" => __("Service published privately.", "medilar"),
        "item_reverted_to_draft" => __("Service reverted to draft.", "medilar"),
        "item_scheduled" => __("Service scheduled", "medilar"),
        "item_updated" => __("Service updated.", "medilar"),
        "parent_item_colon" => __("Parent Service:", "medilar"),
    ];

    $args = [
        "label" => __("Services", "medilar"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => ["slug" => "services", "with_front" => true],
        "query_var" => true,
        "menu_icon" => "dashicons-admin-users",
        "supports" => ["title", "editor", "thumbnail", "custom-fields", "author", "page-attributes", "post-formats"],
        "taxonomies" => ["category", "post_tag"],
        "show_in_graphql" => false,
    ];

    register_post_type("services", $args);
}

add_action('init', 'cptui_register_my_cpts_services');
add_filter('wp_mail_content_type', function ($content_type) {
    return 'text/html';
});

function wpdocs_custom_login()
{

    if (isset($_POST['submit_login'])) {
        global $wp_session;
        global $wpdb;
        global $err_plg;
        $err_plg = "";
        $email = $_POST['email'];
        $email_check = filter_var($email, FILTER_VALIDATE_EMAIL);
        $password = $_POST['password'];
        $password_check = true;

        if (!$email_check) {
            $err_plg = "Email non valide";
        }
        if (!$password_check) {
            $err_plg = "Mot de pass non valide";
        }
        if ($email_check && $password_check) {
            $myUser = get_user_by('email', $email);
            if ($myUser) {
                $username = $myUser->user_login;
                $creds = array(
                    'user_login' => $username,
                    'user_password' => $password,
                    'remember' => true,
                );
                $user = wp_signon($creds, true);
                if (is_wp_error($user)) {
                    $err_plg = $user->get_error_code();
                } else {
                    $userID = $user->ID;
                    if (!session_id()) {
                        session_start();
                        wp_set_current_user($userID, $email);
                        wp_set_auth_cookie($userID, true, false);
                        do_action('wp_login', $email);
                    }
                }
            } else {
                $err_plg = "Email ou Mot de pass non valide";
            }
        }
    }

    if (isset($_POST['submit_register'])) {
        $coffret = strtolower($_POST['coffret']);

        if (str_contains('marketing123', $coffret)) {
            $coffret = 'marketing123-' . uniqid();
        } else if ((int) $_POST['coffret'] >= 1 && (int) $_POST['coffret'] <= 3000) {
            $coffret = $_POST['coffret'];
        } else {
            global $err_plg;
            $err_plg = 'Coffret non disponible';
            header("Location: " . ABSPATH);
            exit();
        }
        global $wpdb;
        $_POST['coffret'] = $coffret;
        $arr = $_POST;
        $user = $_POST;
        $username = $_POST['nom'] . "-" . $_POST['prenom'] . '-' . uniqid();
        $email = $_POST['email'];
        $password = $_POST['password'];
        unset($arr['submit_register']);
        unset($arr['password']);
        $res = $wpdb->insert(
            'wp_formy_values',
            $arr
        );
        $err = $wpdb->print_error();
        if ($res) {
            $user_id = wp_create_user($username, $password, $email);
            if ($user_id) {
                add_action('wp_mail_failed', function ($error) {
                    wp_die("<pre>" . print_r($error, true) . "</pre>");
                });
                $message = '<div style="border:0; margin:0; box-sizing:border-box; font-family: Calibri, sans-serif;width:100%;">
                <table
                    style="width: 100%; aspect-ratio: 6 ; background:black; padding:20px; background-position: center; background-size: cover; background-image: url(https://www.seriderm.com/wp-content/uploads/2022/12/Mask-Group-1.png);">
                    <tr style="height: 100px;"></tr>
                    <tr>
                        <td>.</td>
                        <td style="color:white; font-size:larger;text-align:center; font-size: 30px;">LEAD THE WAY</td>
                        <td>.</td>
                    </tr>
                </table>
                <div style="width:100%; background: transparent; position: relative; margin-top: 30px; background-image:url(https://www.seriderm.com/wp-content/uploads/2022/12/Capture-decran-1389.png); background-size: contain; background-position: center;">
                    
                    <h1 style="width:100%; text-align:center; color:black; font-size:50px;">FÉLICITATIONS !
                    </h1>
                    <h2 style="width:100%; text-align:center; color:black; font-size:30px ;">Vous venez de réaliser un traitement
                        SERIDERM AESTHETIC DERMATOLOGY
                    </h2>
                    <table style="width:100%;">
                        <tr style="width:100%;">
                            <td center style="width:50%;">
                                <img style="width:80%; margin-left: 20%;"
                                    src="https://www.seriderm.com/wp-content/uploads/2022/12/Capture-decran-1378.png"
                                    alt="two girls side by side">
                            </td>
                            <td style="width:50%;"></td>
                        </tr>
                        <td center style="width:50%;  padding:0% 10%;">
                            <p style=" font-size: 30px; line-height: 2;">Vous êtes maintenant
                                membre de la communauté
                                Seriderm Aesthtetic
                                Dermatology.
                                <br>
                                Nous vous remercions pour
                                votre confiance
                            </p>
                            <a style="padding:20px; border:3px solid black; border-radius: 9999px; font-size:30px; text-decoration: none; color:black;"
                                href="https://www.seriderm.com/">
                                En savoir +
            
                            </a>
                        </td>
                        <td style="width:50%;">
                            <img style="width:70%; margin-left: 20%;"
                                src="https://www.seriderm.com/wp-content/uploads/2022/12/Capture-decran-1379.png"
                                alt="two girls side by side">
                        </td>
                        </tr>
                        <tr style="height: 30px;"></tr>
            
            
                    </table>
                    <table style="width: 100%; padding:0 10%;">
                        <tr>
                            <td style="width:30%; aspect-ratio: 1;">
                                <img style="width:100%; " style="width:70%; margin-left: 20%;"
                                    src="https://www.seriderm.com/wp-content/uploads/2022/12/Capture-decran-1381.png"
                                    alt="two girls side by side">
            
            
                            </td>
                            <td style="height: 30%;">
                                <div style="width:3px; margin-left: calc(100% - 3px); height: 70px; background: #000;"></div>
                                <div style="width:100%; height: 3px; background: #000;"></div>
                                <div style="width:100%;">
            
            
                                    <a style="color:black; text-decoration: none; text-align: right; float:right; font-size:30px;"
                                        href="www.seriderm.com">www.seriderm.com
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </table>
            
                </div>
                <div style="width:100%; background: transparent; position: relative; margin-top: 30px;background-image:url(https://www.seriderm.com/wp-content/uploads/2022/12/Capture-decran-1390.png); background-size: contain; background-position: center; ">
                    
                    <h1 style="width:100%; text-align:center; color:black; font-size:50px;">BIENVENUE <br>
                        DANS L&apos;UNIVERS SERIDERM AD
                    </h1>
            
                    <table style="width:100%;  padding: 0 5%;">
                        <tr>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>
                        <tr style="width:100%;">
                            <td style="width:50%; padding:20px;  ">
                                <ul>
                                    <li style="font-size:30px;">Des protocoles aesthetiques clés en main.
                                    </li>
                                    <li style="font-size:30px;">
                                        Une association des technologies références du
                                        marché.
                                    </li>
                                    <li style="font-size:30px;">
                                        Des résultats optimums en 15 jours qui
                                        surdimensionne votre expérience patient.
                                    </li>
            
                                </ul>
                            </td>
                            <td style="width:40%;">
                                <img style="width:80%; margin-right: 20%;" style="width:70%; margin-left: 20%;" src="https://www.seriderm.com/wp-content/uploads/2022/12/Capture-decran-1383.png" alt="two girls side by side">
                                
                            </td>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>
                        <tr style="width:100%;">
                            <td style="width:60%; padding:20px;">
                                <h2 style="font-size: 50px;">
                                    TOUT SUR NOS ÉVÈNEMENTS
                                </h2>
                                <p style="font-size: 25px; width:80%;">
                                    Découvrez nos derniers évènements et partagez
                                    les confidences de médecins, journalistes,
                                    influenceurs, patients et membres de la team
                                    TOUT SUR NOS
                                    ÉVÈNEMENTS
                                    <b>
                                        Seriderm Aesthetic Dermatology.
                                    </b>
            
                                </p>
                            </td>
                            <td style="width:40%;">
                                <img style="width:80%; margin-right: 20%;" style="width:70%; margin-left: 20%;" src="https://www.seriderm.com/wp-content/uploads/2022/12/Capture-decran-1385.png" alt="two girls side by side">
            
                            </td>
                        </tr>
                    </table>
                    <table style="width:100%;">
                        <tr style="">
                            <td style="padding:0 30%;">
                                <p
                                    style="background: #000 ; border-radius: 10px;  padding:10px 20%; color:white; font-size: 25px; text-align: center;">
                                    TOUTS&nbsp;A&nbsp;VOIR&nbsp;SUR&nbsp;NOS&nbsp;
                                    <br>
                                    PROTOCOLES
                                </p>
                            </td>
                        </tr>
                    </table>
                    <table style="width:100%; padding:0 10%;">
                        <tr style="">
                            <td style="width:30%;">
                                <img style="width:100%;" style="width:70%; margin-left: 20%;" src="https://www.seriderm.com/wp-content/uploads/2022/12/Capture-decran-1386.png" alt="two girls side by side">
            
                            </td>
                            <td style="width:3%;">
                            </td>
                            <td style="width:30%;">
                                <img style="width:100%;" style="width:70%; margin-left: 20%;" src="https://www.seriderm.com/wp-content/uploads/2022/12/Capture-decran-1387.png" alt="two girls side by side">
                            </td>
                            <td style="width:3%;">
                            </td>
                            <td style="width:30%;">
                                <img style="width:100%;" style="width:70%; margin-left: 20%;" src="https://www.seriderm.com/wp-content/uploads/2022/12/Capture-decran-1388.png" alt="two girls side by side">
                            </td>
                        </tr>
                        <tr>
                            <td style="width:30%;">
                                <p style="font-size: 25px;">
                                    Le Genius™ est une technologie offrant
                                    un effet volumateur durable et sans
                                    injection. Il permet de traiter le
                                    relâchement du visage, les rides et
                                    ridules, les cicatrices liées à l&apos;acné, le
                                    relâchement des zones du corps telles
                                    que l&apos;abdomen, les bras, les cuisses
                                    mais également les vergetures ainsi
                                    que l&apos;hyperhidrose.
                                </p>
            
                            </td>
                            <td style="width:3%;">
                            </td>
                            <td style="width:30%;">
                                <p style="font-size: 25px;">
                                    Idéal avant une soirée, un mariage, un
                                    événement spécial, l&apos;Hollywood Peel™
                                    est une procédure douce et indolore
                                    permettant d&apos;unifier votre teint,
                                    resserrer vos pores dilatés, réguler le
                                    sébum pour les peaux à tendance
                                    grasses et purifier les peaux sèches et
                                    sensibles sans les agresser.
                                </p>
            
                            </td>
                            <td style="width:3%;">
                            </td>
                            <td style="width:30%;">
                                <p style="font-size: 25px;">
                                    Le BabyFace est un traitement qui
                                    s&apos;adresse à tous les phototypes, toute
                                    l&apos;année.
                                    Ce traitement répond aux demandes
                                    d&apos;améliorations des imperfections
                                    cutanées superficielles : pores dilatés,
                                    éclat du teint, irrégularités, ridules,
                                    troubles pigmentaires .
                                </p>
            
                            </td>
            
                        </tr>
                    </table>
                    <br>
                    <br>
                    <br>
                    <table style="width:100%;">
                        <tr>
                            <td style=" text-align: center;">
                                <a style="padding:20px; border:3px solid black; border-radius: 9999px; font-size:30px; text-decoration: none; color:black;"
                                    href="https://www.seriderm.com/">
                                    En savoir +
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
                <br>
                <br>
                <br>
                <br>
                <table style="width:100%; padding: 20px 0; background:black;">
                    <tr>
                        <td>
                        <td style="width:40%;">
                        </td>
                        <td style=" text-align:center;">
                            <a style="width:40px; height:40px;" href="https://www.youtube.com/@seridermaestheticdermatology">
                                <div
                                    style="border-radius:9999px; border:2px solid white; width:40px; height:40px; background-position: center; background-size: 110%;background-image: url(https://e7.pngegg.com/pngimages/163/425/png-clipart-youtube-computer-icons-logo-subscribe-angle-desktop-wallpaper.png); ">
                                </div>
                            </a>
                        </td>
                        <td style=" text-align:center;">
                            <a style="width:40px; height:40px;"
                                href="https://www.facebook.com/people/Seriderm-Aesthetic-Dermatology/100088058235789/">
                                <div
                                    style=" border-radius:9999px; border:2px solid white; width:40px; height:40px; background-position: center; background-size: cover;background-image: url(https://assets.stickpng.com/images/60fea6c83d624000048712b7.png); ">
                                </div>
                            </a>
                        </td>
                        <td style=" text-align:center;">
                            <a style="width:40px; height:40px;" href="https://www.instagram.com/seriderm_aestheticdermatology/?hl=fr">
                                <div
                                    style="border-radius:9999px; background-color: white; border:2px solid white; width:40px; height:40px; background-position: center; background-size: cover;background-image: url(https://w7.pngwing.com/pngs/362/366/png-transparent-camera-illustration-logo-computer-icons-instagram-logo-miscellaneous-art-line.png); ">
            
                                </div>
                            </a>
                        </td>
                        <td style=" text-align:center;">
                            <a style="width:40px; height:40px;" href="https://www.linkedin.com/company/seriderm-aesthetic-dermatology/">
                                <div
                                    style=" border-radius:9999px;background-color: white ; border:2px solid white; width:40px; height:40px; background-position: center; background-size: cover;background-image: url(https://cdn.icon-icons.com/icons2/2428/PNG/512/linkedin_black_logo_icon_147114.png); ">
                                </div>
                            </a>
                        </td>
                        <td style="width:40%;">
            
                        </td>
                        </td>
            
                    </tr>
                </table>
            
            </div>';
                $headers = array('Content-Type: text/html; charset=UTF-8');
                add_filter('wp_mail_content_type', function ($content_type) {
                    return 'text/html';
                });
                wp_mail($email, 'Creation de compte Seriderm.', $message, $headers);
                $user = get_user_by('id', $user_id);
                // Passing array
                $array = array(
                    'username' => $username,
                    'email' => $email,
                );

                session_start();
                wp_set_current_user($user_id, $email);
                wp_set_auth_cookie($user_id, true, false);
                do_action('wp_login', $email);
                $hasCreate = false;
            } else {
                global $err_plg;
                $err_plg = "email non valide";
            }
        } else {
            global $err_plg;
            $err_plg = "Coffret déjà utilisé";
        }
    }
}
// wpdocs_custom_login();

add_action('after_setup_theme', 'wpdocs_custom_login');

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar()
{
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}
