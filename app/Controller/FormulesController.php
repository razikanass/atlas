<?php
	class FormulesController extends AppController{

		public function index(){
			$formules = $this->Formule->find('all');
			$this->set('formules',$formules);
			$this->set('id',$formules[0]['Categorie']['id']);		
		}

		public function add(){
			if(!empty($this->request->data)){
				if($this->request->data['Formule']['nom'] !== ''){
					$this->Formule->create($this->request->data,true);
					$res = $this->Formule->save(null,array('nom','prix','codecategorie','description','photo'));
					// return $this->redirect('/ligneformules/add/codeformule:'.$res['Formule']['id']);
					return $this->redirect('/formules');
				}
			}
		}

		public function delete($id){
			if(!empty($id)){
				$this->Formule->delete($id);
				return $this->redirect('/formules');
			}
		}

		public function edit($id){
			if(!empty($id)){
				$formule = $this->Formule->findById($id);
				$this->set('formule',$formule);
				if(!empty($this->request->data)){
        			$this->Formule->save(array(
        				'id'=>$id,
        				'nom'=>$this->request->data['Formule']['nom'],
        				'prix'=>$this->request->data['Formule']['prix'],
        				'photo'=>$this->request->data['Formule']['photo'],
        				'description'=>$this->request->data['Formule']['description']
        			));
        			$this->redirect('/formules');
        		}
			}
		}

	}
?>