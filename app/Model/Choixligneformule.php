<?php
	class Choixligneformule extends AppModel{
		
		public $belongsTo = array(
			'LigneFormule'=>array('foreignKey'=>'codeligneformule'),
			'Produit'=>array('foreignKey'=>'codeproduit')
		);

	}
?>