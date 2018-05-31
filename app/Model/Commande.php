<?php
    class Commande extends AppModel{
        
        public $belongsTo = array(
            'Client'=>array('foreignKey'=>'codeclient')
        );

        public $hasMany = array(
            'Lignecommande'=>array('foreignKey'=>'codecommande')
        );
        
    }
?>