<style type="text/css">
    div.error-message{
        color:red;
        font-weight: bold;
    }
    img.image-circle{
      border-radius: 90px;
    }
</style>
<link rel="stylesheet" type="text/css" href="/atlas/css/dataTables.bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="/atlas/css/expo_table.css"/>
<!-- <link rel="stylesheet" type="text/css" href="/atlas/css/dataTables.jqueryui.css"/>
<link rel="stylesheet" type="text/css" href="/atlas/css/jquery.dataTables.min.css"/> -->
<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            <a class="btn btn-default"><font size="+2"><b>Eléments de base</b></font></a>
            <?=$this->Html->link(
                'Ajouter élément de base',
                array('controller' => 'Elementbases', 'action' => 'add'),
                array('class'=>'btn btn-primary','style'=>'float:right;')
            );?>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>nom</th>
                            <th>opérations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($elementsbase as $element){
                        ?>
                        <tr>
                            <td><?=$element['ElementBase']['id']?></td>
                            <td><?=$element['ElementBase']['nomelem']?></td>
                            <td>
                                <?=$this->Html->link(
                                            'Supprimer',
                                            array('controller' => 'Elementbases', 'action' => 'delete', $element['ElementBase']['id']),
                                            array('class'=>'btn btn-danger'),
                                            "Vous etes sur de cette suppression?"
                                );?>
                                <?=$this->Html->link(
                                            'Modifier',
                                            array('controller' => 'Elementbases', 'action' => 'edit', $element['ElementBase']['id']),
                                            array('class'=>'btn btn-success')
                                );?>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/atlas/js/dataTables/jquery.datatables.min.js"></script>
<script type="text/javascript" src="/atlas/js/dataTables/dataTables.jqueryui.js"></script>
<script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
      <!-- CUSTOM SCRIPTS -->
    <script src="/atlas/js/custom.js"></script>