<?php
	class Supplement extends AppModel{

		public $hasMany = array(
        	'Lignesuplement'=>array('foreignKey'=>'codesupplement'),
        	'Lignecmdsupplement'=>array('foreignKey'=>'codesupplement')
        );
		
	}
?>