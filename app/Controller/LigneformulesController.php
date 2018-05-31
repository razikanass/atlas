<?php
	class LigneformulesController extends AppController{

		public function beforeFilter(){
			parent::beforeFilter();
		}

		public function add(){
			$all = $this->Ligneformule->find('all');
			debug($all);
		}

	}
?>