<?php
    class Produit extends AppModel{
        
        public $belongsTo = array(
            'Categorie'=>array('foreignKey'=>'codecategorie')
        );
        
        public $hasAndBelongsToMany = array(
            'Elementbase'=>array(
                'joinTable'=>'ligneelementbases',
                'foreignKey'=>'codeproduit',
                'associationForeignKey' => 'codeelementbase'
            )
        );
        
        public $hasMany = array(
            'Ligneelementbase'=>array('foreignKey'=>'codeproduit'),
            'Lignecommande'=>array('foreignKey'=>'codeproduit'),
            'Lignesuplement'=>array('foreignKey'=>'codeproduit')
        );
        
    }
?>