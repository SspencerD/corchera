<br><br><br><br>
<div class="center">
    <div class="container-fluid">
        <div class="text-center">

            <style>
                .swiper-container {
                    height: 500px;
                    width: 1280px;

                }

                .swiper-wrapper {

                    align-items: center;
                }

                .swiper-slide {
                    width: 1280px;
                    height: 500px;
                    border-radius: 8px;
                    background: rgba(0, 0, 0, 0.9);
                }

                .swiper-slide img {
                    width: 1280px;
                    height: 500px;
                    border-radius: 8px;
                }

                .swiper-slide-active {

                    transform: scale(1.0);
                    transition: .5s;
                }

                .info {
                    width: 100%;
                    padding: 8px 0;
                    background: rgba(0, 0, 0, 0.0);
                    position: absolute;
                    bottom: 0;
                    text-align: justify;
                    border-radius: 0 0 5px 5px;
                }

                .info h3 {

                    font-size: 30px;
                    margin-left: 7px;
                    font-weight: bold;
                    color: #fff;

                }

                .info p {

                    font-size: 15px;
                    margin-left: 7px;
                    color: #fff;
                    text-align: justify;

                }

                .info a {
                    text-decoration: none;
                    color: black;
                    float: right;
                    margin-right: 250px;
                    margin-bottom: 50px;
                    margin-top: -28px;
                    border: 1px solid black;
                    border-radius: 20px;
                    font-size: 20px;
                    padding: 2px;
                }

                .info a:hover {

                    transform: scale(1.8);
                    transition: .9s;
                    background: black;
                    color: #fff;

                }

                .swiper-pagination {
                    bottom: 0 !important;
                    margin-left: 650px;
                    padding: 10px;
                }
            </style>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="./image/carousel/slide1.jpg">
                        <div class="info">
                           <!--  <h3>Tapones NDTECH</h3>
                            <p>NDTECH ES LA TECNOLOGÍA DE ANÁLISIS MÁS AVANZADA DEL MUNDO NDtech es una tecnología de análisis individual para el control de calidad de los tapones de corcho natural que hace posible el primer tapón natural con TCA no detectable*.
                                Desarrollada y patentada por Amorim, es la tecnología de análisis más avanzada del mundo</p>
                            <br> -->
                            <a href="ndtech.php" target="_blank">Saber más</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="./image/carousel/slide2.jpg">
                        <div class="info">
                            <br>
                            <h3 style="text-align: justify;">&nbsp;&nbsp;&nbsp;Conoce toda la gama Seguin Moreau<br>&nbsp;&nbsp;&nbsp;y su selección ICÓNE</h3>
                            <br>
                            <a href="analitica.php" target="_blank">Saber más</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="./image/carousel/slide3.jpg">
                        <div class="info">
                            <!-- <h3>Tapones productos con garantia invididual</h3>
                            <p>Vea todas las gamas de tapones de corcho que ofrecemos con garantia invididual</p>
                            <br> -->
                            <a href="cgarantia.php" target="_blank">Saber más</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="./image/carousel/slide4.jpg">
                        <div class="info">
                            <!-- <h3>Tapón twin top EVO</h3>
                            <p>Un elegante tapón técnico con un cuerpo de corcho micro granulado y discos de corcho natural de alta calidad en ambos extremos.
                                Twin Top Evo está destinado al segmento popular-premium,
                                y resulta ideal para vinos de consumo rápido con notas florales y afrutadas. </p>
                            <br> -->
                            <a href="ttopevo.php" target="_blank">Saber más</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="./image/carousel/slide5.jpg">
                        <div class="info">
                           <!--  <h3>Un tapón con clase , merece botellas a cual encajen</h3>
                            <p>Los tapones de vidrio VINOLOK , hacen resaltar la elegancia y calidad de tus licores o vinos.</p>
                            <br> -->
                            <a href="cvinolok.php " target="_blank">Saber más</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="./image/carousel/slide6.jpg">
                        <div class="info">
                           <!--  <h3>Años de experiencia ayudando a las mejores viñas</h3>
                            <p>En la industria nos destacamos por nuestro servicio de embotellación móvil el cual cumple con todos los estándares de calidad para el envasado de vinos de alta gama, logrando una combinación de rapidez y calidad desde la apuesta apunto en la viña hasta la entrega del producto terminado.</p>
                            <br> -->
                            <a href="embotellacion.php" target="_blank">Saber más</a>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
                </div>
                <script>
                    var mySwiper = new Swiper('.swiper-container', {
                        // Optional parameters	
                        direction: 'horizontal',
                        centeredSlides: true,
                        autoplay: {
                            delay: 4500,
                            disableOnInteraction: false,
                        },
                        breakpoints: {
                            '240': {
                                slidesPerView: 2,
                                spaceBetween: 80,
                            },
                            '320': {
                                slidesPerView: 1,
                                spaceBetween: 50,
                            },
                            '480': {
                                slidesPerView: 1,
                                spaceBetween: 50,
                            },
                            '640': {
                                slidesPerView: 3,
                                spaceBetween: 60,
                            },
                            '1280':{
                                slidesPerView: 1,
                                spaceBetween: 80,
                            },
                            
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                    })
                </script>
            </div>
        </div>
    </div>