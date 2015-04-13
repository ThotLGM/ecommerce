            <div class="col-md-9">
                <div class="thumbnail">
                    <img class="img-responsive" src="<?= $produit->displayImage() ?>" alt="">
                    <div class="caption-full">
                        <h4 class="pull-right"><?= $produit->prix ?>€</h4>
                        <h4><a href="#"><?= $produit->titre ?></a>
                        </h4>
                        <p><a href="<?= site_url().'/marque/produit_marque/'.$produit->marque_id ?>"><?= $produit->nom ?></a></p>
                        <p>Want to make these reviews work? Check out
                            <strong><a href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this building a review system tutorial</a>
                            </strong>over at maxoffsky.com!</p>
                        <p><?= $produit->description ?></p>
                    </div>
                    <div class="ratings">
                        <p class="pull-right">3 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 stars
                        </p>
                    </div>
                </div>

                <div class="well">

                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-6">
<?php
$data = array('name'=>'autor','placeholder'=>'Auteur', 'class'=>'form-control', 'value'=>set_value('autor'));
$data2 = array('name'=>'note', 'type'=>'number', 'placeholder'=>'Note', 'class'=>'form-control', 'value'=>set_value('note'));
$data3 = array('name'=>'content','placeholder'=>'Commentaire', 'class'=>'form-control', 'value'=>set_value('content'));
$data4 = array('name'=>'submit', 'class'=>'btn btn-success', 'value'=>'Envoyer commentaire');
echo form_Open ('produit/information/'.$produit->id).
//validation_errors().
form_input ($data).
//form_error('autor', '<div class="text-danger">', '</div>').
//<input type="text" name="autor" value="<?= set_value('autor') !>">
form_input ($data2).
//form_error('note', '<div class="text-danger">', '</div>').
form_textarea ($data3).
//form_error('content', '<div class="text-danger">', '</div>').
form_submit ($data4).
form_Close ();
?>
                        </div> 
                        <div class="col-md-4">
                            <?php
echo 
form_error('autor', '<p class="text-danger">', '</p>').
form_error('note', '<p class="text-danger">', '</p>').
form_error('content', '<p class="text-danger">', '</p>');
                            ?>
                        </div>
                    </div>



                    <div class="text-right">
                        <a class="btn btn-success">Leave a Review</a>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">10 days ago</span>
                            <p>This product was great in terms of quality. I would definitely buy another!</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">12 days ago</span>
                            <p>I've alredy ordered another one!</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">15 days ago</span>
                            <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>