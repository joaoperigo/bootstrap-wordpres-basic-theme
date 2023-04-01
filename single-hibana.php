<?php get_header(); ?>

    <?php while ( have_posts() ) : the_post(); ?>
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
                    <div class="col-md-5 offset-md-2">
                        
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>

<?php get_footer(); ?>