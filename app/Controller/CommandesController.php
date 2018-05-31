<?php
    class CommandesController extends AppController{

        public function index(){
        	$commandes = $this->Commande->find('all');
        	$this->set('commandes',$commandes);
        }

        public function realise($id){
        	if(!empty($id)){
        		$realise = $this->Commande->findById($id,
        								   		array('Commande.realise'))['Commande']['realise']==='1'?'0':'1';
        		$this->Commande->id = $id;
        		$this->Commande->saveField('realise',$realise);
        		$this->redirect('/commandes');
        	}
        }

        public function delete($id){
            if(!empty($id)){
                $this->Commande->delete($id);
                $this->redirect('/commandes');
            }
        }

        public function view($id){
            if(!empty($id)){
                $commande = $this->Commande->findById($id);
                $lignecommandes = $this->Commande->Lignecommande->find('all',array(
                    'conditions'=>array('Lignecommande.codecommande'=>$id)
                ));
                $this->set('commande',$commande);
                $this->set('lignecommandes',$lignecommandes);
            }
        }
        
    }
?>