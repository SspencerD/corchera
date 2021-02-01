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
                            <a href="seguin.php">

                                <img src="image/products/seguin.jpg" class="img-responsive" />
                                <img src="image/products/seguin.jpg" class="img-responsive" />
                            </a>
                        </div>
                        <div class="caption product-detail">
                            <h4 class="product-name">
                                <a href="#" title="Casual Shirt With Ruffle Hem">Seguin Moreau</a>
                            </h4>
                            <p class="product-desc">
                        </div>
                    </div>
                </div>
                <div class="product-layout product-list col-xs-12">
                    <div class="product-thumb">
                        <div class="image product-imageblock">
                            <a href="mailto:patricio@gbpak.cl?cc=cinostroza@corchera.cl&subject=Informaci%C3%B3n%20sobre%20Toneleria%20Millet%20a%20traves%20del%20sitio%20ICSACHILE&body=Me%20gustar%C3%ADa%20tener%20mayor%20informaci%C3%B3n%20sobre%20los%20productos%20que%20entrega%20la%20Toneleria%20Millet%20y%20su%20representaci%C3%B3n%20en%20Chile">

                                <img src="image/products/millet.jpg" class="img-responsive" />
                                <img src="image/products/millet.jpg" class="img-responsive" />
                            </a>
                        </div>
                        <div class="caption product-detail">
                            <h4 class="product-name">
                                <a href="#" title="Casual Shirt With Ruffle Hem">Toneleria Millet</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-list col-xs-12">
                    <div class="product-thumb">
                        <div class="image product-imageblock">
                            <a href="galileo.php">

                                <img src="image/products/galileo.jpg" class="img-responsive" />
                                <img src="image/products/galileo.jpg" class="img-responsive" />
                            </a>

                        </div>
                        <div class="caption product-detail">
                            <h4 class="product-name">
                                <a href="#" title="Casual Shirt With Ruffle Hem">Tanques Galileo</a>
                            </h4>
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