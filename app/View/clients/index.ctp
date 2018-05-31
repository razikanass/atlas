<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            <a class="btn btn-default"><font size="+2"><b>Clients</b></font></a>
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
                        <?php
                            foreach($clients as $client){
                        ?>
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
                            	<a class="btn btn-danger square-btn-adjust" 
                            		href="<?=$this->Html->url(array('controller'=>'clients',
                            										'action'=>'delete',
                            										$client['Client']['id']))?>"
                            		style="border-radius:5px;">
				                    <i class="fa fa-close fa-x"></i>
				                </a>
				                <a class="btn btn-success square-btn-adjust" 
                            		href="<?=$this->Html->url(array('controller'=>'clients',
                            										'action'=>'view',
                            										$client['Client']['id']))?>"
                            		style="border-radius:5px;">
				                    <i class="fa fa-eye fa-x"></i>
				                </a>
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