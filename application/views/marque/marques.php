        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Hello, world!</h1>
            <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
          </div>
          <div class="row">
<?php       foreach ($marque as $key => $value) : ?>
            <div class="col-xs-6 col-lg-4">
              <h2><?= $value->nom ?></h2>
              <p><?= word_limiter($value->description, 1) ?></p>
              <p><a class="btn btn-default" href="<?= site_url().'/marque/produit_marque/'.$value->id ?>" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
<?php          endforeach ?>


           
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->