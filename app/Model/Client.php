<?php
    class Client extends AppModel{
        
        public $hasMany = array(
            'Commande'=>array(
                'foreignKey'=>'codeclient'
            )
        );
        
    }
?>