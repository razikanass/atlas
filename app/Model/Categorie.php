<?php
    class Categorie extends AppModel{
        
        public $hasMany = array(
            'Produit'=>array(
                'foreignKey'=>'codecategorie'
            )
        );
        
    }
?>