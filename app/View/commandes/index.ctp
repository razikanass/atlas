<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            <a class="btn btn-default">
                <font size="+2">
                    <b>Commandes</b>
                </font>
            </a>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom de client</th>
                            <th>adresse de livraison</th>
                            <th>date de commande</th>
                            <th>mode de payment</th>
                            <th>realisé</th>
                            <th>opérations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($commandes as $commande): ?>
                        <tr>
                            <td><?=$commande['Commande']['id']?></td>
                            <td>
                                <center>
                                    <a class="btn btn-success square-btn-adjust" 
                                        href="<?=$this->Html->url(array('controller'=>'clients',
                                                                        'action'=>'view',
                                                                        $commande['Client']['id']))?>"
                                        style="border-radius:5px;">
                                        <i class="fa fa-eye fa-x"></i>
                                        <b><?=$commande['Client']['nom'].' '.$commande['Client']['prenom']?></b>
                                    </a>
                                </center>
                            </td>
                            <td><?=$commande['Commande']['adrlivr']?></td>
                            <td><?=$commande['Commande']['date']?></td>
                            <td><?=$commande['Commande']['modepayment']?></td>
                            <td><?=$commande['Commande']['realise']==='1'?'Oui':'Non'?></td>
                            <td>
                                <center>
                                    <a class="btn btn-success square-btn-adjust" 
                                        href="<?=$this->Html->url(array('controller'=>'commandes',
                                                                        'action'=>'view',
                                                                        $commande['Commande']['id']))?>"
                                        style="border-radius:5px;">
                                        <i class="fa fa-eye fa-x"></i>
                                    </a>
                                    <a class="btn btn-success square-btn-adjust <?= $commande['Commande']['realise']==='1'?'disabled':'' ?>" 
                                        href="<?=$this->Html->url(array('controller'=>'commandes',
                                                                        'action'=>'realise',
                                                                        $commande['Commande']['id']))?>"
                                        style="border-radius:5px;">
                                        <i class="fa fa-check fa-x"></i>
                                    </a>
                                    <a class="btn btn-danger square-btn-adjust" 
                                        href="<?=$this->Html->url(array('controller'=>'commandes',
                                                                        'action'=>'delete',
                                                                        $commande['Commande']['id']))?>"
                                        style="border-radius:5px;">
                                        <i class="fa fa-close fa-x"></i>
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