<?php /* Template Name: Sobre template  */ ?>

<?php get_header(); ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <?php $secao_abertura = get_field('secao_abertura'); ?>
        <header class="position-relative section-p-g section-triangle">

            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/sobre/campo-e-montanha.jpg' ); ?>"  class="w-100 h-100 position-absolute top-0 end-0 img-under-triangle">

            <!-- desktop -->
            <svg class="position-absolute top-0 start-0 w-75 h-100 d-none d-md-block" preserveAspectRatio="none" style="" viewBox="0 0 1447 784" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-4 0H663.213L1447 784H-4V0Z" fill="#26362C"/>
            </svg>
            <!-- mobile -->
            <svg width="923" height="675" viewBox="0 0 923 675" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-100 h-auto position-relative d-md-none" style="margin-bottom: -2px;">
                <path d="M923 674.132L8.03895e-06 -1.10067e-05L0 674.133L923 674.132Z" fill="#26362C"/>
            </svg>

            <div class="container position-relative bg-for-triangle">
                <div class="row">
                    <div class="col-md-5">
                        <h1 class="text-secondary kt-1 pb-5">
                            <?php if($secao_abertura['titulo_sobre_nos']) echo $secao_abertura['titulo_sobre_nos']; ?>
                        </h1>
                        <div class="text-white paragraph-m">
                            <?php if($secao_abertura['paragrafo_sobre_nos']) echo $secao_abertura['paragrafo_sobre_nos']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <?php $secao_nossa_historia = get_field('secao_nossa_historia'); ?>
        <!-- <div class="w-100 h-100" style="  background:linear-gradient(90deg, red, red 60%, white 60%, white); height: 100vh!important;"></div> -->
        <section id="nossa-historia" class="position-relative bg-white section-p-g">
            <svg width="196" height="196" viewBox="0 0 196 196" fill="none" xmlns="http://www.w3.org/2000/svg" class="position-absolute top-0 start-0">
                <path d="M0 0L8.56744e-06 196L196 -8.56744e-06L0 0Z" fill="#F68A30"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M153.498 97.471C153.498 65.967 127.959 40.4279 96.4548 40.4279C64.9507 40.4279 39.4116 65.967 39.4116 97.471C39.4116 128.975 64.9507 154.514 96.4548 154.514C127.959 154.514 153.498 128.975 153.498 97.471ZM165.944 97.471C165.944 59.0933 134.832 27.9821 96.4548 27.9821C58.0771 27.9821 26.9658 59.0933 26.9658 97.471C26.9658 135.849 58.0771 166.96 96.4548 166.96C134.832 166.96 165.944 135.849 165.944 97.471Z" fill="#F4B400"/>
            </svg>
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h2 class="kt-1 pt-5 pb-5">
                            <?php if($secao_nossa_historia['titulo_nossa_historia']) echo $secao_nossa_historia['titulo_nossa_historia']; ?>    
                        </h2>
                        <div class="mb-5 pb-5">
                            <?php if($secao_nossa_historia['paragrafo_nossa_historia']) echo $secao_nossa_historia['paragrafo_nossa_historia']; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid px-0">
                <div class="row">
                    <div class="col">
                        <!-- Slider main container -->
                        <div class="swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper h-100">
                                <!-- Slide -->
                                <div class="swiper-slide" style="height: auto;">
                                    <div class="d-flex align-items-center justify-content-center h-100">
                                        <div>
                                            <h3 class="pb-3">Linha do tempo</h3>
                                            <div class="d-flex align-items-center justify-content-between">
                                            <svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12 2L2 12L12 22" stroke="#6F8276" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                                                <p class="mb-0">arraste para o lado</p>
                                                <svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2 2L12 12L2 22" stroke="#6F8276" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="position-relative px-4">
                                        <svg width="289" height="288" viewBox="0 0 289 288" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-100 h-auto">
                                            <path d="M0.236328 288H288.236L0.236328 0V288Z" fill="#26362C"/>
                                            <path d="M96.6763 250L122.884 189.808L127.972 197.872H93.8923L101.668 189.136V208.24H85.4443V182.8H141.124V194.704L117.412 250H96.6763Z" fill="white"/>
                                            <path d="M171.733 181.456C178.069 181.456 183.541 182.704 188.149 185.2C192.821 187.696 196.437 191.408 198.997 196.336C201.621 201.2 202.933 207.28 202.933 214.576C202.933 222.384 201.397 229.04 198.325 234.544C195.317 239.984 191.125 244.144 185.749 247.024C180.437 249.904 174.229 251.344 167.125 251.344C163.413 251.344 159.829 250.896 156.373 250C152.917 249.168 149.941 247.984 147.445 246.448L154.357 232.816C156.277 234.16 158.261 235.088 160.309 235.6C162.421 236.048 164.565 236.272 166.741 236.272C171.925 236.272 176.053 234.704 179.125 231.568C182.197 228.432 183.733 223.856 183.733 217.84C183.733 216.752 183.733 215.632 183.733 214.48C183.733 213.264 183.637 212.048 183.445 210.832L188.149 214.768C186.997 217.136 185.493 219.12 183.637 220.72C181.781 222.32 179.605 223.536 177.109 224.368C174.613 225.2 171.765 225.616 168.565 225.616C164.341 225.616 160.469 224.752 156.949 223.024C153.493 221.232 150.709 218.768 148.597 215.632C146.485 212.432 145.429 208.688 145.429 204.4C145.429 199.728 146.613 195.696 148.981 192.304C151.349 188.848 154.517 186.192 158.485 184.336C162.453 182.416 166.869 181.456 171.733 181.456ZM172.981 194.992C171.189 194.992 169.621 195.344 168.277 196.048C166.933 196.752 165.845 197.744 165.013 199.024C164.245 200.24 163.861 201.744 163.861 203.536C163.861 206.096 164.693 208.144 166.357 209.68C168.085 211.216 170.325 211.984 173.077 211.984C174.933 211.984 176.565 211.632 177.973 210.928C179.381 210.224 180.469 209.232 181.237 207.952C182.005 206.672 182.389 205.168 182.389 203.44C182.389 201.776 182.005 200.336 181.237 199.12C180.469 197.84 179.381 196.848 177.973 196.144C176.565 195.376 174.901 194.992 172.981 194.992Z" fill="white"/>
                                        </svg>
                                        <h3 class="position-absolute top-0 end-0 paragraph-s" style="padding-left: 100px;">1979<br> Início da pesquisa com hortaliças (Atibaia)</h3>
                                    </div>
                                </div>
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="position-relative px-4">
                                        <svg width="289" height="289" viewBox="0 0 289 289" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-100 h-auto">
                                            <path d="M0.236316 0.543958L0.236328 288.544L288.236 0.543945L0.236316 0.543958Z" fill="#F68A30"/>
                                            <path d="M113.3 69.888C107.476 69.888 102.388 69.024 98.0362 67.296C93.6842 65.568 90.2602 63.136 87.7642 60C85.3322 56.8 84.1162 53.056 84.1162 48.768C84.1162 44.544 85.3322 40.96 87.7642 38.016C90.2602 35.008 93.6842 32.736 98.0362 31.2C102.452 29.6 107.54 28.8 113.3 28.8C119.06 28.8 124.116 29.6 128.468 31.2C132.884 32.736 136.308 35.008 138.74 38.016C141.236 40.96 142.484 44.544 142.484 48.768C142.484 53.056 141.268 56.8 138.836 60C136.404 63.136 132.98 65.568 128.564 67.296C124.212 69.024 119.124 69.888 113.3 69.888ZM113.3 56.544C116.372 56.544 118.804 55.808 120.596 54.336C122.452 52.864 123.38 50.816 123.38 48.192C123.38 45.632 122.452 43.616 120.596 42.144C118.804 40.608 116.372 39.84 113.3 39.84C110.228 39.84 107.764 40.608 105.908 42.144C104.116 43.616 103.22 45.632 103.22 48.192C103.22 50.816 104.116 52.864 105.908 54.336C107.764 55.808 110.228 56.544 113.3 56.544ZM113.3 38.208C108.052 38.208 103.412 37.472 99.3802 36C95.4122 34.528 92.2762 32.416 89.9722 29.664C87.6682 26.848 86.5162 23.488 86.5162 19.584C86.5162 15.552 87.6362 12.096 89.8762 9.216C92.1802 6.336 95.3482 4.096 99.3802 2.496C103.412 0.832001 108.052 0 113.3 0C118.612 0 123.252 0.832001 127.22 2.496C131.252 4.096 134.388 6.336 136.628 9.216C138.932 12.096 140.084 15.552 140.084 19.584C140.084 23.488 138.932 26.848 136.628 29.664C134.388 32.416 131.252 34.528 127.22 36C123.188 37.472 118.548 38.208 113.3 38.208ZM113.3 27.456C115.732 27.456 117.684 26.848 119.156 25.632C120.628 24.352 121.364 22.624 121.364 20.448C121.364 18.144 120.596 16.384 119.06 15.168C117.588 13.952 115.668 13.344 113.3 13.344C110.932 13.344 109.012 13.952 107.54 15.168C106.068 16.384 105.332 18.144 105.332 20.448C105.332 22.624 106.068 24.352 107.54 25.632C109.012 26.848 110.932 27.456 113.3 27.456Z" fill="white"/>
                                            <path d="M173.295 0C179.631 0 185.103 1.248 189.711 3.744C194.383 6.24 197.999 9.952 200.559 14.88C203.183 19.744 204.495 25.824 204.495 33.12C204.495 40.928 202.959 47.584 199.887 53.088C196.879 58.528 192.687 62.688 187.311 65.568C181.999 68.448 175.791 69.888 168.687 69.888C164.975 69.888 161.391 69.44 157.935 68.544C154.479 67.712 151.503 66.528 149.007 64.992L155.919 51.36C157.839 52.704 159.823 53.632 161.871 54.144C163.983 54.592 166.127 54.816 168.303 54.816C173.487 54.816 177.615 53.248 180.687 50.112C183.759 46.976 185.295 42.4 185.295 36.384C185.295 35.296 185.295 34.176 185.295 33.024C185.295 31.808 185.199 30.592 185.007 29.376L189.711 33.312C188.559 35.68 187.055 37.664 185.199 39.264C183.343 40.864 181.167 42.08 178.671 42.912C176.175 43.744 173.327 44.16 170.127 44.16C165.903 44.16 162.031 43.296 158.511 41.568C155.055 39.776 152.271 37.312 150.159 34.176C148.047 30.976 146.991 27.232 146.991 22.944C146.991 18.272 148.175 14.24 150.543 10.848C152.911 7.39201 156.079 4.736 160.047 2.88C164.015 0.960003 168.431 0 173.295 0ZM174.543 13.536C172.751 13.536 171.183 13.888 169.839 14.592C168.495 15.296 167.407 16.288 166.575 17.568C165.807 18.784 165.423 20.288 165.423 22.08C165.423 24.64 166.255 26.688 167.919 28.224C169.647 29.76 171.887 30.528 174.639 30.528C176.495 30.528 178.127 30.176 179.535 29.472C180.943 28.768 182.031 27.776 182.799 26.496C183.567 25.216 183.951 23.712 183.951 21.984C183.951 20.32 183.567 18.88 182.799 17.664C182.031 16.384 180.943 15.392 179.535 14.688C178.127 13.92 176.463 13.536 174.543 13.536Z" fill="white"/>
                                        </svg>

                                        <h3 class="position-absolute bottom-0 end-0 paragraph-s text-end text-secondary" style="padding-left: 100px;">1979<br> Início da pesquisa com hortaliças (Atibaia)</h3>
                                    </div>
                                </div>
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="position-relative px-4">
                                        <svg width="289" height="288" viewBox="0 0 289 288" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-100 h-auto">
                                            <path d="M288.236 288H0.236328L288.236 0V288Z" fill="#26362C"/>
                                            <path d="M118.076 181.456C124.412 181.456 129.884 182.704 134.492 185.2C139.164 187.696 142.78 191.408 145.34 196.336C147.964 201.2 149.276 207.28 149.276 214.576C149.276 222.384 147.74 229.04 144.668 234.544C141.66 239.984 137.468 244.144 132.092 247.024C126.78 249.904 120.572 251.344 113.468 251.344C109.756 251.344 106.172 250.896 102.716 250C99.2605 249.168 96.2845 247.984 93.7885 246.448L100.7 232.816C102.62 234.16 104.604 235.088 106.652 235.6C108.764 236.048 110.908 236.272 113.084 236.272C118.268 236.272 122.396 234.704 125.468 231.568C128.54 228.432 130.076 223.856 130.076 217.84C130.076 216.752 130.076 215.632 130.076 214.48C130.076 213.264 129.98 212.048 129.788 210.832L134.492 214.768C133.34 217.136 131.836 219.12 129.98 220.72C128.124 222.32 125.948 223.536 123.452 224.368C120.956 225.2 118.108 225.616 114.908 225.616C110.684 225.616 106.812 224.752 103.292 223.024C99.8365 221.232 97.0525 218.768 94.9405 215.632C92.8285 212.432 91.7725 208.688 91.7725 204.4C91.7725 199.728 92.9565 195.696 95.3245 192.304C97.6925 188.848 100.86 186.192 104.828 184.336C108.796 182.416 113.212 181.456 118.076 181.456ZM119.324 194.992C117.532 194.992 115.964 195.344 114.62 196.048C113.276 196.752 112.188 197.744 111.356 199.024C110.588 200.24 110.204 201.744 110.204 203.536C110.204 206.096 111.036 208.144 112.7 209.68C114.428 211.216 116.668 211.984 119.42 211.984C121.276 211.984 122.908 211.632 124.316 210.928C125.724 210.224 126.812 209.232 127.58 207.952C128.348 206.672 128.732 205.168 128.732 203.44C128.732 201.776 128.348 200.336 127.58 199.12C126.812 197.84 125.724 196.848 124.316 196.144C122.908 195.376 121.244 194.992 119.324 194.992Z" fill="white"/>
                                            <path d="M185.508 251.344C179.748 251.344 174.628 249.968 170.148 247.216C165.732 244.464 162.244 240.496 159.684 235.312C157.124 230.128 155.844 223.824 155.844 216.4C155.844 208.976 157.124 202.672 159.684 197.488C162.244 192.304 165.732 188.336 170.148 185.584C174.628 182.832 179.748 181.456 185.508 181.456C191.204 181.456 196.26 182.832 200.676 185.584C205.156 188.336 208.676 192.304 211.236 197.488C213.796 202.672 215.076 208.976 215.076 216.4C215.076 223.824 213.796 230.128 211.236 235.312C208.676 240.496 205.156 244.464 200.676 247.216C196.26 249.968 191.204 251.344 185.508 251.344ZM185.508 235.792C187.556 235.792 189.348 235.152 190.884 233.872C192.484 232.592 193.732 230.544 194.628 227.728C195.524 224.848 195.972 221.072 195.972 216.4C195.972 211.664 195.524 207.888 194.628 205.072C193.732 202.256 192.484 200.208 190.884 198.928C189.348 197.648 187.556 197.008 185.508 197.008C183.46 197.008 181.636 197.648 180.036 198.928C178.5 200.208 177.252 202.256 176.292 205.072C175.396 207.888 174.948 211.664 174.948 216.4C174.948 221.072 175.396 224.848 176.292 227.728C177.252 230.544 178.5 232.592 180.036 233.872C181.636 235.152 183.46 235.792 185.508 235.792Z" fill="white"/>
                                        </svg>

                                        <h3 class="position-absolute top-0 end-0 paragraph-s" style="padding-left: 0px;">1979<br> Início da pesquisa com hortaliças (Atibaia)</h3>
                                    </div>
                                </div>
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="position-relative px-4">
                                        <svg width="289" height="288" viewBox="0 0 289 288" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-100 h-auto">
                                            <path d="M0.236328 288H288.236L0.236328 0V288Z" fill="#26362C"/>
                                            <path d="M96.6763 250L122.884 189.808L127.972 197.872H93.8923L101.668 189.136V208.24H85.4443V182.8H141.124V194.704L117.412 250H96.6763Z" fill="white"/>
                                            <path d="M171.733 181.456C178.069 181.456 183.541 182.704 188.149 185.2C192.821 187.696 196.437 191.408 198.997 196.336C201.621 201.2 202.933 207.28 202.933 214.576C202.933 222.384 201.397 229.04 198.325 234.544C195.317 239.984 191.125 244.144 185.749 247.024C180.437 249.904 174.229 251.344 167.125 251.344C163.413 251.344 159.829 250.896 156.373 250C152.917 249.168 149.941 247.984 147.445 246.448L154.357 232.816C156.277 234.16 158.261 235.088 160.309 235.6C162.421 236.048 164.565 236.272 166.741 236.272C171.925 236.272 176.053 234.704 179.125 231.568C182.197 228.432 183.733 223.856 183.733 217.84C183.733 216.752 183.733 215.632 183.733 214.48C183.733 213.264 183.637 212.048 183.445 210.832L188.149 214.768C186.997 217.136 185.493 219.12 183.637 220.72C181.781 222.32 179.605 223.536 177.109 224.368C174.613 225.2 171.765 225.616 168.565 225.616C164.341 225.616 160.469 224.752 156.949 223.024C153.493 221.232 150.709 218.768 148.597 215.632C146.485 212.432 145.429 208.688 145.429 204.4C145.429 199.728 146.613 195.696 148.981 192.304C151.349 188.848 154.517 186.192 158.485 184.336C162.453 182.416 166.869 181.456 171.733 181.456ZM172.981 194.992C171.189 194.992 169.621 195.344 168.277 196.048C166.933 196.752 165.845 197.744 165.013 199.024C164.245 200.24 163.861 201.744 163.861 203.536C163.861 206.096 164.693 208.144 166.357 209.68C168.085 211.216 170.325 211.984 173.077 211.984C174.933 211.984 176.565 211.632 177.973 210.928C179.381 210.224 180.469 209.232 181.237 207.952C182.005 206.672 182.389 205.168 182.389 203.44C182.389 201.776 182.005 200.336 181.237 199.12C180.469 197.84 179.381 196.848 177.973 196.144C176.565 195.376 174.901 194.992 172.981 194.992Z" fill="white"/>
                                        </svg>
                                        <h3 class="position-absolute top-0 end-0 paragraph-s" style="padding-left: 100px;">1979<br> Início da pesquisa com hortaliças (Atibaia)</h3>
                                    </div>
                                </div>
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="position-relative px-4">
                                        <svg width="289" height="288" viewBox="0 0 289 288" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-100 h-auto">
                                            <path d="M0.236328 288H288.236L0.236328 0V288Z" fill="#26362C"/>
                                            <path d="M96.6763 250L122.884 189.808L127.972 197.872H93.8923L101.668 189.136V208.24H85.4443V182.8H141.124V194.704L117.412 250H96.6763Z" fill="white"/>
                                            <path d="M171.733 181.456C178.069 181.456 183.541 182.704 188.149 185.2C192.821 187.696 196.437 191.408 198.997 196.336C201.621 201.2 202.933 207.28 202.933 214.576C202.933 222.384 201.397 229.04 198.325 234.544C195.317 239.984 191.125 244.144 185.749 247.024C180.437 249.904 174.229 251.344 167.125 251.344C163.413 251.344 159.829 250.896 156.373 250C152.917 249.168 149.941 247.984 147.445 246.448L154.357 232.816C156.277 234.16 158.261 235.088 160.309 235.6C162.421 236.048 164.565 236.272 166.741 236.272C171.925 236.272 176.053 234.704 179.125 231.568C182.197 228.432 183.733 223.856 183.733 217.84C183.733 216.752 183.733 215.632 183.733 214.48C183.733 213.264 183.637 212.048 183.445 210.832L188.149 214.768C186.997 217.136 185.493 219.12 183.637 220.72C181.781 222.32 179.605 223.536 177.109 224.368C174.613 225.2 171.765 225.616 168.565 225.616C164.341 225.616 160.469 224.752 156.949 223.024C153.493 221.232 150.709 218.768 148.597 215.632C146.485 212.432 145.429 208.688 145.429 204.4C145.429 199.728 146.613 195.696 148.981 192.304C151.349 188.848 154.517 186.192 158.485 184.336C162.453 182.416 166.869 181.456 171.733 181.456ZM172.981 194.992C171.189 194.992 169.621 195.344 168.277 196.048C166.933 196.752 165.845 197.744 165.013 199.024C164.245 200.24 163.861 201.744 163.861 203.536C163.861 206.096 164.693 208.144 166.357 209.68C168.085 211.216 170.325 211.984 173.077 211.984C174.933 211.984 176.565 211.632 177.973 210.928C179.381 210.224 180.469 209.232 181.237 207.952C182.005 206.672 182.389 205.168 182.389 203.44C182.389 201.776 182.005 200.336 181.237 199.12C180.469 197.84 179.381 196.848 177.973 196.144C176.565 195.376 174.901 194.992 172.981 194.992Z" fill="white"/>
                                        </svg>
                                        <h3 class="position-absolute top-0 end-0 paragraph-s" style="padding-left: 100px;">1979<br> Início da pesquisa com hortaliças (Atibaia)</h3>
                                    </div>
                                </div>
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="position-relative px-4">
                                        <svg width="289" height="288" viewBox="0 0 289 288" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-100 h-auto">
                                            <path d="M0.236328 288H288.236L0.236328 0V288Z" fill="#26362C"/>
                                            <path d="M96.6763 250L122.884 189.808L127.972 197.872H93.8923L101.668 189.136V208.24H85.4443V182.8H141.124V194.704L117.412 250H96.6763Z" fill="white"/>
                                            <path d="M171.733 181.456C178.069 181.456 183.541 182.704 188.149 185.2C192.821 187.696 196.437 191.408 198.997 196.336C201.621 201.2 202.933 207.28 202.933 214.576C202.933 222.384 201.397 229.04 198.325 234.544C195.317 239.984 191.125 244.144 185.749 247.024C180.437 249.904 174.229 251.344 167.125 251.344C163.413 251.344 159.829 250.896 156.373 250C152.917 249.168 149.941 247.984 147.445 246.448L154.357 232.816C156.277 234.16 158.261 235.088 160.309 235.6C162.421 236.048 164.565 236.272 166.741 236.272C171.925 236.272 176.053 234.704 179.125 231.568C182.197 228.432 183.733 223.856 183.733 217.84C183.733 216.752 183.733 215.632 183.733 214.48C183.733 213.264 183.637 212.048 183.445 210.832L188.149 214.768C186.997 217.136 185.493 219.12 183.637 220.72C181.781 222.32 179.605 223.536 177.109 224.368C174.613 225.2 171.765 225.616 168.565 225.616C164.341 225.616 160.469 224.752 156.949 223.024C153.493 221.232 150.709 218.768 148.597 215.632C146.485 212.432 145.429 208.688 145.429 204.4C145.429 199.728 146.613 195.696 148.981 192.304C151.349 188.848 154.517 186.192 158.485 184.336C162.453 182.416 166.869 181.456 171.733 181.456ZM172.981 194.992C171.189 194.992 169.621 195.344 168.277 196.048C166.933 196.752 165.845 197.744 165.013 199.024C164.245 200.24 163.861 201.744 163.861 203.536C163.861 206.096 164.693 208.144 166.357 209.68C168.085 211.216 170.325 211.984 173.077 211.984C174.933 211.984 176.565 211.632 177.973 210.928C179.381 210.224 180.469 209.232 181.237 207.952C182.005 206.672 182.389 205.168 182.389 203.44C182.389 201.776 182.005 200.336 181.237 199.12C180.469 197.84 179.381 196.848 177.973 196.144C176.565 195.376 174.901 194.992 172.981 194.992Z" fill="white"/>
                                        </svg>
                                        <h3 class="position-absolute top-0 end-0 paragraph-s" style="padding-left: 100px;">1979<br> Início da pesquisa com hortaliças (Atibaia)</h3>
                                    </div>
                                </div>

                            </div>
                        </div>
                            <div class="swiper-button-prev">
                                <svg width="55" height="97" viewBox="0 0 55 97" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.8" d="M48.0068 90.2178L6 48.2109L48.0068 6.2041" stroke="#F68A30" stroke-width="12" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="swiper-button-next">
                                <svg width="55" height="97" viewBox="0 0 55 97" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.8" d="M6.4082 6.2041L48.415 48.2109L6.4082 90.2178" stroke="#F68A30" stroke-width="12" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                    </div>
                </div>
            </div>
        </section>

        <?php $secao_nossos_avancos = get_field('secao_nossos_avancos'); ?>
        <section id="nossos-avancos" class="position-relative">
            <div class="container position-absolute" style="top: 50%; left: 50%; transform: translate(-50%, -50%);">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="text-secondary kt-1 pb-5">
                            <?php if($secao_nossos_avancos['titulo_nossos_avancos']) echo $secao_nossos_avancos['titulo_nossos_avancos']; ?>
                        </h2>
                        <div>
                            <?php if($secao_nossos_avancos['paragrafo_nossos_avancos']) echo $secao_nossos_avancos['paragrafo_nossos_avancos']; ?>
                        </div>
                    </div>
                </div>
            </div>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/sobre/korin-agricultura-respeito-pelo-solo.jpg' ); ?>" class="w-100 h-auto d-none d-md-block" >
            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/sobre/site-korin-sobre-avancos-mobile.jpg' ); ?>" class="w-100 h-auto d-md-none" >
        </section>

        <?php $secao_como_atuamos = get_field('secao_como_atuamos'); ?>
        <section id="como-atuamos" class="bg-white section-p-m">
            <div class="container">
                <h2 class="text-secondary kt-1 pb-5">
                    <?php if($secao_como_atuamos['titulo_como_atuamos']) echo $secao_como_atuamos['titulo_como_atuamos']; ?>
                </h2>
                <div class="row gx-5">

                    <div class="col-md-4 pb-5">
                        <h3 class="text-end text-secondary kt-3 pb-3">
                            <?php if($secao_como_atuamos['titulo_col_como_atuamos_1']) echo $secao_como_atuamos['titulo_col_como_atuamos_1']; ?>
                        </h3>
                        <div class="position-relative">
                            <svg width="398" height="398" viewBox="0 0 398 398" fill="none" xmlns="http://www.w3.org/2000/svg" class="position-relative w-100 h-auto">
                                <path d="M398 0H0L398 398V0Z" fill="#26362C"/>
                            </svg>
                            <div class="text-end ps-5 text-white position-absolute top-0 end-0 w-75 p-5">
                                <?php if($secao_como_atuamos['paragrafo_col_como_atuamos_1']) echo $secao_como_atuamos['paragrafo_col_como_atuamos_1']; ?>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.91 66.91" class="position-absolute bottom-0 start-0 w-25"><defs><style>.cls-1{fill:none;stroke:#f68a30;stroke-linecap:round;stroke-miterlimit:10;stroke-width:3.33px;}</style></defs><g id="Layer_1-2"><g id="transparency"><circle class="cls-1" cx="28.33" cy="28.33" r="26.66" transform="translate(-5.75 49.39) rotate(-76.72)"/><path class="cls-1" d="m57.04,45.44l5.81,5.81c3.19,3.19,3.19,8.41,0,11.6h0c-3.19,3.19-8.41,3.19-11.6,0l-10.79-10.79"/><path class="cls-1" d="m22.18,45.74c-5.24-1.85-9.4-6.01-11.26-11.26"/></g></g></svg>
                        </div>
                    </div>

                    <div class="col-md-4 pb-5">
                        <h3 class="text-end text-secondary kt-3 pb-3">
                            <?php if($secao_como_atuamos['titulo_col_como_atuamos_2']) echo $secao_como_atuamos['titulo_col_como_atuamos_2']; ?>
                        </h3>
                        <div class="position-relative">
                            <svg width="398" height="398" viewBox="0 0 398 398" fill="none" xmlns="http://www.w3.org/2000/svg" class="position-relative w-100 h-auto">
                                <path d="M398 0H0L398 398V0Z" fill="#26362C"/>
                            </svg>
                            <div class="text-end ps-5 text-white position-absolute top-0 end-0 w-75 p-5">
                                <?php if($secao_como_atuamos['paragrafo_col_como_atuamos_2']) echo $secao_como_atuamos['paragrafo_col_como_atuamos_3']; ?>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 51.28 72.18" class="position-absolute bottom-0 start-0 w-25"><defs><style>.cls-1{fill:none;stroke:#f68a30;stroke-linecap:round;stroke-miterlimit:10;stroke-width:3.33px;}</style></defs><g id="Layer_1-2"><g><path class="cls-1" d="m17.71,1.67v22.24C8.36,27.19,1.67,36.08,1.67,46.54c0,13.24,10.73,23.98,23.98,23.98s23.98-10.73,23.98-23.98c0-10.46-6.7-19.35-16.03-22.63v-.65s0-21.59,0-21.59"/><line class="cls-1" x1="3.03" y1="44.04" x2="25.04" y2="44.04"/><line class="cls-1" x1="37.05" y1="44.04" x2="49.06" y2="44.04"/></g></g></svg>
                        </div>
                    </div>

                    <div class="col-md-4 pb-5">
                        <h3 class="text-end text-secondary kt-3 pb-3">
                            <?php if($secao_como_atuamos['titulo_col_como_atuamos_3']) echo $secao_como_atuamos['titulo_col_como_atuamos_1']; ?>
                        </h3>
                        <div class="position-relative">
                            <svg width="398" height="398" viewBox="0 0 398 398" fill="none" xmlns="http://www.w3.org/2000/svg" class="position-relative w-100 h-auto">
                                <path d="M398 0H0L398 398V0Z" fill="#26362C"/>
                            </svg>
                            <div class="text-end ps-5 text-white position-absolute top-0 end-0 w-75 p-5">
                                <?php if($secao_como_atuamos['paragrafo_col_como_atuamos_3']) echo $secao_como_atuamos['paragrafo_col_como_atuamos_1']; ?>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="position-absolute bottom-0 start-0 w-25" viewBox="0 0 54.59 61.71"><defs><style>.cls-1{fill:none;stroke:#f68a30;stroke-linecap:round;stroke-linejoin:round;stroke-width:3.33px;}</style></defs><g id="Layer_1-2"><g><circle class="cls-1" cx="37.77" cy="37.94" r="15.15"/><path class="cls-1" d="m34.57,57.02c-3.25,1.92-7.04,3.02-11.08,3.02-12.05,0-21.82-9.77-21.82-21.82C1.67,15.06,23.49,1.67,23.49,1.67c0,0,9.33,6.55,15.79,17.03"/><line class="cls-1" x1="43.25" y1="44.14" x2="46.02" y2="41.38"/><line class="cls-1" x1="40.46" y1="39.34" x2="37.69" y2="36.58"/><line class="cls-1" x1="41.35" y1="33.59" x2="41.35" y2="29.69"/><line class="cls-1" x1="33.95" y1="33.91" x2="30.05" y2="33.91"/><line class="cls-1" x1="35.15" y1="42.39" x2="32.39" y2="45.15"/></g></g></svg>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <?php $secao_nossa_missao = get_field('secao_nossa_missao'); ?>
        <section class="position-relative section-p-g section-triangle">

            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/sobre/korin-agricultura-campo-agricola.jpg' ); ?>"  class="w-100 h-100 position-absolute top-0 end-0 img-under-triangle">

            <!-- desktop -->
            <svg class="position-absolute top-0 start-0 w-75 h-100 d-none d-md-block" preserveAspectRatio="none" style="" viewBox="0 0 1447 784" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-4 0H663.213L1447 784H-4V0Z" fill="#26362C"/>
            </svg>
            <!-- mobile -->
            <svg width="923" height="675" viewBox="0 0 923 675" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-100 h-auto position-relative d-md-none" style="margin-bottom: -2px;">
                <path d="M923 674.132L8.03895e-06 -1.10067e-05L0 674.133L923 674.132Z" fill="#26362C"/>
            </svg>

            <div class="container position-relative bg-for-triangle">
                <div class="row">
                    <div class="col-md-5">
                        <h1 class="text-secondary kt-1 pb-5">
                            <?php if($secao_nossa_missao['titulo_nossa_missao']) echo $secao_nossa_missao['titulo_nossa_missao']; ?>
                        </h1>
                        <div class="text-white paragraph-m">
                            <?php if($secao_nossa_missao['paragrafo_nossa_missao']) echo $secao_nossa_missao['paragrafo_nossa_missao']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php $secao_nossos_valores = get_field('secao_nossos_valores'); ?>
        <section id="nossos-valores" class="section-p-m">
            <div class="container">
                <h2 class="text-secondary kt-1 pb-5">
                    <?php if($secao_nossos_valores['titulo_nossos_valores']) echo $secao_nossos_valores['titulo_nossos_valores']; ?>
                </h2>
                <div class="row gx-5">
                    <div class="col-6 col-md-2">
                        <div class="position-relative mb-5">
                            <svg width="191" height="191" viewBox="0 0 191 191" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-100 h-auto">
                                <path d="M6.93177e-06 -1.43824e-05L1.52588e-05 190.5L190.5 -2.27094e-05L6.93177e-06 -1.43824e-05Z" fill="#26362C"/>
                            </svg>
                            <h3 class="position-absolute kt-6 text-white" style="top:12px; left: 14px;">
                                <?php if($secao_nossos_valores['titulo_col_nossos_valores_1']) echo $secao_nossos_valores['titulo_col_nossos_valores_1']; ?>
                            </h3>
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/sobre/nossos-valores/coracao.png' ); ?>" class="position-absolute bottom-0 end-0" >
                        </div>
                        <p>
                            <?php if($secao_nossos_valores['paragrafo_col_nossos_valores_1']) echo $secao_nossos_valores['paragrafo_col_nossos_valores_1']; ?>
                        </p>
                    </div>

                    <div class="col-6 col-md-2">
                        <div class="position-relative mb-5">
                            <svg width="191" height="191" viewBox="0 0 191 191" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-100 h-auto">
                                <path d="M6.93177e-06 -1.43824e-05L1.52588e-05 190.5L190.5 -2.27094e-05L6.93177e-06 -1.43824e-05Z" class="fill-secondary"/>
                            </svg>
                            <h3 class="position-absolute kt-6 text-white" style="top:12px; left: 14px;">
                                <?php if($secao_nossos_valores['titulo_col_nossos_valores_2']) echo $secao_nossos_valores['titulo_col_nossos_valores_2']; ?>
                            </h3>
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/sobre/nossos-valores/simbolo-reciclado.png' ); ?>" class="position-absolute bottom-0 end-0" >
                        </div>
                        <p>
                            <?php if($secao_nossos_valores['paragrafo_col_nossos_valores_2']) echo $secao_nossos_valores['paragrafo_col_nossos_valores_2']; ?>
                        </p>
                    </div>

                    <div class="col-6 col-md-2">
                        <div class="position-relative mb-5">
                            <svg width="191" height="191" viewBox="0 0 191 191" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-100 h-auto">
                                <path d="M6.93177e-06 -1.43824e-05L1.52588e-05 190.5L190.5 -2.27094e-05L6.93177e-06 -1.43824e-05Z" class="fill-yellow"/>
                            </svg>
                            <h3 class="position-absolute kt-6 text-white" style="top:12px; left: 14px;">
                                <?php if($secao_nossos_valores['titulo_col_nossos_valores_3']) echo $secao_nossos_valores['titulo_col_nossos_valores_3']; ?>
                            </h3>
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/sobre/nossos-valores/maos.png' ); ?>" class="position-absolute bottom-0 end-0" >
                        </div>
                        <p>
                            <?php if($secao_nossos_valores['paragrafo_col_nossos_valores_3']) echo $secao_nossos_valores['paragrafo_col_nossos_valores_3']; ?>
                        </p>
                    </div>

                    <div class="col-6 col-md-2">
                        <div class="position-relative mb-5">
                            <svg width="191" height="191" viewBox="0 0 191 191" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-100 h-auto">
                                <path d="M6.93177e-06 -1.43824e-05L1.52588e-05 190.5L190.5 -2.27094e-05L6.93177e-06 -1.43824e-05Z" fill="#26362C"/>
                            </svg>
                            <h3 class="position-absolute kt-6 text-white" style="top:12px; left: 14px;">
                                <?php if($secao_nossos_valores['titulo_col_nossos_valores_4']) echo $secao_nossos_valores['titulo_col_nossos_valores_4']; ?>
                            </h3>
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/sobre/nossos-valores/lampada.png' ); ?>" class="position-absolute bottom-0 end-0" >
                        </div>
                        <p>
                            <?php if($secao_nossos_valores['paragrafo_col_nossos_valores_4']) echo $secao_nossos_valores['paragrafo_col_nossos_valores_4']; ?>
                        </p>
                    </div>

                    <div class="col-6 col-md-2">
                        <div class="position-relative mb-5">
                            <svg width="191" height="191" viewBox="0 0 191 191" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-100 h-auto">
                                <path d="M6.93177e-06 -1.43824e-05L1.52588e-05 190.5L190.5 -2.27094e-05L6.93177e-06 -1.43824e-05Z" class="fill-yellow"/>
                            </svg>
                            <h3 class="position-absolute kt-6 text-white" style="top:12px; left: 14px;">
                                <?php if($secao_nossos_valores['titulo_col_nossos_valores_5']) echo $secao_nossos_valores['titulo_col_nossos_valores_5']; ?>
                            </h3>
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/sobre/nossos-valores/faces.png' ); ?>" class="position-absolute bottom-0 end-0" >
                        </div>
                        <p>
                            <?php if($secao_nossos_valores['paragrafo_col_nossos_valores_5']) echo $secao_nossos_valores['paragrafo_col_nossos_valores_5']; ?>
                        </p>
                    </div>

                    <div class="col-6 col-md-2">
                        <div class="position-relative mb-5">
                            <svg width="191" height="191" viewBox="0 0 191 191" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-100 h-auto">
                                <path d="M6.93177e-06 -1.43824e-05L1.52588e-05 190.5L190.5 -2.27094e-05L6.93177e-06 -1.43824e-05Z" class="fill-secondary"/>
                            </svg>
                            <h3 class="position-absolute kt-6 text-white" style="top:12px; left: 14px;">
                                <?php if($secao_nossos_valores['titulo_col_nossos_valores_6']) echo $secao_nossos_valores['titulo_col_nossos_valores_6']; ?>
                            </h3>
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/sobre/nossos-valores/planeta-terra.png' ); ?>" class="position-absolute bottom-0 end-0" >
                        </div>
                        <p>
                            <?php if($secao_nossos_valores['paragrafo_col_nossos_valores_6']) echo $secao_nossos_valores['paragrafo_col_nossos_valores_6']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>

<?php get_footer(); ?>