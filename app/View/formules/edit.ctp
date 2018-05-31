<div class="panel panel-default">
                        <div class="panel-heading">
                            <b>Modifier Formule</b>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <?= $this->Form->create('Formule') ?>
                                        <div class="form-group input-group">
                                            <?= $this->Form->input('nom',
                                                                    array('class'=>'form-control',
                                                                          'placeholder'=>"Nom du formule",
                                                                          'label'=>'',
                                                                          'value'=>$formule['Formule']['nom'])) ?>
                                        </div>
                                        <div class="form-group input-group">
                                            <?= $this->Form->input('prix',
                                                                    array('class'=>'form-control',
                                                                          'placeholder'=>"Prix du formule",
                                                                          'label'=>'',
                                                                          'value'=>$formule['Formule']['prix'])) ?> 
                                        </div>
                                        <div class="form-group input-group">
                                            <?= $this->Form->input('photo',
                                                                    array('class'=>'form-control',
                                                                          'placeholder'=>"Photo du formule",
                                                                          'type'=>'file',
                                                                          'label'=>'',
                                                                          'value'=>$formule['Formule']['photo'])) ?>
                                        </div>
                                        <div class="form-group input-group">
                                            <?= $this->Form->input('description',
                                                                    array('class'=>'form-control',
                                                                          'placeholder'=>"Description du formule",
                                                                          'label'=>'',
                                                                          'value'=>$formule['Formule']['description'])) ?>
                                        </div>
                                    <?= $this->Form->end(array('label'=>'Modifier','class'=>'btn btn-primary')) ?>
                                </div>
                            </div>
                        </div>
</div>