<?php
	class Ligneformule extends AppModel{
		
		public $belongsTo = array(
			'Formule'=>array('foreignKey'=>'codeformule'),
			'Categorie'=>array('foreignKey'=>'codecategorie')
		);

	}
?>