<?php
    function scripts_e_css() {
        wp_enqueue_style( 'style', get_stylesheet_uri() );

        // wp_enqueue_script( 'locomotive', get_template_directory_uri() . '/node_modules/locomotive-scroll/dist/locomotive-scroll.js','',1.1, true );

        wp_enqueue_style( 'cssSwiper', get_template_directory_uri() . '/node_modules/swiper/swiper-bundle.min.css');
        wp_enqueue_script( 'jsSwiper', get_template_directory_uri() . '/node_modules/swiper/swiper-bundle.min.js', '', 1 , true);

        wp_enqueue_script( 'jsBootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', '', 1 , true);

        wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js','',1.1, true );

        if(is_front_page()) {
            wp_enqueue_script( 'add-bg-color', get_template_directory_uri() . '/js/add-bg-color.js','',1.1, true );
        }

    }
    add_action( 'wp_enqueue_scripts', 'scripts_e_css' );

    //Suporte ao thumbnail
    add_theme_support( 'post-thumbnails' ); 

    // MENU
    function register_my_menu() {
        register_nav_menu('primary',__( 'Menu' ));

        register_nav_menu('footer_1',__( 'Footer 1' ));
        register_nav_menu('footer_2',__( 'Footer 2' ));
        register_nav_menu('footer_3',__( 'Footer 3' ));
        
      }
      add_action( 'init', 'register_my_menu' );


    // UPLOAD IMAGE
 

/*** New menu item ***/

function my_admin_menu () {
   $page_title = 'Theme Settings Page';
   $menu_title = 'Theme Settings';
   $capability = 'edit_posts';
   $menu_slug = 'theme_options_page';
   $function = 'my_theme_settings_page';
   $icon_url = '';
   $position = 110;

   add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
}

add_action('admin_menu', 'my_admin_menu');

function my_theme_settings_page(){

/*** New section ***/

?>
   <h1>Theme Settings Page</h1>
   <?php settings_errors(); ?> 

   <form method="post" action="options.php">
       <?php settings_fields("ff_theme_options");?>
       <?php do_settings_sections('theme_options')?>
       <?php submit_button();?>
   </form>

<?php
}

/*** Options fields ***/

add_action('admin_init','ff_custom_setting');
function ff_custom_setting(){
    register_setting('ff_theme_options', 'phone_field');
    register_setting("ff_theme_options", "logo", "handle_logo_upload"); 
    add_settings_section('ff_theme_options','Theme Options', null, 'theme_options');
    add_settings_field('theme-phone','Phone Number','theme_phone_func', 'theme_options','ff_theme_options');
    add_settings_field('logo','Website Logo','logo_display', 'theme_options','ff_theme_options');
}

function ff_theme_options(){
    echo 'Add your theme options';
}
function theme_phone_func(){
    $phone = esc_attr(get_option( 'phone_field' )); 
    echo '<input type="text" name="phone_field" value="'.$phone.'" placeholder="Your Phone Number here">';
}
function logo_display()
{
?>
    <input type="file" name="logo" /> 
    <?php echo get_option('logo'); ?>
<?php
}

function handle_logo_upload($option)
{
  if(!empty($_FILES["logo"]["tmp_name"]))
  {
    $urls = wp_handle_upload($_FILES["logo"], array('test_form' => FALSE));
    $temp = $urls["url"];
    return $temp;  
  }
 
  return $option;
}


// POLYLANG STRING
add_action('init', function() {
    pll_register_string('footer-2', 'NOSSAS TECNOLOGIAS','polylang' , true);
    pll_register_string('footer-3', 'TECNOLOGIAS PARA CASA','polylang' , true);
	pll_register_string('titulo-endereco', 'Korin - Agricultura e Meio Ambiente.');
	pll_register_string('paragrafo-endereco', 'Endereço','polylang' , true);
    
    pll_register_string('titulo-orcamento', 'Solicite um orçamento','polylang' );
    pll_register_string('paragrafo-orcamento', 'Entre em contato e solicite um orçamento:','polylang' , true);
});

?>