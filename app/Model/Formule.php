<?php
	class Formule extends AppModel{
		
		public $belongsTo = array(
			'Categorie'=>array('foreignKey'=>'codecategorie')
		);

		public $hasMany = array(
            'Lignecommande'=>array('foreignKey'=>'codeformule'),
            'LigneFormule'=>array('foreignKey'=>'codeformule')
        );

	}
?>