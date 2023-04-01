<?php /* Template Name: sdsdsdHome template */ ?>

<?php get_header(); ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <header class="position-relative d-flex align-items-center" style="height: 100vh;" >
            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/home/hero-image-korin-agricultura 1.jpg' ); ?>" class="position-fixed top-0 left-0" style="z-index: 0; width: 100vw;" >
            <div class="container position-relative">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="wrapper text-light">
                            <h1 class="display-3 text-secondary fw-bold">Cultivamos o respeito pelo Meio Ambiente</h1>
                            <p class="lead text-primary">Plantar de forma consciente para colher comida saudável, que alimenta e traz prosperidade para as pessoas e para o mundo.</p>
							<?php echo do_shortcode('[gtranslate]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="bg-primary position-relative d-flex justify-content-end align-items-center">
            <div class="container position-absolute">
                <div class="row">
                    <div class="col-lg-4">
                        <h2 class="text-secondary fs-1">Sobre nós</h2>
                        <p class="text-light">O Grupo Korin foi fundado pelo Reverendíssimo Tetsuo Watanabe, com a missão de disseminar o conceito e as práticas da Agricultura Natural preconizada por Mokiti Okada (1882-1955), com princípios e conceitos baseados na Lei da Natureza.</p>
                        <div>
                            <a href="#" class="btn btn-secondary">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/mokiti-okada.png' ); ?>"  >
        </section>

        <section class="position-relative section-p border-top border-secondary big-border-top" style="background-image: url(<?php echo esc_url( get_template_directory_uri() . '/img/korin-agricultura-ciencia-tecnologia-cpmo.jpg' ); ?>); background-size: cover; background-position: 100% 100%;"> 

            <svg width="377" height="371" class="position-absolute top-0 end-0" viewBox="0 0 377 371" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M377 370.696V0H0L377 370.696Z" fill="#001F58"/>
                <path d="M238.034 184.461C238.034 186.642 236.241 188.418 234.01 188.418H220.187C228.221 197.205 239.694 202.337 251.898 202.337C275.402 202.337 294.537 183.534 294.537 160.41C294.537 146.739 287.778 134.008 276.424 126.134C272.122 125.952 268.138 124.594 264.805 122.335L238.153 148.541C237.37 149.311 236.334 149.703 235.312 149.703C234.289 149.703 233.253 149.311 232.47 148.541L228.566 144.702L216.614 156.453C215.831 157.224 214.795 157.615 213.773 157.615C212.75 157.615 211.714 157.224 210.931 156.453L196.151 141.921C195.394 141.176 194.969 140.171 194.969 139.126C194.969 138.082 195.394 137.076 196.151 136.332L208.102 124.581L204.251 120.794C203.494 120.05 203.07 119.044 203.07 118C203.07 116.955 203.494 115.95 204.251 115.205L273.795 46.8246C275.309 45.3361 277.978 45.3491 279.479 46.8246L281.046 48.3654L292.971 36.6399C294.537 35.0992 297.087 35.0992 298.654 36.6399L318.015 55.6644C318.772 56.4086 319.197 57.414 319.197 58.4586C319.197 59.5032 318.772 60.5086 318.015 61.2529L306.077 72.9914L307.684 74.5713C309.251 76.112 309.251 78.619 307.684 80.1598L295.666 91.9766C298.017 95.3323 299.424 99.367 299.557 103.715C316.833 117.765 326.727 138.304 326.727 160.41C326.727 186.106 313.248 208.761 292.891 221.923C308.454 224.534 320.299 237.343 320.299 252.725V259.136C320.299 261.316 318.507 263.092 316.276 263.092H267.554L259.52 255.192H312.265V252.725C312.265 239.824 300.938 229.326 287.035 229.326H278.084C269.931 232.329 261.1 233.987 251.884 233.987C246.573 233.987 241.341 233.413 236.268 232.329L223.559 219.833C232.257 223.855 241.898 226.088 251.884 226.088C258.962 226.088 265.774 224.991 272.175 222.98C272.905 222.04 274.047 221.426 275.349 221.426H276.557C301.217 211.751 318.693 188.052 318.693 160.41C318.693 142.195 311.163 125.155 297.857 112.777C295.706 117.817 291.669 121.878 286.636 124.163C296.715 133.512 302.558 146.556 302.558 160.41C302.558 187.882 279.824 210.236 251.884 210.236C235.086 210.236 219.43 202.089 209.975 188.418H191.596L183.562 180.518H233.997C236.215 180.518 238.021 182.281 238.021 184.474L238.034 184.461ZM204.69 139.126L213.786 148.071L222.882 139.126L213.786 130.182L204.69 139.126ZM309.503 58.4586L295.826 45.0227L286.743 53.9539L300.407 67.3898L309.503 58.4456V58.4586ZM299.185 77.3655L297.632 75.8378C297.632 75.8378 297.592 75.7987 297.565 75.7856L278.217 56.7481C278.217 56.7481 278.191 56.722 278.177 56.709L276.65 55.2074L212.803 117.987L235.338 140.145L259.135 116.746C256.652 113.221 255.178 108.938 255.178 104.342C255.178 92.29 265.15 82.497 277.394 82.497C282.081 82.497 286.424 83.9334 290.009 86.3881L299.172 77.3786L299.185 77.3655ZM291.576 104.342C291.576 100.647 290.089 97.2909 287.699 94.7839C287.606 94.7056 287.499 94.6403 287.406 94.5489C287.314 94.4575 287.234 94.34 287.154 94.2355C284.605 91.8591 281.178 90.3967 277.407 90.3967C269.586 90.3967 263.225 96.6511 263.225 104.342C263.225 108.05 264.712 111.419 267.129 113.926C267.235 114.004 267.341 114.083 267.448 114.174C267.541 114.265 267.607 114.37 267.687 114.461C270.223 116.825 273.636 118.274 277.407 118.274C285.229 118.274 291.589 112.02 291.589 104.329L291.576 104.342Z" fill="#60B2E1"/>
            </svg>


            <div class="container">
                <div class="row">
                    <div class="offset-lg-7 col-lg-4">
                        <h2>CPMO</h2>
                        <h3>Integramos tecnologia e natureza</h3>
                        <p>O Grupo Korin foi fundado pelo Reverendíssimo Tetsuo Watanabe, com a missão de disseminar o conceito e as práticas da Agricultura Natural preconizada por Mokiti Okada (1882-1955), com princípios e conceitos baseados na Lei da Natureza.</p>
                        <a href="#" class="btn btn-secondary">Saiba Mais</a>
                    </div>
                </div>
            </div>

        </section>

        <section class="sticky-lg-top section-p border-top border-primary big-border-top" style="min-height: 100vh; background-image: url(<?php echo esc_url( get_template_directory_uri() . '/img/korin-agricultura-respeito-pela-familia.jpg' ); ?>); background-size: cover; background-position: 100% 100%;"> 


            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>CPMO</h2>
                        <h3>Integramos tecnologia e natureza</h3>
                        <p>O Grupo Korin foi fundado pelo Reverendíssimo Tetsuo Watanabe, com a missão de disseminar o conceito e as práticas da Agricultura Natural preconizada por Mokiti Okada (1882-1955), com princípios e conceitos baseados na Lei da Natureza.</p>
                    </div>
                </div>
                <div class="row">
                            <?php for($i=0; $i<4; $i++) { ?>
                                <div class="thumb-produto">
                                    <a href="#" class="w-100 text-decoration-none d-flex flex-column p-3 position-relative">
                                        <div class="bg-primary w-100 h-100 position-absolute top-0 start-0 rounded opacity-75"></div>                            
                                        <svg width="64" height="72" viewBox="0 0 64 72" fill="none" class="mx-auto mt-2 mb-3 position-relative" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M31.9998 71.6118C31.2023 71.6118 30.5586 70.968 30.5586 70.1705V8.45781C30.5586 7.66034 31.2023 7.0166 31.9998 7.0166C32.7973 7.0166 33.441 7.66034 33.441 8.45781V70.1802C33.441 70.9776 32.7973 71.6214 31.9998 71.6214V71.6118Z" fill="#F68A30"/>
                                            <path d="M30.3014 37.1474H24.9496C15.4376 37.1474 7.70312 29.4129 7.70312 19.9009V14.9143C7.70312 12.9831 9.26926 11.417 11.2005 11.417H16.4561C25.8144 11.417 33.4336 19.0362 33.4336 28.3945V34.0056C33.4336 35.7351 32.0308 37.1378 30.3014 37.1378V37.1474ZM11.2005 14.2898C10.8546 14.2898 10.576 14.5684 10.576 14.9143V19.9009C10.576 27.8276 17.023 34.265 24.94 34.265H30.2917C30.4359 34.265 30.5512 34.1497 30.5512 34.0056V28.3945C30.5512 20.6119 24.2194 14.2898 16.4465 14.2898H11.1909H11.2005Z" fill="#F68A30"/>
                                            <path d="M31.0726 36.57C30.7074 36.57 30.3327 36.4259 30.0541 36.1472L13.1055 19.1986C12.5482 18.6413 12.5482 17.7285 13.1055 17.1713C13.6627 16.6044 14.5755 16.6044 15.1424 17.1713L32.091 34.1199C32.6483 34.6772 32.6483 35.5899 32.091 36.1472C31.8124 36.4259 31.4473 36.57 31.0726 36.57Z" fill="#F68A30"/>
                                            <path d="M25.6372 31.3912H19.8436C19.0461 31.3912 18.4023 30.7475 18.4023 29.95C18.4023 29.1525 19.0461 28.5088 19.8436 28.5088H25.6372C26.4347 28.5088 27.0784 29.1525 27.0784 29.95C27.0784 30.7475 26.4347 31.3912 25.6372 31.3912Z" fill="#F68A30"/>
                                            <path d="M24.4412 29.0172C23.6437 29.0172 23 28.3734 23 27.576V21.6189C23 20.8215 23.6437 20.1777 24.4412 20.1777C25.2387 20.1777 25.8824 20.8215 25.8824 21.6189V27.576C25.8824 28.3734 25.2387 29.0172 24.4412 29.0172Z" fill="#F68A30"/>
                                            <path d="M19.9809 26.2701H16.4451C15.6476 26.2701 15.0039 25.6264 15.0039 24.8289C15.0039 24.0314 15.6476 23.3877 16.4451 23.3877H19.9809C20.7784 23.3877 21.4221 24.0314 21.4221 24.8289C21.4221 25.6264 20.7784 26.2701 19.9809 26.2701Z" fill="#F68A30"/>
                                            <path d="M19.6014 24.4724C18.8039 24.4724 18.1602 23.8287 18.1602 23.0312V19.1688C18.1602 18.3713 18.8039 17.7275 19.6014 17.7275C20.3988 17.7275 21.0426 18.3713 21.0426 19.1688V23.0312C21.0426 23.8287 20.3988 24.4724 19.6014 24.4724Z" fill="#F68A30"/>
                                            <path d="M38.4986 20.8802C38.2776 20.8802 38.0662 20.8321 37.8548 20.7264C37.1438 20.3709 36.8556 19.5062 37.2207 18.7952C39.3249 14.5965 38.5082 9.55223 35.1934 6.22783L32.2533 3.28775C32.1765 3.21089 32.0516 3.21089 31.9747 3.28775L29.1787 6.08371C26.9785 8.28396 25.7967 11.3297 25.9504 14.4427C25.9889 15.2306 25.3739 15.9128 24.5861 15.9416C23.7982 15.98 23.116 15.3651 23.0776 14.5773C22.895 10.6572 24.3747 6.82353 27.1514 4.04679L29.9474 1.25084C31.11 0.0882617 33.1277 0.0882617 34.2902 1.25084L37.2303 4.19091C41.4291 8.38965 42.4571 14.779 39.7957 20.0827C39.5459 20.5823 39.0367 20.8706 38.5082 20.8706L38.4986 20.8802Z" fill="#F68A30"/>
                                            <path d="M31.768 16.2683C31.4029 16.2683 31.0281 16.1242 30.7495 15.8455L27.7422 12.8382C27.1849 12.2809 27.1849 11.3682 27.7422 10.8109C28.2994 10.244 29.2122 10.244 29.7791 10.8109L32.7864 13.8182C33.3437 14.3755 33.3437 15.2883 32.7864 15.8455C32.5078 16.1242 32.1427 16.2683 31.768 16.2683Z" fill="#F68A30"/>
                                            <path d="M32.4677 18.0178C32.1025 18.0178 31.7278 17.8737 31.4492 17.595C30.8919 17.0378 30.8919 16.125 31.4492 15.5677L34.4277 12.5892C34.985 12.0223 35.8977 12.0223 36.4646 12.5892C37.0219 13.1465 37.0219 14.0593 36.4646 14.6165L33.4861 17.595C33.2075 17.8737 32.8424 18.0178 32.4677 18.0178Z" fill="#F68A30"/>
                                            <path d="M40.3012 42.7578H33.9214C32.0671 42.7578 30.5586 41.2494 30.5586 39.395V33.3131C30.5586 22.6289 39.2539 13.9336 49.9381 13.9336H55.6068C57.6918 13.9336 59.3828 15.6246 59.3828 17.7096V23.6762C59.3828 34.197 50.822 42.7578 40.3012 42.7578ZM49.9477 16.8064C40.8488 16.8064 33.441 24.2142 33.441 33.3131V39.395C33.441 39.664 33.662 39.885 33.931 39.885H40.3108C49.2463 39.885 56.5196 32.6117 56.5196 23.6762V17.7096C56.5196 17.21 56.1161 16.8064 55.6165 16.8064H49.9477Z" fill="#F68A30"/>
                                            <path d="M32.7216 41.5672C32.3565 41.5672 31.9817 41.4231 31.7031 41.1444C31.1458 40.5872 31.1458 39.6744 31.7031 39.1171L51.025 19.7953C51.5823 19.2284 52.495 19.2284 53.0619 19.7953C53.6192 20.3525 53.6192 21.2653 53.0619 21.8226L33.74 41.1444C33.4614 41.4231 33.0963 41.5672 32.7216 41.5672Z" fill="#F68A30"/>
                                            <path d="M39.8826 33.9363C39.0851 33.9363 38.4414 33.2926 38.4414 32.4951V25.8943C38.4414 25.0969 39.0851 24.4531 39.8826 24.4531C40.6801 24.4531 41.3238 25.0969 41.3238 25.8943V32.4951C41.3238 33.2926 40.6801 33.9363 39.8826 33.9363Z" fill="#F68A30"/>
                                            <path d="M45.7245 35.6481H38.9412C38.1437 35.6481 37.5 35.0043 37.5 34.2068C37.5 33.4094 38.1437 32.7656 38.9412 32.7656H45.7245C46.522 32.7656 47.1657 33.4094 47.1657 34.2068C47.1657 35.0043 46.522 35.6481 45.7245 35.6481Z" fill="#F68A30"/>
                                            <path d="M45.6404 28.1922C44.843 28.1922 44.1992 27.5485 44.1992 26.751V22.7156C44.1992 21.9182 44.843 21.2744 45.6404 21.2744C46.4379 21.2744 47.0816 21.9182 47.0816 22.7156V26.751C47.0816 27.5485 46.4379 28.1922 45.6404 28.1922Z" fill="#F68A30"/>
                                            <path d="M49.4706 29.6725H45.0701C44.2726 29.6725 43.6289 29.0287 43.6289 28.2313C43.6289 27.4338 44.2726 26.79 45.0701 26.79H49.4706C50.2681 26.79 50.9118 27.4338 50.9118 28.2313C50.9118 29.0287 50.2681 29.6725 49.4706 29.6725Z" fill="#F68A30"/>
                                            <path d="M59.4569 58.5348H4.54668C3.74921 58.5348 3.10547 57.891 3.10547 57.0936C3.10547 56.2961 3.74921 55.6523 4.54668 55.6523H59.4569C60.2544 55.6523 60.8981 56.2961 60.8981 57.0936C60.8981 57.891 60.2544 58.5348 59.4569 58.5348Z" fill="#F68A30"/>
                                            <path d="M55.0711 63.2037H8.91387C8.1164 63.2037 7.47266 62.56 7.47266 61.7625C7.47266 60.965 8.1164 60.3213 8.91387 60.3213H55.0711C55.8686 60.3213 56.5123 60.965 56.5123 61.7625C56.5123 62.56 55.8686 63.2037 55.0711 63.2037Z" fill="#F68A30"/>
                                            <path d="M48.2234 67.8736H15.7576C14.9601 67.8736 14.3164 67.2299 14.3164 66.4324C14.3164 65.635 14.9601 64.9912 15.7576 64.9912H48.2234C49.0208 64.9912 49.6646 65.635 49.6646 66.4324C49.6646 67.2299 49.0208 67.8736 48.2234 67.8736Z" fill="#F68A30"/>
                                            <path d="M26.4991 53.8646H1.44121C0.643742 53.8646 0 53.2208 0 52.4234C0 51.6259 0.643742 50.9822 1.44121 50.9822H26.4991C28.7378 50.9822 30.5537 49.1662 30.5537 46.9275C30.5537 46.1301 31.1975 45.4863 31.9949 45.4863C32.7924 45.4863 33.4362 46.1301 33.4362 46.9275C33.4362 50.7516 30.3231 53.855 26.5087 53.855L26.4991 53.8646Z" fill="#F68A30"/>
                                            <path d="M62.5478 53.8647H37.4899C33.6659 53.8647 30.5625 50.7517 30.5625 46.9373C30.5625 46.1398 31.2062 45.4961 32.0037 45.4961C32.8012 45.4961 33.4449 46.1398 33.4449 46.9373C33.4449 49.176 35.2609 50.9919 37.4995 50.9919H62.5574C63.3549 50.9919 63.9987 51.6357 63.9987 52.4331C63.9987 53.2306 63.3549 53.8743 62.5574 53.8743L62.5478 53.8647Z" fill="#F68A30"/>
                                        </svg>
                                        <span class="text-uppercase text-light mx-auto position-relative">
                                            Agricultura
                                        </span>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
            </div>

        </section>

        <section class="sticky-lg-top section-p border-top border-secondary big-border-top" style="min-height: 100vh; background-image: url(<?php echo esc_url( get_template_directory_uri() . '/img/korin-agricultura-plantando-semente.jpg' ); ?>); background-size: cover; background-position: 100% 100%;"> 


            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h2>CPMO</h2>
                        <h3>Integramos tecnologia e natureza</h3>
                        <p>O Grupo Korin foi fundado pelo Reverendíssimo Tetsuo Watanabe, com a missão de disseminar o conceito e as práticas da Agricultura Natural preconizada por Mokiti Okada (1882-1955), com princípios e conceitos baseados na Lei da Natureza.</p>
                    </div>
                </div>
                <div class="row">
                            <?php for($i=0; $i<5; $i++) { ?>
                                <div class="thumb-produto">
                                    <a href="#" class="w-100 text-decoration-none d-flex flex-column p-3 position-relative">
                                        <div class="bg-primary w-100 h-100 position-absolute top-0 start-0 rounded opacity-75"></div>                            
                                        <svg width="64" height="72" viewBox="0 0 64 72" fill="none" class="mx-auto mt-2 mb-3 position-relative" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M31.9998 71.6118C31.2023 71.6118 30.5586 70.968 30.5586 70.1705V8.45781C30.5586 7.66034 31.2023 7.0166 31.9998 7.0166C32.7973 7.0166 33.441 7.66034 33.441 8.45781V70.1802C33.441 70.9776 32.7973 71.6214 31.9998 71.6214V71.6118Z" fill="#F68A30"/>
                                            <path d="M30.3014 37.1474H24.9496C15.4376 37.1474 7.70312 29.4129 7.70312 19.9009V14.9143C7.70312 12.9831 9.26926 11.417 11.2005 11.417H16.4561C25.8144 11.417 33.4336 19.0362 33.4336 28.3945V34.0056C33.4336 35.7351 32.0308 37.1378 30.3014 37.1378V37.1474ZM11.2005 14.2898C10.8546 14.2898 10.576 14.5684 10.576 14.9143V19.9009C10.576 27.8276 17.023 34.265 24.94 34.265H30.2917C30.4359 34.265 30.5512 34.1497 30.5512 34.0056V28.3945C30.5512 20.6119 24.2194 14.2898 16.4465 14.2898H11.1909H11.2005Z" fill="#F68A30"/>
                                            <path d="M31.0726 36.57C30.7074 36.57 30.3327 36.4259 30.0541 36.1472L13.1055 19.1986C12.5482 18.6413 12.5482 17.7285 13.1055 17.1713C13.6627 16.6044 14.5755 16.6044 15.1424 17.1713L32.091 34.1199C32.6483 34.6772 32.6483 35.5899 32.091 36.1472C31.8124 36.4259 31.4473 36.57 31.0726 36.57Z" fill="#F68A30"/>
                                            <path d="M25.6372 31.3912H19.8436C19.0461 31.3912 18.4023 30.7475 18.4023 29.95C18.4023 29.1525 19.0461 28.5088 19.8436 28.5088H25.6372C26.4347 28.5088 27.0784 29.1525 27.0784 29.95C27.0784 30.7475 26.4347 31.3912 25.6372 31.3912Z" fill="#F68A30"/>
                                            <path d="M24.4412 29.0172C23.6437 29.0172 23 28.3734 23 27.576V21.6189C23 20.8215 23.6437 20.1777 24.4412 20.1777C25.2387 20.1777 25.8824 20.8215 25.8824 21.6189V27.576C25.8824 28.3734 25.2387 29.0172 24.4412 29.0172Z" fill="#F68A30"/>
                                            <path d="M19.9809 26.2701H16.4451C15.6476 26.2701 15.0039 25.6264 15.0039 24.8289C15.0039 24.0314 15.6476 23.3877 16.4451 23.3877H19.9809C20.7784 23.3877 21.4221 24.0314 21.4221 24.8289C21.4221 25.6264 20.7784 26.2701 19.9809 26.2701Z" fill="#F68A30"/>
                                            <path d="M19.6014 24.4724C18.8039 24.4724 18.1602 23.8287 18.1602 23.0312V19.1688C18.1602 18.3713 18.8039 17.7275 19.6014 17.7275C20.3988 17.7275 21.0426 18.3713 21.0426 19.1688V23.0312C21.0426 23.8287 20.3988 24.4724 19.6014 24.4724Z" fill="#F68A30"/>
                                            <path d="M38.4986 20.8802C38.2776 20.8802 38.0662 20.8321 37.8548 20.7264C37.1438 20.3709 36.8556 19.5062 37.2207 18.7952C39.3249 14.5965 38.5082 9.55223 35.1934 6.22783L32.2533 3.28775C32.1765 3.21089 32.0516 3.21089 31.9747 3.28775L29.1787 6.08371C26.9785 8.28396 25.7967 11.3297 25.9504 14.4427C25.9889 15.2306 25.3739 15.9128 24.5861 15.9416C23.7982 15.98 23.116 15.3651 23.0776 14.5773C22.895 10.6572 24.3747 6.82353 27.1514 4.04679L29.9474 1.25084C31.11 0.0882617 33.1277 0.0882617 34.2902 1.25084L37.2303 4.19091C41.4291 8.38965 42.4571 14.779 39.7957 20.0827C39.5459 20.5823 39.0367 20.8706 38.5082 20.8706L38.4986 20.8802Z" fill="#F68A30"/>
                                            <path d="M31.768 16.2683C31.4029 16.2683 31.0281 16.1242 30.7495 15.8455L27.7422 12.8382C27.1849 12.2809 27.1849 11.3682 27.7422 10.8109C28.2994 10.244 29.2122 10.244 29.7791 10.8109L32.7864 13.8182C33.3437 14.3755 33.3437 15.2883 32.7864 15.8455C32.5078 16.1242 32.1427 16.2683 31.768 16.2683Z" fill="#F68A30"/>
                                            <path d="M32.4677 18.0178C32.1025 18.0178 31.7278 17.8737 31.4492 17.595C30.8919 17.0378 30.8919 16.125 31.4492 15.5677L34.4277 12.5892C34.985 12.0223 35.8977 12.0223 36.4646 12.5892C37.0219 13.1465 37.0219 14.0593 36.4646 14.6165L33.4861 17.595C33.2075 17.8737 32.8424 18.0178 32.4677 18.0178Z" fill="#F68A30"/>
                                            <path d="M40.3012 42.7578H33.9214C32.0671 42.7578 30.5586 41.2494 30.5586 39.395V33.3131C30.5586 22.6289 39.2539 13.9336 49.9381 13.9336H55.6068C57.6918 13.9336 59.3828 15.6246 59.3828 17.7096V23.6762C59.3828 34.197 50.822 42.7578 40.3012 42.7578ZM49.9477 16.8064C40.8488 16.8064 33.441 24.2142 33.441 33.3131V39.395C33.441 39.664 33.662 39.885 33.931 39.885H40.3108C49.2463 39.885 56.5196 32.6117 56.5196 23.6762V17.7096C56.5196 17.21 56.1161 16.8064 55.6165 16.8064H49.9477Z" fill="#F68A30"/>
                                            <path d="M32.7216 41.5672C32.3565 41.5672 31.9817 41.4231 31.7031 41.1444C31.1458 40.5872 31.1458 39.6744 31.7031 39.1171L51.025 19.7953C51.5823 19.2284 52.495 19.2284 53.0619 19.7953C53.6192 20.3525 53.6192 21.2653 53.0619 21.8226L33.74 41.1444C33.4614 41.4231 33.0963 41.5672 32.7216 41.5672Z" fill="#F68A30"/>
                                            <path d="M39.8826 33.9363C39.0851 33.9363 38.4414 33.2926 38.4414 32.4951V25.8943C38.4414 25.0969 39.0851 24.4531 39.8826 24.4531C40.6801 24.4531 41.3238 25.0969 41.3238 25.8943V32.4951C41.3238 33.2926 40.6801 33.9363 39.8826 33.9363Z" fill="#F68A30"/>
                                            <path d="M45.7245 35.6481H38.9412C38.1437 35.6481 37.5 35.0043 37.5 34.2068C37.5 33.4094 38.1437 32.7656 38.9412 32.7656H45.7245C46.522 32.7656 47.1657 33.4094 47.1657 34.2068C47.1657 35.0043 46.522 35.6481 45.7245 35.6481Z" fill="#F68A30"/>
                                            <path d="M45.6404 28.1922C44.843 28.1922 44.1992 27.5485 44.1992 26.751V22.7156C44.1992 21.9182 44.843 21.2744 45.6404 21.2744C46.4379 21.2744 47.0816 21.9182 47.0816 22.7156V26.751C47.0816 27.5485 46.4379 28.1922 45.6404 28.1922Z" fill="#F68A30"/>
                                            <path d="M49.4706 29.6725H45.0701C44.2726 29.6725 43.6289 29.0287 43.6289 28.2313C43.6289 27.4338 44.2726 26.79 45.0701 26.79H49.4706C50.2681 26.79 50.9118 27.4338 50.9118 28.2313C50.9118 29.0287 50.2681 29.6725 49.4706 29.6725Z" fill="#F68A30"/>
                                            <path d="M59.4569 58.5348H4.54668C3.74921 58.5348 3.10547 57.891 3.10547 57.0936C3.10547 56.2961 3.74921 55.6523 4.54668 55.6523H59.4569C60.2544 55.6523 60.8981 56.2961 60.8981 57.0936C60.8981 57.891 60.2544 58.5348 59.4569 58.5348Z" fill="#F68A30"/>
                                            <path d="M55.0711 63.2037H8.91387C8.1164 63.2037 7.47266 62.56 7.47266 61.7625C7.47266 60.965 8.1164 60.3213 8.91387 60.3213H55.0711C55.8686 60.3213 56.5123 60.965 56.5123 61.7625C56.5123 62.56 55.8686 63.2037 55.0711 63.2037Z" fill="#F68A30"/>
                                            <path d="M48.2234 67.8736H15.7576C14.9601 67.8736 14.3164 67.2299 14.3164 66.4324C14.3164 65.635 14.9601 64.9912 15.7576 64.9912H48.2234C49.0208 64.9912 49.6646 65.635 49.6646 66.4324C49.6646 67.2299 49.0208 67.8736 48.2234 67.8736Z" fill="#F68A30"/>
                                            <path d="M26.4991 53.8646H1.44121C0.643742 53.8646 0 53.2208 0 52.4234C0 51.6259 0.643742 50.9822 1.44121 50.9822H26.4991C28.7378 50.9822 30.5537 49.1662 30.5537 46.9275C30.5537 46.1301 31.1975 45.4863 31.9949 45.4863C32.7924 45.4863 33.4362 46.1301 33.4362 46.9275C33.4362 50.7516 30.3231 53.855 26.5087 53.855L26.4991 53.8646Z" fill="#F68A30"/>
                                            <path d="M62.5478 53.8647H37.4899C33.6659 53.8647 30.5625 50.7517 30.5625 46.9373C30.5625 46.1398 31.2062 45.4961 32.0037 45.4961C32.8012 45.4961 33.4449 46.1398 33.4449 46.9373C33.4449 49.176 35.2609 50.9919 37.4995 50.9919H62.5574C63.3549 50.9919 63.9987 51.6357 63.9987 52.4331C63.9987 53.2306 63.3549 53.8743 62.5574 53.8743L62.5478 53.8647Z" fill="#F68A30"/>
                                        </svg>
                                        <span class="text-uppercase text-light mx-auto position-relative">
                                            Agricultura
                                        </span>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
            </div>

        </section>

        <section id="faq" class="bg-white section-p border-top border-light-green big-border-top position-relative" style="z-index: 1020;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="fw-bold display-6 text-center text-primary mb-5">FAQ</h2>
                        <div class="accordion accordion-flush " id="accordionFlushExample">
                            <div class="accordion-item border-bottom border-2 border-primary">
                                <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    <div class="fs-4 fw-bold">
                                        Accordion Item #2
                                    </div>
                                </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                </div>
                            </div>
                            <div class="accordion-item border-bottom border-2 border-primary">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    <div class="fs-4 fw-bold">
                                        Accordion Item #2
                                    </div>
                                </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                </div>
                            </div>
                            <div class="accordion-item border-bottom border-2 border-primary">
                                <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    <div class="fs-4 fw-bold">
                                        Accordion Item #2
                                    </div>
                                </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contato" class="d-flex align-items-center bg-white section-p position-relative border-top border-secondary big-border-top" style="z-index: 1020;">
            <div class="container">

                <div class="row">
                    <div class="col-lg-5">
                        <h2 class="text-start display-4 fw-bold">Entre em Contato</h2>
                        <p class=" mb-5 pb-5 fs-4">Quer entrar em contato conosco? <br>Utilize os dados ou formulário abaixo:</p>
                        <form>
                                <div class="mb-3">
                                    <label for="exampleInputText1" class="form-label">Email address</label>
                                    <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp">
                                    <div id="textHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div>
                            <h3 class="fw-bold">Contato/Localização</h3>
                            <address>
                                <div class="row">
                                    <div class="col-lg-6 px-3">
                                        <h4>Endereço:</h4>
                                        <div class="d-flex align-items-start">
                                            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/icones/seta.svg' ); ?>" alt="Seta" class="me-4">
                                            <p>
                                                Estrada Municipal de Camaquã, s/n
                                                <br>Rodovia SP 191, km 81,5
                                                <br>CEP 13.537-000 - Ipeúna/SP
                                                <br>+55 19 3576-9518
                                                <br>sac@korinagricultura.com.br
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 px-3">
                                        <h4>Telefone:</h4>
                                        <div class="d-flex align-items-start">
                                            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/icones/seta.svg' ); ?>" alt="Seta" class="me-4">
                                            <p>
                                                +55 19 3576-9518
                                            </p>
                                        </div>
                                        <h4>E-mail</h4>
                                        <div class="d-flex align-items-start">
                                            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/icones/seta.svg' ); ?>" alt="Seta" class="me-4">
                                            <p>
                                                sac@korinagricultura.com.br
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div style="height: 2px; width: 48px;"></div>
                                <h4>Siga nas redes:</h4>
                                <div class="d-flex align-items-start">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/icones/seta.svg' ); ?>" alt="Seta" class="me-4">
                                    <p>
                                        sac@korinagricultura.com.br
                                    </p>
                                </div>
                                <div class="d-flex align-items-start">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/icones/seta.svg' ); ?>" alt="Seta" class="me-4">
                                    <p>
                                        sac@korinagricultura.com.br
                                    </p>
                                </div>
                                <div class="d-flex align-items-start">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/icones/seta.svg' ); ?>" alt="Seta" class="me-4">
                                    <p>
                                        sac@korinagricultura.com.br
                                    </p>
                                </div>
                                <div class="d-flex align-items-start">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/icones/seta.svg' ); ?>" alt="Seta" class="me-4">
                                    <p>
                                        sac@korinagricultura.com.br
                                    </p>
                                </div>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>

<?php get_footer(); ?>