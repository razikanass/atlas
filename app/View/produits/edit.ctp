<style type="text/css">
    div.error-message{
        color:red;
        font-weight: bold;
    }
</style>
<div class="panel panel-default">
                        <div class="panel-heading">
                            <b>Modifier <?=$produit['nom']?></b>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <?= $this->Form->create('Produit') ?>
                                        <div class="form-group input-group">
                                            <?= $this->Form->input('nom',
                                                                    array('class'=>'form-control',
                                                                          'placeholder'=>"Nom",
                                                                          'label'=>'',
                                                                          'value'=>$produit['nom'])) ?>
                                        </div>
                                        <div class="form-group input-group">
                                            <?= $this->Form->input('prix',
                                                                    array('class'=>'form-control',
                                                                          'placeholder'=>"Prix",
                                                                          'label'=>'',
                                                                          'value'=>$produit['prix'])) ?>
                                        </div>
                                        <div class="form-group input-group">
                                            <?= $this->Form->input('photo',
                                                                    array('class'=>'form-control',
                                                                          'placeholder'=>"Photo",
                                                                          'type'=>'file',
                                                                          'label'=>'',
                                                                          'value'=>$produit['photo'])) ?>
                                        </div>
                                        <div class="form-group input-group">
                                            <?= $this->Form->input('description',
                                                                    array('class'=>'form-control',
                                                                          'placeholder'=>"Description",
                                                                          'label'=>'',
                                                                          'value'=>$produit['description'])) ?>
                                        </div>
                                        <div class="form-group input-group">
                                            <?= $this->Form->input('codecategorie',
                                                                    array('class'=>'form-control',
                                                                          'placeholder'=>"Categorie du produit",
                                                                          'type'=>'hidden',
                                                                          'value'=>$categorie,
                                                                          'label'=>'')) ?>
                                        </div>
                                    <?= $this->Form->end(array('label'=>'Modifier','class'=>'btn btn-primary')) ?>
                                </div>
                            </div>
                        </div>
</div>