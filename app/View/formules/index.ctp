<style type="text/css">
    div.error-message{
        color:red;
        font-weight: bold;
    }
    img.image-circle{
      border-radius: 90px;
    }
</style>
<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            <a class="btn btn-default">
                <font size="+2">
                    <b>Formules</b>
                </font>
            </a>
            <?=$this->Html->link(
                'Ajouter formule',
                array('controller' => 'formules', 'action' => 'add','idcategorie'=>$id),
                array('class'=>'btn btn-primary','style'=>'float:right;')
            );?>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Nom de la formule</th>
                            <th>Prix</th>
                            <th>Description</th>
                            <th>Photo</th>
                            <th>opérations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($formules as $formule): ?>
                        <tr>
                            <td><?=$formule['Formule']['nom']?></td>
                            <td><?=$formule['Formule']['prix']?> DHs</td>
                            <td><?=$formule['Formule']['description']?></td>
                            <td>
                                <center>
                                    <?=$this->Html->image($formule['Categorie']['id'].'/'.$formule['Formule']['photo'],
                                                        array('alt' => $formule['Formule']['nom'],
                                                            'width' => '70',
                                                            'height' => '70',
                                                            'class'=>'image-circle'));?>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <a class="btn btn-danger square-btn-adjust" 
                                        href="<?=$this->Html->url(array('controller'=>'formules',
                                                                        'action'=>'delete',
                                                                        $formule['Formule']['id']))?>"
                                        style="border-radius:5px;">
                                        <i class="fa fa-close fa-x"></i>
                                    </a>
                                    <a class="btn btn-success square-btn-adjust" 
                                        href="<?=$this->Html->url(array('controller'=>'formules',
                                                                        'action'=>'edit',
                                                                        $formule['Formule']['id']))?>"
                                        style="border-radius:5px;">
                                        <i class="fa fa-pencil fa-x"></i>
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