<?php
	class Lignecommande extends AppModel{
		public $belongsTo = array(
            'Commande'=>array('foreignKey'=>'codecommande'),
            'Produit'=>array('foreignKey'=>'codeproduit'),
            'Formule'=>array('foreignKey'=>'codeformule')
        );

        public $hasMany = array(
        	'Lignecmdbase'=>array('foreignKey'=>'codelignecommande'),
            'Lignecmdformule'=>array('foreignKey'=>'codelignecommande'),
            'Lignecmdsupplement'=>array('foreignKey'=>'codelignecommande')
        );
	}
?>