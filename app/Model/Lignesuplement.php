<?php
	class Lignesuplement extends AppModel{

		public $belongsTo = array(
			'Produit'=>array('foreignKey'=>'codeproduit'),
			'Supplement'=>array('foreignKey'=>'codesupplement')
		);

	}
?>