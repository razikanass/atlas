<?php
    class SupplementsController extends AppController {
        
        // public $scaffold;

        public function index(){
        	$supplements = $this->Supplement->find('all');
        	$this->set('supplements',$supplements);
        }

        public function add(){
        	if(!empty($this->request->data)){
                $this->Supplement->save($this->request->data);
                return $this->redirect('/Supplements');
            }
        }

        public function delete($id){
        	if(!empty($id)){
        		$this->Supplement->delete($id);
        		$this->redirect('/Supplements');
        	}
        }

        public function edit($id){
        	if(!empty($id)){
        		$element = $this->Supplement->findById($id);
        		$this->set('element',$element);
        		if(!empty($this->request->data)){
        			$this->Supplement->save(array(
        				'id'=>$id,
        				'nomingred'=>$this->request->data['Supplement']['nomingred'],
        				'prix'=>$this->request->data['Supplement']['prix']
        			));
        			$this->redirect('/Supplements');
        		}
        	}
        }
        
    }
?>