<nav id="menu-top-korin" class="navbar navbar-expand-lg  <?php if(is_front_page()) {
    echo 'position-fixed top-0 start-0 end-0 menu-top-korin';
} else {
    echo 'sticky-top bg-white';
} ?>" <?php if(is_front_page()) echo 'style="z-index: 1;"'; ?>> 
    <div class="container"> 
        <a class="navbar-brand" href="<?php esc_url(bloginfo('url')); ?>">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo-menu.png' ); ?>" >
        </a> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
            <span class="navbar-toggler-icon"></span> 
        </button> 
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent"> 
            <?php wp_nav_menu( 
                array( 
                        'theme_location' => 'primary', 
                        'menu_id' => 'primary-menu', 
                        'container_class'=> 'ms-auto ', 
                        'menu_class'=>'navbar-nav' 
                    ) 
            ); ?> 
        <!-- other nav ul lists --> 
        </div> 
    </div> 
</nav> 