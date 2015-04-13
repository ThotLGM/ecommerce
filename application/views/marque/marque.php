        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1><?= $marque->nom ?></h1>
            <p><?= $marque->description ?></p>
          </div>
          <div class="row">
<?php     if (empty($produit))  echo 'Pas de produit pour cette marque';
          foreach ($produit as $key => $value) : ?>
          <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?= $value->displayImage() ?>" alt="">
                            <div class="caption">
                                <h4 class="pull-right"><?= $value->prix ?>€</h4>
                                <h4><a href="<?= site_url() ?>/produit/information/<?= $value->id ?>"><?= $value->titre ?></a>
                                </h4>
                                <p><?= word_limiter($value->description, 1) ?></p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
<?php    endforeach ?>


           
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->