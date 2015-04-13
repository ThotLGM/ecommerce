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
                        <p class="pull-right"><?= $nbCom ?> reviews</p>
                        <p>
                     <?php for ($i=1; $i <= $moyNote->note; $i++) { 
                                echo '<span class="glyphicon glyphicon-star"></span>';
                                $star=$i;
                            }
                            $starEmpty = 5-$star;
                            for ($j=1; $j <= $starEmpty; $j++) { 
                                echo '<span class="glyphicon glyphicon-star-empty"></span>';
                            }
                            echo ' '.$moyNote->note ?> stars
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
echo '<div class="alert alert-success" role="alert">'.
$this->session->flashdata('success_com').'</div>'.
form_Open ('produit/information/'.$produit->id).
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

<?php           foreach ($commentaire as $key => $value) : ?>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <?php for ($i=1; $i <= $value->note; $i++) { 
                                echo '<span class="glyphicon glyphicon-star"></span>';
                                $star=$i;
                            }
                            $starEmpty = 5-$star;
                            for ($j=1; $j <= $starEmpty; $j++) { 
                                echo '<span class="glyphicon glyphicon-star-empty"></span>';
                            } ?>
                            <?= $value->auteur ?>
                            <span class="pull-right"><?= $value->dateCommentaire ?></span>
                            <p><?= $value->contenu ?></p>
                        </div>
                    </div>
<?php           endforeach; ?>


                </div>

            </div>

        </div>

    </div>