<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            <a class="btn btn-default">
                <font size="+2">
                    <b><?= strtoupper($client['Client']['nom']).' '.$client['Client']['prenom'] ?></b>
                </font>
            </a>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>nom</th>
                            <th>prénom</th>
                            <th>adresse</th>
                            <th>email</th>
                            <th>username</th>
                            <th>Chiffre d'affaire</th>
                            <th>photo</th>
                            <th>télephone</th>
                            <th>opérations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?=$client['Client']['id']?></td>
                            <td><?=$client['Client']['nom']?></td>
                            <td><?=$client['Client']['prenom']?></td>
                            <td><?=$client['Client']['adresse']?></td>
                            <td><?=$client['Client']['email']?></td>
                            <td><?=$client['Client']['username']?></td>
                            <td><?=$client['Client']['ca']?> DHs</td>
                            <td>
                            	<center>
                            		<?=$this->Html->image('clients/'.$client['Client']['photo'],
                                                      	array('alt' => $client['Client']['nom'],
                                                            'width' => '70',
                                                            'height' => '70'));?>
                                </center>
                            </td>
                            <td><?=$client['Client']['tel']?></td>
                            <td>
                                <center>
                                	<a class="btn btn-danger square-btn-adjust" 
                                		href="<?=$this->Html->url(array('controller'=>'clients',
                                										'action'=>'delete',
                                										$client['Client']['id']))?>"
                                		style="border-radius:5px;">
    				                    <i class="fa fa-close fa-x"></i>
    				                </a>
                                </center>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<br/>

<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            <a class="btn btn-default">
                <font size="+2">
                    <b>Commandes de <?= strtoupper($client['Client']['nom']).' '.$client['Client']['prenom'] ?></b>
                </font>
            </a>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>adresse de livraison</th>
                            <th>date de commande</th>
                            <th>realisé</th>
                            <th>opérations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($client['Commande'] as $commande): ?>
                        <tr>
                            <td><?=$commande['id']?></td>
                            <td><?=$commande['adrlivr']?></td>
                            <td><?=$commande['date']?></td>
                            <td><?=$commande['realise']==='1'?'Oui':'Non'?></td>
                            <td>
                                <center>
                                    <a class="btn btn-success square-btn-adjust <?= $commande['realise']==='1'?'disabled':'' ?>" 
                                        href="<?=$this->Html->url(array('controller'=>'commandes',
                                                                        'action'=>'realise',
                                                                        $client['Client']['id']))?>"
                                        style="border-radius:5px;">
                                        <i class="fa fa-check fa-x"></i>
                                    </a>
                                </center>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
