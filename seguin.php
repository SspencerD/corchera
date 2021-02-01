<?php

include './include/head.php';
include './include/menu.php';
?>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="container-fluid">
        <div class="text-center">
            <div class="jumbotron" style="background-color: #fff;">
                <img src="./image/seguin.jpg" alt="" class="">
            </div>
            <h1>SEGUIN MOREAU</h1>
            <article style="text-align: justify;">
                <h2>Definitivamente en Francia y en el mundo</h2>
                <p style="color:#000; font-size: 20px;">
                    <b style="font-size: 25px;">SEGUIN MOREAU</b>
                    comienza a trabajar con varios châteaux bordeleses, se desarrolla en los viñedos de Borgoña gracias a la instalación de un nuevo taller de producción en Chagny, y también expande sus exportaciones a todas las regiones vinícolas del mundo.
                    Desde el principio de los años 90, la marca es mundialmente reconocida y su presencia internacional.

                    Para satisfacer las expectativas de todos sus clientes, la tonelería SEGUIN MOREAU ha desarrollado su conocimiento sobre otras esencias de roble: americano, ruso, europeo. En esta línea, se creó en 1994 un tercer taller de producción en Napa, California.

                    Desde el 2005, la tonelería combina con éxito su compromiso con el desarrollo sostenible y refuerza su política de innovación para anticipar constantemente las exigencias de los productores a escala mundial.

                    En el 2008, el taller de Chagny (Borgoña) fue renovado y en el 2011, SEGUIN MOREAU abre nuevos oficinas en el barrio de Chartrons en Burdeos.</p>
            </article>
        </div>
    </div>
    <br><br><br><br><br>
    <div class="row">
        <?php include('include/menuseguin.php') ?>
        <br><br><br>
        <div class=" content col-sm-9">
            <div class="category-page-wrapper">
                <div class="col-md-2 text-right sort-wrapper">
                </div>
                <div class="col-md-1 text-right page-wrapper">
                </div>
                <div class="col-md-6 list-grid-wrapper"> <a href="#" id="compare-total"></a>
                    <div class="btn-group btn-list-grid">
                        <button type="button" id="grid-view" class="btn btn-default grid" data-toggle="tooltip" title="Grid"></button>
                    </div>
                </div>
            </div>
            <br />
            <div class="grid-list-wrapper">
                <div class="product-layout product-list col-xs-12">
                    <div class="product-thumb">
                        <div class="image product-imageblock">
                            <a href="analitica.php">

                                <img src="image/products/barrilfrances.jpg" class="img-responsive" />
                                <img src="image/products/barrilfrances.jpg" class="img-responsive" />
                            </a>
                            <ul class="button-group grid-btn">

                            </ul>
                        </div>
                        <div class="caption product-detail">
                            <h4 class="product-name">
                                <a href="#" title="Casual Shirt With Ruffle Hem" style="font-weight:bold; color:#000;">Barricas de robles</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-list col-xs-12">
                    <div class="product-thumb">
                        <div class="image product-imageblock">
                            <a href="calternativos.php">

                                <img src="image/products/duelas.jpg" class="img-responsive" />
                                <img src="image/products/duelas.jpg" class="img-responsive" />
                            </a>
                            <ul class="button-group grid-btn">

                            </ul>
                        </div>
                        <div class="caption product-detail">
                            <h4 class="product-name">
                                <a href="#" title="Casual Shirt With Ruffle Hem" style="font-weight:bold; color:#000;">Alternativos</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-list col-xs-12">
                    <div class="product-thumb">
                        <div class="image product-imageblock">
                            <a href="./PDF/SEGUIN/CONTENEDORES/GContenedores.pdf" target="_blank">

                                <img src="image/products/cubas.jpg" class="img-responsive" />
                                <img src="image/products/cubas.jpg" class="img-responsive" />
                            </a>
                            <ul class="button-group grid-btn">

                            </ul>
                        </div>
                        <div class="caption product-detail">
                            <h4 class="product-name">
                                <a href="#" title="Casual Shirt With Ruffle Hem" style="font-weight:bold; color:#000;">Grande contenedores</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row " style="margin-left: -250px; ">
                <div class="col-md-offset-2 col-md-8 purchase">
                    <h3 class="purchase-title">Si requiere mayor información o sí desea cotizar nuestros productos</h3>
                    <button class="btn btn-primary"><a href="mailto:masanchez@corchera.cl?cc=cinostroza@corchera.cl&subject=Informaci%C3%B3n%20sobre%20productos%20%20a%20trav%C3%A9s%20del%20sitio%20ICSACHILE&body=Me%20gustar%C3%ADa%20tener%20mayor%20informaci%C3%B3n%20sobre%20los%20productos%20que%20entrega%20la%20Los%20Seguin%20Moreau%20%20y%20su%20representaci%C3%B3n%20en%20Chile">Contactarse aqui</a></button>
                </div>

            </div>
        </div>
    </div>
</div>

<?php

include './include/footer.php';
?>