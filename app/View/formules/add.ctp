<div class="panel panel-default">
                        <div class="panel-heading">
                            <b>Ajout Formule</b>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <?= $this->Form->create('Formule') ?>
                                        <div class="form-group input-group">
                                            <?= $this->Form->input('nom',
                                                                    array('class'=>'form-control',
                                                                          'placeholder'=>"Nom du formule",
                                                                          'label'=>'')) ?>
                                        </div>
                                        <div class="form-group input-group">
                                            <?= $this->Form->input('prix',
                                                                    array('class'=>'form-control',
                                                                          'placeholder'=>"Prix du formule",
                                                                          'label'=>'')) ?> 
                                        </div>
                                        <div class="form-group input-group">
                                            <?= $this->Form->input('photo',
                                                                    array('class'=>'form-control',
                                                                          'placeholder'=>"Photo du formule",
                                                                          'type'=>'file',
                                                                          'label'=>'')) ?>
                                        </div>
                                        <div class="form-group input-group">
                                            <?= $this->Form->input('description',
                                                                    array('class'=>'form-control',
                                                                          'placeholder'=>"Description du formule",
                                                                          'label'=>'')) ?>
                                        </div>
                                        <div class="form-group input-group">
                                            <?= $this->Form->input('codecategorie',
                                                                    array('class'=>'form-control',
                                                                          'type'=>'hidden',
                                                                          'value'=>$this->request->params['named']['idcategorie'],
                                                                          'label'=>'')) ?>
                                        </div>
                                    <?= $this->Form->end(array('label'=>'Ajouter','class'=>'btn btn-primary')) ?>
                                </div>
                            </div>
                        </div>
</div>