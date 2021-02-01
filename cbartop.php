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
    <div class="row">
        <?php include('include/menucategory.php') ?>
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
                            <a href="topseries.php">

                                <img src="image/products/topseries3.jpg" class="img-responsive" />
                                <img src="image/products/topseries3.jpg" class="img-responsive" />
                            </a>
                            <ul class="button-group grid-btn">

                            </ul>
                        </div>
                        <div class="caption product-detail">
                            <h4 class="product-name">
                                <a href="#">Tapón Bartop cabeza plastica</a>
                            </h4>
                            <p class="product-desc">
                                CIERRES PARA CUATRO SEGMENTOS DEL MERCADO
                                Una colección de exclusivos tapones de corcho con cápsula para bebidas espirituosas, los cuales combinan un diseño diferenciador con el excelente rendimiento técnico y medioambiental del corcho.

                                Top Series ofrece una variedad de cierres para cuatro segmentos del mercado: prestige, elegance, premium y classic value. Gracias a una asesoría técnica avanzada, un diseño que cuida hasta los más mínimos detalles y los mejores servicios de producción de prototipos, Top Series lleva el lujo y la exclusividad al mundo de las bebidas espirituosas.
                            </p>
                            <ul class="button-group list-btn">
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-list col-xs-12">
                    <div class="product-thumb">
                        <div class="image product-imageblock">
                            <a href="topseries.php">

                                <img src="image/products/topseries4.jpg" class="img-responsive" />
                                <img src="image/products/topseries4.jpg" class="img-responsive" />
                            </a>
                        </div>
                        <div class="caption product-detail">
                            <h4 class="product-name">
                                <a href="#">Tapón Bartop cabeza madera</a>
                            </h4>
                            <p class="product-desc">
                                CIERRES PARA CUATRO SEGMENTOS DEL MERCADO
                                Una colección de exclusivos tapones de corcho con cápsula para bebidas espirituosas, los cuales combinan un diseño diferenciador con el excelente rendimiento técnico y medioambiental del corcho.

                                Top Series ofrece una variedad de cierres para cuatro segmentos del mercado: prestige, elegance, premium y classic value. Gracias a una asesoría técnica avanzada, un diseño que cuida hasta los más mínimos detalles y los mejores servicios de producción de prototipos, Top Series lleva el lujo y la exclusividad al mundo de las bebidas espirituosas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include './include/footer.php';
?>