<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            <a class="btn btn-default">
                <font size="+2">
                    <b>Information sur la Commande numéro <?= $commande['Commande']['id'] ?></b>
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
                            <th>mode de payment</th>
                            <th>realisé</th>
                            <th>opérations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?=$commande['Commande']['id']?></td>
                            <td><?=$commande['Commande']['adrlivr']?></td>
                            <td><?=$commande['Commande']['date']?></td>
                            <td><?=$commande['Commande']['modepayment']?></td>
                            <td><?=$commande['Commande']['realise']==='1'?'Oui':'Non'?></td>
                            <td>
                                <center>
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
                    </tbody>
                </table>
            </div>
            <br/>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Nom de produit</th>
                            <th>Prix</th>
                            <th>Description</th>
                            <th>Photo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lignecommandes as $lignecommande): ?>
                        <tr>
                            <td><?=$lignecommande['Produit']['nom']?></td>
                            <td><?=$lignecommande['Produit']['prix']?> DHs</td>
                            <td><?=$lignecommande['Produit']['description']?></td>
                            <td>
                                <center>
                                    <?=$this->Html->image($lignecommande['Produit']['codecategorie'].'/'.$lignecommande['Produit']['photo'],
                                                        array('alt' => $lignecommande['Produit']['nom'],
                                                            'width' => '70',
                                                            'height' => '70'));?>
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