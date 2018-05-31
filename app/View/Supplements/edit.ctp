<style type="text/css">
    div.error-message{
        color:red;
        font-weight: bold;
    }
</style>
<div class="panel panel-default">
                        <div class="panel-heading">
                            <b>Modifier l'élément</b>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <?= $this->Form->create('Supplement') ?>
                                        <div class="form-group input-group">
                                            <?= $this->Form->input('nomingred',
                                                                    array('class'=>'form-control',
                                                                          'placeholder'=>"nom d'élément supplement",
                                                                          'label'=>'',
                                                                          'value'=>$element['Supplement']['nomingred'])) ?> 
                                        </div>
                                        <div class="form-group input-group">
                                            <?= $this->Form->input('prix',
                                                                    array('class'=>'form-control',
                                                                          'placeholder'=>"prix",
                                                                          'label'=>'',
                                                                          'value'=>$element['Supplement']['prix'])) ?> 
                                        </div>
                                    <?= $this->Form->end(array('label'=>'Modifier','class'=>'btn btn-primary')) ?>
                                </div>
                            </div>
                        </div>
</div>