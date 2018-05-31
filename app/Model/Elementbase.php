<?php
    class Elementbase extends AppModel{
        
        public $hasAndBelongsToMany = array(
            'Produit'=>array(
                'joinTable'=>'ligneelementbases',
                'foreignKey'=>'codeelementbase',
                'associationForeignKey' => 'codeproduit'
            )
        );
        
        public $hasMany = array(
            'Ligneelementbase'=>array('foreignKey'=>'codeelementbase'),
        );
        
    }
?>