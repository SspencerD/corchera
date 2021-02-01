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
                            <a href="./PDF/SEGUIN/ALTERNATIVOS/OENOSTAVES_ESP.pdf" target="_blank">

                                <img src="image/products/duela.jpg" class="img-responsive" />
                                <img src="image/products/duela.jpg" class="img-responsive" />
                            </a>
                            <ul class="button-group grid-btn">

                            </ul>
                        </div>
                        <div class="caption product-detail">
                            <h4 class="product-name">
                                <a href="#" title="Oenostaves classics ">Oenostaves classics </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-list col-xs-12">
                    <div class="product-thumb">
                        <div class="image product-imageblock">
                            <a href="./PDF/SEGUIN/ALTERNATIVOS/OENOSTAVE_COLLECTION_ESP.pdf" target="_blank">

                                <img src="image/products/duela-collection.jpg" class="img-responsive" />
                                <img src="image/products/duela-collection.jpg" class="img-responsive" />
                            </a>
                            <ul class="button-group grid-btn">

                            </ul>
                        </div>
                        <div class="caption product-detail">
                            <h4 class="product-name">
                                <a href="#" title="Oenofirst Rosé ">Oenostaves Collection </a>
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