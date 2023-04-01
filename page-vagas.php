<?php /* Template Name: Vagas template  */ ?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php $secao_abertura = get_field('secao_abertura'); ?>
    <header class="bg-primary text-white section-p-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="kt-1 pb-5 text-secondary">
                        <?php if($secao_abertura['titulo_abertura']) echo $secao_abertura['titulo_abertura']; ?>    
                    </h2>
                    <div class="text-white">
                        <?php if($secao_abertura['paragrafo_abertura']) echo $secao_abertura['paragrafo_abertura']; ?>
                    </div>
                </div>
                <div class="col-md-4 offset-md-2">
                    <h2 class="kt-1 pb-5 text-secondary">
                        <?php if($secao_abertura['titulo_abertura_2']) echo $secao_abertura['titulo_abertura_2']; ?>    
                    </h2>
                    <div class="text-white">
                        <?php if($secao_abertura['paragrafo_abertura_2']) echo $secao_abertura['paragrafo_abertura_2']; ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="text-primary section-p-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php echo do_shortcode('[contact-form-7 id="501" title="Trabalhe conosco"]') ?>
                </div>
                <?php $secao_estagio = get_field('secao_estagio'); ?>
                <div class="col-md-4 offset-md-2">
                    <?php if($secao_estagio['text_area_estagio']) echo $secao_estagio['text_area_estagio']; ?>  
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>

<?php get_footer(); ?>