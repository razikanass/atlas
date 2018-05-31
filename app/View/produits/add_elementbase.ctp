<style type="text/css">
    div.error-message{
        color:red;
        font-weight: bold;
    }
</style>
<div class="panel panel-default">
                        <div class="panel-heading">
                            <b>Ajout un élément de base </b>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <?= $this->Form->create('Elementbase') ?>
                                        <div class="form-group input-group">
                                            <?= $this->Form->input('nomelem',
                                                                    array('class'=>'form-control',
                                                                          'placeholder'=>"nom d'élément de base",
                                                                          'label'=>'')) ?> 
                                        </div>
                                        <div class="form-group input-group">
                                            <?= $this->Form->input('codeproduit',
                                                                    array('class'=>'form-control',
                                                                          'placeholder'=>"Description du produit",
                                                                          'type'=>'hidden',
                                                                          'value'=>$idproduit,
                                                                          'label'=>'')) ?>
                                        </div>
                                    <?= $this->Form->end(array('label'=>'Ajouter','class'=>'btn btn-primary')) ?>
                                </div>
                            </div>
                        </div>
</div>