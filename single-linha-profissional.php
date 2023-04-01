<?php get_header(); ?>

    <?php while ( have_posts() ) : the_post(); ?>
        <?php $cores_da_secao = get_field('cores_da_secao'); ?>
        <?php $cabecalho = get_field('cabecalho'); ?>
        <?php $secao_abertura = get_field('secao_abertura'); ?>
        <header id="header-cpt" class="<?php if($cores_da_secao['cor_bg_destaque'] ) echo 'bg-'.$cores_da_secao['cor_bg_destaque'] ?> position-relative d-flex align-items-center">
            <?php $imagem_abertura = $secao_abertura['imagem_abertura']; ?>
            <img src="<?php echo esc_url($imagem_abertura['url']); ?>" alt="<?php echo esc_attr($imagem_abertura['alt']); ?>" class="w-auto h-100 position-absolute top-0 end-0"  />
            <section id="cabecalho" style="background-color: rgba(255,255,255,.3);" class="position-absolute top-0 start-0 w-100">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2 class="mb-0 d-flex align-items-center">
                                <?php $icone = $cabecalho['icone']; ?>
                                <img src="<?php echo esc_url($icone['url']); ?>" alt="<?php echo esc_attr($icone['alt']); ?>"   />
                                <span class="text-uppercase text-white kt-6 ms-3">
                                    <?php if($cabecalho['titulo_cabecalho']) echo $cabecalho['titulo_cabecalho']; ?>
                                </span>
                            </h2>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="kt-1 <?php if($cores_da_secao['cor_titulo_destaque'] ) echo 'text-'.$cores_da_secao['cor_titulo_destaque'] ?>">
                            <?php if($secao_abertura['titulo_abertura']) echo $secao_abertura['titulo_abertura']; ?>
                        </h1>
                        <div class="paragraph-large paragraph-size <?php if($cores_da_secao['cor_paragrafo_destaqu'] ) echo 'text-'.$cores_da_secao['cor_paragrafo_destaqu'] ?>">
                            <?php if($secao_abertura['paragrafo_abertura']) echo $secao_abertura['paragrafo_abertura']; ?>  
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <?php $secao_sobre = get_field('secao_sobre'); ?>
        <section class="bg-white section-p-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <?php $imagem_sobre = $secao_sobre['imagem_sobre']; ?>
                        <img src="<?php echo esc_url($imagem_sobre['url']); ?>" alt="<?php echo esc_attr($imagem_sobre['alt']); ?>" class="w-100 h-auto"  />
                    </div>
                    <div class="col-md-5 offset-md-1 d-flex align-items-center justify-content-center">
                        <div>
                            <h2 class="kt-1 pb-5 <?php if($cores_da_secao['cor_titulo_base'] ) echo 'text-'.$cores_da_secao['cor_titulo_base'] ?> ">
                                <?php if($secao_sobre['titulo_sobre']) echo $secao_sobre['titulo_sobre']; ?>
                            </h2>
                            <div class="paragraph-large paragraph-size <?php if($cores_da_secao['cor_paragrafo_base'] ) echo 'text-'.$cores_da_secao['cor_paragrafo_base'] ?> ">
                                <?php if($secao_sobre['paragrafo_sobre']) echo $secao_sobre['paragrafo_sobre']; ?>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php $secao_destaque_1 = get_field('secao_destaque_1'); ?>
        <section class="position-relative section-p-g section-triangle">


            <?php $imagem_destaque_1 = $secao_destaque_1['imagem_destaque_1']; ?>
            <img src="<?php echo esc_url($imagem_destaque_1['url']); ?>" alt="<?php echo esc_attr($imagem_destaque_1['alt']); ?>" class="w-100 h-100 position-absolute top-0 end-0 img-under-triangle"  />

            <!-- desktop -->
            <svg class="position-absolute top-0 start-0 w-75 h-100 d-none d-md-block" preserveAspectRatio="none" style="" viewBox="0 0 1447 784" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-4 0H663.213L1447 784H-4V0Z" class="<?php if($cores_da_secao['cor_bg_destaque'] ) echo 'fill-'.$cores_da_secao['cor_bg_destaque'] ?>"/>
            </svg>
            <!-- mobile -->
            <svg width="923" height="675" viewBox="0 0 923 675" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-100 h-auto position-relative d-md-none" style="margin-bottom: -2px;">
                <path d="M923 674.132L8.03895e-06 -1.10067e-05L0 674.133L923 674.132Z" class="<?php if($cores_da_secao['cor_bg_destaque'] ) echo 'fill-'.$cores_da_secao['cor_bg_destaque'] ?>"/>
            </svg>

            <div class="container position-relative bg-for-triangle">
                <div class="row">
                    <div class="col-md-5">
                        <h2 class="<?php if($cores_da_secao['cor_titulo_destaque'] ) echo 'text-'.$cores_da_secao['cor_titulo_destaque'] ?> kt-1 pb-5">
                            <?php if($secao_destaque_1['titulo_destaque_1']) echo $secao_destaque_1['titulo_destaque_1']; ?>
                        </h2>
                        <div class="<?php if($cores_da_secao['cor_paragrafo_destaqu'] ) echo 'text-'.$cores_da_secao['cor_paragrafo_destaqu'] ?> paragraph-m">
                            <?php if($secao_destaque_1['paragrafo_destaque_1']) echo $secao_destaque_1['paragrafo_destaque_1']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       

        <?php 
                $secao_informativa = get_field('secao_informativa'); 
                if(!$secao_informativa['mostrar_secao_informativa']) {
        ?>
        <section id="informativo">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <h2 class="kt-1 <?php if($cores_da_secao['cor_titulo_base'] ) echo 'text-'.$cores_da_secao['cor_titulo_base'] ?>">
                            <?php if($secao_informativa['titulo_informativo']) echo $secao_informativa['titulo_informativo']; ?>
                        </h2>
                    </div>
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <div class="paragraph-large <?php if($cores_da_secao['cor_paragrafo_base'] ) echo 'text-'.$cores_da_secao['cor_paragrafo_base'] ?>">
                            <?php if($secao_informativa['paragrafo_informativo']) echo $secao_informativa['paragrafo_informativo']; ?>  
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php } // show/hide ?>

        <?php 
                $secao_destaque_2 = get_field('secao_destaque_2'); 
                if(!$secao_destaque_2['mostrar_secao_destaque_2']) {
        ?>
        <section class="position-relative section-p-g section-triangle">
            <?php $imagem_destaque_2 = $secao_destaque_2['imagem_destaque_2']; ?>
            <img src="<?php echo esc_url($imagem_destaque_2['url']); ?>" alt="<?php echo esc_attr($imagem_destaque_2['alt']); ?>" class="w-100 h-100 position-absolute top-0 end-0 img-under-triangle"  />
            <!-- desktop -->
            <svg class="position-absolute top-0 start-0 w-75 h-100 d-none d-md-block" preserveAspectRatio="none" style="" viewBox="0 0 1447 784" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-4 0H663.213L1447 784H-4V0Z" class="<?php if($cores_da_secao['cor_bg_destaque'] ) echo 'fill-'.$cores_da_secao['cor_bg_destaque'] ?>"/>
            </svg>
            <!-- mobile -->
            <svg width="923" height="675" viewBox="0 0 923 675" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-100 h-auto position-relative d-md-none" style="margin-bottom: -2px;">
                <path d="M923 674.132L8.03895e-06 -1.10067e-05L0 674.133L923 674.132Z" class="<?php if($cores_da_secao['cor_bg_destaque'] ) echo 'fill-'.$cores_da_secao['cor_bg_destaque'] ?>"/>
            </svg>
            <div class="container position-relative bg-for-triangle">
                <div class="row">
                    <div class="col-md-5">
                        <h2 class="<?php if($cores_da_secao['cor_titulo_destaque'] ) echo 'text-'.$cores_da_secao['cor_titulo_destaque'] ?> kt-1 pb-5">
                            <?php if($secao_destaque_2['titulo_destaque_2']) echo $secao_destaque_2['titulo_destaque_2']; ?>
                        </h2>
                        <div class="<?php if($cores_da_secao['cor_paragrafo_destaqu'] ) echo 'text-'.$cores_da_secao['cor_paragrafo_destaqu'] ?> paragraph-m">
                            <?php if($secao_destaque_2['paragrafo_destaque_2']) echo $secao_destaque_2['paragrafo_destaque_2']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php } // show/hide ?>

        <?php 
                $secao_slogan = get_field('secao_slogan'); 
                if(!$secao_slogan['mostrar_secao_slogan']) {
        ?>
        <section id="informativo">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <h2 class="kt-1 text-secondary">
                            <?php if($secao_slogan['titulo_slogan']) echo $secao_slogan['titulo_slogan']; ?>
                        </h2>
                    </div>
                </div>
            </div>
        </section>
        <?php } // show/hide ?>

        <?php 
            $args = array('post_type' => 'hibana' );                                              
            $the_query = new WP_Query( $args );
            
            // The Loop
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
        ?>
                    <section id="hibana"  class="position-relative">
            <svg width="603" height="602" viewBox="0 0 603 602" fill="none" xmlns="http://www.w3.org/2000/svg" class="position-absolute start-0 bottom-0 w-auto h-50">
                <path d="M0.914062 0.5L602.499 602H0.914062V0.5Z" fill="#26362C"/>
            </svg>
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-5">
                        <h2>
                            <?php 
                                $titulo = get_field('titulo'); 
                                if($titulo) echo $titulo;
                            ?>
                        </h2>
                        <div>
                            <?php 
                                $subtitulo = get_field('subtitulo'); 
                                if($subtitulo) echo $subtitulo;
                            ?>
                        </div>
                        <?php 
                            $imagem_hibana = get_field('imagem_hibana'); 
                            ?>
                        <img src="<?php echo esc_url($imagem_hibana['url']); ?>" alt="<?php echo esc_attr($imagem_hibana['alt']); ?>" class="img-fluid w-100 h-auto"  />
                    </div>
                </div>
            </div>
        </section> 
               <?php }
                /* Restore original Post Data */
                wp_reset_postdata();
            } else {
                // no posts found
            }
        ?>

        <section id="contato" class="bg-light section-p-sm">
            <div class="container">
                <h2 class="kt-1 pb-4 text-primary text-center">Solicite um orçamento</h2>
                <p class="paragraph-l text-primary text-center ">Entre em contato e solicite um orçamento:</p>
                <div class="row">
                    <div class="col-md-6 offset-md-3 d-flex justify-content-center">
                        <?php echo do_shortcode('[contact-form-7 id="496" title="Solicite um orçamento"]') ?>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>

<?php get_footer(); ?>