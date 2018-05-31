<?php
    class Ligneelementbase extends AppModel{
        
        public $belongsTo = array(
            'Produit'=>array('foreignKey'=>'codeproduit'),
            'Elementbase'=>array('foreignKey'=>'codeelementbase')
        );
        
    }
?>