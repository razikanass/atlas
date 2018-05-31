<?php
	class Lignecmdformule extends AppModel{

		public $belongsTo = array(
			'Lignecommande'=>array('foreignKey'=>'codelignecommande'),
			'Produit'=>array('foreignKey'=>'codeproduit')
		);

	}
?>