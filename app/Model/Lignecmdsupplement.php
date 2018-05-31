<?php
	class Lignecmdsupplement extends AppModel{
		
		public $belongsTo = array(
			'Lignecommande'=>array('foreignKey'=>'codelignecommande'),
			'Supplement'=>array('foreignKey'=>'codesupplement')
		);

	}
?>