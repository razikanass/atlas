<?php
    class ElementBasesController extends AppController {
        
        // public $scaffold;

        public function index(){
        	$elementsbase = $this->ElementBase->find('all');
        	$this->set('elementsbase',$elementsbase);
        }

        public function add(){
        	if(!empty($this->request->data)){
        		debug($this->request->data);
                $this->ElementBase->save($this->request->data);
                return $this->redirect('/Elementbases');
            }
        }

        public function delete($id){
        	if(!empty($id)){
        		$this->ElementBase->delete($id);
        		$this->redirect('/Elementbases');
        	}
        }

        public function edit($id){
        	if(!empty($id)){
        		$element = $this->ElementBase->findById($id);
        		$this->set('element',$element);
        		if(!empty($this->request->data)){
        			$this->ElementBase->save(array(
        				'id'=>$id,
        				'nomelem'=>$this->request->data['ElementBase']['nomelem']
        			));
        			$this->redirect('/Elementbases');
        		}
        	}
        }
        
    }
?>