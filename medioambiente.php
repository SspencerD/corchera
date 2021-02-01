<?php
include 'include/head.php';
include 'include/menu.php';
?>
<style>
    .counter-section {
        margin: 10% auto;
        color: #000;

    }

    .icon-box {

        border: 1px solid black;
        height: 100px;
        width: 100px;
        margin: 20px auto;
        transform: rotate(45deg);
    }

    .icon-box .fas {

        font-size: 40px;
        margin: 25px auto;
        color: green;
        transform: rotate(-45deg);
    }

    .icon-box .fab {

        font-size: 40px;
        margin: 25px auto;
        color: green;
        transform: rotate(-45deg);
    }

    .counter-box p {
        font-size: 20px;
        color: green;
    }

    .counter-box .counter {

        font-size: 40px;
        color: green;
    }

    .swiper-container {
        height: 350px;
        background: rgba(0, 0, 0, 0.2);

    }

    .swiper-wrapper {

        align-items: center;
    }

    .swiper-slide {
        width: 200px;
        height: 250px;
        border-radius: 8px;
        background: rgba(0, 0, 0, 0.6);

    }

    .swiper-slide img {
        width: 200px;
        height: 250px;
        border-radius: 8px;
    }

    .swiper-slide-active {

        transform: scale(1.2);
        transition: .9s;
    }

    .info {
        width: 100%;
        padding: 8px 0;
        background: rgba(0, 0, 0, 0.6);
        position: absolute;
        bottom: 0;
        text-align: justify;
        border-radius: 0 0 5px 5px;
    }

    .info h3 {

        font-size: 15px;
        margin-left: 7px;
        font-weight: 100;
        color: #fff;
    }

    .info p {

        font-size: 10px;
        margin-left: 7px;
        color: #fff;
        text-align: justify;

    }

    .info a {
        text-decoration: none;
        color: #fff;
        float: right;
        margin-right: 7px;
        margin-top: -28px;
        border: 1px solid #fff;
        border-radius: 20px;
        font-size: 10px;
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
    }
</style>
<div class="center">
    <div class="container-fluid">
        <div class="text-center">
            <div class="jumbotron" style=" background-color:#ffff;">
                <img src="./image/senda.jpg" width="2000" height="600">
                <br>
                <br>
                <br>
                <h1 class="display-4" style="color: black;">Medio Ambiente</h1>
            </div>
            <article>
                <span>
                    <aside>
                        <p style="font-size: 20px; text-align:justify; color:#595959">
                            <b>L</b>os alcornocales, son embajadores vivos de la sostenibilidad y
                            una fuerza impulsora del desarrollo sostenible. Desempeñan un papel crucial en el equilibrio ecológico del mundo,
                            luchando contra el cambio climático y la desertificación y manteniendo la biodiversidad.

                        </p>
                    </aside>
                    <aside>
                        <p style="font-size: 20px; text-align:justify; color:#595959;">
                            En la cuenca mediterránea, los alcornocales ocupan una superficie de más de <b style="color: #000; font-size: 30px;">2,2 millones de hectáreas</b>. 
                            En más de una forma, son el pulmón de la región.
                            Debido al valor medioambiental que nos brinda el tapón de corcho, el grupo <b style="color: #000;">AMORIM</b> en conjunto con sus distribuidores promueven e
                            incentivan su uso ya que existe evidencia bibliográfica que nos indican que un tapón de corcho es capaz de neutralizar la huella de carbono de una botella de vidrio,
                            logrando ser la opción de envasado disponible en el mercado respetuosa con el medioambiente.
                        </p>
                    </aside>
                </span>
            </article>
            <br><br>
            <h1>Estadisticas de Amorim</h1>
            <aside>
                <div class="text-center">
                    <div class="container counter-section">
                        <section class="counters">
                            <div class="row">
                                <div class="col-md-3 counter-box">
                                    <div class="icon-box"><i class="fas fa-layer-group fa-4x"></i></div>
                                    <div class="counter" data-target="2200000">0</div>
                                    <p>Hectarias plantadas</p>
                                </div>
                                <div class="col-md-3 counter-box">
                                    <div class="icon-box"> <i class="fas fa-leaf fa-4x"></i></div>
                                    <div class="counter" data-target="200000">0</div>
                                    <p>Toneladas de Corcho por año</p>
                                </div>
                                <div class="col-md-3 counter-box">
                                    <div class="icon-box"> <i class="fab fa-pagelines fa-4x"></i></div>
                                    <div class="counter" data-target="700">0</div>
                                    <p>Retención en Ton de CO₂ Anualmente</p>
                                </div>
                                <div class="col-md-3 counter-box">
                                    <div class="icon-box"> <i class="fas fa-tree fa-4x"></i></div>
                                    <div class="counter" data-target="150">0</div>
                                    <p>Duración de cada Alcornoque (Años)</p>
                                </div>
                            </div>
                    </div>
                    </section>
                </div>

            </aside>

            <div class="container">


                <img src="./image/footprint.png" class="img-fluid" alt="Responsive image">
            </div>
            <br><br><br>
            <h1> Contenido descargable</h1>
        </div>
        <br><br>

    </div>
</div>
<br><br>

<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="./image/enviroment/bark.jpg">
            <div class="info">
                <h3>Bark to bottle # 43</h3>
                <p>Amorim refuerza sus credenciales de sostenibilidad en su 150 aniversario.</p>
                <br>
                <a href="./PDF/Bark43.pdf" target="_blank">Ver</a>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="./image/enviroment/huella.jpg">
            <div class="info">
                <h3>Huella carbono</h3>
                <p>Te mostramos nuestra huella de carbono.</p>
                <br>
                <a href="./PDF/Huella-Icsa.pdf" target="_blank">Ver</a>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="./image/enviroment/eleccion.jpg">
            <div class="info">
                <h3>Tu Eliges</h3>
                <p>Vea los niveles de CO2 que puede realizar una tapa de aluminio o plastica</p>
                <br>
                <a href="./PDF/Eleccion.pdf" target="_blank">Ver</a>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="./image/enviroment/sustentable.jpg">
            <div class="info">
                <h3>Sustantibity enveroment(ingles)</h3>
                <p>Projección anual de Amorim sobre el reciclaje y reutilización del corcho</p>
                <br>
                <a href="./PDF/Sustentability.pdf" target="_blank">Ver</a>
            </div>
        </div>


    </div>
    <!-- Pagination -->
    <div class="swiper-pagination"></div>

    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>

<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 'auto',
        spaceBetween: 40,
        centeredSlides: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>

<script>
    const counters = document.querySelectorAll('.counter');
    const speed = 200;

    counters.forEach(counter => {
        const updateCount = () => {
            const target = counter.getAttribute('data-target');
            const count = +counter.innerText;

            const inc = target / speed;

            if (count < target) {
                counter.innerText = count + inc;
                setTimeout(updateCount, 10);
            } else {
                count.innerText = target;
            }

        }


        updateCount();
    });
</script>
<?php
include 'include/footer.php';
?>