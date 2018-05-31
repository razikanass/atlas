<style type="text/css">
    div.error-message{
        color:red;
        font-weight: bold;
    }
    img.image-circle{
      border-radius: 5px;
      box-shadow: 10px 10px 15px #888888;
    }
</style>
<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            <center>
            <?=$this->Html->image($produit['Categorie']['id'].'/'.$produit['Produit']['photo'],
                                                      array('alt' => $produit['Produit']['nom'],
                                                            'width' => '180',
                                                            'height' => '180',
                                                            'class'=>'image-circle'));?><br/><br/>
            <a class="btn btn-default"><font size="+2"><b><?=$produit['Produit']['nom']?></b></font></a>
            </center>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>description</th>
                            <th>prix</th>
                            <th>opérations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?=$produit['Produit']['id']?></td>
                            <td><?=$produit['Produit']['description']?></td>
                            <td><?=$produit['Produit']['prix']?> DHs</td>
                            <td>
                                <?=$this->Html->link(
                                            'Supprimer',
                                            array('controller' => 'produits', 'action' => 'delete', $produit['Produit']['id']),
                                            array('class'=>'btn btn-danger'),
                                            "Vous etes sur de cette suppression?"
                                );?>
                                <?=$this->Html->link(
                                            'Modifier',
                                            array('controller' => 'produits', 'action' => 'edit', $produit['Produit']['id']),
                                            array('class'=>'btn btn-success')
                                );?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<br/>

<?php if($produit['Categorie']['nom']==='Pizza'): ?>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <a class="btn btn-default">
                    <font size="+2">
                        <b>Les élément de bases de <?=$produit['Produit']['nom']?></b>
                    </font>
                </a>
                <?=$this->Html->link(
                    'Ajouter',
                    array('controller' => 'produits', 'action' => 'addElementbase',$produit['Produit']['id']),
                    array('class'=>'btn btn-primary','style'=>'float:right;')
                );?>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>nom élément de base</th>
                                <th>opérations</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($produit['Elementbase'] as $elementbase): ?>
                            <tr>
                                <td><?=$elementbase['id']?></td>
                                <td><?=$elementbase['nomelem']?></td>
                                <td>
                                    <center>
                                        <a class="btn btn-danger square-btn-adjust" 
                                            href="<?=$this->Html->url(array('controller'=>'produits',
                                                                            'action'=>'deleteElementbase',
                                                                            'codebase'=>$elementbase['id'],
                                                                            'codeprod'=>$produit['Produit']['id']))?>"
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
<?php endif ?>