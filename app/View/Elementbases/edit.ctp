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
                                    <?= $this->Form->create('ElementBase') ?>
                                        <div class="form-group input-group">
                                            <?= $this->Form->input('nomelem',
                                                                    array('class'=>'form-control',
                                                                          'placeholder'=>"nom d'élément de base",
                                                                          'label'=>'',
                                                                          'value'=>$element['ElementBase']['nomelem'])) ?> 
                                        </div>
                                    <?= $this->Form->end(array('label'=>'Modifier','class'=>'btn btn-primary')) ?>
                                </div>
                            </div>
                        </div>
</div>