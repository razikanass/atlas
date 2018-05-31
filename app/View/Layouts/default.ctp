<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title_for_layout;?></title>
	<!-- BOOTSTRAP STYLES-->
    <link href="/atlas/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="/atlas/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="/atlas/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="/atlas/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   <link href="/atlas/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

   <script src="/atlas/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="/atlas/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="/atlas/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="/atlas/js/morris/raphael-2.1.0.min.js"></script>
    <script src="/atlas/js/morris/morris.js"></script>


    
</head>
<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a  href="index.html">Atlas admin</a>  -->
                <a class="navbar-brand" href="<?=$this->Html->url('/')?>">Atlas admin</a>
            </div>
            <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;">
                <?php if($this->Session->read('Auth.User.id')): ?>
                Dernière connexion : <b><?= $this->Session->read('Auth.User.last_access') ?></b> &nbsp; 
                <a href="<?=$this->Html->url(array('controller'=>'users','action'=>'logout'))?>" 
                   class="btn btn-danger square-btn-adjust"
                   style="border-radius:5px;">
                    <i class="fa fa-sign-out fa-x"></i>
                    <b>Déconnexion</b>
                </a>
                <a class="btn btn-success square-btn-adjust" 
                   href="<?=$this->Html->url(array('controller'=>'notifications','action'=>'index'))?>"
                   style="border-radius:5px;">
                    <i class="fa fa-newspaper-o fa-x"></i>
                    <b>1</b>
                </a>
                <?php else: ?>
                <a href="<?=$this->Html->url(array('controller'=>'users','action'=>'login'))?>" 
                   class="btn btn-danger square-btn-adjust"
                   style="border-radius:5px;">
                    <i class="fa fa-sign-in fa-x"></i>
                    <b>Connexion</b>
                </a>
            <?php endif ?>
            </div>
        </nav>   
            <?php if($this->Session->read('Auth.User.id')): ?>
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="/atlas/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
				
                    <li>
                        <a class="active-menu"  href="<?=$this->Html->url(array('controller'=>'stats','action'=>'index'))?>">
                            <i class="fa fa-dashboard fa-2x"></i>
                            <b>Statistiques</b>
                        </a>
                    </li>	
					                   
                    <li>
                        <a href="categories">
                            <i class="fa fa-sitemap fa-2x"></i>
                            <b>Categories</b>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <?php
                                foreach($categories as $categorie){
                                    if($categorie['Categorie']['nom']==='Formules')
                                        continue;
                            ?>
                                    <li>
                                        <?= 
                                            $this->Html->link($categorie['Categorie']['nom'],
                                                    $this->Html->url(array('controller'=>'produits',
                                                                           'action'=>'view',
                                                                           $categorie['Categorie']['id']),true))
                                        ?>
                                    </li>
                            <?php
                                }
                            ?>
                        </ul>
                    </li>
                    <li>
                        <a href="Elements">
                            <i class="fa fa-sitemap fa-2x"></i>
                            <b>Elements</b>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <?= 
                                    $this->Html->link('éléments de base',
                                            $this->Html->url(array('controller'=>'Elementbases',
                                                                   'action'=>'index'),true))
                                ?>
                            </li>
                            <li>
                                <?= 
                                    $this->Html->link('éléments supplementaire',
                                            $this->Html->url(array('controller'=>'Supplements',
                                                                   'action'=>'index'),true))
                                ?>
                            </li>
                        </ul>
                    </li>	
                    <li>
                        <a href="<?=$this->Html->url(array('controller'=>'clients','action'=>'index'))?>">
                            <i class="fa fa-user fa-2x"></i>
                            <b>Clients</b>
                        </a>
                    </li>
                    <li>
                        <a href="<?=$this->Html->url(array('controller'=>'commandes','action'=>'index'))?>">
                            <i class="fa fa-shopping-cart fa-2x"></i>
                            <b>Commandes</b>
                        </a> 
                    </li>
                    <li>
                        <a href="<?=$this->Html->url(array('controller'=>'Formules','action'=>'index'))?>">
                            <i class="fa fa-book fa-2x"></i>
                            <b>Formules</b>
                        </a> 
                    </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
        <?php endif ?>
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <p>&nbsp;</p>
                        <?= $this->fetch("content");?>
                    </div>
                </div>  
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    
    
    
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
      <!-- CUSTOM SCRIPTS -->
    <script src="/atlas/js/custom.js"></script>
    <?= $this->fetch('script');?>    
   <!--  <?php echo $this->element('sql_dump'); ?> -->
</body>
</html>