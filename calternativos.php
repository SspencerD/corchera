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
                <img src="./image/seguin2.jpg" alt="" class="">
            </div>
            <h1>Alternativos</h1>
            <article style="text-align: justify;">
                <p style="color:#000; font-size: 20px;">

                    Nuestros productos alternativos son una respuesta enológica de alta gama para todo tipo de utilización de la madera. Nuestros progresos en investigación sobre los intercambios entre el vino y el roble, nos han permitido desarrollar productos capaces de responder a diferentes niveles dentro de una gama de vinos.
                </p>
            </article>
        </div>
    </div>
    <br><br><br><br><br>
    <div class="row">
        <?php include('include/menualternativos.php') ?>
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
                            <a href="oeno.php" target="_blank">

                                <img src="image/products/oeno.jpg" class="img-responsive" />
                                <img src="image/products/oeno.jpg" class="img-responsive" />
                            </a>
                            <ul class="button-group grid-btn">

                            </ul>
                        </div>
                        <div class="caption product-detail">
                            <h4 class="product-name">
                                <a href="#" title="Oenofirst">Oenofirst</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-list col-xs-12">
                    <div class="product-thumb">
                        <div class="image product-imageblock">
                            <a href="chips.php">

                                <img src="image/products/chips.jpg" class="img-responsive" />
                                <img src="image/products/chips.jpg" class="img-responsive" />
                            </a>
                            <ul class="button-group grid-btn">

                            </ul>
                        </div>
                        <div class="caption product-detail">
                            <h4 class="product-name">
                                <a href="#" title="Oenochips ">Oenochips </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-list col-xs-12">
                    <div class="product-thumb">
                        <div class="image product-imageblock">
                            <a href="./PDF/SEGUIN/ALTERNATIVOS/OENOBLOCK_ESP.pdf" target="_blank">

                                <img src="image/products/block.jpg" class="img-responsive" />
                                <img src="image/products/block.jpg" class="img-responsive" />
                            </a>
                            <ul class="button-group grid-btn">

                            </ul>
                        </div>
                        <div class="caption product-detail">
                            <h4 class="product-name">
                                <a href="#" title="Oenoblock">Oenoblock</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-list col-xs-12">
                    <div class="product-thumb">
                        <div class="image product-imageblock">
                            <a href="duelas.php" target="_blank">

                                <img src="image/products/duelas.jpg" class="img-responsive" />
                                <img src="image/products/duelas.jpg" class="img-responsive" />
                            </a>
                            <ul class="button-group grid-btn">

                            </ul>
                        </div>
                        <div class="caption product-detail">
                            <h4 class="product-name">
                                <a href="#" title="Oenostaves">Oenostaves</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-list col-xs-12">
                    <div class="product-thumb">
                        <div class="image product-imageblock">
                            <a href="./PDF/SEGUIN/ALTERNATIVOS/OENOFINISHER_ESP.pdf" target="_blank">

                                <img src="image/products/finisher.jpg" class="img-responsive" />
                                <img src="image/products/finisher.jpg" class="img-responsive" />
                            </a>
                            <ul class="button-group grid-btn">

                            </ul>
                        </div>
                        <div class="caption product-detail">
                            <h4 class="product-name">
                                <a href="#" title="Oenofinisher "> Oenofinisher </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-list col-xs-12">
                    <div class="product-thumb">
                        <div class="image product-imageblock">
                            <a href="./PDF/SEGUIN/ALTERNATIVOS/OENOSTICK_ESP.pdf" target="_blank">

                                <img src="image/products/stick.jpg" class="img-responsive" />
                                <img src="image/products/stick.jpg" class="img-responsive" />
                            </a>
                            <ul class="button-group grid-btn">

                            </ul>
                        </div>
                        <div class="caption product-detail">
                            <h4 class="product-name">
                                <a href="#" title="Oenostick ">Oenostick </a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row " style="margin-left: -250px; ">
                <div class="col-md-offset-2 col-md-8 purchase">
                    <h3 class="purchase-title">Si requiere mayor información o sí desea cotizar nuestros productos</h3>
                    <button class="btn btn-primary"><a href="mailto:masanchez@corchera.cl">Contactarse aqui</a></button>
                </div>

            </div>
        </div>
    </div>
</div>

<?php

include './include/footer.php';
?>