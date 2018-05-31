<div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2><b>Authentification d'administrateur</b></h2>
               
                 <br />
            </div>
        </div>
        <?php if(isset($error)): ?>
            <div class="alert alert-danger">
                <center>
                    <b><?= $error ?></b>
                </center>
            </div>
        <?php endif ?>
         <div class="row ">
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Entrez les détails pour se connecter </strong>  
                            </div>
                            <div class="panel-body">
                                <?= $this->Form->create('User') ?>
                                       <br />
                                    <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <?= $this->Form->input('username',
                                            						array('class'=>'form-control',
                                            							  'placeholder'=>"Nom d'administrateur",
                                            							  'label'=>'')) ?>
                                            <!-- <input type="text" class="form-control" placeholder="Your Username " /> -->
                                    </div>
                                    <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <?= $this->Form->input('password',
                                            						array('class'=>'form-control',
                                            							  'placeholder'=>"Mot de passe",
                                            							  'label'=>'')) ?>
                                            <!-- <input type="password" class="form-control"  placeholder="Your Password" /> -->
                                    </div>
                                    <div class="form-group">
                                            <!-- <label class="checkbox-inline">
                                                <input type="checkbox" /> mémori
                                            </label> -->
                                            <span class="pull-right">
                                                   <a href="#" >Mot de passe oublié ? </a> 
                                            </span>
                                    </div>
                                     

                                     <?= $this->Form->end(array('label'=>'Connexion','class'=>'btn btn-primary')) ?>
                                    <hr />
                                    non inscrit ? <a href="registeration.html" >cliquer ici </a>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>