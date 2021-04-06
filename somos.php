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

    .counter-box p {
        font-size: 20px;
        color: green;
    }

    .counter-box .counter {

        font-size: 40px;
        color: green;
    }
</style>
<div class="center">
    <div class="container-fluid">
        <div class="text-center">
            <div class="jumbotron" style=" background-color:#ffff;">
                <img src="./image/somos.png" alt="somos" sizes="">
                <br>
                <br>
            </div>
            <h1 class="display-4">Quienes Somos</h1>
            <br><br><br>
            <article style="text-align: justify;">
                <span>
                    <h2>
                        Industria Corchera S.A. <b>se funda, el 01 enero 1943. Nuestra empresa se dedica a la fabricación,
                            impresión, envasado y almacenamiento de corchos destinados al mercado vitivinícola nacional e internacional
                            y en el transcurso del tiempo nos hemos preocupado de satisfacer las diferentes necesidades de nuestros clientes adaptándonos a los fuertes y
                            distintos cambios que éste ha ido sufriendo el sector vitivinícola en los últimos años.
                            En el año 2000 se incorpora a la participacíon de ICSA, el grupo </b> AMORIM
                    </h2>
                </span>
            </article>
            <article style="text-align: justify;">
                <h2 class="display-4">
                    Amorim <b>es el mayor productor de corcho de todo el mundo,
                        y una de las multinacionales de origen portugués más dinámicas. En sus 150 años de liderazgo del sector,
                        la empresa ha destacado por su calidad, su innovación y su visión de futuro.
                        Amorim llevó el corcho a todos los rincones del planeta, convirtiéndolo así en un material global.
                        <br><br>Comprendió su ilimitado potencial, y desarrolló grandes plusvalías para un material inimitable por su naturaleza.
                        Los orígenes de la empresa se remontan a 1870, año en el que </b>António Alves Amorim<b> fundó una pequeña fábrica de tapones de corcho en el corazón de la región del vino de Oporto.
                        Cuatro generaciones después,
                        el Grupo se encuentra presente en más de cien países de los cinco continentes y con mas de 18,000 clientes en todo el mundo</b>

                </h2>
                <br>
                <br>

            </article>
        </div>
    </div>
</div>

    <?php
    include 'include/footer.php';
    ?>