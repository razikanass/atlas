<style type="text/css">
    div.error-message{
        color:red;
        font-weight: bold;
    }
</style>
<div class="panel panel-default">
                        <div class="panel-heading">
                            <b>Ajout <?=$nom?></b>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <?= $this->Form->create('Produit') ?>
                                        <div class="form-group input-group">
                                            <?= $this->Form->input('nom',
                                                                    array('class'=>'form-control',
                                                                          'placeholder'=>"Nom du ".$nom,
                                                                          'label'=>'')) ?>
                                        </div>
                                        <div class="form-group input-group">
                                            <?= $this->Form->input('prix',
                                                                    array('class'=>'form-control',
                                                                          'placeholder'=>"Prix du ".$nom,
                                                                          'label'=>'')) ?> 
                                        </div>
                                        <div class="form-group input-group">
                                            <?= $this->Form->input('photo',
                                                                    array('class'=>'form-control',
                                                                          'placeholder'=>"Photo du ".$nom,
                                                                          'type'=>'file',
                                                                          'label'=>'')) ?>
                                        </div>
                                        <div class="form-group input-group">
                                            <?= $this->Form->input('description',
                                                                    array('class'=>'form-control',
                                                                          'placeholder'=>"Description du ".$nom,
                                                                          'label'=>'')) ?>
                                        </div>
                                        <div class="form-group input-group">
                                            <?= $this->Form->input('codecategorie',
                                                                    array('class'=>'form-control',
                                                                          'placeholder'=>"Description du produit",
                                                                          'type'=>'hidden',
                                                                          'value'=>$this->request->params['pass'][0],
                                                                          'label'=>'')) ?>
                                        </div>
                                    <?= $this->Form->end(array('label'=>'Ajouter','class'=>'btn btn-primary')) ?>
                                </div>
                            </div>
                        </div>
</div>