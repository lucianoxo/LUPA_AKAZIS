<?php

/* Search Highlighting ********************************************/
// This highlights search terms in both titles, excerpts and content
function search_excerpt_highlight() {
 $excerpt = the_content();
 $keys = implode('|', explode(' ', get_search_query()));
 $excerpt = preg_replace('/(' . $keys .')/iu', '<strong class="search-highlight">\0</strong>', $excerpt);

 echo '<p>' . $excerpt . '</p>';
}


function search_title_highlight() {
 $title = get_the_title();
 $keys = implode('|', explode(' ', get_search_query()));
 $title = preg_replace('/(' . $keys .')/iu', '<strong class="search-highlight">\0</strong>', $title);

 echo $title;
}
// ------------------------------
// --  CUSTOMIZAÇÃO ADMIN WP --
// ------------------------------

function cutom_login_logo() {
    echo "<style type=\"text/css\">
body.login div#login h1 a {
background-image: url(" . get_bloginfo('template_directory') . "/img/logo-wp.png);
-webkit-background-size: auto;
background-size: auto;
margin: 0 0 25px;
width: 320px;
}

body.login{
background: #fff
}

.login form{
box-shadow: 10px 10px 24px rgba(0,0,0,.13) !important; 
    border: 1px solid rgba(204, 204, 204, 0.44);
}
</style>";
}

add_action('login_enqueue_scripts', 'cutom_login_logo');


//
//// ------------------------------
//// --  POST TYPE BLOG! --
//// ------------------------------
//add_action('init', 'register_cpt_blog');
//
//function register_cpt_blog() {
//    $labels = array(
//        'name' => 'Blog',
//        'singular_name' => 'Blog',
//        'menu_name' => 'Blog',
//        'add_new' => 'Adicionar Publicação ',
//        'add_new_item' => 'Adicionar Nova Publicação',
//        'edit_item' => 'Editar Publicação',
//        'new_item' => 'Nova Publicação',
//        'view_item' => 'Visualizar Publicação',
//        'search_items' => 'Buscar Publicação',
//        'not_found' => 'Não foi encontrada nenhuma Publicação',
//        'not_found_in_trash' => 'Não foi encontrado nenhuma publicação na lixeira'
//    );
//
//    $supports = array(
//        'title',
//        'editor',
//        'author',
//        'thumbnail',
//        'excerpt',
//        'custom-fields'
//    );
//
//    $args = array(
//        'post_type' => 'post',
//        'labels' => $labels,
//        'description' => 'Blog',
//        'public' => true,
//        'exclude_from_search' => false,
//        'show_ui' => true,
//        'show_in_menu' => true,
//        'menu_position' => 5,
//        'supports' => $supports,
//        'show_in_nav_menus' => true,
//        'has_archive' => true,
//        'query_var' => true,
//        'rewrite' => true
//    );
//
//    register_post_type('blog', $args);
//}



// ------------------------------------
// --  REDIMENSIONAMENTO DE IMAGENS  --
// ------------------------------------
add_theme_support('title-tag');

add_theme_support('post-thumbnails');
add_action('after_setup_theme', 'my_adjust_image_sizes');

function my_adjust_image_sizes() {
    //add an cropped image-size with 800 x 250 Pixels
    add_image_size('Banner Principal', 1920, 860, true);
    add_image_size('Colecao_Home', 375, 500, true);
    add_image_size('Produtos (Home)', 285, 250, true);
    add_image_size('Coleção (Página)', 1000, 1020, true);
//    add_image_size('imagem-press', 445, 330, true);
}


//// ----------------------------
//// --  REMOVER ITENS DO MENU  --
//// ----------------------------
//
//add_action('admin_menu', 'remove_links_menu');
//
//function remove_links_menu() {
//    remove_menu_page('index.php'); // Dashboard
////     remove_menu_page('edit.php'); // Posts
//    remove_menu_page('themes.php'); // Aparência
////     remove_menu_page('upload.php'); // Media
////     remove_menu_page('link-manager.php'); // Links
////     remove_menu_page('edit-comments.php'); // Comments
////     remove_menu_page('users.php'); // Users
////     remove_menu_page('admin.php?page=themepunch-google-fonts'); // Users
//}
//
//// ----------------------------
//// --  REMOVER ITENS SUB MENUS  --
//// ----------------------------
//
//function pc_remove_submenus() {
//
//    global $submenu;
//
////  unset($submenu['themes.php'][5]); // Remove 'Temas'.
////  unset($submenu['options-general.php'][15]); // Remove 'Escrita'.
////  unset($submenu['options-general.php'][25]); // Remove 'Discussão'.
//}
//
//add_action('admin_menu', 'pc_remove_submenus');
//
//// Remove Link Aparência > Editor 
//
//function remove_editor_menu() {
//    remove_action('admin_menu', '_add_themes_utility_last', 101);
//}
//
//add_action('_admin_menu', 'remove_editor_menu', 1);
//
//// Remove Link Plugin > Editor
//
//function pc_remove_plugin_editor() {
//    remove_submenu_page('plugins.php', 'plugin-editor.php');
//}
//
//add_action('admin_init', 'pc_remove_plugin_editor');
//
//
//// ------------------------------
//// --  SINGLE POR CATEGORIA --
//// ------------------------------
//
//add_filter('single_template', 'check_for_category_single_template');
//
//function check_for_category_single_template($t) {
//
//    foreach ((array) get_the_category() as $cat) {
//        if (file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php"))
//            return TEMPLATEPATH . "/single-{$cat->slug}.php";
//
//        if ($cat->parent) {
//            $cat = get_the_category_by_ID($cat->parent);
//            if (file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php"))
//                return TEMPLATEPATH . "/single-{$cat->slug}.php";
//        }
//    }
//
//    return $t;
//}

// ------------------------------
// --  REMOVE WP EMOJI --
// ------------------------------
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');


// --------------------------------
// -- REMOVE JQUERY PADRÃO DO WP --
// --------------------------------

if (!is_admin())
    add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);

function my_jquery_enqueue() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null);
    wp_enqueue_script('jquery');
}

// REMOVE TAG P DO CONTACT FORM
add_filter('wpcf7_autop_or_not', '__return_false');

// REMOVE AVISO DE ATUALIZAÇÃOe
add_filter( 'pre_site_transient_update_core','remove_core_updates' );
add_filter( 'pre_site_transient_update_plugins','remove_core_updates' );
add_filter( 'pre_site_transient_update_themes','remove_core_updates' );

function remove_core_updates()
{
    global $wp_version;
    return(object) array(
        'last_checked' => time(),
        'version_checked' => $wp_version
    );
}