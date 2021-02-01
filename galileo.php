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
    <br><br><br><br><br>
    <div class="row">
        <?php include('include/menucategory.php') ?>
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
                            <a href="./PDF/GALILEO/FICHE_G15R_ES.pdf" target="_blank">

                                <img src="image/products/galileo1.jpg" class="img-responsive" />
                                <img src="image/products/galileo1.jpg" class="img-responsive" />
                            </a>
                            <ul class="button-group grid-btn">

                            </ul>
                        </div>
                        <div class="caption product-detail">
                            <h4 class="product-name">
                                <a href="#" title="Estanque G15R">Estanque G15R </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-list col-xs-12">
                    <div class="product-thumb">
                        <div class="image product-imageblock">
                            <a href="./PDF/GALILEO/FICHE_G15S_ES.pdf" target="_blank">

                                <img src="image/products/galileo2.jpg" class="img-responsive" />
                                <img src="image/products/galileo2.jpg" class="img-responsive" />
                            </a>
                            <ul class="button-group grid-btn">

                            </ul>
                        </div>
                        <div class="caption product-detail">
                            <h4 class="product-name">
                                <a href="#" title="Estanque G15s ">Estanque G15s </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-list col-xs-12">
                    <div class="product-thumb">
                        <div class="image product-imageblock">
                            <a href="./PDF/GALILEO/FICHE_G30T_ES.pdf" target="_blank">

                                <img src="image/products/galileo2.jpg" class="img-responsive" />
                                <img src="image/products/galileo2.jpg" class="img-responsive" />
                            </a>
                            <ul class="button-group grid-btn">

                            </ul>
                        </div>
                        <div class="caption product-detail">
                            <h4 class="product-name">
                                <a href="#" title="Estanque G30T ">Estanque G30T </a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-offset-2 col-md-8 purchase">
                    <h3 class="purchase-title">Si requiere mayor información o sí desea cotizar nuestros productos</h3>
                    <button class="btn btn-primary"><a href="mailto:masanchez@corchera.cl?cc=cinostroza@corchera.cl&subject=Informaci%C3%B3n%20sobre%20productos%20%20a%20trav%C3%A9s%20del%20sitio%20ICSACHILE&body=Me%20gustar%C3%ADa%20tener%20mayor%20informaci%C3%B3n%20sobre%20los%20productos%20que%20entrega%20la%20Los%20estanques%20Galileo%20y%20su%20representaci%C3%B3n%20en%20Chile">Contactarse aqui</a></button>
                </div>

            </div>

        </div>
    </div>
</div>

<?php

include './include/footer.php';
?>