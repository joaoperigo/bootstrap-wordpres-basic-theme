<?php /* Template Name: CPMO template  */ ?>

<?php get_header(); ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <?php $secao_abertura = get_field('secao_abertura'); ?>
        <header class="position-relative">
            <div class="container position-absolute" style="top: 50%; left: 50%; transform: translate(-50%, -50%);">
                <div class="row">
                    <div class="offset-md-7 col-md-5">
                        <h1 class="kt-1 text-dark-blue mb-5">
                            <?php if($secao_abertura['titulo_abertura']) echo $secao_abertura['titulo_abertura']; ?>  
                        </h1>
                        <div class="paragraph-m">
                            <?php if($secao_abertura['paragrafo_abertura']) echo $secao_abertura['paragrafo_abertura']; ?>  
                        </div>
                    </div>
                </div>
            </div>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/cpmo/korin-integramos-tecnologia-desktop.jpg' ); ?>" class="w-100 h-auto d-none d-md-block" >
            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/cpmo/korin-integramos-tecnologia-mobile.jpg' ); ?>" class="w-100 h-auto d-md-none" >
        </header>

        <?php $secao_sobre = get_field('secao_sobre'); ?>
        <section id="cpmo" class="section-p-sm">
            <div class="container">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/cpmo/logoCPMOhorizontalRGB-1.png' ); ?>" class="mb-5">
                <div class="row gx-5">
                    
                    <div class="col-md-3">
                        <div class="d-flex justify-content-between">
                            <svg width="108" height="109" viewBox="0 0 108 109" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M-4.72083e-06 0.917218L0 108.917L108 0.917213L-4.72083e-06 0.917218Z" fill="#001F58"/>
                            </svg>
                            <?php if($secao_sobre['svg_col_sobre_1']) echo $secao_sobre['svg_col_sobre_1']; ?>
                        </div>
                        <h1 class="kt-4 text-dark-blue">
                            <?php if($secao_sobre['titulo_col_sobre_1']) echo $secao_sobre['titulo_col_sobre_1']; ?>  
                        </h1>
                        <div class="paragraph text-dark">
                            <?php if($secao_sobre['pargrafo_sobre_1']) echo $secao_sobre['pargrafo_sobre_1']; ?>  
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="d-flex justify-content-between">
                            <svg width="108" height="109" viewBox="0 0 108 109" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M-4.72083e-06 0.917218L0 108.917L108 0.917213L-4.72083e-06 0.917218Z" fill="#001F58"/>
                            </svg>
                            <?php if($secao_sobre['svg_col_sobre_2']) echo $secao_sobre['svg_col_sobre_2']; ?>
                        </div>
                        <h1 class="kt-4 text-dark-blue">
                            <?php if($secao_sobre['titulo_col_sobre_2']) echo $secao_sobre['titulo_col_sobre_2']; ?>  
                        </h1>
                        <div class="paragraph text-dark">
                            <?php if($secao_sobre['pargrafo_sobre_2']) echo $secao_sobre['pargrafo_sobre_2']; ?>  
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="d-flex justify-content-between">
                            <svg width="108" height="109" viewBox="0 0 108 109" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M-4.72083e-06 0.917218L0 108.917L108 0.917213L-4.72083e-06 0.917218Z" fill="#001F58"/>
                            </svg>
                            <?php if($secao_sobre['svg_col_sobre_3']) echo $secao_sobre['svg_col_sobre_3']; ?>
                        </div>
                        <h1 class="kt-4 text-dark-blue">
                            <?php if($secao_sobre['titulo_col_sobre_3']) echo $secao_sobre['titulo_col_sobre_3']; ?>  
                        </h1>
                        <div class="paragraph text-dark">
                            <?php if($secao_sobre['pargrafo_sobre_3']) echo $secao_sobre['pargrafo_sobre_3']; ?>  
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="d-flex justify-content-between">
                            <svg width="108" height="109" viewBox="0 0 108 109" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M-4.72083e-06 0.917218L0 108.917L108 0.917213L-4.72083e-06 0.917218Z" fill="#001F58"/>
                            </svg>
                            <?php if($secao_sobre['svg_col_sobre_4']) echo $secao_sobre['svg_col_sobre_4']; ?>
                        </div>
                        <h1 class="kt-4 text-dark-blue">
                            <?php if($secao_sobre['titulo_col_sobre_4']) echo $secao_sobre['titulo_col_sobre_4']; ?>  
                        </h1>
                        <div class="paragraph text-dark">
                            <?php if($secao_sobre['pargrafo_sobre_4']) echo $secao_sobre['pargrafo_sobre_4']; ?>  
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        
        <?php $programa_de_gestao_biointegrada = get_field('programa_de_gestao_biointegrada'); ?>
        <section class="bg-white section-p-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div>
                            <h2 class="kt-1 pb-5 text-dark-blue ">
                                <?php if($programa_de_gestao_biointegrada['titulo_programa_de_gestao_biointegrada']) echo $programa_de_gestao_biointegrada['titulo_programa_de_gestao_biointegrada']; ?>
                            </h2>
                            <div class="paragraph-large paragraph-size">
                                <?php if($programa_de_gestao_biointegrada['paragrafo_programa_de_gestao_biointegrada']) echo $programa_de_gestao_biointegrada['paragrafo_programa_de_gestao_biointegrada']; ?>  
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-1 d-flex align-items-center justify-content-center">
                        <?php $imagem_programa_de_gestao_biointegrada = $programa_de_gestao_biointegrada['imagem_programa_de_gestao_biointegrada']; ?>
                        <img src="<?php echo esc_url($imagem_programa_de_gestao_biointegrada['url']); ?>" alt="<?php echo esc_attr($imagem_programa_de_gestao_biointegrada['alt']); ?>" class="img-fluid w-100 h-auto"  />
                    </div>
                </div>
            </div>
        </section>

        <?php $secao_o_que_e_a_gestao_biointegrada = get_field('secao_o_que_e_a_gestao_biointegrada'); ?>
        <section class="bg-white section-p-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <?php $imagem_o_que_e_a_gestao_biointegrada = $secao_o_que_e_a_gestao_biointegrada['imagem_o_que_e_a_gestao_biointegrada']; ?>
                        <img src="<?php echo esc_url($imagem_o_que_e_a_gestao_biointegrada['url']); ?>" alt="<?php echo esc_attr($imagem_o_que_e_a_gestao_biointegrada['alt']); ?>" class="img-fluid w-100 h-auto"  />
                    </div>
                    <div class="col-md-5 offset-md-1">
                        <div>
                            <h2 class="kt-1 pb-5 text-dark-blue ">
                                <?php if($secao_o_que_e_a_gestao_biointegrada['titulo_o_que_e_a_gestao_biointegrada']) echo $secao_o_que_e_a_gestao_biointegrada['titulo_o_que_e_a_gestao_biointegrada']; ?>
                            </h2>
                            <div class="paragraph-m">
                                <?php if($secao_o_que_e_a_gestao_biointegrada['paragrafo_o_que_e_a_gestao_biointegrada']) echo $secao_o_que_e_a_gestao_biointegrada['paragrafo_o_que_e_a_gestao_biointegrada']; ?>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php $secao_tudo_esta_interligado = get_field('secao_tudo_esta_interligado'); ?>
        <section class="bg-white section-p-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div>
                            <div class="paragraph-large paragraph-size wyswyg-korin">
                                <?php if($secao_tudo_esta_interligado['html_tudo_esta_interligado']) echo $secao_tudo_esta_interligado['html_tudo_esta_interligado']; ?>  
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-1 d-flex align-items-center justify-content-center">
                        <?php $imagem_tudo_esta_interligado = $secao_tudo_esta_interligado['imagem_tudo_esta_interligado']; ?>
                        <img src="<?php echo esc_url($imagem_tudo_esta_interligado['url']); ?>" alt="<?php echo esc_attr($imagem_tudo_esta_interligado['alt']); ?>" class="img-fluid w-100 h-auto"  />
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>

<?php get_footer(); ?>